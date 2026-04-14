<?php
/**
 * WooCommerce Shop Archive - B-Advice styled template
 */
defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
?>

<!-- SHOP HERO -->
<section class="ba-page-hero">
  <div class="ba-container">
    <h1><?php woocommerce_page_title(); ?></h1>
    <p>Professionele containersystemen, sensoren en servicepakketten voor gemeenten en organisaties.</p>
  </div>
</section>

<?php do_action( 'woocommerce_before_main_content' ); ?>

<div class="ba-section">
  <div class="ba-container">

    <?php if ( woocommerce_product_loop() ) : ?>

    <div class="ba-wc-shop-toolbar">
      <?php woocommerce_result_count(); ?>
      <?php woocommerce_catalog_ordering(); ?>
    </div>

    <?php woocommerce_product_loop_start(); ?>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php wc_get_template_part( 'content', 'product' ); ?>
      <?php endwhile; ?>

    <?php woocommerce_product_loop_end(); ?>

    <?php woocommerce_pagination(); ?>

    <?php else : ?>
      <?php do_action( 'woocommerce_no_products_found' ); ?>
    <?php endif; ?>

  </div>
</div>

<?php do_action( 'woocommerce_after_main_content' ); ?>

<?php get_footer( 'shop' ); ?>
