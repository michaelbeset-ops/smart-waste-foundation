</main><!-- /.ba-main -->

<!-- FOOTER -->
<footer class="ba-footer">
  <div class="ba-container">
    <div class="ba-footer-inner">

      <!-- Brand -->
      <div class="ba-footer-brand">
        <h3>B-Advice</h3>
        <p>Uw specialist in afvalinzameling, containerbeheer en SMART waste management oplossingen voor gemeenten en organisaties.</p>
      </div>

      <!-- Navigation -->
      <div class="ba-footer-section">
        <h4>Navigatie</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/over-ons' ) ); ?>">Over ons</a></li>
          <li><a href="<?php echo esc_url( home_url( '/diensten' ) ); ?>">Diensten</a></li>
          <li><a href="<?php echo esc_url( home_url( '/b-organized' ) ); ?>">B-Organized</a></li>
          <li><a href="<?php echo esc_url( home_url( '/nieuws' ) ); ?>">Nieuws</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="ba-footer-section">
        <h4>Contact</h4>
        <div class="ba-footer-contact-item">
          <?php echo ba_icon( 'mail', 16 ); ?>
          <a href="mailto:info@b-advice.info">info@b-advice.info</a>
        </div>
        <div class="ba-footer-contact-item">
          <?php echo ba_icon( 'phone', 16 ); ?>
          <a href="tel:+31643125245">+31 (6) 431 25 245</a>
        </div>
        <div class="ba-footer-contact-item">
          <?php echo ba_icon( 'map-pin', 16 ); ?>
          <span>Achterdijk 26, Nieuwland (UT)</span>
        </div>
      </div>

      <!-- B-Organized -->
      <div class="ba-footer-section ba-footer-borganized">
        <h4>B-Organized</h4>
        <p>Direct toegang tot uw beheerplatform voor inzamelmiddelen.</p>
        <a href="https://b-organized.info/login" target="_blank" rel="noopener noreferrer" class="ba-btn ba-btn-green ba-btn-sm">
          Login B-Organized
        </a>
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
  // ---- Mobile nav ----
  var toggle   = document.getElementById('ba-nav-toggle');
  var mobileNav = document.getElementById('ba-nav-mobile');
  if (toggle && mobileNav) {
    toggle.addEventListener('click', function () {
      var open = mobileNav.classList.toggle('open');
      toggle.classList.toggle('open', open);
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  // ---- Scrolled navbar ----
  var navbar = document.getElementById('ba-navbar');
  if (navbar) {
    function onScroll() {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ---- Cookie consent ----
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

  // ---- Scroll animations ----
  var animEls = document.querySelectorAll('.ba-animate');
  if ('IntersectionObserver' in window && animEls.length) {
    var obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          obs.unobserve(e.target);
        }
      });
    }, { threshold: 0.1 });
    animEls.forEach(function (el) { obs.observe(el); });
  } else {
    animEls.forEach(function (el) { el.classList.add('visible'); });
  }
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
