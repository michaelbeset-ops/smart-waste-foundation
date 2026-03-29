<?php
$form_result = null;
if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['ba_contact_nonce'] ) ) {
    $form_result = b_advice_handle_contact_form();
}
get_header();
?>

<!-- HERO -->
<section class="ba-page-hero">
  <div class="ba-container">
    <h1>Contact</h1>
    <p>Heeft u een vraag of wilt u een vrijblijvend kennismakingsgesprek? Neem gerust contact met ons op.</p>
  </div>
</section>

<section class="ba-section">
  <div class="ba-container">
    <div class="ba-grid-2">

      <!-- Contact form -->
      <div class="ba-animate">
        <h2 style="font-size:1.5rem;font-weight:700;margin-bottom:2rem">Stuur ons een bericht</h2>

        <?php if ( 'success' === $form_result ) : ?>
          <div class="ba-alert ba-alert-success">
            Bedankt voor uw bericht! Wij nemen zo spoedig mogelijk contact met u op.
          </div>
        <?php elseif ( 'error' === $form_result ) : ?>
          <div class="ba-alert ba-alert-error">
            Er is iets misgegaan. Controleer uw gegevens en probeer het opnieuw.
          </div>
        <?php endif; ?>

        <form class="ba-form" method="post" action="<?php echo esc_url( get_permalink() ); ?>">
          <?php wp_nonce_field( 'ba_contact_form', 'ba_contact_nonce' ); ?>

          <div class="ba-form-group">
            <label for="naam">Naam *</label>
            <input
              type="text"
              id="naam"
              name="naam"
              required
              placeholder="Uw naam"
              value="<?php echo esc_attr( $_POST['naam'] ?? '' ); ?>"
            >
          </div>

          <div class="ba-form-group">
            <label for="email">E-mail *</label>
            <input
              type="email"
              id="email"
              name="email"
              required
              placeholder="uw@email.nl"
              value="<?php echo esc_attr( $_POST['email'] ?? '' ); ?>"
            >
          </div>

          <div class="ba-form-group">
            <label for="telefoon">Telefoon</label>
            <input
              type="tel"
              id="telefoon"
              name="telefoon"
              placeholder="+31 6 1234 5678"
              value="<?php echo esc_attr( $_POST['telefoon'] ?? '' ); ?>"
            >
          </div>

          <div class="ba-form-group">
            <label for="bericht">Bericht *</label>
            <textarea
              id="bericht"
              name="bericht"
              required
              rows="5"
              placeholder="Uw bericht..."
            ><?php echo esc_textarea( $_POST['bericht'] ?? '' ); ?></textarea>
          </div>

          <button type="submit" class="ba-btn ba-btn-accent">
            <?php echo ba_icon( 'send', 18 ); ?> Versturen
          </button>
        </form>
      </div>

      <!-- Contact info -->
      <div class="ba-animate">
        <h2 style="font-size:1.5rem;font-weight:700;margin-bottom:2rem">Contactgegevens</h2>

        <div class="ba-contact-info-item">
          <div class="ba-contact-info-icon"><?php echo ba_icon( 'mail', 20 ); ?></div>
          <div>
            <div class="ba-contact-info-label">E-mail</div>
            <div class="ba-contact-info-value">
              <a href="mailto:info@b-advice.info">info@b-advice.info</a>
            </div>
          </div>
        </div>

        <div class="ba-contact-info-item">
          <div class="ba-contact-info-icon"><?php echo ba_icon( 'phone', 20 ); ?></div>
          <div>
            <div class="ba-contact-info-label">Telefoon</div>
            <div class="ba-contact-info-value">
              <a href="tel:+31643125245">+31 (6) 431 25 245</a>
            </div>
          </div>
        </div>

        <div class="ba-contact-info-item">
          <div class="ba-contact-info-icon"><?php echo ba_icon( 'map-pin', 20 ); ?></div>
          <div>
            <div class="ba-contact-info-label">Adres</div>
            <div class="ba-contact-info-value">
              Achterdijk 26<br>Nieuwland (UT), Nederland
            </div>
          </div>
        </div>

        <!-- Map -->
        <div class="ba-map" style="margin-top:1.5rem">
          <iframe
            title="B-Advice locatie"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.5!2d5.1!3d51.95!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDU3JzAwLjAiTiA1wrAwNicwMC4wIkU!5e0!3m2!1snl!2snl!4v1"
            width="100%"
            height="300"
            style="border:0;display:block"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
