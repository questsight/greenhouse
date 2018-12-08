<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
  </head>
  <body class="body">
    <div class="site">
      <header class="site__header header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-10 col-sm-6 col-lg-3">
              <div class="header__col">
                <div class="header__phone text-center">
                  <div class="top-phone top-phone_view_theme"><i class="fa fa-mobile" aria-hidden="true"></i><?php echo get_theme_mod('example_phone', ''); ?></div>
                </div>
              </div>
            </div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-6" id="navigation__box">
              <div class="header__col">
                <div class="header__navigation">
                  <nav class="navigation" id="navigation">
                    <?php
                      wp_nav_menu( array(
                        'theme_location' => 'header',
                        'container'      => false,
                        'menu_id'        => 'navigation__list',
                        'menu_class'     => 'navigation__list navigation__hidden',
                      ) );
                    ?>
                  </nav>
                </div>
              </div>
            </div>
            <div class="hidden-xs col-sm-5 col-lg-3">
              <div class="header__col">
                <div class="header__email text-center">
                  <div class="top-phone top-phone_view_theme"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_theme_mod('example_email', ''); ?></div>
                </div>
              </div>
            </div>
            <div class="col-xs-2 col-sm-1 hidden-lg" id="hamburger__box">
              <div class="header__col">
                <div class="header__hamburger text-right">
                  <div class="hamburger" id="hamburger">
                    <div class="hamburger__item"></div>
                    <div class="hamburger__item"></div>
                    <div class="hamburger__item"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="site__content content">