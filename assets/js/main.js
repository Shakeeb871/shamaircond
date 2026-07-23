/* ============================================================
   Sham Aircond - main.js  (each module is independent & fail-safe)
   ============================================================ */
(function () {
  'use strict';

  var reduce = false;
  try { reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches; } catch (e) {}
  var hasIO = ('IntersectionObserver' in window);

  /* ---- sticky header ---- */
  try {
    var hdr = document.getElementById('siteHeader');
    if (hdr) {
      window.addEventListener('scroll', function () {
        hdr.classList.toggle('stuck', window.scrollY > 60);
      });
    }
  } catch (e) {}

  /* ---- mobile menu ---- */
  try {
    var menuBtn = document.getElementById('menuBtn');
    var navlinks = document.getElementById('navlinks');
    if (menuBtn && navlinks) {
      menuBtn.addEventListener('click', function () { navlinks.classList.toggle('open'); });
      navlinks.querySelectorAll('a').forEach(function (a) {
        a.addEventListener('click', function () { navlinks.classList.remove('open'); });
      });
    }
  } catch (e) {}

  /* ---- scroll reveals ---- */
  try {
    var reveals = document.querySelectorAll('.reveal');
    if (hasIO) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
      reveals.forEach(function (el) { io.observe(el); });
    } else {
      reveals.forEach(function (el) { el.classList.add('in'); });
    }
  } catch (e) {
    document.querySelectorAll('.reveal').forEach(function (el) { el.classList.add('in'); });
  }

  /* ---- HERO SLIDER (independent: always runs) ---- */
  try {
    var slider = document.getElementById('home');
    if (slider && slider.classList.contains('hero-slider')) {
      var slides = [].slice.call(slider.querySelectorAll('.slide'));
      if (slides.length > 1) {
        var curEl = document.getElementById('curSlide');
        var totEl = document.getElementById('totSlide');
        var prevBtn = slider.querySelector('.slider-arrow.prev');
        var nextBtn = slider.querySelector('.slider-arrow.next');
        var i = 0, timer, delay = 5000;
        if (totEl) totEl.textContent = slides.length;

        var restart = function () { clearInterval(timer); timer = setInterval(nextS, delay); };
        var go = function (n) {
          slides[i].classList.remove('is-active');
          i = (n + slides.length) % slides.length;
          slides[i].classList.add('is-active');
          if (curEl) curEl.textContent = i + 1;
          restart();
        };
        var nextS = function () { go(i + 1); };
        var prevS = function () { go(i - 1); };

        if (nextBtn) nextBtn.addEventListener('click', nextS);
        if (prevBtn) prevBtn.addEventListener('click', prevS);

        var x0 = null;
        slider.addEventListener('touchstart', function (e) { x0 = e.touches[0].clientX; }, { passive: true });
        slider.addEventListener('touchend', function (e) {
          if (x0 === null) return;
          var dx = e.changedTouches[0].clientX - x0;
          if (Math.abs(dx) > 50) { dx < 0 ? nextS() : prevS(); }
          x0 = null;
        });

        restart();
      }
    }
  } catch (e) {}

  /* ---- REVIEW SLIDERS (Google reviews, sidebar) ---- */
  try {
    var revSliders = [].slice.call(document.querySelectorAll('.rev-slider'));
    revSliders.forEach(function (rs) {
      var rSlides = [].slice.call(rs.querySelectorAll('.rev-slide'));
      var dotsWrap = rs.querySelector('.rev-dots');
      if (rSlides.length < 2) return;
      var ri = 0, rTimer, rDelay = 4500, dots = [];
      if (dotsWrap) {
        rSlides.forEach(function (s, idx) {
          var b = document.createElement('button');
          b.type = 'button';
          b.setAttribute('aria-label', 'Show review ' + (idx + 1));
          b.addEventListener('click', function () { rgo(idx); });
          dotsWrap.appendChild(b);
          dots.push(b);
        });
      }
      var rrestart = function () { clearInterval(rTimer); rTimer = setInterval(rnext, rDelay); };
      var rgo = function (n) {
        rSlides[ri].classList.remove('is-active');
        if (dots[ri]) dots[ri].classList.remove('on');
        ri = (n + rSlides.length) % rSlides.length;
        rSlides[ri].classList.add('is-active');
        if (dots[ri]) dots[ri].classList.add('on');
        rrestart();
      };
      var rnext = function () { rgo(ri + 1); };
      rSlides[0].classList.add('is-active');
      if (dots[0]) dots[0].classList.add('on');
      rrestart();
    });
  } catch (e) {}

  /* ---- animated counters ---- */
  try {
    var counters = document.querySelectorAll('[data-target]');
    var animate = function (el) {
      /* animations disabled — show the final value immediately, no count-up */
      var target = parseFloat(el.dataset.target);
      el.textContent = target % 1 !== 0 ? target.toFixed(1) : Math.round(target).toLocaleString();
    };
    if (hasIO) {
      var cio = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) { if (!en.isIntersecting) return; animate(en.target); cio.unobserve(en.target); });
      }, { threshold: 0.5 });
      counters.forEach(function (c) { cio.observe(c); });
    } else {
      counters.forEach(function (c) {
        var t = parseFloat(c.dataset.target);
        c.textContent = t % 1 !== 0 ? t.toFixed(1) : Math.round(t).toLocaleString();
      });
    }
  } catch (e) {}

  /* ---- REVIEW CAROUSEL (3-up, step by 1, infinite loop) ---- */
  try {
    document.querySelectorAll('.rc-carousel').forEach(function (car) {
      var track = car.querySelector('.rc-track');
      if (!track) return;
      var cards = [].slice.call(track.children);
      if (cards.length < 2) return;
      var orig = cards.length;
      cards.forEach(function (c) { var cl = c.cloneNode(true); cl.setAttribute('aria-hidden', 'true'); track.appendChild(cl); });
      var i = 0, timer, delay = 2800;
      var gap = function () { var g = parseFloat(getComputedStyle(track).columnGap); return isNaN(g) ? 22 : g; };
      var cardW = function () { return track.children[0].getBoundingClientRect().width + gap(); };
      var go = function () {
        i++;
        track.classList.remove('rc-noanim');
        track.style.transform = 'translateX(' + (-i * cardW()) + 'px)';
      };
      track.addEventListener('transitionend', function () {
        if (i >= orig) {
          track.classList.add('rc-noanim');
          i = 0;
          track.style.transform = 'translateX(0px)';
          void track.offsetWidth;
        }
      });
      var start = function () { clearInterval(timer); timer = setInterval(go, delay); };
      car.addEventListener('mouseenter', function () { clearInterval(timer); });
      car.addEventListener('mouseleave', start);
      window.addEventListener('resize', function () { track.classList.add('rc-noanim'); track.style.transform = 'translateX(' + (-i * cardW()) + 'px)'; });
      start();
    });
  } catch (e) {}

  /* ---- contact / booking forms (supports multiple forms per page) ---- */
  try {
    var bookingForms = document.querySelectorAll('form.cform');
    bookingForms.forEach(function (form) {
      var noteBox = form.querySelector('.form-note-box');
      var submitBtn = form.querySelector('button[type="submit"]');
      var isEmail = function (v) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); };
      var isPhone = function (v) { return v.replace(/\D/g, '').length >= 7; };
      var fld = function (n) { return form.querySelector('[name="' + n + '"]'); };
      var val = function (n) { var el = fld(n); return el ? el.value.trim() : ''; };
      var showNote = function (type, msg) {
        if (!noteBox) return;
        noteBox.className = 'form-note-box show ' + type;
        noteBox.textContent = msg;
        noteBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
      };
      /* business WhatsApp number (digits only, with country code) */
      var WA_NUMBER = '601111642927';
      var openWhatsApp = function () {
        var lines = [
          'New aircond enquiry from website',
          '',
          'Name: ' + val('name'),
          'Phone: ' + val('phone'),
          'Email: ' + val('email'),
          'Location: ' + val('location'),
          'Service: ' + val('service'),
          'Message: ' + val('message')
        ];
        window.open('https://wa.me/' + WA_NUMBER + '?text=' + encodeURIComponent(lines.join('\n')), '_blank');
      };
      var validate = function () {
        var ok = true;
        [['name', function (v) { return v.length > 1; }], ['phone', isPhone], ['email', isEmail], ['location', function (v) { return v.length > 1; }],
         ['service', function (v) { return v.length > 0; }], ['message', function (v) { return v.length > 3; }]
        ].forEach(function (c) {
          var el = fld(c[0]); if (!el) return;
          var wrap = el.closest('.field'), good = c[1](el.value.trim());
          if (wrap) wrap.classList.toggle('err', !good);
          if (!good) ok = false;
        });
        return ok;
      };
      form.addEventListener('submit', function (ev) {
        ev.preventDefault();
        if (noteBox) noteBox.className = 'form-note-box';
        if (!validate()) return;
        var data = new FormData();
        ['name', 'phone', 'email', 'location', 'service', 'message', 'company'].forEach(function (k) { var el = fld(k); data.append(k, el ? el.value : ''); });
        if (submitBtn) submitBtn.disabled = true;
        var original = submitBtn ? submitBtn.textContent : '';
        if (submitBtn) submitBtn.textContent = 'Sending...';
        fetch(form.getAttribute('data-endpoint') || '/api/contact.php', { method: 'POST', body: data })
          .then(function (r) { return r.json(); })
          .then(function (res) {
            if (res && res.success) { openWhatsApp(); showNote('ok', res.message || 'Thank you. We will confirm your slot shortly. Please tap Send in WhatsApp to confirm your booking.'); form.reset(); }
            else { showNote('bad', (res && res.message) || 'Something went wrong. Please call or WhatsApp us instead.'); }
          })
          .catch(function () { openWhatsApp(); showNote('ok', 'Thank you. We will confirm your slot shortly. Please tap Send in WhatsApp to confirm your booking.'); form.reset(); })
          .finally(function () { if (submitBtn) { submitBtn.disabled = false; submitBtn.textContent = original; } });
      });
      form.querySelectorAll('input,textarea,select').forEach(function (f) {
        f.addEventListener('input', function () { var w = f.closest('.field'); if (w) w.classList.remove('err'); });
      });
    });
  } catch (e) {}
})();