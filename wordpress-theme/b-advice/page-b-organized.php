<?php get_header(); ?>

<!-- HERO -->
<section class="ba-page-hero">
  <div class="ba-container">
    <div class="ba-grid-2">
      <div>
        <span class="ba-badge">Ons platform</span>
        <h1>B-Organized</h1>
        <p>Het SMART beheerplatform voor afvalinzamelmiddelen. Krijg real-time overzicht, beheer uw assets en optimaliseer uw containerpark — alles vanuit één overzichtelijk dashboard.</p>
        <a href="https://b-organized.info/login" target="_blank" rel="noopener noreferrer" class="ba-btn ba-btn-green" style="margin-top:2rem;font-size:1.125rem">
          Login op B-Organized <?php echo ba_icon( 'arrow-right', 20 ); ?>
        </a>
      </div>
      <div class="ba-animate">
        <img
          src="<?php echo esc_url( get_template_directory_uri() . '/images/b-organized-dashboard.jpg' ); ?>"
          alt="B-Organized dashboard"
          class="ba-borganized-img"
          loading="lazy"
          width="1280" height="800"
        >
      </div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="ba-section">
  <div class="ba-container">
    <h2 class="ba-section-title-center ba-animate">Wat biedt B-Organized?</h2>
    <div class="ba-grid-4 ba-stagger">

      <div class="ba-feature-center ba-animate">
        <div class="ba-card-icon"><?php echo ba_icon( 'layout-dashboard', 28 ); ?></div>
        <h3>Real-time overzicht</h3>
        <p>Compleet inzicht in al uw inzamelmiddelen op één centraal dashboard.</p>
      </div>

      <div class="ba-feature-center ba-animate">
        <div class="ba-card-icon"><?php echo ba_icon( 'package', 28 ); ?></div>
        <h3>Assetregistratie</h3>
        <p>Volledige registratie en tracking van containers, ondergrondse systemen en meer.</p>
      </div>

      <div class="ba-feature-center ba-animate">
        <div class="ba-card-icon"><?php echo ba_icon( 'clipboard-list', 28 ); ?></div>
        <h3>Ordermanagement</h3>
        <p>Beheer bestellingen, plaatsingen en onderhoud vanuit één platform.</p>
      </div>

      <div class="ba-feature-center ba-animate">
        <div class="ba-card-icon"><?php echo ba_icon( 'bar-chart3', 28 ); ?></div>
        <h3>Rapportages</h3>
        <p>Uitgebreide rapportages en analyses voor onderbouwde besluitvorming.</p>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="ba-section ba-bg-accent">
  <div class="ba-container">
    <div class="ba-cta ba-animate">
      <h2>Klaar om te starten?</h2>
      <p>Log direct in op B-Organized en krijg grip op uw containerpark.</p>
      <a href="https://b-organized.info/login" target="_blank" rel="noopener noreferrer" class="ba-btn ba-btn-navy">
        Login B-Organized <?php echo ba_icon( 'arrow-right', 18 ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
