<?php
/**
 * WooCommerce Single Product - B-Advice styled template
 */
defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
?>

<?php
// Breadcrumb
woocommerce_breadcrumb();
?>

<div class="ba-section">
  <div class="ba-container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php wc_get_template_part( 'content', 'single-product' ); ?>
    <?php endwhile; ?>
  </div>
</div>

<?php get_footer( 'shop' ); ?>
