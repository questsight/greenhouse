<?php get_header(); ?>
<?php
if ($_REQUEST['cat']) {
if (in_array("4", $_REQUEST['cat'])) { $s1 = 'checked'; }
if (in_array("5", $_REQUEST['cat'])) { $s2 = 'checked'; }
if (in_array("6", $_REQUEST['cat'])) { $s3 = 'checked'; }
if (in_array("7", $_REQUEST['cat'])) { $s4 = 'checked'; }
if (in_array("8", $_REQUEST['cat'])) { $s5 = 'checked'; }}
if ($_REQUEST['size']) {
if (in_array("3x4", $_REQUEST['size'])) { $s6 = 'checked'; }
if (in_array("3x6", $_REQUEST['size'])) { $s7 = 'checked'; }
if (in_array("3x8", $_REQUEST['size'])) { $s8 = 'checked'; }
if (in_array("3x10", $_REQUEST['size'])) { $s9 = 'checked'; }
if (in_array("mini", $_REQUEST['size'])) { $s10 = 'checked'; }}
?> 

        <div class="conteiner">
          <div class="hidden-xs col-sm-4 col-md-3 col-lg-3"><?php get_sidebar(); ?></div>
          <div class="col-xs-12 col-sm-8 col-md-9 col-lg-8">
            <section class="section category">
              <div class="section__content category__content">
                <div class="row">
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                    <button class="button button_bg_light category__button" id="button-filter">Фильтр товаров</button>
                    <div class="category__filter" id="filter">
                      <form class="sidebar__filter filter" method="post">
                        <div class="col-xs-8">
                          <div class="filter__title">Теплицы</div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="cat[]" value="4" <?=$s1?>></span><span class="filter__label">Белорусочка</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="cat[]" value="5" <?=$s2?>></span><span class="filter__label">Белорусочка Усиленная</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="cat[]" value="6" <?=$s3?>></span><span class="filter__label">Белорусочка Монолит</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="cat[]" value="7" <?=$s4?>></span><span class="filter__label">Кремлевская Цинк (2,5 м)</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="cat[]" value="8" <?=$s5?>></span><span class="filter__label">Кремлевская Цинк (3 м)</span></div>
                        </div>
                        <div class="col-xs-4">
                          <div class="filter__title">Размер</div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="size[]" value="3x4" <?=$s6?>></span><span class="filter__label">3 X 4</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="size[]" value="3x6" <?=$s7?>></span><span class="filter__label">3 X 6</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="size[]" value="3x8" <?=$s8?>></span><span class="filter__label">3 X 8</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="size[]" value="3x10" <?=$s9?>></span><span class="filter__label">3 X 10</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="size[]" value="mini" <?=$s10?>></span><span class="filter__label">мини</span></div>
                        </div>
                        <div class="col-xs-12">
                          <button class="button button_bg_light category__button">Отфильтровать</button>
                        </div>
                      </form>
                    </div>
                  </div>
                <?php global $query_string;
                $cat = "&cat=4,5,6,7,8";
                if ($_REQUEST['cat']) {
                $cat = '&cat='.implode(',', $_REQUEST['cat']);}
                query_posts($query_string.'&orderby=meta_value_num&meta_key=price&order=ASC'.$cat);
                if ($_REQUEST && !empty($_REQUEST)) {
	               go_filter();}
                if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="col-xs-6 col-md-4">
                    <div class="category__one">
                      <div class="category__img"><img src="<?php the_post_thumbnail_url( array() ); ?>"></div>
                      <div class="category__name"><?php the_title(); ?></div>
                      <div class="category__price"><?php echo CFS()->get( 'price' );?> руб.</div><a class="button button_bg_additional" href="<?php echo get_permalink(); ?>">Подробнее</a>
                    </div>
                  </div>
                <?php endwhile; endif; ?>
                </div>
              </div>
            </section>
          </div>
        </div>

<?php get_footer(); ?>