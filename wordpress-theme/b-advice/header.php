<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'ba-site-wrapper' ); ?>>
<?php wp_body_open(); ?>

<!-- NAVBAR (fixed: topbar + main nav) -->
<header class="ba-navbar" id="ba-navbar">

  <!-- Top bar with contact info -->
  <div class="ba-topbar">
    <div class="ba-container">
      <div class="ba-topbar-inner">
        <a href="tel:+31643125245">
          <?php echo ba_icon( 'phone', 13 ); ?>
          +31 (6) 431 25 245
        </a>
        <a href="mailto:info@b-advice.info">
          <?php echo ba_icon( 'mail', 13 ); ?>
          info@b-advice.info
        </a>
      </div>
    </div>
  </div>

  <!-- Main navigation -->
  <div class="ba-container">
    <div class="ba-navbar-inner">

      <!-- Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ba-logo">
        <img
          src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.svg' ); ?>"
          alt="B-Advice logo"
          width="40" height="40"
        >
        <span class="ba-logo-text">B-Advice</span>
      </a>

      <!-- Desktop navigation -->
      <nav class="ba-nav-desktop" aria-label="Primaire navigatie">
        <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( [
                'theme_location' => 'primary',
                'menu_class'     => '',
                'container'      => false,
                'depth'          => 1,
                'fallback_cb'    => false,
            ] );
        } else {
            $pages = [
                [ 'Over ons',     '/over-ons'     ],
                [ 'Diensten',     '/diensten'     ],
                [ 'B-Organized',  '/b-organized'  ],
                [ 'Bestellingen', '/bestellingen' ],
                [ 'Nieuws',       '/nieuws'       ],
                [ 'Contact',      '/contact'      ],
            ];
            echo '<ul>';
            foreach ( $pages as $p ) {
                $current = ( rtrim( $_SERVER['REQUEST_URI'] ?? '', '/' ) === $p[1] );
                printf(
                    '<li%s><a href="%s">%s</a></li>',
                    $current ? ' class="current_page_item"' : '',
                    esc_url( home_url( $p[1] ) ),
                    esc_html( $p[0] )
                );
            }
            echo '</ul>';
        }
        ?>
      </nav>

      <!-- Login button (desktop) -->
      <div class="ba-nav-login">
        <a href="https://b-organized.info/login" target="_blank" rel="noopener noreferrer" class="ba-btn-login">
          Login B-Organized
          <?php echo ba_icon( 'arrow-right', 15 ); ?>
        </a>
      </div>

      <!-- Mobile hamburger toggle -->
      <button class="ba-nav-toggle" id="ba-nav-toggle" aria-label="Menu openen" aria-expanded="false">
        <span></span>
      </button>

    </div>
  </div>

  <!-- Mobile slide-down menu -->
  <div class="ba-nav-mobile" id="ba-nav-mobile">
    <div class="ba-container">
      <nav aria-label="Mobiele navigatie">
        <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( [
                'theme_location' => 'primary',
                'menu_class'     => '',
                'container'      => false,
                'depth'          => 1,
                'fallback_cb'    => false,
            ] );
        } else {
            $pages = [
                [ 'Over ons',     '/over-ons'     ],
                [ 'Diensten',     '/diensten'     ],
                [ 'B-Organized',  '/b-organized'  ],
                [ 'Bestellingen', '/bestellingen' ],
                [ 'Nieuws',       '/nieuws'       ],
                [ 'Contact',      '/contact'      ],
            ];
            echo '<ul>';
            foreach ( $pages as $p ) {
                printf(
                    '<li><a href="%s">%s</a></li>',
                    esc_url( home_url( $p[1] ) ),
                    esc_html( $p[0] )
                );
            }
            echo '</ul>';
        }
        ?>
        <div style="padding:0 1rem 0.5rem;display:flex;flex-direction:column;gap:0.5rem">
          <a href="tel:+31643125245" style="display:flex;align-items:center;gap:0.5rem;color:rgba(255,255,255,0.7);font-size:0.875rem;padding:0.625rem 0">
            <?php echo ba_icon( 'phone', 16 ); ?> +31 (6) 431 25 245
          </a>
          <a href="https://b-organized.info/login" target="_blank" rel="noopener noreferrer" class="ba-btn-login" style="display:flex;justify-content:center;padding:0.875rem 1.25rem">
            Login B-Organized <?php echo ba_icon( 'arrow-right', 16 ); ?>
          </a>
        </div>
      </nav>
    </div>
  </div>

</header>

<main class="ba-main">
