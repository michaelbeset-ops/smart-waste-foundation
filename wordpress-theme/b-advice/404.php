<?php get_header(); ?>

<section class="ba-section">
  <div class="ba-container">
    <div class="ba-404">
      <div>
        <div class="ba-404-code">404</div>
        <h2>Pagina niet gevonden</h2>
        <p>De pagina die u zoekt bestaat niet of is verplaatst.</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ba-btn ba-btn-green">
          <?php echo ba_icon( 'home', 18 ); ?> Terug naar home
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
