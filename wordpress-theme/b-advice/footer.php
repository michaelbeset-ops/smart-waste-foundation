</main><!-- /.ba-main -->

<!-- FOOTER -->
<footer class="ba-footer">
  <div class="ba-container">
    <div class="ba-footer-inner">

      <!-- Brand + logo -->
      <div class="ba-footer-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ba-footer-logo">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.svg' ); ?>" alt="B-Advice logo" width="36" height="36">
          <span>B-Advice</span>
        </a>
        <p>Uw specialist in afvalinzameling, containerbeheer en SMART waste management voor gemeenten en organisaties door heel Nederland.</p>
        <div style="margin-top:1.25rem;display:flex;flex-direction:column;gap:0.5rem">
          <a href="tel:+31643125245" class="ba-footer-contact-item" style="margin:0">
            <?php echo ba_icon( 'phone', 15 ); ?>
            +31 (6) 431 25 245
          </a>
          <a href="mailto:info@b-advice.info" class="ba-footer-contact-item" style="margin:0">
            <?php echo ba_icon( 'mail', 15 ); ?>
            info@b-advice.info
          </a>
        </div>
      </div>

      <!-- Navigation -->
      <div class="ba-footer-section">
        <h4>Navigatie</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/over-ons' ) ); ?>">Over ons</a></li>
          <li><a href="<?php echo esc_url( home_url( '/diensten' ) ); ?>">Diensten</a></li>
          <li><a href="<?php echo esc_url( home_url( '/b-organized' ) ); ?>">B-Organized</a></li>
          <li><a href="<?php echo esc_url( home_url( '/bestellingen' ) ); ?>">Bestellingen</a></li>
          <li><a href="<?php echo esc_url( home_url( '/nieuws' ) ); ?>">Nieuws</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="ba-footer-section">
        <h4>Adres</h4>
        <div class="ba-footer-contact-item">
          <?php echo ba_icon( 'map-pin', 15 ); ?>
          <span>Achterdijk 26<br>Nieuwland (UT)<br>Nederland</span>
        </div>
        <div style="margin-top:1.5rem">
          <h4 style="margin-bottom:0.75rem">KVK</h4>
          <p style="font-size:0.875rem;color:rgba(255,255,255,0.6)">B-Advice Nederland<br>Afvaladvies &amp; containerbeheer</p>
        </div>
      </div>

      <!-- B-Organized -->
      <div class="ba-footer-section ba-footer-borganized">
        <h4>B-Organized</h4>
        <p>Direct toegang tot uw beheerplatform voor containerparkbeheer, ordermanagement en rapportages.</p>
        <a href="https://b-organized.info/login" target="_blank" rel="noopener noreferrer" class="ba-btn ba-btn-green ba-btn-sm">
          Login B-Organized <?php echo ba_icon( 'arrow-right', 14 ); ?>
        </a>
        <div style="margin-top:1.5rem">
          <a href="<?php echo esc_url( home_url( '/b-organized' ) ); ?>" style="font-size:0.8125rem;color:rgba(255,255,255,0.5);display:flex;align-items:center;gap:0.25rem;transition:color 0.2s" onmouseover="this.style.color='var(--green)'" onmouseout="this.style.color='rgba(255,255,255,0.5)'">
            Meer over B-Organized <?php echo ba_icon( 'arrow-right', 12 ); ?>
          </a>
        </div>
      </div>

    </div>

    <!-- Bottom bar -->
    <div class="ba-footer-bottom">
      <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> B-Advice. Alle rechten voorbehouden.</p>
      <div class="ba-footer-bottom-links">
        <a href="<?php echo esc_url( home_url( '/privacybeleid' ) ); ?>">Privacybeleid</a>
        <a href="<?php echo esc_url( home_url( '/cookiebeleid' ) ); ?>">Cookiebeleid</a>
      </div>
    </div>
  </div>
</footer>

<!-- FLOATING CONTACT BUTTON -->
<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-float-btn" aria-label="Contact opnemen">
  <?php echo ba_icon( 'phone', 22 ); ?>
</a>

<!-- COOKIE CONSENT -->
<div class="ba-cookie" id="ba-cookie">
  <p>
    Wij gebruiken cookies om uw ervaring te verbeteren. Lees meer in ons
    <a href="<?php echo esc_url( home_url( '/cookiebeleid' ) ); ?>">cookiebeleid</a>.
  </p>
  <div class="ba-cookie-btns">
    <button class="ba-cookie-decline" id="ba-cookie-decline">Weigeren</button>
    <button class="ba-cookie-accept" id="ba-cookie-accept">Accepteren</button>
  </div>
</div>

<script>
(function () {
  /* ---- Mobile nav ---- */
  var toggle    = document.getElementById('ba-nav-toggle');
  var mobileNav = document.getElementById('ba-nav-mobile');
  if (toggle && mobileNav) {
    toggle.addEventListener('click', function () {
      var open = mobileNav.classList.toggle('open');
      toggle.classList.toggle('open', open);
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  /* ---- Scrolled navbar ---- */
  var navbar = document.getElementById('ba-navbar');
  if (navbar) {
    function onScroll() {
      navbar.classList.toggle('scrolled', window.scrollY > 30);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ---- Cookie consent ---- */
  var cookieBar = document.getElementById('ba-cookie');
  var cookieKey = 'ba_cookie_consent';
  if (cookieBar) {
    if (localStorage.getItem(cookieKey)) {
      cookieBar.classList.add('hidden');
    }
    document.getElementById('ba-cookie-accept').addEventListener('click', function () {
      localStorage.setItem(cookieKey, 'accepted');
      cookieBar.classList.add('hidden');
    });
    document.getElementById('ba-cookie-decline').addEventListener('click', function () {
      localStorage.setItem(cookieKey, 'declined');
      cookieBar.classList.add('hidden');
    });
  }

  /* ---- Scroll animations ---- */
  var animEls = document.querySelectorAll('.ba-animate');
  if ('IntersectionObserver' in window && animEls.length) {
    var obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          obs.unobserve(e.target);
        }
      });
    }, { threshold: 0.08 });
    animEls.forEach(function (el) { obs.observe(el); });
  } else {
    animEls.forEach(function (el) { el.classList.add('visible'); });
  }

  /* ---- Counter animation for stats ---- */
  function animateCounter(el) {
    var target  = parseFloat(el.dataset.count);
    var suffix  = el.dataset.suffix || '';
    var duration = 1400;
    var start   = null;
    function step(ts) {
      if (!start) start = ts;
      var progress = Math.min((ts - start) / duration, 1);
      var ease = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.floor(ease * target) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var statNums = document.querySelectorAll('[data-count]');
  if ('IntersectionObserver' in window && statNums.length) {
    var statsObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          animateCounter(e.target);
          statsObs.unobserve(e.target);
        }
      });
    }, { threshold: 0.5 });
    statNums.forEach(function (el) { statsObs.observe(el); });
  }
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
