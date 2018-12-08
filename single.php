<?php get_header();?>

        <div class="conteiner">
          <div class="hidden-xs col-sm-4 col-md-3 col-lg-3"><?php get_sidebar(); ?></div>
          <div class="col-xs-12 col-sm-8 col-md-9 col-lg-8">
            <section id="post-<?php the_ID(); ?>" class="section single">
              <div class="section__header single__header">
                <div class="section__title page__title"><?php the_title(); ?></div>
              </div>
              <div class="section__content single__content">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="single__slider">
                      <div class="slider-for">
                      <?php
                      $fields = CFS()->get( 'img-loop' );
                      foreach ( $fields as $field ) { ?>
                        <img src="<?php echo $field['img-one'];?>">
                      <?php }?>
                      </div>
                      <div class="slider-nav">
                      <?php
                      $fields = CFS()->get( 'img-loop' );
                      foreach ( $fields as $field ) { ?>
                        <img src="<?php echo $field['img-one'];?>">
                      <?php }?>
                      </div>
                      <div class="single__price"><?php echo CFS()->get( 'price' );?> руб.</div>
                    </div>
                  </div>
                  <div class="col-sm-6"><?php while (have_posts()) : the_post(); the_content(); endwhile;?></div>
                  <div class="col-xs-12">
                  <div class="contacts__form center-block"><?php echo do_shortcode( '[contact-form-7 id="120" title="Контакты"]' ); ?></div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

<?php get_footer(); ?>