<?php get_header(); ?>

<!-- HERO -->
<section class="ba-page-hero">
  <div class="ba-container">
    <h1>Onze Diensten</h1>
    <p>Van advies tot uitvoering, van aanbesteding tot beheer. B-Advice ondersteunt gemeenten en organisaties bij elk aspect van afvalinzameling en containermanagement.</p>
  </div>
</section>

<!-- SERVICES GRID -->
<section class="ba-section">
  <div class="ba-container">
    <div class="ba-grid-4 ba-stagger">

      <a href="#" class="ba-card ba-animate" style="text-decoration:none">
        <div class="ba-card-icon"><?php echo ba_icon( 'trash2', 24 ); ?></div>
        <h3>Afvalinzameling &amp; Management</h3>
        <p>Advies en begeleiding bij de volledige afvalinzameling. Van strategie tot uitvoering.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

      <a href="#" class="ba-card ba-animate" style="text-decoration:none">
        <div class="ba-card-icon"><?php echo ba_icon( 'map-pin', 24 ); ?></div>
        <h3>Plaatsen afval inzamelmiddelen</h3>
        <p>Projectbegeleiding bij het plaatsen van bovengrondse en ondergrondse containers.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

      <a href="#" class="ba-card ba-animate" style="text-decoration:none">
        <div class="ba-card-icon"><?php echo ba_icon( 'clipboard-list', 24 ); ?></div>
        <h3>Projectmanagement</h3>
        <p>Ervaren projectmanagement voor gemeentelijke afvalprojecten van A tot Z.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

      <a href="#" class="ba-card ba-animate" style="text-decoration:none">
        <div class="ba-card-icon"><?php echo ba_icon( 'bar-chart3', 24 ); ?></div>
        <h3>Meerjaren investeringsplan (MIP)</h3>
        <p>Strategische planning en budgettering voor uw containerpark op de lange termijn.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

      <a href="#" class="ba-card ba-animate" style="text-decoration:none">
        <div class="ba-card-icon"><?php echo ba_icon( 'wrench', 24 ); ?></div>
        <h3>Beheer, onderhoud &amp; refurbish</h3>
        <p>Levensduurverlenging van uw inzamelmiddelen door professioneel onderhoud en refurbishment.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

      <a href="#" class="ba-card ba-animate" style="text-decoration:none">
        <div class="ba-card-icon"><?php echo ba_icon( 'file-text', 24 ); ?></div>
        <h3>Aanbesteding &amp; bestek</h3>
        <p>Ondersteuning bij aanbestedingstrajecten en het opstellen van bestekken.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

      <a href="#" class="ba-card ba-animate" style="text-decoration:none">
        <div class="ba-card-icon"><?php echo ba_icon( 'message-square', 24 ); ?></div>
        <h3>Bewonersparticipatie &amp; Communicatie</h3>
        <p>Effectieve communicatie met bewoners bij afvalprojecten en wijzigingen.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

      <a href="<?php echo esc_url( home_url( '/b-organized' ) ); ?>" class="ba-card ba-card-dark ba-animate" style="text-decoration:none">
        <div class="ba-card-icon" style="background:rgba(58,170,110,0.2)"><?php echo ba_icon( 'monitor', 24 ); ?></div>
        <h3>B-Organized</h3>
        <p>Ons SMART platform voor het beheren van al uw inzamelmiddelen. Real-time overzicht en rapportages.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="ba-section ba-bg-secondary">
  <div class="ba-container">
    <div class="ba-cta ba-animate" style="--white:var(--foreground)">
      <h2 style="color:var(--foreground)">Neem gerust contact op</h2>
      <p style="color:var(--muted)">Voor meer informatie of een vrijblijvend kennismakingsgesprek.</p>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-accent">
        Contact opnemen <?php echo ba_icon( 'arrow-right', 18 ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
