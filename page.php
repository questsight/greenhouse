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
              <div class="section__content page__content">
                <div class="text-justify">
                  <?php while (have_posts()) : the_post(); the_content(); endwhile;?>
                </div>
              </div>
            </section>
          </div>
        </div>

<?php get_footer(); ?>