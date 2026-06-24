<?php
/* ============================================================
   Sham Aircond - leads admin panel
   View, manage and export the enquiries that the contact form
   saves into the database. Protected by ADMIN_PASS in config.
   URL:  https://shamaircond.com/admin/leads.php
   ============================================================ */
define('SHAM_APP', 1);
require_once __DIR__ . '/../api/db.php';
session_start();

/* ---- logout ---- */
if (isset($_GET['logout'])) { $_SESSION = array(); session_destroy(); header('Location: leads.php'); exit; }

/* ---- login ---- */
$login_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pass']) && !isset($_SESSION['sham_admin'])) {
    if (hash_equals(ADMIN_PASS, (string)$_POST['pass'])) {
        session_regenerate_id(true);
        $_SESSION['sham_admin'] = true;
        $_SESSION['csrf'] = bin2hex(random_bytes(16));
        header('Location: leads.php'); exit;
    }
    $login_error = 'Wrong password.';
}
$authed = !empty($_SESSION['sham_admin']);
if ($authed && empty($_SESSION['csrf'])) { $_SESSION['csrf'] = bin2hex(random_bytes(16)); }
$csrf = $authed ? $_SESSION['csrf'] : '';

/* ---- helper ---- */
function h($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }

/* ---- actions (status update / delete) need a valid CSRF token ---- */
$flash = '';
if ($authed && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if (!isset($_POST['csrf']) || !hash_equals($csrf, (string)$_POST['csrf'])) {
        $flash = 'Session expired, please try again.';
    } else {
        try {
            $pdo = sham_db();
            $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
            if ($_POST['action'] === 'status' && $id > 0) {
                $allowed = array('new','read','contacted','closed');
                $st = in_array($_POST['status'], $allowed, true) ? $_POST['status'] : 'new';
                $pdo->prepare("UPDATE sham_leads SET status = ? WHERE id = ?")->execute(array($st, $id));
                $flash = 'Status updated.';
            } elseif ($_POST['action'] === 'delete' && $id > 0) {
                $pdo->prepare("DELETE FROM sham_leads WHERE id = ?")->execute(array($id));
                $flash = 'Lead deleted.';
            }
        } catch (Throwable $e) { $flash = 'Action failed.'; }
    }
}

/* ---- CSV export ---- */
if ($authed && isset($_GET['export'])) {
    try {
        $rows = sham_db()->query("SELECT id,name,phone,email,location,service,message,status,created_at FROM sham_leads ORDER BY id DESC")->fetchAll();
    } catch (Throwable $e) { $rows = array(); }
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="sham-leads-' . date('Y-m-d') . '.csv"');
    $out = fopen('php://output', 'w');
    fputcsv($out, array('ID','Name','Phone','Email','Location','Service','Message','Status','Date'));
    foreach ($rows as $r) { fputcsv($out, $r); }
    fclose($out); exit;
}

