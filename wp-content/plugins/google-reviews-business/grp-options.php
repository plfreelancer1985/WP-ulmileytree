<!-- Review Options -->
<h4 class="rplg-options-toggle"><?php echo grp_i('Review Options'); ?></h4>
<div class="rplg-options" style="display:none">
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('auto_load'); ?>" name="<?php echo $this->get_field_name('auto_load'); ?>" type="checkbox" value="true" <?php checked('true', $auto_load); ?> class="form-control"/>
                <?php echo grp_i('Try to get more than 5 Google reviews'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('rating_snippet'); ?>" name="<?php echo $this->get_field_name('rating_snippet'); ?>" type="checkbox" value="true" <?php checked('true', $rating_snippet); ?> class="form-control"/>
                <?php echo grp_i('Enable Google Rich Snippets (schema.org)'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <?php echo grp_i('Pagination'); ?>
            <select id="<?php echo $this->get_field_id('pagination'); ?>" name="<?php echo $this->get_field_name('pagination'); ?>" class="form-control">
                <option value="" <?php selected('', $pagination); ?>><?php echo grp_i('Disable'); ?></option>
                <option value="10" <?php selected('10', $pagination); ?>><?php echo grp_i('10'); ?></option>
                <option value="5" <?php selected('5', $pagination); ?>><?php echo grp_i('5'); ?></option>
                <option value="4" <?php selected('4', $pagination); ?>><?php echo grp_i('4'); ?></option>
                <option value="3" <?php selected('3', $pagination); ?>><?php echo grp_i('3'); ?></option>
                <option value="2" <?php selected('2', $pagination); ?>><?php echo grp_i('2'); ?></option>
                <option value="1" <?php selected('1', $pagination); ?>><?php echo grp_i('1'); ?></option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <?php echo grp_i('Sorting'); ?>
            <select id="<?php echo $this->get_field_id('sort'); ?>" name="<?php echo $this->get_field_name('sort'); ?>" class="form-control">
                <option value="" <?php selected('', $sort); ?>><?php echo grp_i('Default'); ?></option>
                <option value="1" <?php selected('1', $sort); ?>><?php echo grp_i('Most recent'); ?></option>
                <option value="2" <?php selected('2', $sort); ?>><?php echo grp_i('Most oldest'); ?></option>
                <option value="3" <?php selected('3', $sort); ?>><?php echo grp_i('Highest score'); ?></option>
                <option value="4" <?php selected('4', $sort); ?>><?php echo grp_i('Lowest score'); ?></option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <?php echo grp_i('Minimum Review Rating'); ?>
            <select id="<?php echo $this->get_field_id('min_filter'); ?>" name="<?php echo $this->get_field_name('min_filter'); ?>" class="form-control">
                <option value="" <?php selected('', $min_filter); ?>><?php echo grp_i('No filter'); ?></option>
                <option value="5" <?php selected('5', $min_filter); ?>><?php echo grp_i('5 Stars'); ?></option>
                <option value="4" <?php selected('4', $min_filter); ?>><?php echo grp_i('4 Stars'); ?></option>
                <option value="3" <?php selected('3', $min_filter); ?>><?php echo grp_i('3 Stars'); ?></option>
                <option value="2" <?php selected('2', $min_filter); ?>><?php echo grp_i('2 Stars'); ?></option>
                <option value="1" <?php selected('1', $min_filter); ?>><?php echo grp_i('1 Star'); ?></option>
            </select>
        </div>
    </div>
</div>

<!-- Display Options -->
<h4 class="rplg-options-toggle"><?php echo grp_i('Display Options'); ?></h4>
<div class="rplg-options" style="display:none">
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('hide_photo'); ?>" name="<?php echo $this->get_field_name('hide_photo'); ?>" class="form-control" type="checkbox" value="1" <?php checked('1', $hide_photo); ?> />
                <?php echo grp_i('Hide business photo'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('hide_avatar'); ?>" name="<?php echo $this->get_field_name('hide_avatar'); ?>" class="form-control" type="checkbox" value="1" <?php checked('1', $hide_avatar); ?> />
                <?php echo grp_i('Hide user avatars'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('disable_user_link'); ?>" name="<?php echo $this->get_field_name('disable_user_link'); ?>" type="checkbox" value="1" <?php checked('1', $disable_user_link); ?> class="form-control"/>
                <?php echo grp_i('Disable links to G+ user profile'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('write_review'); ?>" name="<?php echo $this->get_field_name('write_review'); ?>" class="form-control" type="checkbox" value="1" <?php checked('1', $write_review); ?> />
                <?php echo grp_i('Add \'Write a review\' button'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('dark_theme'); ?>" name="<?php echo $this->get_field_name('dark_theme'); ?>" type="checkbox" value="1" <?php checked('1', $dark_theme); ?> class="form-control" />
                <?php echo grp_i('Dark background'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label><?php echo grp_i('Review limit before \'read more\' link'); ?></label>
            <input type="text" id="<?php echo $this->get_field_id('text_size'); ?>" name="<?php echo $this->get_field_name('text_size'); ?>" value="<?php echo $text_size; ?>" placeholder="<?php echo grp_i('for instance: 120'); ?>" class="form-control"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <?php echo grp_i('Widget theme'); ?>
            <select id="<?php echo $this->get_field_id('view_mode'); ?>" name="<?php echo $this->get_field_name('view_mode'); ?>" class="form-control">
                <option value="list" <?php selected('list', $view_mode); ?>><?php echo grp_i('Review List'); ?></option>
                <option value="slider" <?php selected('slider', $view_mode); ?>><?php echo grp_i('Reviews Slider'); ?></option>
                <option value="grid" <?php selected('grid', $view_mode); ?>><?php echo grp_i('Reviews Grid'); ?></option>
                <option value="badge" <?php selected('badge', $view_mode); ?>><?php echo grp_i('Google Badge: right'); ?></option>
                <option value="badge_left" <?php selected('badge_left', $view_mode); ?>><?php echo grp_i('Google Badge: left'); ?></option>
                <option value="badge_inner" <?php selected('badge_inner', $view_mode); ?>><?php echo grp_i('Google Badge: embed'); ?></option>
            </select>
        </div>
    </div>
    <?php if (isset($max_width)) { ?>
    <div class="form-group">
        <div class="col-sm-12">
            <label><?php echo grp_i('Maximum width'); ?></label>
            <input id="<?php echo $this->get_field_id('max_width'); ?>" name="<?php echo $this->get_field_name('max_width'); ?>" class="form-control" type="text" placeholder="for instance: 300px" />
        </div>
    </div>
    <?php } ?>
    <?php if (isset($max_height)) { ?>
    <div class="form-group">
        <div class="col-sm-12">
            <label><?php echo grp_i('Maximum height'); ?></label>
            <input id="<?php echo $this->get_field_id('max_height'); ?>" name="<?php echo $this->get_field_name('max_height'); ?>" class="form-control" type="text" placeholder="for instance: 500px" />
        </div>
    </div>
    <?php } ?>
</div>

<!-- Slider Options -->
<h4 class="rplg-options-toggle"><?php echo grp_i('Slider Options'); ?></h4>
<div class="rplg-options" style="display:none">
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input type="checkbox" <?php checked('slider', $view_mode); ?> class="form-control" onchange="(function(el, el2) { if (el.checked) el2.value = 'slider'; else el2.value = 'list'; }(this, this.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('#<?php echo $this->get_field_id('view_mode'); ?>')));"/>
                <?php echo grp_i('Use Reviews Slider theme'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('slider_hide_pagin'); ?>" name="<?php echo $this->get_field_name('slider_hide_pagin'); ?>" type="checkbox" value="1" <?php checked('1', $slider_hide_pagin); ?> class="form-control"/>
                <?php echo grp_i('Hide pagination dots'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label><?php echo grp_i('Slider speed in second'); ?></label>
            <input id="<?php echo $this->get_field_id('slider_speed'); ?>" name="<?php echo $this->get_field_name('slider_speed'); ?>" value="<?php echo $slider_speed; ?>" type="text" placeholder="for instance: 5" class="form-control"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label><?php echo grp_i('Number of reviews per view'); ?></label>
            <input id="<?php echo $this->get_field_id('slider_count'); ?>" name="<?php echo $this->get_field_name('slider_count'); ?>" value="<?php echo $slider_count; ?>" type="text" placeholder="for instance: 3" class="form-control"/>
        </div>
    </div>
</div>

<!-- Advance Options -->
<h4 class="rplg-options-toggle"><?php echo grp_i('Advance Options'); ?></h4>
<div class="rplg-options" style="display:none">
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('open_link'); ?>" name="<?php echo $this->get_field_name('open_link'); ?>" type="checkbox" value="1" <?php checked('1', $open_link); ?> class="form-control" />
                <?php echo grp_i('Open links in new Window'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('nofollow_link'); ?>" name="<?php echo $this->get_field_name('nofollow_link'); ?>" type="checkbox" value="1" <?php checked('1', $nofollow_link); ?> class="form-control" />
                <?php echo grp_i('Use no follow links'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('hide_float_badge'); ?>" name="<?php echo $this->get_field_name('hide_float_badge'); ?>" type="checkbox" value="1" <?php checked('1', $hide_float_badge); ?> class="form-control" />
                <?php echo grp_i('Hide float badge on mobile'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label>
                <input id="<?php echo $this->get_field_id('lazy_load_img'); ?>" name="<?php echo $this->get_field_name('lazy_load_img'); ?>" type="checkbox" value="1" <?php checked('1', $lazy_load_img); ?> class="form-control" />
                <?php echo grp_i('Lazy load images to improve performance'); ?>
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <?php echo grp_i('Language of reviews'); ?>
            <select id="<?php echo $this->get_field_id('reviews_lang'); ?>" name="<?php echo $this->get_field_name('reviews_lang'); ?>" class="form-control">
                <option value="" <?php selected('', $reviews_lang); ?>><?php echo grp_i('Disable'); ?></option>
                <option value="ar" <?php selected('ar', $reviews_lang); ?>><?php echo grp_i('Arabic'); ?></option>
                <option value="bg" <?php selected('bg', $reviews_lang); ?>><?php echo grp_i('Bulgarian'); ?></option>
                <option value="bn" <?php selected('bn', $reviews_lang); ?>><?php echo grp_i('Bengali'); ?></option>
                <option value="ca" <?php selected('ca', $reviews_lang); ?>><?php echo grp_i('Catalan'); ?></option>
                <option value="cs" <?php selected('cs', $reviews_lang); ?>><?php echo grp_i('Czech'); ?></option>
                <option value="da" <?php selected('da', $reviews_lang); ?>><?php echo grp_i('Danish'); ?></option>
                <option value="de" <?php selected('de', $reviews_lang); ?>><?php echo grp_i('German'); ?></option>
                <option value="el" <?php selected('el', $reviews_lang); ?>><?php echo grp_i('Greek'); ?></option>
                <option value="en" <?php selected('en', $reviews_lang); ?>><?php echo grp_i('English'); ?></option>
                <option value="en-AU" <?php selected('en-AU', $reviews_lang); ?>><?php echo grp_i('English (Australian)'); ?></option>
                <option value="en-GB" <?php selected('en-GB', $reviews_lang); ?>><?php echo grp_i('English (Great Britain)'); ?></option>
                <option value="es" <?php selected('es', $reviews_lang); ?>><?php echo grp_i('Spanish'); ?></option>
                <option value="eu" <?php selected('eu', $reviews_lang); ?>><?php echo grp_i('Basque'); ?></option>
                <option value="eu" <?php selected('eu', $reviews_lang); ?>><?php echo grp_i('Basque'); ?></option>
                <option value="fa" <?php selected('fa', $reviews_lang); ?>><?php echo grp_i('Farsi'); ?></option>
                <option value="fi" <?php selected('fi', $reviews_lang); ?>><?php echo grp_i('Finnish'); ?></option>
                <option value="fil" <?php selected('fil', $reviews_lang); ?>><?php echo grp_i('Filipino'); ?></option>
                <option value="fr" <?php selected('fr', $reviews_lang); ?>><?php echo grp_i('French'); ?></option>
                <option value="gl" <?php selected('gl', $reviews_lang); ?>><?php echo grp_i('Galician'); ?></option>
                <option value="gu" <?php selected('gu', $reviews_lang); ?>><?php echo grp_i('Gujarati'); ?></option>
                <option value="hi" <?php selected('hi', $reviews_lang); ?>><?php echo grp_i('Hindi'); ?></option>
                <option value="hr" <?php selected('hr', $reviews_lang); ?>><?php echo grp_i('Croatian'); ?></option>
                <option value="hu" <?php selected('hu', $reviews_lang); ?>><?php echo grp_i('Hungarian'); ?></option>
                <option value="id" <?php selected('id', $reviews_lang); ?>><?php echo grp_i('Indonesian'); ?></option>
                <option value="it" <?php selected('it', $reviews_lang); ?>><?php echo grp_i('Italian'); ?></option>
                <option value="iw" <?php selected('iw', $reviews_lang); ?>><?php echo grp_i('Hebrew'); ?></option>
                <option value="ja" <?php selected('ja', $reviews_lang); ?>><?php echo grp_i('Japanese'); ?></option>
                <option value="kn" <?php selected('kn', $reviews_lang); ?>><?php echo grp_i('Kannada'); ?></option>
                <option value="ko" <?php selected('ko', $reviews_lang); ?>><?php echo grp_i('Korean'); ?></option>
                <option value="lt" <?php selected('lt', $reviews_lang); ?>><?php echo grp_i('Lithuanian'); ?></option>
                <option value="lv" <?php selected('lv', $reviews_lang); ?>><?php echo grp_i('Latvian'); ?></option>
                <option value="ml" <?php selected('ml', $reviews_lang); ?>><?php echo grp_i('Malayalam'); ?></option>
                <option value="mr" <?php selected('mr', $reviews_lang); ?>><?php echo grp_i('Marathi'); ?></option>
                <option value="nl" <?php selected('nl', $reviews_lang); ?>><?php echo grp_i('Dutch'); ?></option>
                <option value="no" <?php selected('no', $reviews_lang); ?>><?php echo grp_i('Norwegian'); ?></option>
                <option value="pl" <?php selected('pl', $reviews_lang); ?>><?php echo grp_i('Polish'); ?></option>
                <option value="pt" <?php selected('pt', $reviews_lang); ?>><?php echo grp_i('Portuguese'); ?></option>
                <option value="pt-BR" <?php selected('pt-BR', $reviews_lang); ?>><?php echo grp_i('Portuguese (Brazil)'); ?></option>
                <option value="pt-PT" <?php selected('pt-PT', $reviews_lang); ?>><?php echo grp_i('Portuguese (Portugal)'); ?></option>
                <option value="ro" <?php selected('ro', $reviews_lang); ?>><?php echo grp_i('Romanian'); ?></option>
                <option value="ru" <?php selected('ru', $reviews_lang); ?>><?php echo grp_i('Russian'); ?></option>
                <option value="sk" <?php selected('sk', $reviews_lang); ?>><?php echo grp_i('Slovak'); ?></option>
                <option value="sl" <?php selected('sl', $reviews_lang); ?>><?php echo grp_i('Slovenian'); ?></option>
                <option value="sr" <?php selected('sr', $reviews_lang); ?>><?php echo grp_i('Serbian'); ?></option>
                <option value="sv" <?php selected('sv', $reviews_lang); ?>><?php echo grp_i('Swedish'); ?></option>
                <option value="ta" <?php selected('ta', $reviews_lang); ?>><?php echo grp_i('Tamil'); ?></option>
                <option value="te" <?php selected('te', $reviews_lang); ?>><?php echo grp_i('Telugu'); ?></option>
                <option value="th" <?php selected('th', $reviews_lang); ?>><?php echo grp_i('Thai'); ?></option>
                <option value="tl" <?php selected('tl', $reviews_lang); ?>><?php echo grp_i('Tagalog'); ?></option>
                <option value="tr" <?php selected('tr', $reviews_lang); ?>><?php echo grp_i('Turkish'); ?></option>
                <option value="uk" <?php selected('uk', $reviews_lang); ?>><?php echo grp_i('Ukrainian'); ?></option>
                <option value="vi" <?php selected('vi', $reviews_lang); ?>><?php echo grp_i('Vietnamese'); ?></option>
                <option value="zh-CN" <?php selected('zh-CN', $reviews_lang); ?>><?php echo grp_i('Chinese (Simplified)'); ?></option>
                <option value="zh-TW" <?php selected('zh-TW', $reviews_lang); ?>><?php echo grp_i('Chinese (Traditional)'); ?></option>
            </select>
        </div>
    </div>
</div>