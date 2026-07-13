<?php
$base='../'; $active='services';
$title='Aircond Service Kuala Lumpur | Servicing & Maintenance, All Brands | Sham Aircond';
$desc='Trusted aircond service in Kuala Lumpur & the Klang Valley. Coil cleaning, filter wash, gas checks and full cooling test by skilled technicians. Upfront pricing, all brands. Call +60 11-1164 2927.';
$canonical='https://shamaircond.com/services/aircond-service/';
$jsonld='<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://shamaircond.com/"},{"@type":"ListItem","position":2,"name":"Services","item":"https://shamaircond.com/services/"},{"@type":"ListItem","position":3,"name":"Aircond Service","item":"https://shamaircond.com/services/aircond-service/"}]}</script>';
$faqschema=<<<'HTML'
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How often should I service my aircond in KL?","acceptedAnswer":{"@type":"Answer","text":"For a home unit, twice a year is enough. Units in dusty areas or commercial spaces may need servicing every three to four months."}},{"@type":"Question","name":"How long does a standard aircond service take?","acceptedAnswer":{"@type":"Answer","text":"A single unit usually takes around forty-five minutes to an hour, depending on its condition and whether a chemical wash is needed."}},{"@type":"Question","name":"Do you charge before starting the service?","acceptedAnswer":{"@type":"Answer","text":"We confirm the full price before any work begins, so there are no surprises on your bill."}},{"@type":"Question","name":"Can you service aircond units in high-rise condos?","acceptedAnswer":{"@type":"Answer","text":"Yes, we service condo and apartment units regularly. Just share the floor and access details when you book."}},{"@type":"Question","name":"Will servicing lower my electricity bill?","acceptedAnswer":{"@type":"Answer","text":"A clean unit cools faster and runs less, which often brings your bill down over time."}},{"@type":"Question","name":"Do you service commercial properties in KL and Selangor?","acceptedAnswer":{"@type":"Answer","text":"Yes, we handle offices, shops, salons and clinics, and can schedule multiple units in one visit."}}]}</script>
HTML;
include __DIR__.'/../inc/header.php';
?>
<section class="page-hero page-hero-light" style="background-image:linear-gradient(180deg,rgba(255,255,255,.9) 0%,rgba(255,255,255,.8) 100%),url('https://aircondprofessionals.com/wp-content/uploads/2023/04/Untitled-design-2023-04-14T025951.407.png')">
  <div class="wrap">
    <div class="hero-lite-grid">
      <div class="hero-copy">
    <div class="hero-rating">
      <span class="hr-stars"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></span>
      <span class="hr-text"><strong>5.0</strong> &middot; Trusted by hundreds of happy customers</span>
    </div>
    <h1>Trusted Aircond Service, Repair &amp; Installation in Kuala Lumpur</h1>
    <p>Fast-response aircond servicing for homes, offices and retail spaces across Kuala Lumpur and the Klang Valley. From water leaks and weak cooling to chemical cleaning, repairs and new installations &mdash; our team is ready to help.</p>
    <div class="hero-actions">
      <a href="tel:+601111642927" class="btn btn-gold"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg> Call Now</a>
      <a href="https://wa.me/601111642927" class="btn btn-wa"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> WhatsApp</a>
        </div>
      </div>
      <aside class="hero-stats">
        <div class="hs-head">Why customers choose us</div>
        <div class="hs-grid">
          <div class="hs-item"><span class="hs-num">10<span class="suf">+</span></span><span class="hs-label">Years Experience</span></div>
          <div class="hs-item"><span class="hs-num">5,000<span class="suf">+</span></span><span class="hs-label">Jobs Completed</span></div>
          <div class="hs-item"><span class="hs-num">4,500<span class="suf">+</span></span><span class="hs-label">Happy Customers</span></div>
          <div class="hs-item"><span class="hs-num">5.0<span class="suf">&#9733;</span></span><span class="hs-label">Average Rating</span></div>
        </div>
      </aside>
    </div>
  </div>
</section>

