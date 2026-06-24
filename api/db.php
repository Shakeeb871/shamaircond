<?php
/* ============================================================
   Sham Aircond - database helper (PDO, prepared statements)
   ============================================================ */
if (!defined('SHAM_APP')) { http_response_code(403); exit('Forbidden'); }
require_once __DIR__ . '/config.php';

/* Returns a shared PDO connection (throws PDOException on failure). */
function sham_db() {
    static $pdo = null;
    if ($pdo instanceof PDO) return $pdo;
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
    $pdo = new PDO($dsn, DB_USER, DB_PASS, array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ));
    return $pdo;
}

/* Creates the leads table if it does not already exist. */
function sham_ensure_table(PDO $pdo) {
    $sql = "CREATE TABLE IF NOT EXISTS sham_leads (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        phone VARCHAR(40) NOT NULL,
        email VARCHAR(150) NOT NULL,
        location VARCHAR(120) DEFAULT NULL,
        service VARCHAR(80) DEFAULT NULL,
        message TEXT,
        ip_address VARCHAR(45) DEFAULT NULL,
        user_agent VARCHAR(255) DEFAULT NULL,
        status ENUM('new','read','contacted','closed') NOT NULL DEFAULT 'new',
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        INDEX idx_created (created_at),
        INDEX idx_ip (ip_address)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    $pdo->exec($sql);

    /* upgrade older tables that were created before the location field existed */
    $hasCol = $pdo->query("SHOW COLUMNS FROM sham_leads LIKE 'location'")->fetch();
    if (!$hasCol) {
        $pdo->exec("ALTER TABLE sham_leads ADD COLUMN location VARCHAR(120) DEFAULT NULL AFTER email");
    }
}