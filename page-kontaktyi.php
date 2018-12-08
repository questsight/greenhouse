<?php get_header(); ?>

        <div class="conteiner">
          <div class="hidden-xs col-sm-4 col-md-3 col-lg-3">
            <?php get_sidebar(); ?>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-9 col-lg-8">
            <section class="section page">
              <div class="section__header page__header">
                <div class="section__title page__title"><?php the_title(); ?></div>
              </div>
              <div class="section__content page__content contacts__content">
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <div class="contacts__one">
                      <p><?php echo get_theme_mod('example_address', ''); ?></p>
                    </div>
                    <div class="contacts__one">
                      <p><?php echo get_theme_mod('example_phone', ''); ?></p>
                    </div>
                    <div class="contacts__one"><a class="connect__email" href="mailto:<?php echo get_theme_mod('example_email', ''); ?>" target="_blank"><?php echo get_theme_mod('example_email', ''); ?></a></div>
                    <div class="contacts__form center-block"><?php echo do_shortcode( '[contact-form-7 id="120" title="Контакты"]' ); ?></div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="contacts__map">
                      <?php while (have_posts()) : the_post(); the_content(); endwhile;?>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

<?php get_footer(); ?>
