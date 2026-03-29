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

<!-- NAVBAR -->
<header class="ba-navbar" id="ba-navbar">
  <div class="ba-container">
    <div class="ba-navbar-inner">

      <!-- Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ba-logo">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.svg' ); ?>" alt="B-Advice logo" width="36" height="36">
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
            // Fallback nav
            $pages = [
                [ 'Over ons',    '/over-ons'    ],
                [ 'Diensten',    '/diensten'    ],
                [ 'B-Organized', '/b-organized' ],
                [ 'Bestellingen','/bestellingen'],
                [ 'Nieuws',      '/nieuws'      ],
                [ 'Contact',     '/contact'     ],
            ];
            echo '<ul>';
            foreach ( $pages as $page ) {
                $is_current = ( trailingslashit( $_SERVER['REQUEST_URI'] ?? '' ) === trailingslashit( $page[1] ) );
                $class = $is_current ? ' class="current_page_item"' : '';
                printf(
                    '<li%s><a href="%s">%s</a></li>',
                    $class,
                    esc_url( home_url( $page[1] ) ),
                    esc_html( $page[0] )
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
          <?php echo ba_icon( 'arrow-right', 16 ); ?>
        </a>
      </div>

      <!-- Mobile toggle -->
      <button class="ba-nav-toggle" id="ba-nav-toggle" aria-label="Menu openen" aria-expanded="false">
        <span></span>
      </button>

    </div>
  </div>

  <!-- Mobile menu -->
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
                [ 'Over ons',    '/over-ons'    ],
                [ 'Diensten',    '/diensten'    ],
                [ 'B-Organized', '/b-organized' ],
                [ 'Bestellingen','/bestellingen'],
                [ 'Nieuws',      '/nieuws'      ],
                [ 'Contact',     '/contact'     ],
            ];
            echo '<ul>';
            foreach ( $pages as $page ) {
                printf(
                    '<li><a href="%s">%s</a></li>',
                    esc_url( home_url( $page[1] ) ),
                    esc_html( $page[0] )
                );
            }
            echo '</ul>';
        }
        ?>
        <a href="https://b-organized.info/login" target="_blank" rel="noopener noreferrer" class="ba-btn-login ba-btn-login">
          Login B-Organized <?php echo ba_icon( 'arrow-right', 16 ); ?>
        </a>
      </nav>
    </div>
  </div>
</header>

<main class="ba-main">
