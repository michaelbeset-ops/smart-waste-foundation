<?php get_header(); ?>

<section class="ba-section">
  <div class="ba-container">
    <div class="ba-single-post">

      <a href="<?php echo esc_url( home_url( '/nieuws' ) ); ?>" class="ba-back-link">
        <?php echo ba_icon( 'arrow-left', 16 ); ?> Terug naar nieuws
      </a>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <div class="ba-post-meta">
          <span><?php echo ba_icon( 'calendar', 14 ); ?> <?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
          <?php $cats = get_the_category(); if ( $cats ) : ?>
            <span><?php echo ba_icon( 'tag', 14 ); ?> <?php echo esc_html( $cats[0]->name ); ?></span>
          <?php endif; ?>
        </div>

        <div class="ba-post-content">
          <?php the_content(); ?>
        </div>

      <?php endwhile; endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
