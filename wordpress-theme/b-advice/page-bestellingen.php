<?php get_header(); ?>

<!-- HERO -->
<section class="ba-page-hero">
  <div class="ba-container">
    <h1>Bestellingen</h1>
    <p>Bestel containersystemen, onderdelen en apparatuur. Neem contact op voor een offerte op maat of bekijk onze productcategorieën.</p>
  </div>
</section>

<!-- PRODUCT CATEGORIES -->
<section class="ba-section">
  <div class="ba-container">
    <h2 class="ba-section-title ba-animate">Productcategorieën</h2>
    <div class="ba-grid-3 ba-stagger">

      <div class="ba-product-cat ba-animate">
        <div class="ba-product-cat-icon"><?php echo ba_icon( 'package', 24 ); ?></div>
        <h3>Ondergrondse containers</h3>
      </div>

      <div class="ba-product-cat ba-animate">
        <div class="ba-product-cat-icon"><?php echo ba_icon( 'package', 24 ); ?></div>
        <h3>Bovengrondse containers</h3>
      </div>

      <div class="ba-product-cat ba-animate">
        <div class="ba-product-cat-icon"><?php echo ba_icon( 'package', 24 ); ?></div>
        <h3>Minicontainers</h3>
      </div>

      <div class="ba-product-cat ba-animate">
        <div class="ba-product-cat-icon"><?php echo ba_icon( 'package', 24 ); ?></div>
        <h3>Afvaleilanden</h3>
      </div>

      <div class="ba-product-cat ba-animate">
        <div class="ba-product-cat-icon"><?php echo ba_icon( 'package', 24 ); ?></div>
        <h3>Accessoires &amp; onderdelen</h3>
      </div>

      <div class="ba-product-cat ba-animate">
        <div class="ba-product-cat-icon"><?php echo ba_icon( 'package', 24 ); ?></div>
        <h3>Refurbished containers</h3>
      </div>

    </div>

    <!-- Offerte box -->
    <div class="ba-offerte ba-animate">
      <h3>Offerte aanvragen</h3>
      <p>Neem contact op voor een vrijblijvende offerte op maat. Wij adviseren u graag over de beste oplossing voor uw situatie.</p>
      <div class="ba-offerte-contacts">
        <a href="mailto:info@b-advice.info">
          <?php echo ba_icon( 'mail', 18 ); ?> info@b-advice.info
        </a>
        <a href="tel:+31643125245">
          <?php echo ba_icon( 'phone', 18 ); ?> +31 (6) 431 25 245
        </a>
      </div>
      <a href="https://b-organized.info/login" target="_blank" rel="noopener noreferrer" class="ba-btn ba-btn-green" style="font-size:0.875rem;padding:0.75rem 1.5rem">
        Bestellen via B-Organized <?php echo ba_icon( 'arrow-right', 16 ); ?>
      </a>
    </div>

  </div>
</section>

<?php get_footer(); ?>
