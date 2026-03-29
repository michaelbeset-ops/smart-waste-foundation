<?php get_header(); ?>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="ba-hero-home">
  <div class="ba-hero-home-bg">
    <img
      src="<?php echo esc_url( get_template_directory_uri() . '/images/hero-waste.jpg' ); ?>"
      alt="Ondergrondse container installatie in Nederlandse stad"
      width="1920" height="1080"
      fetchpriority="high"
    >
    <div class="ba-hero-overlay"></div>
  </div>

  <div class="ba-container ba-hero-home-content">
    <div class="ba-hero-badge">
      <span class="ba-hero-badge-dot"></span>
      Al meer dan 20 jaar marktleider in afvalbeheer
    </div>
    <h1>Uw specialist in<br>SMART afvalbeheer</h1>
    <p>Professioneel containerbeheer, projectmanagement en registratie voor gemeenten en organisaties in Nederland. Wij ontzorgen u volledig — van advies tot uitvoering.</p>
    <div class="ba-hero-btns">
      <a href="<?php echo esc_url( home_url( '/diensten' ) ); ?>" class="ba-btn ba-btn-primary">
        Bekijk onze diensten <?php echo ba_icon( 'arrow-right', 18 ); ?>
      </a>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-green">
        Gratis adviesgesprek <?php echo ba_icon( 'arrow-right', 18 ); ?>
      </a>
    </div>
  </div>

  <!-- Scroll indicator -->
  <div class="ba-hero-scroll">
    <div class="ba-hero-scroll-line"></div>
  </div>
</section>

<!-- ============================================================
     STATS STRIP
     ============================================================ -->
<section class="ba-stats-strip">
  <div class="ba-stats-grid">
    <div class="ba-stat-item ba-animate">
      <div class="ba-stat-number">20<em>+</em></div>
      <div class="ba-stat-label">Jaar ervaring</div>
    </div>
    <div class="ba-stat-item ba-animate">
      <div class="ba-stat-number">150<em>+</em></div>
      <div class="ba-stat-label">Gemeenten bediend</div>
    </div>
    <div class="ba-stat-item ba-animate">
      <div class="ba-stat-number">500<em>+</em></div>
      <div class="ba-stat-label">Projecten afgerond</div>
    </div>
    <div class="ba-stat-item ba-animate">
      <div class="ba-stat-number">100<em>%</em></div>
      <div class="ba-stat-label">Persoonlijk advies</div>
    </div>
  </div>
</section>

<!-- ============================================================
     FEATURE CARDS
     ============================================================ -->
<section class="ba-section ba-bg-secondary">
  <div class="ba-container">
    <div class="ba-section-intro ba-animate">
      <span class="ba-label">Wat wij doen</span>
      <h2>Alles voor uw afvalbeheer</h2>
      <p>Van strategie en advies tot uitvoering en digitaal beheer. B-Advice is uw vaste partner in afvalinzameling en containermanagement.</p>
    </div>

    <div class="ba-grid-3 ba-stagger">

      <a href="<?php echo esc_url( home_url( '/b-organized' ) ); ?>" class="ba-feat-card ba-animate">
        <div class="ba-feat-icon"><?php echo ba_icon( 'monitor', 30 ); ?></div>
        <h3>B-Organized platform</h3>
        <p>Real-time overzicht van al uw inzamelmiddelen. Beheer assets, bestellingen en rapportages vanuit één dashboard.</p>
        <span class="ba-feat-more">Meer informatie <?php echo ba_icon( 'arrow-right', 15 ); ?></span>
      </a>

      <a href="<?php echo esc_url( home_url( '/diensten' ) ); ?>" class="ba-feat-card ba-animate">
        <div class="ba-feat-icon"><?php echo ba_icon( 'briefcase', 30 ); ?></div>
        <h3>Advies &amp; dienstverlening</h3>
        <p>Van projectmanagement tot aanbestedingen. Wij begeleiden u door het volledige traject van afvalinzameling.</p>
        <span class="ba-feat-more">Meer informatie <?php echo ba_icon( 'arrow-right', 15 ); ?></span>
      </a>

      <a href="<?php echo esc_url( home_url( '/nieuws' ) ); ?>" class="ba-feat-card ba-animate">
        <div class="ba-feat-icon"><?php echo ba_icon( 'newspaper', 30 ); ?></div>
        <h3>Nieuws &amp; innovaties</h3>
        <p>Altijd op de hoogte van de laatste ontwikkelingen in de afvalbranche, van SMART containers tot duurzaamheid.</p>
        <span class="ba-feat-more">Naar het nieuws <?php echo ba_icon( 'arrow-right', 15 ); ?></span>
      </a>

    </div>
  </div>
</section>

<!-- ============================================================
     WAAROM B-ADVICE (USP)
     ============================================================ -->
