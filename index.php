<?php
$base=''; $active='home';
$title='Sham Aircond | Aircond Repair, Service and Installation in Kuala Lumpur & Selangor';
$desc='Trusted aircond repair, servicing, installation, chemical cleaning and gas top up in Kuala Lumpur & Selangor. Fast same-day response, certified technicians and honest pricing.';
$canonical='https://shamaircond.com/';
$faqschema=<<<'HTML'
<script type="application/ld+json">{"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "Do you offer same-day aircond repair in Kuala Lumpur & Selangor?", "acceptedAnswer": {"@type": "Answer", "text": "For most areas in KL & Selangor we can arrange a same-day slot when you reach us early in the day. Tell us your area and the problem, and we will confirm the soonest time available."}}, {"@type": "Question", "name": "How much does aircond servicing or repair cost?", "acceptedAnswer": {"@type": "Answer", "text": "It depends on your unit type and the work needed. We always give you a clear, fixed price before any work begins, so there are no hidden charges or surprises on the bill."}}, {"@type": "Question", "name": "What is the difference between general and chemical cleaning?", "acceptedAnswer": {"@type": "Answer", "text": "General cleaning clears dust from the filters and cover to restore airflow. Chemical cleaning is a deeper wash of the coils and internal parts that removes stubborn dirt and mould for stronger, healthier cooling."}}, {"@type": "Question", "name": "Do you give a warranty on your work?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Our repairs and installations are backed by a workmanship guarantee. If anything is not right after our visit, we come back and put it right."}}, {"@type": "Question", "name": "Which areas in KL & Selangor do you cover?", "acceptedAnswer": {"@type": "Answer", "text": "We serve Kuala Lumpur & Selangor and the surrounding areas including Petaling Jaya, Subang Jaya, Shah Alam, Cheras and Klang. Just ask us about your location when you book."}}, {"@type": "Question", "name": "How often should I service my aircond?", "acceptedAnswer": {"@type": "Answer", "text": "For most homes, every three to four months keeps cooling efficient and electricity bills lower. Units that run heavily or sit in dusty areas may need servicing a little more often."}}]}</script>
HTML;
include __DIR__.'/inc/header.php';
?>
<section class="hero-slider" id="home" aria-label="Sham Aircond featured services">
  <div class="slides">

    <div class="slide price-slide is-active">
      <img class="slide-bg" src="https://shamaircond.com/assets/img/aircond-service-hero.jpg" alt="" onerror="this.remove()">
      <div class="slide-overlay"></div>
      <div class="wrap slide-inner">
        <div class="hero-left">
          <span class="hero-badge"><span class="dot"></span>Available Now &middot; Fast Response</span>
          <h1>Servicing <span class="hl">packages</span> &amp; prices</h1>
          <p class="hero-sub">Keep your air conditioner running cool and efficient. General and chemical servicing for wall-mounted and ceiling cassette units across Kuala Lumpur &amp; Selangor &mdash; with clear, upfront pricing.</p>
          <div class="hero-actions">
            <a href="tel:+601111642927" class="btn btn-gold"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg> Call Now: +60 11-1164 2927</a>
            <a href="https://wa.me/601111642927" class="btn btn-wa"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> Chat on WhatsApp</a>
          </div>
        </div>
        <div class="price-card">
          <ul class="pc-list">
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">General Service &mdash; Wall Mounted</span><span class="pc-val">RM 70 / unit</span></li>
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">Chemical Service &mdash; Wall Mounted</span><span class="pc-val">RM 120 / unit</span></li>
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">General Service &mdash; Ceiling Cassette</span><span class="pc-val">RM 120 / unit</span></li>
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">Chemical Service &mdash; Ceiling Cassette</span><span class="pc-val">RM 280 / unit</span></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="slide price-slide">
      <img class="slide-bg" src="https://shamaircond.com/assets/img/aircond-installation-hero.jpg" alt="" onerror="this.remove()">
      <div class="slide-overlay"></div>
      <div class="wrap slide-inner">
        <div class="hero-left">
          <span class="hero-badge"><span class="dot"></span>Available Now &middot; Fast Response</span>
          <h1>Aircon <span class="hl">installation</span> prices</h1>
          <p class="hero-sub">Supply and professional installation for all HP ratings &mdash; wall-mounted and ceiling cassette units. Free copper, wiring, insulation and a workmanship warranty included.</p>
          <div class="hero-actions">
            <a href="tel:+601111642927" class="btn btn-gold"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg> Call Now: +60 11-1164 2927</a>
            <a href="https://wa.me/601111642927" class="btn btn-wa"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> Chat on WhatsApp</a>
          </div>
        </div>
        <div class="price-card">
          <ul class="pc-list">
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">1.0 HP</span><span class="pc-val">RM 300</span></li>
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">1.5 HP</span><span class="pc-val">RM 320</span></li>
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">2.0 HP</span><span class="pc-val">RM 340</span></li>
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">2.5 HP</span><span class="pc-val">RM 370</span></li>
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">3.0 HP or above</span><span class="pc-val">RM 470</span></li>
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">Dismantle / Remove</span><span class="pc-val">RM 100</span></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="slide price-slide">
      <img class="slide-bg" src="https://shamaircond.com/assets/img/aircond-gas-top-up-hero.jpg" alt="" onerror="this.remove()">
      <div class="slide-overlay"></div>
      <div class="wrap slide-inner">
        <div class="hero-left">
          <span class="hero-badge"><span class="dot"></span>Available Now &middot; Fast Response</span>
          <h1>Aircon <span class="hl">gas top-up</span> prices</h1>
          <p class="hero-sub">Low cooling or warm air? We refill R22, R32 and R410A refrigerant and run a full pressure test so your unit cools properly again across Kuala Lumpur &amp; Selangor.</p>
          <div class="hero-actions">
            <a href="tel:+601111642927" class="btn btn-gold"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg> Call Now: +60 11-1164 2927</a>
            <a href="https://wa.me/601111642927" class="btn btn-wa"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> Chat on WhatsApp</a>
          </div>
        </div>
        <div class="price-card">
          <ul class="pc-list">
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">R22 Refrigerant</span><span class="pc-val">RM 150</span></li>
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">R32 Refrigerant</span><span class="pc-val">RM 150</span></li>
            <li><span class="pc-ic"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><span class="pc-name">R410A Refrigerant</span><span class="pc-val">RM 150</span></li>
          </ul>
          <p class="pc-note">Final price depends on existing gas volume &mdash; need more services? Just let us know.</p>
        </div>
      </div>
    </div>

  </div>

  <button class="slider-arrow prev" aria-label="Previous slide"><svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M15 5l-7 7 7 7"/></svg></button>
  <button class="slider-arrow next" aria-label="Next slide"><svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 5l7 7-7 7"/></svg></button>
  <div class="slider-count"><b id="curSlide">1</b> / <span id="totSlide">3</span></div>
</section>

<section class="hero-features">
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="eyebrow" style="justify-content:center">Why homeowners pick us</span>
      <h2>Cooling comfort you can count on</h2>
      <p>From the first call to the final test, we make aircond service simple, fast and worry-free.</p>
    </div>
    <div class="hf-grid">
      <div class="hf reveal">
        <span class="hf-num">01</span>
        <span class="hf-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></span>
        <h4>Fast Response</h4>
        <p>Same-day slots available across Kuala Lumpur &amp; Selangor.</p>
      </div>
      <div class="hf reveal">
        <span class="hf-num">02</span>
        <span class="hf-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg></span>
        <h4>Certified Techs</h4>
        <p>Skilled, experienced technicians for every aircond brand.</p>
      </div>
      <div class="hf reveal">
        <span class="hf-num">03</span>
        <span class="hf-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></span>
        <h4>Honest Pricing</h4>
        <p>Clear, upfront quotes with no hidden surprises.</p>
      </div>
      <div class="hf reveal">
        <span class="hf-num">04</span>
        <span class="hf-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6l8-4 8 4z"/></svg></span>
        <h4>Guaranteed Work</h4>
        <p>Every job is backed by our workmanship warranty.</p>
      </div>
    </div>
  </div>
</section>

<section id="brands" class="brands">
  <div class="wrap">
    <div class="brands-head reveal">
      <span class="eyebrow" style="justify-content:center">Trusted with every brand</span>
      <h2>We repair and service all major aircond brands</h2>
    </div>
  </div>
  <div class="marquee reveal">
    <div class="marquee-track">
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/1.png" alt="Aircond brand serviced by Sham Aircond" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/2.png" alt="Aircond brand serviced by Sham Aircond" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/3.png" alt="Aircond brand serviced by Sham Aircond" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/4.png" alt="Aircond brand serviced by Sham Aircond" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/5.png" alt="Aircond brand serviced by Sham Aircond" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/6.png" alt="Aircond brand serviced by Sham Aircond" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/7.png" alt="Aircond brand serviced by Sham Aircond" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/8.png" alt="Aircond brand serviced by Sham Aircond" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/9.png" alt="Aircond brand serviced by Sham Aircond" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/1.png" alt="" aria-hidden="true" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/2.png" alt="" aria-hidden="true" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/3.png" alt="" aria-hidden="true" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/4.png" alt="" aria-hidden="true" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/5.png" alt="" aria-hidden="true" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/6.png" alt="" aria-hidden="true" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/7.png" alt="" aria-hidden="true" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/8.png" alt="" aria-hidden="true" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
      <div class="brand-logo"><img src="https://shamaircond.com/assets/img/9.png" alt="" aria-hidden="true" loading="lazy" onerror="this.closest('.brand-logo').style.display='none'"></div>
    </div>
  </div>
</section>

<section id="about">
  <div class="wrap">
    <div class="about-grid">
      <div class="about-media reveal">
        <div class="media">
          <div class="media-ph"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.9"/></svg><span>about-us.webp</span></div>
          <img src="https://shamaircond.com/assets/img/about-us.webp" alt="Sham Aircond technician in Kuala Lumpur & Selangor" loading="lazy" onerror="this.remove()">
        </div>
      </div>
      <div class="about-copy reveal">
        <span class="pill-soft">Welcome</span>
        <h2>Aircond service and repair specialists in Kuala Lumpur & Selangor</h2>
        <p>Sham Aircond is a local aircond service and repair team for homes and offices across Kuala Lumpur & Selangor, keeping them cool, clean and comfortable. From a quick aircond repair to a full installation, every job gets the same care and attention to detail.</p>
        <p>Need an air conditioner repair near you in KL & Selangor? We show up on time, explain the problem in plain words, and quote an honest price before any work starts. No guesswork and no surprises, just dependable aircond work that lasts.</p>
        <a href="#contact" class="btn btn-navy">Get a free quote</a>
      </div>
    </div>

    <div class="mvr-grid">
      <div class="mvr-card reveal">
        <span class="mvr-ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="10.5" cy="13.5" r="8"/><circle cx="10.5" cy="13.5" r="3.6"/><path d="M10.5 13.5L20 4M15.5 4H20v4.5"/></svg></span>
        <h3>Our Mission</h3>
        <p>To keep every home and business in Kuala Lumpur & Selangor cool and comfortable through honest, on-time and dependable aircond service.</p>
      </div>
      <div class="mvr-card reveal">
        <span class="mvr-ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2 12s3.6-6.5 10-6.5S22 12 22 12s-3.6 6.5-10 6.5S2 12 2 12z"/><circle cx="12" cy="12" r="2.8"/><path d="M12 3.2v1.6M19.5 6.2l-1.1 1.1M4.5 6.2l1.1 1.1"/></svg></span>
        <h3>Our Vision</h3>
        <p>To be the most trusted aircond name in Selangor, known for quality workmanship and care that customers are happy to recommend.</p>
      </div>
      <div class="mvr-card reveal">
        <span class="mvr-ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8.5" r="6"/><path d="M12 5.6l1.1 2.2 2.4.3-1.7 1.7.4 2.4-2.2-1.2-2.2 1.2.4-2.4-1.7-1.7 2.4-.3z"/><path d="M8.5 14.2L7 22l5-2.6L17 22l-1.5-7.8"/></svg></span>
        <h3>Our Reputation</h3>
        <p>Built on hundreds of satisfied customers, repeat bookings and word-of-mouth referrals across KL & Selangor for service done right the first time.</p>
      </div>
    </div>
  </div>
</section>

<section class="services" id="services">
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="eyebrow" style="justify-content:center">What we do</span>
      <h2>Complete aircond service and repair in Kuala Lumpur & Selangor</h2>
      <p>Whatever your unit needs, we handle it end to end and repair all aircond brands with proper tools, genuine parts and a guarantee on our work.</p>
    </div>
    <div class="svc-grid">

      <div class="svc reveal">
        <div class="media svc-media"><div class="media-ph"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 6l-4 4-3-3-5 5v5h5l9-9z"/><path d="M14 6l4-4 2 2-4 4z"/></svg><span>service-repair.jpg</span></div><img src="https://shamaircond.com/assets/img/aircond%20repair.jpg" alt="Aircond repair service in Kuala Lumpur & Selangor" loading="lazy" onerror="this.remove()"></div>
        <div class="svc-body"><span class="svc-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 6l-4 4-3-3-5 5v5h5l9-9z"/><path d="M14 6l4-4 2 2-4 4z"/></svg></span><h3>Aircond Repair</h3><p>Not cooling, leaking or making noise? We diagnose and fix all brands fast, with the price agreed before any work begins.</p><a href="/services/aircond-repair/" class="svc-link">Book repair <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
      </div>

      <div class="svc reveal">
        <div class="media svc-media"><div class="media-ph"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M19 5l-2 2M7 17l-2 2"/></svg><span>service-service.jpg</span></div><img src="https://shamaircond.com/assets/img/aircond-service-hero.jpg" alt="Routine aircond servicing and maintenance" loading="lazy" onerror="this.remove()"></div>
        <div class="svc-body"><span class="svc-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.6 1.6 0 00.3 1.8l.1.1a2 2 0 11-2.8 2.8l-.1-.1a1.6 1.6 0 00-2.7 1.1V21a2 2 0 01-4 0v-.1A1.6 1.6 0 007 19.4a1.6 1.6 0 00-1.8.3l-.1.1a2 2 0 11-2.8-2.8l.1-.1a1.6 1.6 0 00-1.1-2.7H1a2 2 0 010-4h.1A1.6 1.6 0 002.6 7a1.6 1.6 0 00-.3-1.8l-.1-.1a2 2 0 112.8-2.8l.1.1A1.6 1.6 0 007 2.6 1.6 1.6 0 008 1.1V1a2 2 0 014 0v.1A1.6 1.6 0 0017 2.6a1.6 1.6 0 001.8-.3l.1-.1a2 2 0 112.8 2.8l-.1.1a1.6 1.6 0 001.1 2.7H23a2 2 0 010 4h-.1a1.6 1.6 0 00-1.5 1z"/></svg></span><h3>Aircond Service</h3><p>Routine servicing keeps your unit cooling efficiently and your electricity bill lower. Recommended every few months.</p><a href="/services/aircond-service/" class="svc-link">Schedule service <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
      </div>

      <div class="svc reveal">
        <div class="media svc-media"><div class="media-ph"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="5" width="20" height="11" rx="2"/><path d="M6 9h.01M6 12h12"/></svg><span>service-installation.jpg</span></div><img src="https://shamaircond.com/assets/img/aircond-installation-hero.jpg" alt="Aircond installation for homes and offices" loading="lazy" onerror="this.remove()"></div>
        <div class="svc-body"><span class="svc-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="11" rx="2"/><path d="M6 9h.01M6 12h12M9 20h6"/></svg></span><h3>Aircond Installation</h3><p>Professional supply and install for homes and offices, neatly fitted, fully tested and ready to cool on the same day.</p><a href="/services/aircond-installation/" class="svc-link">Get a quote <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
      </div>

      <div class="svc reveal">
        <div class="media svc-media"><div class="media-ph"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21l8-8M14 4l6 6-9 9H5v-6z"/></svg><span>service-cleaning.jpg</span></div><img src="https://shamaircond.com/assets/img/aircond%20general%20cleaning.jpg" alt="Aircond general cleaning service" loading="lazy" onerror="this.remove()"></div>
        <div class="svc-body"><span class="svc-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21l8-8M14 4l6 6-9 9H5v-6z"/><path d="M13 5l6 6"/></svg></span><h3>General Cleaning</h3><p>Filter and coil cleaning that clears dust, restores airflow and keeps the air in your home fresh and healthy.</p><a href="/services/aircond-general-cleaning/" class="svc-link">Book cleaning <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
      </div>

      <div class="svc reveal">
        <div class="media svc-media"><div class="media-ph"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 2h6M10 2v5L5 16a4 4 0 003.5 6h7A4 4 0 0019 16l-5-9V2"/></svg><span>service-chemical.jpg</span></div><img src="https://shamaircond.com/assets/img/aircond%20chemical%20cleaning.jpg" alt="Aircond chemical cleaning deep wash service" loading="lazy" onerror="this.remove()"></div>
        <div class="svc-body"><span class="svc-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 2h6M10 2v5L5 16a4 4 0 003.5 6h7A4 4 0 0019 16l-5-9V2"/><path d="M7 14h10"/></svg></span><h3>Chemical Cleaning</h3><p>A deep chemical wash that removes stubborn dirt and mould for stronger cooling and a longer life for your unit.</p><a href="/services/aircond-chemical-cleaning/" class="svc-link">Book chemical wash <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
      </div>

      <div class="svc reveal">
        <div class="media svc-media"><div class="media-ph"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span>service-gas.jpg</span></div><img src="https://shamaircond.com/assets/img/aircond-gas-top-up-hero.jpg" alt="Aircond gas top up and refrigerant refill" loading="lazy" onerror="this.remove()"></div>
        <div class="svc-body"><span class="svc-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="13" r="8"/><path d="M12 9v4l2.5 2M9 2h6"/></svg></span><h3>Gas Top Up</h3><p>Weak cooling often means low gas. We refill refrigerant to the correct level and check carefully for any leaks.</p><a href="/services/aircond-gas-top-up/" class="svc-link">Book gas top up <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
      </div>

    </div>
  </div>
</section>

<section class="services svcdetail" id="pricing">
  <div class="wrap">
    <div class="svcd-head sec-head reveal">
      <span class="eyebrow" style="justify-content:center">Services &amp; Pricing</span>
      <h2>Detailed services and transparent charges</h2>
      <p>Clear, upfront pricing for every job we do. Here is exactly what each service includes and what it costs across Kuala Lumpur &amp; Selangor.</p>
    </div>

    <div class="svcd-grid">

      <!-- 1. GENERAL SERVICE : WALL MOUNTED -->
      <article class="svcd-card reveal">
        <div class="svcd-top">
          <span class="svcd-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="3.2"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M19 5l-2 2M7 17l-2 2"/></svg></span>
          <h3>General Service<span class="svcd-sub">Wall Mounted</span></h3>
        </div>
        <div class="svcd-body">
          <div class="svcd-block">
            <div class="lbl">Aircond Types</div>
            <ul class="svcd-ul"><li>All Wall Mounted Air Conditioners</li></ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Service Contains</div>
            <ul class="svcd-ul">
              <li>General testing for wiring &amp; compressor health check</li>
              <li>Indoor casing &amp; filter wash with water</li>
              <li>Indoor / outdoor condenser coil check</li>
              <li>Gas pressure test, refrigerant top-up &amp; cooling temperature check</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Service Charges</div>
            <ul class="svcd-prices">
              <li><span class="p-l">1 unit</span><span class="p-r">RM 70</span></li>
              <li><span class="p-l">2 units</span><span class="p-r">RM 65 / each</span></li>
              <li><span class="p-l">3 or more units</span><span class="p-r">RM 60 / each</span></li>
            </ul>
          </div>
          <p class="svcd-note"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Surcharge may apply if any additional services or spare parts are required to be replaced on the spot.</p>
          <div class="svcd-foot"><a href="https://wa.me/601111642927?text=Hi%2C%20I%27d%20like%20to%20book%20a%20General%20Service%20(Wall%20Mounted)." class="btn btn-gold">Book this service</a></div>
        </div>
      </article>

      <!-- 2. CHEMICAL SERVICE : CEILING CASSETTE / EXPOSED -->
      <article class="svcd-card reveal">
        <div class="svcd-top">
          <span class="svcd-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 2h6M10 2v5L5 16a4 4 0 003.5 6h7A4 4 0 0019 16l-5-9V2"/><path d="M7 14h10"/></svg></span>
          <h3>Chemical Service<span class="svcd-sub">Ceiling Cassette / Exposed</span></h3>
        </div>
        <div class="svcd-body">
          <div class="svcd-block">
            <div class="lbl">Aircond Types</div>
            <ul class="svcd-ul"><li>Ceiling Cassette / Exposed Air Conditioners</li></ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Service Contains</div>
            <ul class="svcd-ul">
              <li>Test run on indoor &amp; outdoor units</li>
              <li>Wiring &amp; connections check</li>
              <li>Indoor cooling coil chemical wash</li>
              <li>Filters chemical wash</li>
              <li>Indoor casing wash</li>
              <li>Vacuum drainage tray</li>
              <li>Vacuum drainage pipe (indoor unit)</li>
              <li>Outdoor coil chemical wash</li>
              <li>Drainage pipe vacuuming from outside</li>
              <li>Compressor health check</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Charges</div>
            <ul class="svcd-prices">
              <li><span class="p-l">1 unit</span><span class="p-r">RM 270</span></li>
              <li><span class="p-l">Overhaul service (1 unit)</span><span class="p-r">RM 350</span></li>
            </ul>
          </div>
          <p class="svcd-note"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Surcharge may apply if any additional services or spare parts are required to be replaced on the spot.</p>
          <div class="svcd-foot"><a href="https://wa.me/601111642927?text=Hi%2C%20I%27d%20like%20to%20book%20a%20Chemical%20Service%20(Ceiling%20Cassette%2FExposed)." class="btn btn-gold">Book this service</a></div>
        </div>
      </article>

      <!-- 3. CHEMICAL SERVICE : WALL MOUNTED -->
      <article class="svcd-card reveal">
        <div class="svcd-top">
          <span class="svcd-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 2h6M10 2v5L5 16a4 4 0 003.5 6h7A4 4 0 0019 16l-5-9V2"/><path d="M7 14h10"/></svg></span>
          <h3>Chemical Service<span class="svcd-sub">Wall Mounted</span></h3>
        </div>
        <div class="svcd-body">
          <div class="svcd-block">
            <div class="lbl">Aircond Types</div>
            <ul class="svcd-ul"><li>Wall Mounted Air Conditioners</li></ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Service Contains</div>
            <ul class="svcd-ul">
              <li>Test run on indoor &amp; outdoor units</li>
              <li>Wiring &amp; connections check</li>
              <li>Indoor cooling coil chemical wash</li>
              <li>Filters chemical wash</li>
              <li>Indoor casing wash</li>
              <li>Vacuum drainage tray</li>
              <li>Vacuum drainage pipe (indoor unit)</li>
              <li>Outdoor coil chemical wash</li>
              <li>Drainage pipe vacuuming from outside</li>
              <li>Compressor health check</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Charges</div>
            <ul class="svcd-prices">
              <li><span class="p-l">1 unit</span><span class="p-r">RM 120</span></li>
              <li><span class="p-l">Overhaul service (1 unit)</span><span class="p-r">RM 170</span></li>
            </ul>
          </div>
          <p class="svcd-note"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg> Surcharge may apply if any additional services or spare parts are required to be replaced on the spot.</p>
          <div class="svcd-foot"><a href="https://wa.me/601111642927?text=Hi%2C%20I%27d%20like%20to%20book%20a%20Chemical%20Service%20(Wall%20Mounted)." class="btn btn-gold">Book this service</a></div>
        </div>
      </article>

      <!-- 4. AIRCONDS INSTALLATION -->
      <article class="svcd-card reveal">
        <div class="svcd-top">
          <span class="svcd-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="5" width="20" height="11" rx="2"/><path d="M6 9h.01M6 12h12M9 20h6"/></svg></span>
          <h3>Airconds Installation<span class="svcd-sub">Supply &amp; Install</span></h3>
        </div>
        <div class="svcd-body">
          <div class="svcd-block">
            <div class="lbl">Service Contains</div>
            <ul class="svcd-ul">
              <li>Free 10ft copper</li>
              <li>Free 10ft wire</li>
              <li>Free 10ft insulation</li>
              <li>Free 15ft drain pipe</li>
              <li>1 month workmanship warranty for water &amp; gas leakage</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Aircond Types</div>
            <ul class="svcd-ul">
              <li>Wall Mounted</li>
              <li>Ceiling Cassettes</li>
              <li>Ceiling Exposed</li>
              <li>FCU Ceiling Concealed (Ducting)</li>
              <li>ADB Ducting Air Conditioners</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Charges Range</div>
            <ul class="svcd-prices">
              <li class="head">Ceiling Cassette</li>
              <li><span class="p-l">1.5 HP</span><span class="p-r">RM 400</span></li>
              <li><span class="p-l">2.0 HP</span><span class="p-r">RM 500</span></li>
              <li><span class="p-l">2.5 HP</span><span class="p-r">RM 550</span></li>
              <li><span class="p-l">3.0 HP</span><span class="p-r">RM 600</span></li>
              <li><span class="p-l">Dismantle (1 unit)</span><span class="p-r">RM 180</span></li>
              <li class="head">Wall Mount Units</li>
              <li><span class="p-l">1.0 HP</span><span class="p-r">RM 300</span></li>
              <li><span class="p-l">1.5 HP</span><span class="p-r">RM 320</span></li>
              <li><span class="p-l">2.0 HP</span><span class="p-r">RM 350</span></li>
              <li><span class="p-l">2.5 HP</span><span class="p-r">RM 370</span></li>
              <li><span class="p-l">Dismantle (each)</span><span class="p-r">RM 100</span></li>
            </ul>
          </div>
          <div class="svcd-foot"><a href="https://wa.me/601111642927?text=Hi%2C%20I%27d%20like%20a%20quote%20for%20Aircond%20Installation." class="btn btn-gold">Get a quote</a></div>
        </div>
      </article>

      <!-- 5. TROUBLESHOOTING -->
      <article class="svcd-card reveal">
        <div class="svcd-top">
          <span class="svcd-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14.7 6.3a4 4 0 00-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 005.4-5.4l-3 3-2-2 3-3z"/></svg></span>
          <h3>Troubleshooting<span class="svcd-sub">Diagnose &amp; Repair</span></h3>
        </div>
        <div class="svcd-body">
          <div class="svcd-block">
            <div class="lbl">Service Contains</div>
            <ul class="svcd-ul">
              <li>All types of air conditioners troubleshoot</li>
              <li>Any faulty part is quoted and replaced on the spot (if applicable) at reasonable prices</li>
              <li>If no part needs changing after troubleshoot, a visitation charge of RM 100 is payable</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Aircond Types</div>
            <ul class="svcd-ul">
              <li>Wall Mounted</li>
              <li>Ceiling Cassettes</li>
              <li>Ceiling Exposed</li>
              <li>FCU (Ducting)</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Charges Range</div>
            <ul class="svcd-prices">
              <li><span class="p-l">Troubleshooting</span><span class="p-r">From RM 80</span></li>
            </ul>
          </div>
          <div class="svcd-foot"><a href="https://wa.me/601111642927?text=Hi%2C%20I%20need%20aircond%20troubleshooting." class="btn btn-gold">Book troubleshooting</a></div>
        </div>
      </article>

      <!-- 6. WATER-HEATER INSTALLATION -->
      <article class="svcd-card reveal">
        <div class="svcd-top">
          <span class="svcd-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M9 7h6M12 14a2 2 0 002-2c0-1.5-2-3.5-2-3.5S10 10.5 10 12a2 2 0 002 2z"/></svg></span>
          <h3>Water-Heater Installation<span class="svcd-sub">Supply &amp; Install</span></h3>
        </div>
        <div class="svcd-body">
          <div class="svcd-block">
            <div class="lbl">Service Contains</div>
            <ul class="svcd-ul">
              <li>All types of water-heater installations</li>
              <li>Tank-less water-heater installation &mdash; RM 130 per unit</li>
              <li>Storage tank water-heater installation &mdash; RM 160 per unit</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Water-Heater Types</div>
            <ul class="svcd-ul">
              <li>Tank-less water-heaters</li>
              <li>Storage tank water-heaters</li>
              <li>Supply &amp; install services</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Charges Range</div>
            <ul class="svcd-prices">
              <li><span class="p-l">Installation (each)</span><span class="p-r">From RM 120</span></li>
            </ul>
          </div>
          <div class="svcd-foot"><a href="https://wa.me/601111642927?text=Hi%2C%20I%27d%20like%20a%20Water-Heater%20Installation." class="btn btn-gold">Book installation</a></div>
        </div>
      </article>

      <!-- 7. FANS INSTALLATION -->
      <article class="svcd-card reveal">
        <div class="svcd-top">
          <span class="svcd-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="2"/><path d="M12 10c0-4 1-7 0-8-3 1-3 5-3 7M14 12c4 0 7 1 8 0-1-3-5-3-7-3M12 14c0 4-1 7 0 8 3-1 3-5 3-7M10 12c-4 0-7-1-8 0 1 3 5 3 7 3"/></svg></span>
          <h3>Fans Installation<span class="svcd-sub">Supply, Install &amp; Repair</span></h3>
        </div>
        <div class="svcd-body">
          <div class="svcd-block">
            <div class="lbl">Service Contains</div>
            <ul class="svcd-ul">
              <li>All types of fans supply &amp; installations</li>
              <li>Ceiling fan installation &mdash; RM 120 (with hook)</li>
              <li>Wall fan installation &mdash; RM 80</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Fan Types</div>
            <ul class="svcd-ul">
              <li>Ceiling fans</li>
              <li>Wall fans</li>
              <li>Supply &amp; install services</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Charges</div>
            <ul class="svcd-prices">
              <li><span class="p-l">Installation (each)</span><span class="p-r">From RM 120</span></li>
              <li><span class="p-l">Fan repair</span><span class="p-r">RM 80</span></li>
            </ul>
          </div>
          <div class="svcd-foot"><a href="https://wa.me/601111642927?text=Hi%2C%20I%27d%20like%20a%20Fan%20Installation%20%2F%20Repair." class="btn btn-gold">Book this service</a></div>
        </div>
      </article>

      <!-- 8. LIGHTING INSTALLATION -->
      <article class="svcd-card reveal">
        <div class="svcd-top">
          <span class="svcd-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 18h6M10 21h4M12 2a6 6 0 00-3.5 10.9c.6.4.9 1 .9 1.7v.4h5.2v-.4c0-.7.3-1.3.9-1.7A6 6 0 0012 2z"/></svg></span>
          <h3>Lighting Installation<span class="svcd-sub">With Power Points</span></h3>
        </div>
        <div class="svcd-body">
          <div class="svcd-block">
            <div class="lbl">Service Contains</div>
            <ul class="svcd-ul">
              <li>All types of lighting supply &amp; installation with power points</li>
              <li>Lighting installation &mdash; RM 130 for 4 units</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Light Types</div>
            <ul class="svcd-ul">
              <li>Ceiling lights</li>
              <li>Tube lights</li>
              <li>Railing lights</li>
              <li>Spot lights</li>
              <li>Sensor lights</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Charges</div>
            <ul class="svcd-prices">
              <li><span class="p-l">Lighting (4 units)</span><span class="p-r">RM 130</span></li>
            </ul>
          </div>
          <div class="svcd-foot"><a href="https://wa.me/601111642927?text=Hi%2C%20I%27d%20like%20a%20Lighting%20Installation." class="btn btn-gold">Book installation</a></div>
        </div>
      </article>

      <!-- 9. DISMANTLE AIRCONDS -->
      <article class="svcd-card reveal">
        <div class="svcd-top">
          <span class="svcd-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14.5 5.5l4 4M3 21l3.5-1 11-11-3-3-11 11L3 21z"/><path d="M16 3l5 5"/></svg></span>
          <h3>Dismantle Airconds<span class="svcd-sub">Remove &amp; Patch Back</span></h3>
        </div>
        <div class="svcd-body">
          <div class="svcd-block">
            <div class="lbl">Service Contains</div>
            <ul class="svcd-ul">
              <li>All types of wall mounted &amp; ceiling A/C completely dismantled, with holes safely patched back as part of our service</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Charges Range</div>
            <ul class="svcd-prices">
              <li><span class="p-l">1 unit</span><span class="p-r">RM 100</span></li>
            </ul>
          </div>
          <div class="svcd-foot"><a href="https://wa.me/601111642927?text=Hi%2C%20I%27d%20like%20to%20Dismantle%20an%20Aircond." class="btn btn-gold">Book dismantle</a></div>
        </div>
      </article>

      <!-- 10. AIRCON WATER LEAKAGE REPAIRS -->
      <article class="svcd-card reveal">
        <div class="svcd-top">
          <span class="svcd-ico"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2.7S5 10 5 14.5a7 7 0 0014 0C19 10 12 2.7 12 2.7z"/><path d="M9 15a3 3 0 003 3"/></svg></span>
          <h3>Water Leakage Repairs<span class="svcd-sub">Aircon Units</span></h3>
        </div>
        <div class="svcd-body">
          <div class="svcd-block">
            <div class="lbl">Service Contains</div>
            <ul class="svcd-ul">
              <li>All types of wall mounted &amp; ceiling air conditioners water leakage repairing, included in our service</li>
            </ul>
          </div>
          <div class="svcd-block">
            <div class="lbl">Charges Range</div>
            <ul class="svcd-prices">
              <li><span class="p-l">Water leakage repair</span><span class="p-r">RM 120</span></li>
            </ul>
          </div>
          <div class="svcd-foot"><a href="https://wa.me/601111642927?text=Hi%2C%20I%20have%20an%20Aircon%20Water%20Leakage%20issue." class="btn btn-gold">Book repair</a></div>
        </div>
      </article>

    </div>
  </div>
</section>

<section class="why" id="why">
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="eyebrow" style="justify-content:center;color:var(--gold)">How it works</span>
      <h2>Your aircond repair, done right in 4 simple steps</h2>
      <p>No call-centre run-around. You tell us the problem, we show up on time, and you only pay once it is solved.</p>
    </div>
    <div class="steps">
      <div class="step reveal"><div class="step-n"></div><h3>Contact us</h3><p>Call, WhatsApp or fill the form with your aircond issue and your area.</p></div>
      <div class="step reveal"><div class="step-n"></div><h3>Pick a time</h3><p>We confirm a slot that suits you, with same-day service where possible.</p></div>
      <div class="step reveal"><div class="step-n"></div><h3>We diagnose</h3><p>Our technician arrives on time, finds the fault and quotes before starting.</p></div>
      <div class="step reveal"><div class="step-n"></div><h3>Cool comfort</h3><p>Job done right and fully tested, backed by our workmanship guarantee.</p></div>
    </div>
  </div>
</section>

<section class="stats">
  <div class="wrap">
    <div class="stat reveal"><div class="n"><span data-target="10">0</span><span class="suf">+</span></div><div class="l">Years experience</div></div>
    <div class="stat reveal"><div class="n"><span data-target="5000">0</span><span class="suf">+</span></div><div class="l">Units serviced</div></div>
    <div class="stat reveal"><div class="n"><span data-target="1500">0</span><span class="suf">+</span></div><div class="l">Happy customers</div></div>
    <div class="stat reveal"><div class="n"><span data-target="4.9">0</span><span class="suf">★</span></div><div class="l">Average rating</div></div>
  </div>
</section>

<section class="wcu">
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="eyebrow" style="justify-content:center">Top 6 Reasons</span>
      <h2>Why choose us for aircond service and repair</h2>
      <p>From the first call to the final test, we make aircond care simple, honest and dependable for every home and office across Kuala Lumpur & Selangor.</p>
    </div>
    <div class="wcu-grid">
      <div class="wcu-item reveal"><span class="wcu-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><div class="wcu-tx"><h3>Expert Technicians</h3><p>Skilled, experienced technicians who diagnose and fix every aircond brand correctly the first time.</p></div></div>
      <div class="wcu-item reveal"><span class="wcu-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><div class="wcu-tx"><h3>Same-Day Service</h3><p>Fast response across Kuala Lumpur & Selangor, with same-day slots available for most areas when you book early.</p></div></div>
      <div class="wcu-item reveal"><span class="wcu-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><div class="wcu-tx"><h3>Transparent Pricing</h3><p>A clear, fixed price agreed before any work begins, with no hidden charges on the final bill.</p></div></div>
      <div class="wcu-item reveal"><span class="wcu-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><div class="wcu-tx"><h3>Genuine Parts</h3><p>We fit quality, genuine parts so your unit runs reliably and keeps cooling for much longer.</p></div></div>
      <div class="wcu-item reveal"><span class="wcu-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><div class="wcu-tx"><h3>Workmanship Guarantee</h3><p>Every repair and installation is backed by our guarantee, so the job is always done right.</p></div></div>
      <div class="wcu-item reveal"><span class="wcu-ico"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span><div class="wcu-tx"><h3>Honest Advice</h3><p>We recommend only what your unit truly needs and never push extras you do not want.</p></div></div>
    </div>
  </div>
</section>

<section class="spec">
  <div class="wrap">
    <div class="spec-grid">
      <div class="spec-text reveal">
        <span class="eyebrow">Our Specialty</span>
        <h2>Your trusted local aircond specialists in Kuala Lumpur & Selangor</h2>
        <p>Welcome to Sham Aircond, your trusted partner for cooling comfort in Kuala Lumpur & Selangor. With years of hands-on experience and a real commitment to doing the job right, we specialise in aircond repair, servicing, installation and deep chemical cleaning. From a unit that will not cool to a clean new install, our skilled technicians deliver reliable work that keeps your home and office comfortable all year round. We repair all aircond brands for homes and businesses, with fast, same-day slots available across KL & Selangor.</p>
      </div>
      <div class="spec-collage reveal">
        <div class="spec-col">
          <div class="spec-photo"><img src="https://shamaircond.com/assets/img/aircond-installation-hero.jpg" alt="Aircond installation by Sham Aircond in Kuala Lumpur & Selangor" loading="lazy" onerror="this.parentElement.classList.add('noimg');this.remove()"></div>
          <div class="spec-stat navy"><span class="ss-n">850<i>+</i></span><span class="ss-l">Projects Completed</span></div>
        </div>
        <div class="spec-col">
          <div class="spec-stat light"><span class="ss-n">100<i>%</i></span><span class="ss-l">Customer Satisfaction</span></div>
          <div class="spec-photo tall"><img src="https://shamaircond.com/assets/img/aircond-service-hero.jpg" alt="Aircond servicing and maintenance in Kuala Lumpur & Selangor" loading="lazy" onerror="this.parentElement.classList.add('noimg');this.remove()"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testi">
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="eyebrow" style="justify-content:center">Customer reviews</span>
      <h2>Top-rated aircond repair and servicing in KL & Selangor</h2>
    </div>
    <div class="rev-block reveal">
      <div class="rev-label"><span class="rev-plat google"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg> Google Reviews</span><span class="rev-score">Rated 4.9 / 5 in customer reviews across KL & Selangor</span></div>
      <div class="rev-row"><div class="rev-track rev-rtl"><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Aisyah R.</span><span class="rc-sub">Petaling Jaya</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">Booked in the morning and the technician came the same afternoon. Found the fault, told me the price first, and now it cools like new.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Lim W.</span><span class="rc-sub">KL</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">Honest pricing and no upselling. We use them for all our office units now and they are always on time.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Suresh K.</span><span class="rc-sub">Subang Jaya</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">Installed two units at home. Clean fitting, tidy work, and they tested everything before leaving. Highly recommend.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Nurul H.</span><span class="rc-sub">Shah Alam</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">My aircond was leaking water for weeks. They fixed it in one visit and explained what went wrong. Very professional.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Daniel T.</span><span class="rc-sub">Cheras</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">Fast reply on WhatsApp and a fair quote. The chemical wash made a huge difference to the cooling.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Farah A.</span><span class="rc-sub">Klang</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">Reliable and polite. Came on a Sunday when my unit died in the heat. Real lifesavers.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Aisyah R.</span><span class="rc-sub">Petaling Jaya</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">Booked in the morning and the technician came the same afternoon. Found the fault, told me the price first, and now it cools like new.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Lim W.</span><span class="rc-sub">KL</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">Honest pricing and no upselling. We use them for all our office units now and they are always on time.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Suresh K.</span><span class="rc-sub">Subang Jaya</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">Installed two units at home. Clean fitting, tidy work, and they tested everything before leaving. Highly recommend.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Nurul H.</span><span class="rc-sub">Shah Alam</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">My aircond was leaking water for weeks. They fixed it in one visit and explained what went wrong. Very professional.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Daniel T.</span><span class="rc-sub">Cheras</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">Fast reply on WhatsApp and a fair quote. The chemical wash made a huge difference to the cooling.</p></article><article class="rcard"><div class="rc-head"><span class="rc-logo"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5a5.6 5.6 0 01-2.4 3.7v3h3.9c2.3-2.1 3.5-5.2 3.5-8.9z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1 .7-2.4 1.1-4 1.1-3 0-5.6-2-6.6-4.8h-4v3A12 12 0 0012 24z"/><path fill="#FBBC05" d="M5.4 14.4a7.2 7.2 0 010-4.6v-3h-4a12 12 0 000 10.6l4-3z"/><path fill="#EA4335" d="M12 4.8c1.8 0 3.3.6 4.6 1.8l3.4-3.4A12 12 0 001.4 6.8l4 3C6.4 6.9 9 4.8 12 4.8z"/></svg></span><div class="rc-id"><span class="rc-name">Farah A.</span><span class="rc-sub">Klang</span></div><span class="g-mark">Google</span></div><div class="rc-stars">★★★★★</div><p class="rc-text">Reliable and polite. Came on a Sunday when my unit died in the heat. Real lifesavers.</p></article></div></div>

      <div class="rev-label" style="margin-top:38px"><span class="rev-plat tp"><svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path fill="#00b67a" d="M12 2l2.6 6.3 6.8.5-5.2 4.4 1.7 6.6L12 16.7 6.1 19.8l1.7-6.6-5.2-4.4 6.8-.5z"/></svg> Trustpilot</span><span class="rev-score">Rated Excellent by our clients</span></div>
      <div class="rev-row"><div class="rev-track rev-ltr"><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Great service from start to finish. Clear pricing before any work and a proper guarantee after.</p><div class="rc-id solo"><span class="rc-name">Hafiz M.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Technician was knowledgeable and quick. My old unit is cooling better than it has in years.</p><div class="rc-id solo"><span class="rc-name">Jason L.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Booked online, got a same-day slot, and the job was done well. Will use them again for servicing.</p><div class="rc-id solo"><span class="rc-name">Priya N.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Very transparent. They showed me the coils before and after the chemical clean. Worth every ringgit.</p><div class="rc-id solo"><span class="rc-name">Azim R.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Friendly, on time and tidy. No mess left behind at all. Five stars from our family.</p><div class="rc-id solo"><span class="rc-name">Mei Ling C.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Quoted fairly and stuck to the price. No surprises on the bill. A trustworthy aircond company in KL & Selangor.</p><div class="rc-id solo"><span class="rc-name">Ravi S.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Great service from start to finish. Clear pricing before any work and a proper guarantee after.</p><div class="rc-id solo"><span class="rc-name">Hafiz M.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Technician was knowledgeable and quick. My old unit is cooling better than it has in years.</p><div class="rc-id solo"><span class="rc-name">Jason L.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Booked online, got a same-day slot, and the job was done well. Will use them again for servicing.</p><div class="rc-id solo"><span class="rc-name">Priya N.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Very transparent. They showed me the coils before and after the chemical clean. Worth every ringgit.</p><div class="rc-id solo"><span class="rc-name">Azim R.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Friendly, on time and tidy. No mess left behind at all. Five stars from our family.</p><div class="rc-id solo"><span class="rc-name">Mei Ling C.</span><span class="rc-sub">Verified review</span></div></article><article class="rcard"><div class="rc-head"><span class="tp-stars"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span><span class="tp-mark">Trustpilot</span></div><p class="rc-text">Quoted fairly and stuck to the price. No surprises on the bill. A trustworthy aircond company in KL & Selangor.</p><div class="rc-id solo"><span class="rc-name">Ravi S.</span><span class="rc-sub">Verified review</span></div></article></div></div>
    </div>
  </div>
</section>

<section style="padding-bottom:0">
  <div class="wrap">
    <div class="ctaband reveal">
      <div><h2>Aircond not cooling? Get a same-day repair today.</h2><p>Book in under a minute. Most areas in KL & Selangor get a same-day slot.</p></div>
      <div class="acts">
        <a href="tel:+601111642927" class="btn btn-navy"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg> Call now</a>
        <a href="https://wa.me/601111642927" class="btn" style="background:#fff;color:var(--navy-ink)">WhatsApp us</a>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="eyebrow" style="justify-content:center">Get in touch</span>
      <h2>Book your aircond service and repair</h2>
      <p>Send the details and we will confirm your slot within the hour during working times.</p>
    </div>
    <div class="contact-grid">
      <div class="faq reveal">
        <h3>Frequently asked questions</h3>
        <p class="faq-sub">Quick answers about our aircond service in Kuala Lumpur & Selangor.</p>
        <details class="faq-item"><summary>Do you offer same-day aircond repair in Kuala Lumpur & Selangor?</summary><div class="faq-a"><p>For most areas in KL & Selangor we can arrange a same-day slot when you reach us early in the day. Tell us your area and the problem, and we will confirm the soonest time available.</p></div></details>
        <details class="faq-item"><summary>How much does aircond servicing or repair cost?</summary><div class="faq-a"><p>It depends on your unit type and the work needed. We always give you a clear, fixed price before any work begins, so there are no hidden charges or surprises on the bill.</p></div></details>
        <details class="faq-item"><summary>What is the difference between general and chemical cleaning?</summary><div class="faq-a"><p>General cleaning clears dust from the filters and cover to restore airflow. Chemical cleaning is a deeper wash of the coils and internal parts that removes stubborn dirt and mould for stronger, healthier cooling.</p></div></details>
        <details class="faq-item"><summary>Do you give a warranty on your work?</summary><div class="faq-a"><p>Yes. Our repairs and installations are backed by a workmanship guarantee. If anything is not right after our visit, we come back and put it right.</p></div></details>
        <details class="faq-item"><summary>Which areas in KL & Selangor do you cover?</summary><div class="faq-a"><p>We serve Kuala Lumpur & Selangor and the surrounding areas including Petaling Jaya, Subang Jaya, Shah Alam, Cheras and Klang. Just ask us about your location when you book.</p></div></details>
        <details class="faq-item"><summary>How often should I service my aircond?</summary><div class="faq-a"><p>For most homes, every three to four months keeps cooling efficient and electricity bills lower. Units that run heavily or sit in dusty areas may need servicing a little more often.</p></div></details>
      </div>

      <form class="cform reveal" id="contactForm" data-endpoint="/api/contact.php" novalidate>
        <h3>Send a request</h3>
        <p class="fsub">Tell us what your aircond needs and we will get right back to you.</p>
        <div class="form-note-box" id="formNote"></div>
        <div class="row2">
          <div class="field"><label for="name">Full name</label><input type="text" id="name" name="name" placeholder="Your name"><span class="err-msg">Please enter your name.</span></div>
          <div class="field"><label for="phone">Phone / WhatsApp</label><input type="tel" id="phone" name="phone" placeholder="01x-xxxx xxxx"><span class="err-msg">Please enter a valid phone number.</span></div>
        </div>
        <div class="row2">
          <div class="field"><label for="email">Email</label><input type="email" id="email" name="email" placeholder="you@email.com"><span class="err-msg">Please enter a valid email address.</span></div>
          <div class="field"><label for="location">Location / Area</label><input type="text" id="location" name="location" placeholder="Your area in KL & Selangor (e.g. Petaling Jaya)"><span class="err-msg">Please enter your location.</span></div>
        </div>
        <div class="field"><label for="service">Service needed</label>
          <select id="service" name="service"><option value="">Select a service</option><option>Aircond Repair</option><option>Aircond Service</option><option>Aircond Installation</option><option>General Cleaning</option><option>Chemical Cleaning</option><option>Gas Top Up</option></select>
          <span class="err-msg">Please choose a service.</span>
        </div>
        <div class="field"><label for="message">Message details</label><textarea id="message" name="message" placeholder="Tell us about the problem with your aircond"></textarea><span class="err-msg">Please add a few details.</span></div>
        <div class="hp"><label for="company">Company</label><input type="text" id="company" name="company" tabindex="-1" autocomplete="off"></div>
        <button type="submit" class="btn btn-gold" id="submitBtn" style="width:100%;justify-content:center">Send request</button>
        <p class="form-note">We reply within the hour during working times. No spam, ever.</p>
      </form>
    </div>
  </div>
</section>

<div class="wrap mapwrap reveal" style="padding-bottom:80px">
  <iframe title="Sham Aircond service area in Kuala Lumpur & Selangor" loading="lazy" src="https://maps.google.com/maps?q=Kuala%20Lumpur%20Malaysia&t=&z=12&ie=UTF8&iwloc=&output=embed"></iframe>
</div>
<?php include __DIR__.'/inc/footer.php'; ?>