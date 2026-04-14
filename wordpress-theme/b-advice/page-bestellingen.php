<?php get_header(); ?>

<!-- SHOP HERO -->
<section class="ba-shop-hero">
  <div class="ba-container">
    <div class="ba-shop-hero-inner">
      <div class="ba-shop-hero-text">
        <span class="ba-badge">Ons assortiment</span>
        <h1>Producten &amp; Oplossingen</h1>
        <p>Professionele containersystemen, SMART waste management en servicepakketten voor gemeenten en organisaties in Nederland.</p>
        <div class="ba-shop-hero-btns">
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-green">
            Offerte aanvragen <?php echo ba_icon( 'arrow-right', 18 ); ?>
          </a>
          <a href="tel:+31643125245" class="ba-btn ba-btn-outline-white">
            <?php echo ba_icon( 'phone', 18 ); ?> Bel direct
          </a>
        </div>
      </div>
      <div class="ba-shop-hero-stats">
        <div class="ba-stat-box">
          <span class="ba-stat-number">20+</span>
          <span class="ba-stat-label">Jaar ervaring</span>
        </div>
        <div class="ba-stat-box">
          <span class="ba-stat-number">500+</span>
          <span class="ba-stat-label">Projecten</span>
        </div>
        <div class="ba-stat-box">
          <span class="ba-stat-number">100+</span>
          <span class="ba-stat-label">Gemeenten</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TRUST BAR -->
<div class="ba-trust-bar">
  <div class="ba-container">
    <div class="ba-trust-items">
      <div class="ba-trust-item">
        <?php echo ba_icon( 'truck', 18 ); ?>
        <span>Professionele installatie</span>
      </div>
      <div class="ba-trust-item">
        <?php echo ba_icon( 'wrench', 18 ); ?>
        <span>Onderhoud &amp; service</span>
      </div>
      <div class="ba-trust-item">
        <?php echo ba_icon( 'shield-check', 18 ); ?>
        <span>CE-gecertificeerd</span>
      </div>
      <div class="ba-trust-item">
        <?php echo ba_icon( 'phone', 18 ); ?>
        <span>Persoonlijk advies</span>
      </div>
    </div>
  </div>
</div>