<section class="trust-strip">
  <div class="wrap">
    <div class="ts-grid">
      <div class="ts-item">
        <span class="ts-ic"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
        <div><span class="ts-t">Arrive Within 24 Hours</span><span class="ts-s">Fast same-day or next-day response</span></div>
      </div>
      <div class="ts-item">
        <span class="ts-ic"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></span>
        <div><span class="ts-t">30 Days Warranty</span><span class="ts-s">On our workmanship &amp; parts</span></div>
      </div>
      <div class="ts-item">
        <span class="ts-ic"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></span>
        <div><span class="ts-t">12,000+ Happy Clients</span><span class="ts-s">Residential &amp; commercial, served across Klang Valley, Putrajaya &amp; Cyberjaya</span></div>
      </div>
    </div>
  </div>
</section>

<section class="feat3">
  <div class="wrap">
    <div class="sec-head" style="text-align:center">
      <span class="eyebrow" style="justify-content:center">Why choose us</span>
      <h2>Expert Aircond Service, Repair &amp; Installation You Can Trust</h2>
    </div>
    <div class="feat3-grid">
      <div class="feat3-card">
        <span class="f3-ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/></svg></span>
        <h3>Express Service</h3>
        <p>Fast, on-time aircond service and installation. Whether it&rsquo;s a single unit at home or multiple units for your office, we make sure your cooling is never delayed.</p>
      </div>
      <div class="feat3-card">
        <span class="f3-ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></span>
        <h3>Experienced &amp; Reliable</h3>
        <p>Skilled technicians who service and install every unit properly, following industry standards for safety and lasting performance.</p>
      </div>
      <div class="feat3-card">
        <span class="f3-ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg></span>
        <h3>Transparent Pricing</h3>
        <p>Clear service rates with no hidden fees. You&rsquo;ll always know the exact cost before we start any work.</p>
      </div>
    </div>
  </div>
</section>

