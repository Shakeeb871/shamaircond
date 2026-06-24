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

  /* ---- animated counters ---- */
  try {
    var counters = document.querySelectorAll('[data-target]');
    var animate = function (el) {
      var target = parseFloat(el.dataset.target), dec = target % 1 !== 0, cur = 0, step = target / 60;
      (function tick() {
        cur += step;
        if (cur >= target) { el.textContent = dec ? target.toFixed(1) : Math.round(target).toLocaleString(); }
        else { el.textContent = dec ? cur.toFixed(1) : Math.round(cur).toLocaleString(); requestAnimationFrame(tick); }
      })();
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

  /* ---- contact form ---- */
  try {
    var form = document.getElementById('contactForm');
    if (form) {
      var noteBox = document.getElementById('formNote');
      var submitBtn = document.getElementById('submitBtn');
      var isEmail = function (v) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); };
      var isPhone = function (v) { return v.replace(/\D/g, '').length >= 7; };
      var fld = function (id) { return document.getElementById(id); };
      var showNote = function (type, msg) {
        noteBox.className = 'form-note-box show ' + type;
        noteBox.textContent = msg;
        noteBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
      };
      /* business WhatsApp number (digits only, with country code) */
      var WA_NUMBER = '601111642927';
      var openWhatsApp = function () {
        var v = function (id) { var el = fld(id); return el ? el.value.trim() : ''; };
        var lines = [
          'New aircond enquiry from website',
          '',
          'Name: ' + v('name'),
          'Phone: ' + v('phone'),
          'Email: ' + v('email'),
          'Location: ' + v('location'),
          'Service: ' + v('service'),
          'Message: ' + v('message')
        ];
        var url = 'https://wa.me/' + WA_NUMBER + '?text=' + encodeURIComponent(lines.join('\n'));
        window.open(url, '_blank');
      };
      var validate = function () {
        var ok = true;
        [['name', function (v) { return v.length > 1; }], ['phone', isPhone], ['email', isEmail], ['location', function (v) { return v.length > 1; }],
         ['service', function (v) { return v.length > 0; }], ['message', function (v) { return v.length > 3; }]
        ].forEach(function (c) {
          var el = fld(c[0]), wrap = el.closest('.field'), good = c[1](el.value.trim());
          wrap.classList.toggle('err', !good); if (!good) ok = false;
        });
        return ok;
      };
      form.addEventListener('submit', function (ev) {
        ev.preventDefault();
        noteBox.className = 'form-note-box';
        if (!validate()) return;
        var data = new FormData();
        ['name', 'phone', 'email', 'location', 'service', 'message', 'company'].forEach(function (k) { data.append(k, fld(k).value); });
        submitBtn.disabled = true;
        var original = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';
        fetch(form.getAttribute('data-endpoint') || '/api/contact.php', { method: 'POST', body: data })
          .then(function (r) { return r.json(); })
          .then(function (res) {
            if (res && res.success) { openWhatsApp(); showNote('ok', res.message || 'Thank you. We will confirm your slot shortly. Please tap Send in WhatsApp to confirm your booking.'); form.reset(); }
            else { showNote('bad', (res && res.message) || 'Something went wrong. Please call or WhatsApp us instead.'); }
          })
          .catch(function () { openWhatsApp(); showNote('ok', 'Thank you. We will confirm your slot shortly. Please tap Send in WhatsApp to confirm your booking.'); form.reset(); })
          .finally(function () { submitBtn.disabled = false; submitBtn.textContent = original; });
      });
      form.querySelectorAll('input,textarea,select').forEach(function (f) {
        f.addEventListener('input', function () { f.closest('.field').classList.remove('err'); });
      });
    }
  } catch (e) {}
})();