<?php
/* ============================================================
   Sham Aircond - configuration (KEEP PRIVATE)
   Fill in the values from cPanel > MySQL Databases.
   This file is loaded by the app only; direct web access blocked.
   ============================================================ */
if (!defined('SHAM_APP')) { http_response_code(403); exit('Forbidden'); }

/* ---- Database (cPanel > MySQL Databases) ---- */
define('DB_HOST', 'localhost');                 // almost always localhost on cPanel
define('DB_NAME', 'carpente_sham');             // <-- your database name
define('DB_USER', 'carpente_shamuser');         // <-- your database user
define('DB_PASS', 'laksjkldj@OU891289j*(@UOJio'); // <-- your database password
define('DB_CHARSET', 'utf8mb4');

/* ---- Email ---- */
define('TO_EMAIL',   'info@shamaircond.com');     // where enquiries are delivered
define('FROM_EMAIL', 'no-reply@shamaircond.com'); // a real mailbox on YOUR domain
define('SITE_NAME',  'Sham Aircond');

/* ---- Admin panel password (CHANGE THIS) ---- */
define('ADMIN_PASS', 'S@hamaircondhhhi');

/* ---- Anti-spam: max submissions allowed per IP inside the window ---- */
define('RATE_MAX', 5);
define('RATE_WINDOW_MIN', 10);
