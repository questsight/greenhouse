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
if ($_REQUEST['form']) {
if (in_array("arochnaya", $_REQUEST['form'])) { $s11 = 'checked'; }
if (in_array("kaplya", $_REQUEST['form'])) { $s12 = 'checked'; }
if (in_array("dvuhskatnyie", $_REQUEST['form'])) { $s13 = 'checked'; }}
if ($_REQUEST['purpose']) {
if (in_array("otsinkovannyie", $_REQUEST['purpose'])) { $s14 = 'checked'; }
if (in_array("ysilennie", $_REQUEST['purpose'])) { $s15 = 'checked'; }
if (in_array("dlyadachi", $_REQUEST['purpose'])) { $s16 = 'checked'; }
if (in_array("dlyasada", $_REQUEST['purpose'])) { $s17 = 'checked'; }}
if ($_REQUEST['maker']) {
if (in_array("belarus", $_REQUEST['maker'])) { $s18 = 'checked'; }
if (in_array("novyieformyi", $_REQUEST['maker'])) { $s19 = 'checked'; }}
?> 
            <aside class="section sidebar">
              <form class="sidebar__filter filter" method="get" action="<?php echo get_category_link(2); ?>">
                <div class="filter__title">Теплицы</div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="cat[]" value="4" onchange="this.form.submit()" <?=$s1?>></span><span class="filter__label">Белорусочка</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="cat[]" value="5" onchange="this.form.submit()" <?=$s2?>></span><span class="filter__label">Белорусочка Усиленная</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="cat[]" value="6" onchange="this.form.submit()" <?=$s3?>></span><span class="filter__label">Белорусочка Монолит</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="cat[]" value="7" onchange="this.form.submit()" <?=$s4?>></span><span class="filter__label">Кремлевская Цинк (2,5 м)</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="cat[]" value="8" onchange="this.form.submit()" <?=$s5?>></span><span class="filter__label">Кремлевская Цинк (3 м)</span></div>
                <div class="filter__title">Размер</div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="size[]" value="3x4" onchange="this.form.submit()" <?=$s6?>></span><span class="filter__label">3 X 4</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="size[]" value="3x6" onchange="this.form.submit()" <?=$s7?>></span><span class="filter__label">3 X 6</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="size[]" value="3x8" onchange="this.form.submit()" <?=$s8?>></span><span class="filter__label">3 X 8</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="size[]" value="3x10" onchange="this.form.submit()" <?=$s9?>></span><span class="filter__label">3 X 10</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="size[]" value="mini" onchange="this.form.submit()" <?=$s10?>></span><span class="filter__label">мини</span></div>
                <div class="filter__title">Форма</div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="form[]" value="arochnaya" onchange="this.form.submit()" <?=$s11?>></span><span class="filter__label">Арочные</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="form[]" value="kaplya" onchange="this.form.submit()" <?=$s12?>></span><span class="filter__label">В форме капли</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="form[]" value="dvuhskatnyie" onchange="this.form.submit()" <?=$s13?>></span><span class="filter__label">Двухскатные</span></div>
                <div class="filter__title">Назначение</div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="purpose[]" value="otsinkovannyie" onchange="this.form.submit()" <?=$s14?>></span><span class="filter__label">Оцинкованные</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="purpose[]" value="ysilennie" onchange="this.form.submit()" <?=$s15?>></span><span class="filter__label">Усиленные</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="purpose[]" value="dlyadachi" onchange="this.form.submit()" <?=$s16?>></span><span class="filter__label">Для дачи</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="purpose[]" value="dlyasada" onchange="this.form.submit()" <?=$s17?>></span><span class="filter__label">Для сада</span></div>
                <div class="filter__title">Производитель</div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="maker[]" value="belarus" onchange="this.form.submit()" <?=$s18?>></span><span class="filter__label">Республика Беларусь</span></div>
                <div class="filter__one"><span class="filter__input">
                    <input type="checkbox" name="maker[]" value="novyieformyi" onchange="this.form.submit()" <?=$s19?>></span><span class="filter__label">«Новые формы»</span></div>
              </form>
            </aside>