/* ---- fetch leads ---- */
$leads = array();
$db_error = '';
$counts = array('new'=>0,'total'=>0);
if ($authed) {
    try {
        $pdo = sham_db();
        sham_ensure_table($pdo);
        $leads = $pdo->query("SELECT * FROM sham_leads ORDER BY id DESC LIMIT 500")->fetchAll();
        $counts['total'] = (int)$pdo->query("SELECT COUNT(*) FROM sham_leads")->fetchColumn();
        $counts['new']   = (int)$pdo->query("SELECT COUNT(*) FROM sham_leads WHERE status='new'")->fetchColumn();
    } catch (Throwable $e) { $db_error = 'Could not connect to the database. Check api/config.php.'; }
}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<title>Sham Aircond - Leads</title>
<style>
  :root{--navy:#123A7A;--ink:#0E2A57;--gold:#F6A700;--soft:#F1F5FB;--line:#dbe4f1;--muted:#5A6B86}
  *{box-sizing:border-box;margin:0;padding:0}
  body{font-family:system-ui,-apple-system,Segoe UI,Roboto,sans-serif;background:#eef3fa;color:#15233D;line-height:1.5}
  .top{background:var(--ink);color:#fff;padding:16px 22px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px}
  .top h1{font-size:19px;letter-spacing:.02em}
  .top .meta{font-size:13px;color:#aebfdc}
  .top a{color:#fff;text-decoration:none;background:rgba(255,255,255,.14);padding:8px 14px;border-radius:7px;font-size:13px;font-weight:600;margin-left:8px}
  .top a.gold{background:var(--gold);color:var(--ink)}
  .wrap{max-width:1150px;margin:22px auto;padding:0 16px}
  .flash{background:#e6f5ec;color:#0b7a3b;border:1px solid #b7e3c8;padding:11px 14px;border-radius:8px;margin-bottom:16px;font-size:14px}
  .err{background:#fdecea;color:#c0392b;border-color:#f5c6c0}
  table{width:100%;border-collapse:collapse;background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 10px 30px -22px rgba(18,58,122,.5)}
  th,td{padding:12px 13px;text-align:left;font-size:13.5px;border-bottom:1px solid var(--line);vertical-align:top}
  th{background:var(--soft);font-size:12px;text-transform:uppercase;letter-spacing:.04em;color:var(--muted)}
  tr:hover td{background:#fafcff}
  .msg{max-width:280px;color:#33425e}
  .badge{display:inline-block;padding:3px 9px;border-radius:999px;font-size:11.5px;font-weight:700;text-transform:uppercase}
  .b-new{background:#fff4d6;color:#8a6200}.b-read{background:#e3edfb;color:#274b86}
  .b-contacted{background:#e6f5ec;color:#0b7a3b}.b-closed{background:#eceff3;color:#6a7585}
  .acts{display:flex;gap:6px;align-items:center;flex-wrap:wrap}
  select,button{font:inherit;font-size:12.5px;padding:6px 8px;border:1px solid var(--line);border-radius:6px;background:#fff;cursor:pointer}
  button.del{background:#fdecea;color:#c0392b;border-color:#f5c6c0}
  a.tel{color:var(--navy);font-weight:600;text-decoration:none}
  .login{max-width:360px;margin:9vh auto;background:#fff;padding:34px 30px;border-radius:12px;box-shadow:0 20px 50px -30px rgba(18,58,122,.6)}
  .login h2{font-size:20px;margin-bottom:6px}.login p{color:var(--muted);font-size:14px;margin-bottom:20px}
  .login input{width:100%;padding:12px 14px;border:1.5px solid var(--line);border-radius:8px;font-size:15px;margin-bottom:14px}
  .login button{width:100%;padding:12px;background:var(--gold);color:var(--ink);border:none;border-radius:8px;font-weight:700;font-size:15px;cursor:pointer}
  .empty{text-align:center;color:var(--muted);padding:50px 20px;background:#fff;border-radius:10px}
</style>
</head>
<body>
<?php if (!$authed): ?>
  <form class="login" method="post" autocomplete="off">
    <h2>Sham Aircond</h2>
    <p>Enter the admin password to view leads.</p>
    <?php if ($login_error): ?><div class="flash err" style="margin-bottom:14px"><?= h($login_error) ?></div><?php endif; ?>
    <input type="password" name="pass" placeholder="Password" autofocus required>
    <button type="submit">Sign in</button>
  </form>
<?php else: ?>
  <div class="top">
    <div>
      <h1>Sham Aircond - Leads</h1>
      <div class="meta"><?= (int)$counts['new'] ?> new &middot; <?= (int)$counts['total'] ?> total</div>
    </div>
    <div>
      <a class="gold" href="?export=1">Export CSV</a>
      <a href="?logout=1">Log out</a>
    </div>
  </div>
  <div class="wrap">
    <?php if ($flash): ?><div class="flash"><?= h($flash) ?></div><?php endif; ?>
    <?php if ($db_error): ?>
      <div class="flash err"><?= h($db_error) ?></div>
    <?php elseif (!$leads): ?>
      <div class="empty">No leads yet. When someone submits the contact form, it will appear here.</div>
    <?php else: ?>
      <table>
        <thead><tr><th>Date</th><th>Name</th><th>Contact</th><th>Location</th><th>Service</th><th>Message</th><th>Status</th><th>Actions</th></tr></thead>
        <tbody>
        <?php foreach ($leads as $l):
            $cls = array('new'=>'b-new','read'=>'b-read','contacted'=>'b-contacted','closed'=>'b-closed');
            $bc = isset($cls[$l['status']]) ? $cls[$l['status']] : 'b-new'; ?>
          <tr>
            <td><?= h(date('d M Y', strtotime($l['created_at']))) ?><br><span style="color:var(--muted)"><?= h(date('H:i', strtotime($l['created_at']))) ?></span></td>
            <td><strong><?= h($l['name']) ?></strong></td>
            <td>
              <a class="tel" href="tel:<?= h($l['phone']) ?>"><?= h($l['phone']) ?></a><br>
              <a class="tel" href="mailto:<?= h($l['email']) ?>"><?= h($l['email']) ?></a>
            </td>
            <td><?= h($l['location']) ?></td>
            <td><?= h($l['service']) ?></td>
            <td class="msg"><?= nl2br(h($l['message'])) ?></td>
            <td><span class="badge <?= $bc ?>"><?= h($l['status']) ?></span></td>
            <td>
              <div class="acts">
                <form method="post" style="display:flex;gap:6px">
                  <input type="hidden" name="csrf" value="<?= h($csrf) ?>">
                  <input type="hidden" name="action" value="status">
                  <input type="hidden" name="id" value="<?= (int)$l['id'] ?>">
                  <select name="status" onchange="this.form.submit()">
                    <?php foreach (array('new','read','contacted','closed') as $s): ?>
                      <option value="<?= $s ?>" <?= $l['status']===$s?'selected':'' ?>><?= ucfirst($s) ?></option>
                    <?php endforeach; ?>
                  </select>
                </form>
                <form method="post" onsubmit="return confirm('Delete this lead?')">
                  <input type="hidden" name="csrf" value="<?= h($csrf) ?>">
                  <input type="hidden" name="action" value="delete">
                  <input type="hidden" name="id" value="<?= (int)$l['id'] ?>">
                  <button class="del" type="submit">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
<?php endif; ?>
</body>
</html>