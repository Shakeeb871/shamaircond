<?php
/* ============================================================
   Sham Aircond - contact form handler
   Saves the booking into MySQL AND emails the inbox.
   Returns JSON: { "success": true|false, "message": "..." }
   ============================================================ */
define('SHAM_APP', 1);
require_once __DIR__ . '/db.php';

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

/* ---- only POST ---- */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(array('success' => false, 'message' => 'Method not allowed.'));
    exit;
}

/* ---- honeypot: bots fill this hidden field, humans never do ---- */
if (!empty($_POST['company'])) {
    echo json_encode(array('success' => true, 'message' => 'Thank you.'));
    exit;
}

/* ---- collect + sanitise + length caps ---- */
function sham_clean($key) {
    return isset($_POST[$key]) ? trim(strip_tags((string)$_POST[$key])) : '';
}
$name    = mb_substr(sham_clean('name'), 0, 80);
$phone   = mb_substr(sham_clean('phone'), 0, 30);
$email   = mb_substr(sham_clean('email'), 0, 120);
$location= mb_substr(sham_clean('location'), 0, 120);
$service = mb_substr(sham_clean('service'), 0, 60);
$message = mb_substr(sham_clean('message'), 0, 3000);

/* ---- validate ---- */
$errors = array();
if (mb_strlen($name) < 2)                         $errors[] = 'name';
if (strlen(preg_replace('/\D/', '', $phone)) < 7) $errors[] = 'phone';
if (!filter_var($email, FILTER_VALIDATE_EMAIL))   $errors[] = 'email';
if (mb_strlen($location) < 2)                     $errors[] = 'location';
if ($service === '')                              $errors[] = 'service';
if (mb_strlen($message) < 4)                      $errors[] = 'message';

if ($errors) {
    http_response_code(422);
    echo json_encode(array('success' => false, 'message' => 'Please check your details and try again.', 'fields' => $errors));
    exit;
}

$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
$ua = isset($_SERVER['HTTP_USER_AGENT']) ? mb_substr($_SERVER['HTTP_USER_AGENT'], 0, 255) : '';

/* ---- save to database (best effort, never lose a lead) ---- */
$saved = false;
try {
    $pdo = sham_db();
    sham_ensure_table($pdo);

    /* rate limit per IP */
    if ($ip !== '') {
        $rl = $pdo->prepare("SELECT COUNT(*) FROM sham_leads WHERE ip_address = ? AND created_at > (NOW() - INTERVAL ? MINUTE)");
        $rl->execute(array($ip, RATE_WINDOW_MIN));
        if ((int)$rl->fetchColumn() >= RATE_MAX) {
            http_response_code(429);
            echo json_encode(array('success' => false, 'message' => 'Too many requests right now. Please try again shortly, or call us directly.'));
            exit;
        }
    }

    $stmt = $pdo->prepare("INSERT INTO sham_leads (name, phone, email, location, service, message, ip_address, user_agent) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->execute(array($name, $phone, $email, $location, $service, $message, $ip, $ua));
    $saved = true;
} catch (Throwable $e) {
    @error_log('Sham Aircond DB error: ' . $e->getMessage());
}

/* ---- email notification (best effort) ---- */
$subject = 'New booking request: ' . $service . ' (' . $name . ')';
$body  = "New aircond enquiry from the website\n";
$body .= "----------------------------------------\n";
$body .= "Name    : $name\n";
$body .= "Phone   : $phone\n";
$body .= "Email   : $email\n";
$body .= "Location: $location\n";
$body .= "Service : $service\n";
$body .= "Message :\n$message\n";
$body .= "----------------------------------------\n";
$body .= "IP      : $ip\n";
$body .= "Sent    : " . date('d M Y, H:i') . "\n";

$safeName  = preg_replace('/[\r\n]+/', ' ', $name);
$safeEmail = preg_replace('/[\r\n]+/', '', $email);
$headers  = 'From: ' . SITE_NAME . ' <' . FROM_EMAIL . ">\r\n";
$headers .= 'Reply-To: ' . $safeName . ' <' . $safeEmail . ">\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
$mailed = @mail(TO_EMAIL, $subject, $body, $headers);

/* ---- respond ---- */
if ($saved || $mailed) {
    echo json_encode(array('success' => true, 'message' => 'Thank you. Your request has been received, we will confirm your slot shortly.'));
} else {
    http_response_code(500);
    echo json_encode(array('success' => false, 'message' => 'We could not save your request right now. Please call or WhatsApp us instead.'));
}