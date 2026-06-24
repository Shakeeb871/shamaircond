<?php
$base      = isset($base) ? $base : '';
$title     = isset($title) ? $title : 'Sham Aircond | Aircond Service and Repair in Kuala Lumpur & Selangor';
$desc      = isset($desc) ? $desc : 'Trusted aircond service, repair, installation and cleaning in Kuala Lumpur & Selangor. Fast same-day response and honest pricing.';
$canonical = isset($canonical) ? $canonical : 'https://shamaircond.com/';
$ogimg     = isset($ogimg) ? $ogimg : 'https://shamaircond.com/assets/img/og-image.jpg';
$active    = isset($active) ? $active : '';
$faqschema = isset($faqschema) ? $faqschema : '';
$jsonld    = isset($jsonld) ? $jsonld : '';
function nav_active($a,$cur){ return $a===$cur ? ' class="active"' : ''; }
?><!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WGGWRGW6');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($desc) ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
<meta name="robots" content="index, follow">
<meta name="author" content="Sham Aircond">
<meta name="theme-color" content="#0E2A57">
<meta name="geo.region" content="MY-10">
<meta name="geo.placename" content="Kuala Lumpur">
<meta name="format-detection" content="telephone=yes">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
<meta property="og:site_name" content="Sham Aircond">
<meta property="og:image" content="<?= htmlspecialchars($ogimg) ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="<?= htmlspecialchars($ogimg) ?>">
<link rel="icon" type="image/jpeg" href="https://shamaircond.com/assets/img/aircond-service.jpeg">
<link rel="apple-touch-icon" href="https://shamaircond.com/assets/img/aircond-service.jpeg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css?v=<?= @filemtime(__DIR__.'/../assets/css/style.css') ?>">
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"HVACBusiness","name":"Sham Aircond","image":"https://shamaircond.com/assets/img/og-image.jpg","@id":"https://shamaircond.com/","url":"https://shamaircond.com/","telephone":"+601111642927","email":"info@shamaircond.com","priceRange":"$$","address":{"@type":"PostalAddress","addressLocality":"Kuala Lumpur","addressRegion":"Selangor","addressCountry":"MY"},"areaServed":"Kuala Lumpur & Selangor","openingHoursSpecification":{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"09:00","closes":"21:00"},"makesOffer":[{"@type":"Offer","itemOffered":{"@type":"Service","name":"Aircond Repair"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Aircond Service"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Aircond Installation"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Aircond General Cleaning"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Aircond Chemical Cleaning"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Aircond Gas Top Up"}}]}
</script>
<?php echo $faqschema; ?>
<?php echo $jsonld; ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGGWRGW6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="site-header" id="siteHeader">
  <div class="topbar">
    <div class="wrap">
      <div class="topbar-left">
        <a href="tel:+601111642927"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg> +60 11-1164 2927</a>
        <a href="mailto:info@shamaircond.com"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 6 10-6"/></svg> info@shamaircond.com</a>
        <span class="tb-hours"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg> Mon-Sun, 9am-9pm</span>
      </div>
      <div class="topbar-right">
        <a href="#" class="soc" aria-label="Facebook"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M14 9h3V6h-3c-2.2 0-3 1.8-3 3.5V11H9v3h2v7h3v-7h2.5l.5-3H14V9.5c0-.3.2-.5.5-.5z"/></svg></a>
        <a href="#" class="soc" aria-label="Instagram"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17" cy="7" r="1" fill="currentColor" stroke="none"/></svg></a>
        <a href="#" class="soc" aria-label="WhatsApp"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg></a>
      </div>
    </div>
  </div>
  <div class="mainnav">
    <div class="wrap nav">
      <a href="/" class="brand">
        <img src="https://shamaircond.com/assets/img/aircond-service.jpeg" alt="Sham Aircond air conditioning services in Kuala Lumpur & Selangor" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
        <span class="brand-fallback" style="display:none"><span class="txt"><span class="b1">SHAM</span><span class="b2">AIRCOND</span></span></span>
      </a>
      <nav class="nav-links" id="navlinks">
        <a href="/"<?= nav_active('home',$active) ?>>Home</a>
        <div class="nav-dd">
          <a href="/services" class="nav-dd-top<?= $active==='services'?' active':'' ?>">Services <svg class="dd-caret" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M6 9l6 6 6-6"/></svg></a>
          <div class="nav-dd-menu">
            <a href="/services/aircond-repair">Aircond Repair</a>
            <a href="/services/aircond-service">Aircond Service</a>
            <a href="/services/aircond-installation">Aircond Installation</a>
            <a href="/services/aircond-general-cleaning">General Cleaning</a>
            <a href="/services/aircond-chemical-cleaning">Chemical Cleaning</a>
            <a href="/services/aircond-gas-top-up">Gas Top Up</a>
          </div>
        </div>
        <a href="/about"<?= nav_active('about',$active) ?>>About</a>
        <a href="/contact"<?= nav_active('contact',$active) ?>>Contact</a>
      </nav>
      <div class="nav-end">
        <a href="/contact" class="btn btn-gold" style="padding:12px 24px">Schedule Now</a>
        <button class="menu-btn" id="menuBtn" aria-label="Open menu"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M3 6h18M3 12h18M3 18h18"/></svg></button>
      </div>
    </div>
  </div>
</header>