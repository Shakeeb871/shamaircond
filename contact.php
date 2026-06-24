<?php
$base=''; $active='contact';
$title='Contact Us | Book Aircond Service &amp; Repair in Kuala Lumpur & Selangor';
$desc='Contact Sham Aircond for fast aircond service and repair in Kuala Lumpur & Selangor. Call +60 11-1164 2927, WhatsApp us, or send a request and get a same-day slot.';
$canonical='https://shamaircond.com/contact/';
$jsonld='<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://shamaircond.com/"},{"@type":"ListItem","position":2,"name":"Contact Us","item":"https://shamaircond.com/contact/"}]}</script>';
include __DIR__.'/inc/header.php';
?>
<section class="page-hero" style="background-image:linear-gradient(135deg,rgba(14,42,87,.88) 0%,rgba(18,58,122,.82) 100%),url('https://shamaircond.com/assets/img/aircond%20service.jpg')"><div class="wrap"><nav class="breadcrumb"><a href="/">Home</a> <span>/</span> <b>Contact Us</b></nav><span class="ph-eyebrow">Contact Us</span><h1>Book your aircond service and repair</h1><p>Call, WhatsApp or send the form below and we will confirm your slot fast. Same-day appointments are available across most of Kuala Lumpur & Selangor.</p></div></section>
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