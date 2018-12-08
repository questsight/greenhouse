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
                <div class="text-center">
                  Запрашиваемая страница не существует.<br><br> Вы можете воспользоваться основным меню сайта или<br> найти интересующий Вас товар с помощью фильтра.
                </div>
              </div>
            </section>
          </div>
        </div>

<?php get_footer(); ?>
