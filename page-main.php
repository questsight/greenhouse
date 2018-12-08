<?php get_header(); ?>

        <div class="container">
          <div class="row">
            <div class="col-xs-5 col-sm-4">
              <div class="logo"><?php the_custom_logo(); ?></div>     
            </div>
            <div class="col-xs-7 col-sm-8 text-center">
              <h1 class="main__title"><?php bloginfo('description'); ?></h1>
            </div>
          </div>
        </div>
        <main class="section main">
          <div class="main__slider"><?php echo do_shortcode('[smartslider3 slider=2]');?></div>
        </main>
        <section class="section center">
          <div class="section__header center__header">
            <div class="wrapper text-center">
              <h2 class="section__title center__title"><?php echo CFS()->get( 'main-title' );?></h2>
            </div>
          </div>
          <div class="section__content center__content">
            <div class="center__one">
              <div class="center__right"></div>
              <div class="wrapper">
                <div class="center__cell center__cell_float_left">
                  <div class="center__description center__description_position_left" id="center-text"><?php echo CFS()->get( 'main-text' );?></div>
                </div>
                <div class="center__cell center__cell_float_left hidden-xs">
                  <div class="center__image parallax-window" data-parallax="scroll" id="center-img" data-image-src="<?php echo CFS()->get( 'main-img' );?>">
                    <div class="center__overlay" id="center-overlay">
                      <div class="center__border"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section benefit">
          <div class="section__header benefit__header">
            <div class="wrapper text-center">
              <h2 class="section__title benefit__title"><?php echo CFS()->get( 'benefit-title' );?></h2>
            </div>
          </div>
          <div class="section__content benefit__content">
            <div class="wrapper">
              <?php
              $fields = CFS()->get( 'benefit-loop' );
              foreach ( $fields as $field ) { ?>
              <div class="benefit__cell">
                <div class="benefit__one">
                  <div class="benefit__photo">
                    <div class="frame benefit__frame"><img src="<?php echo $field['benefit-img'];?>"></div>
                  </div>
                  <div class="description benefit__description text-center"><?php echo $field['benefit-text'];?></div>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        </section>
        <section class="section center">
          <div class="section__header center__header">
            <div class="wrapper text-center">
              <h2 class="section__title center__title"><?php echo CFS()->get( 'choice-title' );?></h2>
            </div>
          </div>
          <div class="section__content center__content">
            <div class="center__one">
              <div class="center__left"></div>
              <div class="wrapper">
                <div class="center__cell center__cell_float_left hidden-xs">
                  <div class="center__image parallax-window" data-parallax="scroll" id="choice-img" data-image-src="<?php echo CFS()->get( 'choice-img' );?>">
                    <div class="center__overlay" id="choice-overlay">
                      <div class="center__border"></div>
                    </div>
                  </div>
                </div>
                <div class="center__cell center__cell_float_left">
                  <div class="center__description center__description_position_left" id="choice-text"><?php echo CFS()->get( 'choice-text' );?></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section call">
          <div class="section__content center__content">
            <div class="conteiner">
              <div class="row">
                <div class="col-xs-12 col-sm-8 text-center">
                  <p>Для получения консультации специалиста свяжитесь с </p>
                  <p>нами по телефону <?php echo get_theme_mod('example_phone', ''); ?> или оставьте заявку на сайте</p>
                </div>
                <div class="col-xs-12 col-sm-4">
                  <div class="button-group">
                    <button id="button__modal" class="button button_bg_accent button_size_large">Заказать звонок</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section brand">
        <?php
        $fields = CFS()->get( 'brand-loop' );
        foreach ( $fields as $field ) { ?>
          <img src="<?php echo $field['brand-img'];?>">
        <?php }?>
        </section>

<?php get_footer(); ?>