SHAM AIRCOND — ONE-PAGE WEBSITE
================================

FOLDER STRUCTURE
----------------
  index.html              -> main page
  .htaccess               -> HTTPS, gzip, caching, security
  assets/css/style.css    -> all styling (Saira + Roboto)
  assets/js/main.js       -> animations + contact form
  api/contact.php         -> form handler (sends email)
  assets/img/             -> put all images here (see list below)


HOW TO DEPLOY ON cPANEL
-----------------------
1. Log in to cPanel -> File Manager -> public_html
2. Upload sham-aircond.zip and Extract it there
   (or open the sham-aircond folder and upload its CONTENTS so that
    index.html sits directly inside public_html).
3. Make sure these end up in public_html:
       public_html/index.html
       public_html/.htaccess
       public_html/assets/...
       public_html/api/contact.php
4. cPanel -> set PHP version to 8.1 or 8.2 (MultiPHP Manager).
5. cPanel -> SSL/TLS Status -> Run AutoSSL (for HTTPS).
6. Open contact.php once and confirm the $TO_EMAIL is correct.
7. Visit your domain. Done.


IMAGES TO UPLOAD (assets/img/)  — use exact file names
------------------------------------------------------
  logo.png                your logo, transparent PNG     ~360 x 120
  favicon.png             small icon version             64 x 64
  slide-1.jpg             slider bg 1 (servicing)         1920 x 950
  slide-2.jpg             slider bg 2 (repair)            1920 x 950
  slide-3.jpg             slider bg 3 (installation)      1920 x 950
  about.jpg               team / van / working shot       800 x 800
  service-repair.jpg      repair                          640 x 400
  service-service.jpg     servicing / maintenance         640 x 400
  service-installation.jpg installation                   640 x 400
  service-cleaning.jpg    general cleaning                640 x 400
  service-chemical.jpg    chemical wash                   640 x 400
  service-gas.jpg         gas refill / gauges             640 x 400
  og-image.jpg            social share preview            1200 x 630

Tip: use your OWN job/technician photos. They build trust and
raise your Google Ads quality score. Save as JPG or WebP, compressed.


CONTACT FORM
------------
The form posts to api/contact.php which emails enquiries to you.
PHP mail() works out of the box but can land in spam. For reliable
inbox delivery, ask for the PHPMailer/SMTP version of contact.php.
