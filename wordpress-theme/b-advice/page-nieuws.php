<?php get_header(); ?>

<!-- HERO -->
<section class="ba-page-hero">
  <div class="ba-container">
    <h1>Nieuws</h1>
    <p>Blijf op de hoogte van het laatste nieuws, innovaties en ontwikkelingen in de afvalbranche.</p>
  </div>
</section>

<section class="ba-section">
  <div class="ba-container">

    <?php
    // Category filter links
    $categories = get_categories( [ 'hide_empty' => true ] );
    $current_cat = isset( $_GET['cat'] ) ? intval( $_GET['cat'] ) : 0;
    ?>
    <div class="ba-category-filters ba-animate">
      <a href="<?php echo esc_url( get_permalink() ); ?>"
         class="ba-category-btn <?php echo ! $current_cat ? 'active' : ''; ?>">
        Alle
      </a>
      <?php foreach ( $categories as $cat ) : ?>
        <a href="<?php echo esc_url( add_query_arg( 'cat', $cat->term_id, get_permalink() ) ); ?>"
           class="ba-category-btn <?php echo $current_cat === $cat->term_id ? 'active' : ''; ?>">
          <?php echo esc_html( $cat->name ); ?>
        </a>
      <?php endforeach; ?>
    </div>

    <?php
    $query_args = [
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'post_status'    => 'publish',
        'paged'          => max( 1, get_query_var( 'paged' ) ),
    ];
    if ( $current_cat ) {
        $query_args['cat'] = $current_cat;
    }
    $news_query = new WP_Query( $query_args );
    ?>

    <?php if ( $news_query->have_posts() ) : ?>
      <div class="ba-grid-3 ba-stagger">
        <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
          <article class="ba-article ba-animate">
            <div class="ba-article-accent"></div>
            <div class="ba-article-body">
              <div class="ba-article-meta">
                <span><?php echo ba_icon( 'calendar', 12 ); ?> <?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
                <?php $cats = get_the_category(); if ( $cats ) : ?>
                  <span><?php echo ba_icon( 'tag', 12 ); ?> <?php echo esc_html( $cats[0]->name ); ?></span>
                <?php endif; ?>
              </div>
              <h3><a href="<?php the_permalink(); ?>" style="color:inherit;text-decoration:none"><?php the_title(); ?></a></h3>
              <p><?php echo esc_html( get_the_excerpt() ); ?></p>
              <a href="<?php the_permalink(); ?>" class="ba-article-more">
                Lees meer <?php echo ba_icon( 'arrow-right', 14 ); ?>
              </a>
            </div>
          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <div style="margin-top:3rem">
        <?php
        echo paginate_links( [
            'total'   => $news_query->max_num_pages,
            'current' => max( 1, get_query_var( 'paged' ) ),
        ] );
        ?>
      </div>
    <?php else : ?>
      <p style="color:var(--muted)">Nog geen nieuwsberichten gepubliceerd. Voeg berichten toe via het WordPress dashboard.</p>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