<!-- PRODUCTS -->
<section class="ba-section">
  <div class="ba-container">

    <?php if ( function_exists( 'WC' ) ): ?>
    <!-- WooCommerce is actief: link naar de webshop -->
    <div class="ba-wc-shop-notice ba-animate">
      <div class="ba-wc-shop-notice-icon"><?php echo ba_icon( 'shopping-cart', 24 ); ?></div>
      <div>
        <h3>Onze webshop is actief!</h3>
        <p>Bekijk alle producten, voeg ze toe aan uw winkelwagen en bestel direct online.</p>
        <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="ba-btn ba-btn-green ba-btn-sm">
          Naar de webshop <?php echo ba_icon( 'arrow-right', 16 ); ?>
        </a>
      </div>
    </div>
    <?php endif; ?>

    <h2 class="ba-section-title ba-animate">Onze producten</h2>
    <p class="ba-section-intro ba-animate">Neem contact op voor een vrijblijvende offerte op maat. Prijzen zijn afhankelijk van specificaties, aantallen en locatie.</p>

    <div class="ba-product-grid ba-stagger">

      <!-- Product #1 -->
      <div class="ba-product-card ba-animate">
        <div class="ba-product-img ba-product-img--1">
          <span class="ba-product-number">#1</span>
          <?php echo ba_icon( 'package', 52 ); ?>
        </div>
        <div class="ba-product-body">
          <div class="ba-product-tags">
            <span class="ba-product-tag">Ondergronds</span>
            <span class="ba-product-tag ba-product-tag--popular">Populair</span>
          </div>
          <h3>Ondergrondse afvalcontainer</h3>
          <p>Hoogwaardige ondergrondse verzamelcontainer voor restafval, papier, glas of GFT. Capaciteit: 3 – 5 m³. Geschikt voor woonwijken en openbare ruimte.</p>
          <ul class="ba-product-specs">
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Volume: 3 m³ / 5 m³</li>
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Materiaal: HDPE / staal</li>
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Inclusief kader &amp; deksel</li>
          </ul>
          <div class="ba-product-price-row">
            <div class="ba-product-price">Op aanvraag</div>
          </div>
          <div class="ba-product-actions">
            <?php if ( function_exists( 'WC' ) ): ?>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="ba-btn ba-btn-green ba-btn-sm">
              <?php echo ba_icon( 'shopping-cart', 15 ); ?> Bestellen
            </a>
            <?php endif; ?>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-outline ba-btn-sm">
              Offerte aanvragen
            </a>
          </div>
        </div>
      </div>

      <!-- Product #2 -->
      <div class="ba-product-card ba-animate">
        <div class="ba-product-img ba-product-img--2">
          <span class="ba-product-number">#2</span>
          <?php echo ba_icon( 'settings', 52 ); ?>
        </div>
        <div class="ba-product-body">
          <div class="ba-product-tags">
            <span class="ba-product-tag">Installatie</span>
          </div>
          <h3>Containerkader &amp; verzinkstuk</h3>
          <p>Robuust stalen kader met betonrand voor veilige inbouw van ondergrondse containers. Verkrijgbaar in standaard- en maatwerk uitvoeringen.</p>
          <ul class="ba-product-specs">
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Materiaal: verzinkt staal</li>
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Inclusief betonrandprofiel</li>
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Maatwerk mogelijk</li>
          </ul>
          <div class="ba-product-price-row">
            <div class="ba-product-price">Op aanvraag</div>
          </div>
          <div class="ba-product-actions">
            <?php if ( function_exists( 'WC' ) ): ?>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="ba-btn ba-btn-green ba-btn-sm">
              <?php echo ba_icon( 'shopping-cart', 15 ); ?> Bestellen
            </a>
            <?php endif; ?>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-outline ba-btn-sm">
              Offerte aanvragen
            </a>
          </div>
        </div>
      </div>

      <!-- Product #3 -->
      <div class="ba-product-card ba-animate">
        <div class="ba-product-img ba-product-img--3">
          <span class="ba-product-number">#3</span>
          <?php echo ba_icon( 'bar-chart3', 52 ); ?>
        </div>
        <div class="ba-product-body">
          <div class="ba-product-tags">
            <span class="ba-product-tag">SMART</span>
            <span class="ba-product-tag ba-product-tag--new">Nieuw</span>
          </div>
          <h3>SMART sensormodule</h3>
          <p>Ultrasone vulgraadsensor met 4G/NB-IoT verbinding. Koppelt direct met het B-Organized platform voor real-time monitoring en automatische meldingen.</p>
          <ul class="ba-product-specs">
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Nauwkeurigheid &lt; 2 cm</li>
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Batterijduur: 5+ jaar</li>
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> IP68 waterdicht</li>
          </ul>
          <div class="ba-product-price-row">
            <div class="ba-product-price">Op aanvraag</div>
          </div>
          <div class="ba-product-actions">
            <?php if ( function_exists( 'WC' ) ): ?>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="ba-btn ba-btn-green ba-btn-sm">
              <?php echo ba_icon( 'shopping-cart', 15 ); ?> Bestellen
            </a>
            <?php endif; ?>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-outline ba-btn-sm">
              Offerte aanvragen
            </a>
          </div>
        </div>
      </div>

      <!-- Product #4 -->
      <div class="ba-product-card ba-animate">
        <div class="ba-product-img ba-product-img--4">
          <span class="ba-product-number">#4</span>
          <?php echo ba_icon( 'wrench', 52 ); ?>
        </div>
        <div class="ba-product-body">
          <div class="ba-product-tags">
            <span class="ba-product-tag">Accessoires</span>
          </div>
          <h3>Dekselpakket &amp; invoersloten</h3>
          <p>Compleet dekselpakket inclusief inworpopening, antivandaal vergrendeling en RVS bovenblad. Beschikbaar voor alle gangbare containermerken.</p>
          <ul class="ba-product-specs">
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> RVS bovenblad</li>
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Antivandaal slot</li>
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Alle fracties verkrijgbaar</li>
          </ul>
          <div class="ba-product-price-row">
            <div class="ba-product-price">Op aanvraag</div>
          </div>
          <div class="ba-product-actions">
            <?php if ( function_exists( 'WC' ) ): ?>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="ba-btn ba-btn-green ba-btn-sm">
              <?php echo ba_icon( 'shopping-cart', 15 ); ?> Bestellen
            </a>
            <?php endif; ?>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-outline ba-btn-sm">
              Offerte aanvragen
            </a>
          </div>
        </div>
      </div>

      <!-- Product #5 -->
      <div class="ba-product-card ba-animate">
        <div class="ba-product-img ba-product-img--5">
          <span class="ba-product-number">#5</span>
          <?php echo ba_icon( 'clipboard-list', 52 ); ?>
        </div>
        <div class="ba-product-body">
          <div class="ba-product-tags">
            <span class="ba-product-tag">Service</span>
          </div>
          <h3>Jaarlijks onderhoudspakket</h3>
          <p>Compleet onderhoudspakket inclusief jaarlijkse inspectie, reiniging, smering en rapportage. Houd uw containerpark altijd in optimale conditie.</p>
          <ul class="ba-product-specs">
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> 1× jaarlykse inspectie</li>
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Reiniging &amp; smering</li>
            <li><?php echo ba_icon( 'check-circle', 14 ); ?> Digitale rapportage</li>
          </ul>
          <div class="ba-product-price-row">
            <div class="ba-product-price">Op aanvraag</div>
          </div>
          <div class="ba-product-actions">
            <?php if ( function_exists( 'WC' ) ): ?>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="ba-btn ba-btn-green ba-btn-sm">
              <?php echo ba_icon( 'shopping-cart', 15 ); ?> Bestellen
            </a>
            <?php endif; ?>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-outline ba-btn-sm">
              Offerte aanvragen
            </a>
          </div>
        </div>
      </div>

    </div><!-- /.ba-product-grid -->
  </div>
</section>

<!-- OFFERTE CTA -->
<section class="ba-section ba-bg-navy">
  <div class="ba-container">
    <div class="ba-cta ba-animate">
      <h2>Offerte op maat</h2>
      <p>Wij adviseren u graag over de beste oplossing voor uw gemeente of organisatie. Neem contact op voor een vrijblijvend gesprek.</p>
      <div class="ba-cta-contacts">
        <a href="mailto:info@b-advice.info">
          <span class="ba-icon-accent"><?php echo ba_icon( 'mail', 18 ); ?></span>
          info@b-advice.info
        </a>
        <a href="tel:+31643125245">
          <span class="ba-icon-accent"><?php echo ba_icon( 'phone', 18 ); ?></span>
          +31 (6) 431 25 245
        </a>
      </div>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-green">
        Stuur ons een bericht <?php echo ba_icon( 'arrow-right', 18 ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
