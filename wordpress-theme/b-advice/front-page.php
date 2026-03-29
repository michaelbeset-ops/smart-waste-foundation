<?php get_header(); ?>

<!-- HERO -->
<section class="ba-hero-home">
  <div class="ba-hero-home-bg">
    <img
      src="<?php echo esc_url( get_template_directory_uri() . '/images/hero-waste.jpg' ); ?>"
      alt="Ondergrondse container installatie in Nederlandse stad"
      width="1920" height="1080"
    >
    <div class="ba-hero-overlay"></div>
  </div>
  <div class="ba-container ba-hero-home-content">
    <h1>Uw afval en container specialist</h1>
    <p>SMART afvalbeheer, projectmanagement en containerregistratie voor gemeenten en organisaties in Nederland. Al meer dan 20 jaar ervaring.</p>
    <div class="ba-hero-btns">
      <a href="<?php echo esc_url( home_url( '/diensten' ) ); ?>" class="ba-btn ba-btn-primary">
        Onze Diensten <?php echo ba_icon( 'arrow-right', 18 ); ?>
      </a>
      <a href="https://b-organized.info/login" target="_blank" rel="noopener noreferrer" class="ba-btn ba-btn-green">
        Login B-Organized <?php echo ba_icon( 'arrow-right', 18 ); ?>
      </a>
    </div>
  </div>
</section>

<!-- FEATURE CARDS -->
<section class="ba-section ba-bg-secondary">
  <div class="ba-container">
    <div class="ba-grid-3 ba-stagger">

      <a href="<?php echo esc_url( home_url( '/b-organized' ) ); ?>" class="ba-card ba-animate" style="text-decoration:none">
        <div class="ba-card-icon"><?php echo ba_icon( 'monitor', 28 ); ?></div>
        <h3>B-Organized</h3>
        <p>Overzichtelijk platform om uw inzamelmiddelen te beheren. Real-time inzicht in uw containerpark.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

      <a href="<?php echo esc_url( home_url( '/diensten' ) ); ?>" class="ba-card ba-animate" style="text-decoration:none">
        <div class="ba-card-icon"><?php echo ba_icon( 'briefcase', 28 ); ?></div>
        <h3>Diensten</h3>
        <p>Thuis in de markt en van alle markten thuis. Van projectmanagement tot aanbestedingen.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

      <a href="<?php echo esc_url( home_url( '/nieuws' ) ); ?>" class="ba-card ba-animate" style="text-decoration:none">
        <div class="ba-card-icon"><?php echo ba_icon( 'newspaper', 28 ); ?></div>
        <h3>Nieuws</h3>
        <p>Altijd up to date met nieuws en innovaties uit de branche.</p>
        <span class="ba-card-link">Meer informatie <?php echo ba_icon( 'arrow-right', 14 ); ?></span>
      </a>

    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="ba-section ba-bg-navy">
  <div class="ba-container">
    <div class="ba-cta ba-animate">
      <h2>Interesse gewekt?</h2>
      <p>Neem gerust contact met ons op voor meer informatie of een vrijblijvend kennismakingsgesprek.</p>
      <div class="ba-cta-contacts">
        <a href="mailto:info@b-advice.info">
          <span class="ba-icon-accent"><?php echo ba_icon( 'mail', 18 ); ?></span>
          info@b-advice.info
        </a>
        <a href="tel:+31643125245">
          <span class="ba-icon-accent"><?php echo ba_icon( 'phone', 18 ); ?></span>
          +31 (6) 431 25 245
        </a>
        <span>
          <span class="ba-icon-accent"><?php echo ba_icon( 'map-pin', 18 ); ?></span>
          Achterdijk 26, Nieuwland
        </span>
      </div>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ba-btn ba-btn-green">
        Neem contact op <?php echo ba_icon( 'arrow-right', 18 ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