<section class="svc-layout-sec" id="booking">
  <div class="wrap">
    <div class="svc-layout">
      <aside class="book-side">
        <div class="rev-card rev-slider">
          <div class="rev-head">
            <svg class="g-logo" viewBox="0 0 48 48" aria-hidden="true"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24s.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg>
            <div class="rev-h-txt"><b>Google Reviews</b><span>Verified customers</span></div>
            <div class="rev-score"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg> 5.0</div>
          </div>
          <div class="rev-viewport">
            <div class="rev-slide">
              <div class="rev-stars"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
              <p class="rev-text">Booked a service in the morning and the technician came the same day. Cleaned the unit properly and the cooling is so much stronger now. Very professional.</p>
              <div class="rev-author">
                <span class="rev-avatar" style="background:#1A4C9C">AF</span>
                <div class="rev-meta"><div class="rev-name">Ahmad Faizal <svg class="verified" viewBox="0 0 24 24" aria-label="Verified"><circle cx="12" cy="12" r="11" fill="#1A73E8"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="rev-loc">Cheras, KL</div></div>
              </div>
            </div>
            <div class="rev-slide">
              <div class="rev-stars"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
              <p class="rev-text">Booked through WhatsApp, quick reply. The technician was honest and explained everything before starting. My aircond runs quietly again. Highly recommended.</p>
              <div class="rev-author">
                <span class="rev-avatar" style="background:#DB9100">TW</span>
                <div class="rev-meta"><div class="rev-name">Tan Wei Ming <svg class="verified" viewBox="0 0 24 24" aria-label="Verified"><circle cx="12" cy="12" r="11" fill="#1A73E8"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="rev-loc">Mont Kiara, KL</div></div>
              </div>
            </div>
            <div class="rev-slide">
              <div class="rev-stars"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
              <p class="rev-text">Regular servicing made a real difference. They cleaned the coil and filters, no more weak airflow and the air smells fresh. Thank you!</p>
              <div class="rev-author">
                <span class="rev-avatar" style="background:#0E2A57">NH</span>
                <div class="rev-meta"><div class="rev-name">Nurul Huda <svg class="verified" viewBox="0 0 24 24" aria-label="Verified"><circle cx="12" cy="12" r="11" fill="#1A73E8"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="rev-loc">Setapak, KL</div></div>
              </div>
            </div>
            <div class="rev-slide">
              <div class="rev-stars"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
              <p class="rev-text">Genuine and reliable. They serviced all the units at my shop and scheduled them in one visit. Fair pricing and no hidden charges. Will call again.</p>
              <div class="rev-author">
                <span class="rev-avatar" style="background:#1A4C9C">RK</span>
                <div class="rev-meta"><div class="rev-name">Ramesh Kumar <svg class="verified" viewBox="0 0 24 24" aria-label="Verified"><circle cx="12" cy="12" r="11" fill="#1A73E8"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="rev-loc">Petaling Jaya, Selangor</div></div>
              </div>
            </div>
            <div class="rev-slide">
              <div class="rev-stars"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
              <p class="rev-text">On time, polite and fast. Full chemical wash done within the hour and the cooling feels brand new. Excellent same-day service.</p>
              <div class="rev-author">
                <span class="rev-avatar" style="background:#DB9100">LK</span>
                <div class="rev-meta"><div class="rev-name">Lim Chee Keong <svg class="verified" viewBox="0 0 24 24" aria-label="Verified"><circle cx="12" cy="12" r="11" fill="#1A73E8"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="rev-loc">Bangsar, KL</div></div>
              </div>
            </div>
            <div class="rev-slide">
              <div class="rev-stars"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
              <p class="rev-text">Very satisfied with the service. The musty smell is gone and the air feels fresh. Friendly technician and clean work.</p>
              <div class="rev-author">
                <span class="rev-avatar" style="background:#0E2A57">SA</span>
                <div class="rev-meta"><div class="rev-name">Siti Aishah <svg class="verified" viewBox="0 0 24 24" aria-label="Verified"><circle cx="12" cy="12" r="11" fill="#1A73E8"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div class="rev-loc">Ampang, Selangor</div></div>
              </div>
            </div>
          </div>
          <div class="rev-dots" aria-hidden="true"></div>
        </div>
        <div class="book-img"><img src="https://shamaircond.com/assets/img/aircond%20service.jpg" alt="Aircond service in Kuala Lumpur by Sham Aircond" loading="lazy" onerror="this.remove()"></div>
        <div class="book-cta">
          <a href="tel:+601111642927" class="btn btn-gold"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg> Call Now</a>
          <a href="https://wa.me/601111642927" class="btn btn-wa"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> WhatsApp</a>
        </div>
        <form class="cform book-form reveal" id="contactForm" data-endpoint="/api/contact.php" novalidate>
          <h3>Book this service</h3>
          <p class="fsub">Fill the form and we will confirm your slot fast.</p>
          <div class="form-note-box" id="formNote"></div>
          <div class="field"><label for="name">Full name</label><input type="text" id="name" name="name" placeholder="Your name"><span class="err-msg">Please enter your name.</span></div>
          <div class="field"><label for="phone">Phone / WhatsApp</label><input type="tel" id="phone" name="phone" placeholder="01x-xxxx xxxx"><span class="err-msg">Please enter a valid phone number.</span></div>
          <div class="field"><label for="email">Email</label><input type="email" id="email" name="email" placeholder="you@email.com"><span class="err-msg">Please enter a valid email address.</span></div>
          <div class="field"><label for="location">Location / Area</label><input type="text" id="location" name="location" placeholder="Your area in KL &amp; Selangor"><span class="err-msg">Please enter your location.</span></div>
          <div class="field"><label for="service">Service needed</label><select id="service" name="service"><option value="">Select a service</option><option>Aircond Repair</option><option selected>Aircond Service</option><option>Aircond Installation</option><option>General Cleaning</option><option>Chemical Cleaning</option><option>Gas Top Up</option></select><span class="err-msg">Please choose a service.</span></div>
          <div class="field"><label for="message">Message details</label><textarea id="message" name="message" placeholder="Tell us about your aircond"></textarea><span class="err-msg">Please add a few details.</span></div>
          <div class="hp"><label for="company">Company</label><input type="text" id="company" name="company" tabindex="-1" autocomplete="off"></div>
          <button type="submit" class="btn btn-gold" id="submitBtn" style="width:100%;justify-content:center">Send booking request</button>
          <p class="form-note">We reply within the hour during working times.</p>
        </form>
      </aside>

      <div class="svc-content reveal">

        <span class="eyebrow">What we do</span>
        <h2>Aircond services we provide</h2>
        <p>Sham Aircond covers routine servicing, cleaning and full maintenance for residential and commercial properties. Our technicians service every common system type and run a full performance test before leaving, so your unit cools the way it should.</p>
        <ul class="tick-list">
          <li><strong>Split &amp; wall-mounted units</strong>The most common home setup. Cleaned, checked and tested so airflow and cooling come back to full strength.</li>
          <li><strong>Cassette units</strong>Ceiling-mounted cassette systems in offices and shops, serviced with the right tools and access.</li>
          <li><strong>Ceiling-exposed units</strong>Exposed ceiling-type units maintained for homes and commercial spaces alike.</li>
          <li><strong>Single &amp; multi-split systems</strong>Whether you have one unit at home or several across a business, we match the right service to the right system.</li>
        </ul>
        <div class="svc-why">
          <h3>Why book your aircond service with Sham Aircond</h3>
          <div class="svc-why-grid">
            <div class="svc-why-item"><span class="ic"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><div><h4>Skilled technicians</h4><p>Experienced hands and genuine parts, so your unit is serviced properly every visit.</p></div></div>
            <div class="svc-why-item"><span class="ic"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><div><h4>Upfront pricing</h4><p>You see and approve a clear price before any work starts. No surprises on the bill.</p></div></div>
            <div class="svc-why-item"><span class="ic"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><div><h4>Full cooling test</h4><p>Every service ends with a complete performance test so you feel the difference before we leave.</p></div></div>
          </div>
        </div>

        <div class="in-sec">
          <h2>What our aircond service covers</h2>
          <p>A standard service keeps your electricity bill lower, your air cleaner and your unit lasting longer. Here is what is included on every visit.</p>
          <ul class="tick-list">
            <li><strong>Coil cleaning</strong>The cooling coil is cleaned to restore strong, cold airflow.</li>
            <li><strong>Filter washing</strong>Filters are washed so dust stops choking your airflow and your air stays clean.</li>
            <li><strong>Gas pressure checks</strong>We check refrigerant pressure so the unit cools at full efficiency.</li>
            <li><strong>Drainage clearing</strong>The drain line is cleared to prevent water leaks and dripping.</li>
            <li><strong>Full cooling test</strong>A complete performance test confirms everything works before we leave.</li>
            <li><strong>Deep chemical wash (option)</strong>For heavy dust or mould, a chemical wash restores cooling and clears any musty smell.</li>
          </ul>
        </div>

        <div class="in-sec">
          <h2>Brands our technicians service</h2>
          <p>We service Daikin, Panasonic, York, Acson, Midea, Samsung, LG and most other brands sold across Malaysia. Both single-split and multi-split systems are covered, so your setup is in safe hands.</p>
          <div class="brands-logos"><img src="https://shamaircond.com/assets/img/brand.png" width="695" height="146" alt="Aircond brands we service: Daikin, LG, Mitsubishi, Samsung, Acson, Panasonic, Sharp" loading="lazy" onerror="this.remove()"></div>
          <p class="areas-note">Our team also maintains commercial units in restaurants, salons, clinics and offices. When several units need attention, we schedule them together so your business loses less time.</p>
        </div>

        <div class="in-sec">
          <h2>How our aircond service works</h2>
          <p>Simple, transparent and on time. You always know the price before we start and feel the difference before we leave.</p>
          <div class="steps">
            <div class="step"><div class="step-n"></div><h3>Call or message</h3><p>Tell us your location and the type of service you need by call, WhatsApp or the form.</p></div>
            <div class="step"><div class="step-n"></div><h3>Get a slot</h3><p>We give you a time slot, often the same day or the next, and arrive with tools and parts ready.</p></div>
            <div class="step"><div class="step-n"></div><h3>We service</h3><p>The technician services the unit and shows you the price before starting any work.</p></div>
            <div class="step"><div class="step-n"></div><h3>Full test</h3><p>We run a complete cooling test once done, so you feel the difference before we leave.</p></div>
          </div>
        </div>

        <div class="in-sec">
          <h2>Honest advice you can trust</h2>
          <p>Sometimes a unit needs more than a routine service to perform well. We tell you straight what your aircond actually needs, whether that is a simple clean or a part replacement, so you never pay for work that will not help.</p>
          <p>This straight talk is why so many customers across KL call us back and pass our number to neighbours and family. We treat your home and your money the way we would treat our own.</p>
        </div>

        <div class="in-sec">
          <h2>Aircond service areas</h2>
          <p>We cover the whole of Kuala Lumpur and key areas across Selangor and Putrajaya. If you are unsure whether we cover your area, send us your address and we will confirm right away.</p>
          <div class="tag-chips">
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Cheras</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Wangsa Maju</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Setapak</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Kepong</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Bangsar</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Mont Kiara</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Bukit Bintang</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Sentul</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> KL City Centre</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Petaling Jaya</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Subang Jaya</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Shah Alam</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Puchong</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Seri Kembangan</span>
            <span class="chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Putrajaya</span>
          </div>
        </div>

        <div class="in-sec">
          <div class="faq">
            <h2>Frequently asked questions</h2>
            <p class="faq-sub">Quick answers about aircond service in Kuala Lumpur &amp; Selangor.</p>
            <details class="faq-item"><summary>How often should I service my aircond in KL?</summary><div class="faq-a"><p>For a home unit, twice a year is enough. Units in dusty areas or commercial spaces may need servicing every three to four months.</p></div></details>
            <details class="faq-item"><summary>How long does a standard aircond service take?</summary><div class="faq-a"><p>A single unit usually takes around forty-five minutes to an hour, depending on its condition and whether a chemical wash is needed.</p></div></details>
            <details class="faq-item"><summary>Do you charge before starting the service?</summary><div class="faq-a"><p>We confirm the full price before any work begins, so there are no surprises on your bill.</p></div></details>
            <details class="faq-item"><summary>Can you service aircond units in high-rise condos?</summary><div class="faq-a"><p>Yes, we service condo and apartment units regularly. Just share the floor and access details when you book.</p></div></details>
            <details class="faq-item"><summary>Will servicing lower my electricity bill?</summary><div class="faq-a"><p>A clean unit cools faster and runs less, which often brings your bill down over time.</p></div></details>
            <details class="faq-item"><summary>Do you service commercial properties in KL and Selangor?</summary><div class="faq-a"><p>Yes, we handle offices, shops, salons and clinics, and can schedule multiple units in one visit.</p></div></details>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section style="background:var(--soft)">
  <div class="wrap">
    <div class="sec-head reveal"><span class="eyebrow" style="justify-content:center">More services</span><h2>Other aircond services we offer</h2></div>
    <div class="other-grid">
      <a class="other-card" href="/services/aircond-repair/">Aircond Repair <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      <a class="other-card" href="/services/aircond-installation/">Aircond Installation <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      <a class="other-card" href="/services/aircond-general-cleaning/">General Cleaning <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      <a class="other-card" href="/services/aircond-chemical-cleaning/">Chemical Cleaning <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      <a class="other-card" href="/services/aircond-gas-top-up/">Gas Top Up <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

<section style="padding-bottom:0">
  <div class="wrap">
    <div class="ctaband reveal">
      <div><h2>Time for an aircond service? Book today.</h2><p>Book in under a minute. Most areas in KL &amp; Selangor get a same-day slot.</p></div>
      <div class="acts">
        <a href="tel:+601111642927" class="btn btn-navy"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg> Call now</a>
        <a href="https://wa.me/601111642927" class="btn" style="background:#fff;color:var(--navy-ink)">WhatsApp us</a>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__.'/../inc/footer.php'; ?>
