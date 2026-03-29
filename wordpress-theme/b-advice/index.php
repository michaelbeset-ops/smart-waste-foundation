<?php get_header(); ?>

<section class="ba-section">
  <div class="ba-container">
    <?php if ( have_posts() ) : ?>
      <h1 class="ba-section-title"><?php wp_title( '' ); ?></h1>
      <div class="ba-grid-3 ba-stagger">
        <?php while ( have_posts() ) : the_post(); ?>
          <article class="ba-article ba-animate">
            <div class="ba-article-accent"></div>
            <div class="ba-article-body">
              <div class="ba-article-meta">
                <span><?php echo ba_icon( 'calendar', 12 ); ?> <?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
                <?php $cats = get_the_category();
                if ( $cats ) : ?>
                  <span><?php echo ba_icon( 'tag', 12 ); ?> <?php echo esc_html( $cats[0]->name ); ?></span>
                <?php endif; ?>
              </div>
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="ba-article-more">
                Lees meer <?php echo ba_icon( 'arrow-right', 14 ); ?>
              </a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <div style="margin-top:3rem">
        <?php the_posts_pagination(); ?>
      </div>
    <?php else : ?>
      <p>Geen berichten gevonden.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
