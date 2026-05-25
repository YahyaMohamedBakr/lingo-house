(function() {
  'use strict';

  /* Mobile Menu */
  var overlay = document.querySelector('.mobile-overlay');
  var openBtn = document.querySelector('.mobile-toggle');
  var closeBtn = document.querySelector('.mobile-close');

  function openMenu() { overlay.classList.add('active'); document.body.style.overflow = 'hidden'; }
  function closeMenu() { overlay.classList.remove('active'); document.body.style.overflow = ''; }

  if (openBtn) openBtn.addEventListener('click', openMenu);
  if (closeBtn) closeBtn.addEventListener('click', closeMenu);
  if (overlay) overlay.addEventListener('click', function (e) { if (e.target === overlay) closeMenu(); });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && overlay && overlay.classList.contains('active')) closeMenu(); });

  if (overlay) {
    overlay.querySelectorAll('.mobile-body a').forEach(function (a) {
      a.addEventListener('click', closeMenu);
    });
  }

  /* Mobile sub-toggles */
  document.querySelectorAll('[data-toggle]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var target = document.getElementById(this.getAttribute('data-toggle'));
      if (target) { target.classList.toggle('open'); this.classList.toggle('open'); }
    });
  });

  /* Promo Toggle */
  var promoBtn = document.getElementById('promo-toggle');
  var promoField = document.getElementById('promo-field');
  if (promoBtn && promoField) {
    promoBtn.addEventListener('click', function () {
      this.classList.toggle('open');
      promoField.classList.toggle('show');
    });
  }

  /* Language Card Toggle */
  document.querySelectorAll('.lang-card-header').forEach(function (header) {
    header.addEventListener('click', function () {
      var card = this.closest('.lang-card');
      if (!card) return;
      document.querySelectorAll('.lang-card.open').forEach(function (c) { if (c !== card) c.classList.remove('open'); });
      card.classList.toggle('open');
    });
  });

  /* FAQ Accordion */
  document.querySelectorAll('.faq-q').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = this.closest('.faq-item');
      if (!item) return;
      var wasOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(function (i) { i.classList.remove('open'); });
      if (!wasOpen) item.classList.add('open');
    });
  });

  /* Back to Top */
  var backTop = document.querySelector('.back-top');
  if (backTop) {
    window.addEventListener('scroll', function () {
      backTop.classList.toggle('visible', window.scrollY > 400);
    });
    backTop.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: 'smooth' }); });
  }

  /* Sticky Nav Shadow */
  var nav = document.querySelector('.main-nav');
  if (nav) {
    window.addEventListener('scroll', function () {
      nav.style.boxShadow = window.scrollY > 10
        ? '0 4px 20px rgba(0,0,0,.06)'
        : '0 1px 4px rgba(0,0,0,.04)';
    });
  }

  /* Scroll Animations */
  if ('IntersectionObserver' in window) {
    var obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.anim').forEach(function (el) { obs.observe(el); });
  } else {
    document.querySelectorAll('.anim').forEach(function (el) { el.classList.add('visible'); });
  }

  /* Counter Animation */
  var counters = document.querySelectorAll('[data-count]');
  if (counters.length && 'IntersectionObserver' in window) {
    var cObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          var target = parseInt(e.target.getAttribute('data-count'), 10);
          var start = 0, inc = Math.max(1, Math.ceil(target / 90)), cur = start;
          var suffix = target >= 10000 ? '+' : target >= 100 ? '+' : '+';
          (function step() {
            cur = Math.min(cur + inc, target);
            e.target.textContent = cur >= 10000 ? (cur / 1000).toFixed(0) + 'K+' : cur + suffix;
            if (cur < target) requestAnimationFrame(step);
          })();
          cObs.unobserve(e.target);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(function (el) { cObs.observe(el); });
  }

  /* Toast */
  function toast(msg) {
    var old = document.querySelector('.toast'); if (old) old.remove();
    var t = document.createElement('div');
    t.className = 'toast';
    t.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><span>' + msg + '</span>';
    document.body.appendChild(t);
    requestAnimationFrame(function () { t.classList.add('show'); });
    setTimeout(function () { t.classList.remove('show'); setTimeout(function () { t.remove(); }, 300); }, 4000);
  }

  /* Form Submit */
  document.querySelectorAll('form').forEach(function (form) {
    if (form.id === 'contact-form') return;
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var btn = form.querySelector('.btn-submit, button[type="submit"]');
      var orig = btn ? btn.innerHTML : '';
      if (btn) { btn.disabled = true; btn.innerHTML = 'Sending...'; btn.style.opacity = '.6'; }
      setTimeout(function () {
        if (btn) { btn.disabled = false; btn.innerHTML = orig; btn.style.opacity = ''; }
        toast('Thank you! Your request has been submitted successfully.');
        form.reset();
        if (promoBtn) promoBtn.classList.remove('open');
        if (promoField) promoField.classList.remove('show');
      }, 1500);
    });
  });

  /* Search */
  var searchInput = document.querySelector('.search-box input');
  if (searchInput) {
    searchInput.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' && this.value.trim()) {
        e.preventDefault();
        window.location.href = '/' + '?s=' + encodeURIComponent(this.value.trim());
      }
    });
  }

  /* Smooth Scroll */
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var id = this.getAttribute('href');
      if (id === '#') return;
      var target = document.querySelector(id);
      if (target) {
        e.preventDefault();
        window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - 70, behavior: 'smooth' });
        if (overlay && overlay.classList.contains('active')) closeMenu();
      }
    });
  });

  /* Course Filters */
  var langFilters = document.getElementById('lang-filters');
  var typeFilters = document.getElementById('type-filters');
  var courseSearch = document.getElementById('course-search');
  var coursesGrid = document.getElementById('courses-grid');
  var noResults = document.getElementById('no-results');
  var currentLang = 'all';
  var currentType = 'all';

  function filterCourses() {
    if (!coursesGrid) return;
    var cards = coursesGrid.querySelectorAll('.course-detail-card');
    var searchText = courseSearch ? courseSearch.value.trim().toLowerCase() : '';
    var visibleCount = 0;

    cards.forEach(function (card) {
      var lang = card.getAttribute('data-lang') || '';
      var types = card.getAttribute('data-types') || '';
      var text = card.textContent.toLowerCase();

      var langMatch = currentLang === 'all' || lang.indexOf(currentLang) !== -1;
      var typeMatch = currentType === 'all' || types.indexOf(currentType) !== -1;
      var searchMatch = !searchText || text.indexOf(searchText) !== -1;

      if (langMatch && typeMatch && searchMatch) {
        card.style.display = '';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    if (noResults) {
      noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }
  }

  if (langFilters) {
    langFilters.querySelectorAll('.filter-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        langFilters.querySelectorAll('.filter-btn').forEach(function (b) { b.classList.remove('active'); });
        this.classList.add('active');
        currentLang = this.getAttribute('data-filter');
        filterCourses();
      });
    });
  }

  if (typeFilters) {
    typeFilters.querySelectorAll('.filter-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        typeFilters.querySelectorAll('.filter-btn').forEach(function (b) { b.classList.remove('active'); });
        this.classList.add('active');
        currentType = this.getAttribute('data-type');
        filterCourses();
      });
    });
  }

  if (courseSearch) {
    courseSearch.addEventListener('input', filterCourses);
  }

  /* Contact Form Validation */
  var contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();

      var nameField = document.getElementById('c-name');
      var emailField = document.getElementById('c-email');
      var subjectField = document.getElementById('c-subject');
      var messageField = document.getElementById('c-message');
      var isValid = true;

      clearFieldError(nameField, 'err-name');
      clearFieldError(emailField, 'err-email');
      clearFieldError(subjectField, 'err-subject');
      clearFieldError(messageField, 'err-message');

      if (!nameField.value.trim()) {
        setFieldError(nameField, 'err-name');
        isValid = false;
      }

      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailField.value.trim() || !emailRegex.test(emailField.value.trim())) {
        setFieldError(emailField, 'err-email');
        isValid = false;
      }

      if (!subjectField.value) {
        setFieldError(subjectField, 'err-subject');
        isValid = false;
      }

      if (!messageField.value.trim()) {
        setFieldError(messageField, 'err-message');
        isValid = false;
      }

      if (!isValid) return;

      var btn = contactForm.querySelector('.btn-submit');
      var origBtn = btn.innerHTML;
      btn.disabled = true;
      btn.innerHTML = 'Sending...';
      btn.style.opacity = '.6';

      setTimeout(function () {
        btn.disabled = false;
        btn.innerHTML = origBtn;
        btn.style.opacity = '';
        toast('Thank you! Your message has been sent successfully.');
        contactForm.reset();
      }, 1500);
    });
  }

  function setFieldError(field, errorId) {
    field.classList.add('form-error');
    var errEl = document.getElementById(errorId);
    if (errEl) errEl.classList.add('show');
  }

  function clearFieldError(field, errorId) {
    field.classList.remove('form-error');
    var errEl = document.getElementById(errorId);
    if (errEl) errEl.classList.remove('show');
  }

  ['c-name', 'c-email', 'c-subject', 'c-message'].forEach(function (id) {
    var el = document.getElementById(id);
    if (el) {
      el.addEventListener('input', function () {
        this.classList.remove('form-error');
        var errId = 'err-' + id.split('-')[1];
        var errEl = document.getElementById(errId);
        if (errEl) errEl.classList.remove('show');
      });
      el.addEventListener('change', function () {
        this.classList.remove('form-error');
        var errId = 'err-' + id.split('-')[1];
        var errEl = document.getElementById(errId);
        if (errEl) errEl.classList.remove('show');
      });
    }
  });

  /* Active Page Highlighting */
  var path = window.location.pathname;
  document.querySelectorAll('.nav-link').forEach(function (link) {
    link.classList.remove('active');
    var href = link.getAttribute('href');
    if (!href) return;
    if (path === href || path === '/' + href || (href !== '/' && path.indexOf(href) !== -1)) {
      link.classList.add('active');
    }
  });
  document.querySelectorAll('.mobile-body a').forEach(function (link) {
    link.classList.remove('active-mobile');
    var href = link.getAttribute('href');
    if (!href) return;
    if (path === href || path === '/' + href || (href !== '/' && path.indexOf(href) !== -1)) {
      link.classList.add('active-mobile');
    }
  });

})();