<section class="ba-section ba-bg-white">
  <div class="ba-container">
    <div class="ba-section-intro ba-animate">
      <span class="ba-label">Waarom B-Advice?</span>
      <h2>Uw betrouwbare partner</h2>
      <p>Gemeenten en organisaties door heel Nederland kiezen B-Advice vanwege onze kennis, betrokkenheid en bewezen aanpak.</p>
    </div>

    <div class="ba-usp-grid ba-stagger">

      <div class="ba-usp-card ba-animate">
        <div class="ba-usp-num">01</div>
        <h3>Onafhankelijk advies</h3>
        <p>Wij zijn niet gebonden aan leveranciers. U krijgt altijd het eerlijkste advies dat past bij uw situatie en budget.</p>
      </div>

      <div class="ba-usp-card ba-animate">
        <div class="ba-usp-num">02</div>
        <h3>20+ jaar expertise</h3>
        <p>Diepgaande kennis van de Nederlandse afvalmarkt. Wij kennen de regelgeving, de leveranciers en de beste oplossingen.</p>
      </div>

      <div class="ba-usp-card ba-animate">
        <div class="ba-usp-num">03</div>
        <h3>Volledig ontzorgd</h3>
        <p>Van de eerste analyse tot de oplevering en het beheer erna. B-Advice staat naast u in elke fase van het project.</p>
      </div>

      <div class="ba-usp-card ba-animate">
        <div class="ba-usp-num">04</div>
        <h3>Persoonlijk contact</h3>
        <p>Altijd direct contact met een vaste adviseur die uw project kent. Geen callcenters, geen onbekende gezichten.</p>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     ONZE WERKWIJZE (PROCESS)
     ============================================================ -->
<section class="ba-section ba-bg-secondary">
  <div class="ba-container">
    <div class="ba-section-intro ba-animate">
      <span class="ba-label">Zo werken wij</span>
      <h2>Helder proces, zeker resultaat</h2>
      <p>Een gestructureerde aanpak waarbij u altijd weet waar u aan toe bent.</p>
    </div>

    <div class="ba-process-grid ba-stagger">

      <div class="ba-process-step ba-animate">
        <div class="ba-process-num">1</div>
        <h3>Kennismaking</h3>
        <p>Vrijblijvend gesprek om uw situatie, wensen en uitdagingen in kaart te brengen.</p>
      </div>

      <div class="ba-process-step ba-animate">
        <div class="ba-process-num">2</div>
        <h3>Analyse &amp; advies</h3>
        <p>Grondige analyse van uw containerpark en afvalstromen. Helder adviesrapport op maat.</p>
      </div>

      <div class="ba-process-step ba-animate">
        <div class="ba-process-num">3</div>
        <h3>Uitvoering</h3>
        <p>Professionele begeleiding van aanbesteding, plaatsing en communicatie met bewoners.</p>
      </div>

      <div class="ba-process-step ba-animate">
        <div class="ba-process-num">4</div>
        <h3>Beheer &amp; nazorg</h3>
        <p>Langdurige ondersteuning via B-Organized en persoonlijk nazorgcontact.</p>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     B-ORGANIZED SPOTLIGHT
     ============================================================ -->
<section class="ba-section ba-bg-navy">
  <div class="ba-container">
    <div class="ba-grid-2">

      <div class="ba-animate">
        <span class="ba-badge">Digitaal platform</span>
        <h2 style="color:var(--white);font-size:clamp(1.75rem,3vw,2.5rem);font-weight:800;margin-bottom:1.25rem;letter-spacing:-0.02em">
          Grip op uw containerpark met B-Organized
        </h2>
        <p style="color:rgba(255,255,255,0.75);font-size:1.0625rem;line-height:1.75;margin-bottom:2rem">
          Real-time overzicht, assetregistratie, ordermanagement en rapportages — alles op één plek. Speciaal ontwikkeld voor gemeenten en afvalbeheerders.
        </p>
        <div style="display:flex;flex-wrap:wrap;gap:1rem">
          <a href="https://b-organized.info/login" target="_blank" rel="noopener noreferrer" class="ba-btn ba-btn-green">
            Login B-Organized <?php echo ba_icon( 'arrow-right', 18 ); ?>
          </a>
          <a href="<?php echo esc_url( home_url( '/b-organized' ) ); ?>" class="ba-btn ba-btn-primary">
            Meer over het platform
          </a>
        </div>
      </div>

      <div class="ba-animate">
        <img
          src="<?php echo esc_url( get_template_directory_uri() . '/images/b-organized-dashboard.jpg' ); ?>"
          alt="B-Organized dashboard overzicht"
          class="ba-borganized-img"
          loading="lazy"
          width="1280" height="800"
        >
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     CTA / CONTACT
     ============================================================ -->
<section class="ba-section" style="background:linear-gradient(135deg,hsl(153,50%,42%) 0%,hsl(153,55%,34%) 100%)">
  <div class="ba-container">
    <div class="ba-cta ba-animate">
      <h2>Klaar voor een betere aanpak?</h2>
      <p>Plan een vrijblijvend kennismakingsgesprek en ontdek wat B-Advice voor uw gemeente of organisatie kan betekenen.</p>
      <div class="ba-cta-contacts">
        <a href="mailto:info@b-advice.info">
          <span class="ba-icon-accent" style="color:rgba(255,255,255,0.9)"><?php echo ba_icon( 'mail', 18 ); ?></span>
          info@b-advice.info
        </a>
        <a href="tel:+31643125245">
          <span class="ba-icon-accent" style="color:rgba(255,255,255,0.9)"><?php echo ba_icon( 'phone', 18 ); ?></span>
          +31 (6) 431 25 245
        </a>
        <span>
          <span style="color:rgba(255,255,255,0.9)"><?php echo ba_icon( 'map-pin', 18 ); ?></span>
          Achterdijk 26, Nieuwland
        </span>
      </div>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-navy">
        Neem contact op <?php echo ba_icon( 'arrow-right', 18 ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
