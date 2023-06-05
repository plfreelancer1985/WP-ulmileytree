<?php
if ($lazy_load_img && strpos($view_mode, 'badge') !== 0) {
    wp_register_script('blazy_js', plugins_url('/static/js/blazy.min.js', __FILE__));
    wp_enqueue_script('blazy_js', plugins_url('/static/js/blazy.min.js', __FILE__));
}

wp_register_script('rplg_js', plugins_url('/static/js/rplg.js', __FILE__));
wp_enqueue_script('rplg_js', plugins_url('/static/js/rplg.js', __FILE__));

if ($view_mode == 'slider') {
    wp_register_style('swiper_css', plugins_url('/static/css/swiper.min.css', __FILE__));
    wp_enqueue_style('swiper_css', plugins_url('/static/css/swiper.min.css', __FILE__));
    wp_register_script('swiper_js', plugins_url('/static/js/swiper.min.js', __FILE__));
    wp_enqueue_script('swiper_js', plugins_url('/static/js/swiper.min.js', __FILE__));
}

include_once(dirname(__FILE__) . '/grp-reviews-helper.php');

$reviews_where = '';
if ($min_filter > 0) {
    $reviews_where = $reviews_where . ' AND rating >= ' . $min_filter;
}
if (strlen($reviews_lang) > 0) {
    $reviews_where = $reviews_where . ' AND language = \'' . $reviews_lang . '\'';
}
switch ($sort) {
    case '1': $sort_order = ' ORDER BY time DESC'; break;
    case '2': $sort_order = ' ORDER BY time ASC'; break;
    case '3': $sort_order = ' ORDER BY rating DESC'; break;
    case '4': $sort_order = ' ORDER BY rating ASC'; break;
    default: $sort_order = '';
}
if ($view_mode == 'grid' && $pagination > 0) {
    $sort_order = $sort_order . ' LIMIT ' . $pagination;
}
$place = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . $wpdb->prefix . "grp_google_place WHERE place_id = %s", $place_id));
if (!$place) {
    ?>
    <div class="grp-error" style="padding:10px;color:#B94A48;background-color:#F2DEDE;border-color:#EED3D7;">
        <?php echo grp_i('Place not found by PlaceID: ') . $place_id; ?>
    </div>
    <?php
    return;
}

$reviews = $wpdb->get_results($wpdb->prepare("SELECT * FROM " . $wpdb->prefix . "grp_google_review WHERE google_place_id = %d" . $reviews_where . $sort_order, $place->id));

$rating = 0;
$count = count($reviews);

if ($place->rating > 0) {
    $rating = $place->rating;
} else if ($count > 0) {
    foreach ($reviews as $review) {
        $rating = $rating + $review->rating;
    }
    $rating = round($rating / $count, 1);
}
$rating = number_format((float)$rating, 1, '.', '');
$place_img = strlen($place_photo) > 0 ? $place_photo : (strlen($place->photo) > 0 ? $place->photo : $place->icon);

$slider_count = $slider_count > 0 ? $slider_count : ($count > 2 ? 3 : $count);
?>

<?php if ($view_mode == 'slider') { ?>

<div class="grw-slider rplg-slider">
    <div class="rplgsw-container">
        <div class="rplgsw-wrapper">
        <?php foreach ($reviews as $review) { ?>
            <div class="rplgsw-slide">

                <div class="grw-review">
                    <div class="wp-google-feedback">
                        <div class="wp-google-content2">
                            <span class="wp-google-stars"><?php echo grp_stars($review->rating); ?></span>
                            <span class="wp-google-text"><?php echo grp_trim_text($review->text, $text_size); ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="44" width="44">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path>
                                    <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path>
                                    <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path>
                                    <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path>
                                    <path d="M20 20h472v472H20V20z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="wp-google-user">
                        <?php
                        if (!$hide_avatar) {
                            if (strlen($review->profile_photo_url) > 0) {
                                $profile_photo_url = $review->profile_photo_url;
                            } else {
                                $profile_photo_url = GRP_GOOGLE_AVATAR;
                            }
                            grp_image($profile_photo_url, $review->author_name, $lazy_load_img);
                        }
                        ?>
                        <div class="wp-google-info">
                            <?php
                            if (strlen($review->author_url) > 0 && !$disable_user_link) {
                                grp_anchor($review->author_url, 'wp-google-name', $review->author_name, $open_link, $nofollow_link);
                            } else {
                                if (strlen($review->author_name) > 0) {
                                    $author_name = $review->author_name;
                                } else {
                                    $author_name = grp_i('Google User');
                                }
                                ?><div class="wp-google-name"><?php echo $author_name; ?></div><?php
                            }
                            ?>
                            <div class="wp-google-time" data-time="<?php echo $review->time; ?>"><?php echo gmdate("H:i d M y", $review->time); ?></div>
                        </div>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
        <?php if (!$slider_hide_pagin) { ?>
        <div class="rplgsw-pagination"></div>
        <?php } ?>
    </div>
    <div class="rplg-slider-prev"><span>&lsaquo;</span></div>
    <div class="rplg-slider-next"><span>&rsaquo;</span></div>
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" onload="(function(el) { var t = setInterval(function () {if (window.rplg_init_slider_theme){rplg_init_slider_theme(el, {speed: <?php echo ($slider_speed > 0 ? $slider_speed : 4) * 1000; ?>, count: <?php echo $slider_count; ?>, pagin: <?php echo !$slider_hide_pagin || true; ?>});clearInterval(t);}}, 200); })(this.parentNode);" style="display:none">
</div>

<?php } else { ?>

<div class="wp-gr wpac" <?php if ($rating_snippet) { ?>itemscope="" itemtype="http://schema.org/LocalBusiness"<?php } ?> style="<?php if (isset($max_width) && strlen($max_width) > 0) { ?>max-width:<?php echo $max_width;?>!important;<?php } ?><?php if (isset($max_height) && strlen($max_height) > 0) { ?>max-height:<?php echo $max_height;?>!important;overflow-y:auto!important;<?php } ?>">

    <?php if ($view_mode == 'list') { ?>

    <div class="wp-google-list<?php if ($dark_theme) { ?> wp-dark<?php } ?>">
        <div class="wp-google-place">
            <?php grp_place($rating, $place, $place_img, $rating_snippet, $count, $hide_photo, $dark_theme, $open_link, $nofollow_link, $lazy_load_img); ?>
        </div>
        <div class="wp-google-content-inner">
            <?php grp_place_reviews($place, $reviews, $pagination, $place_id, $min_filter, $hide_avatar, $text_size, $write_review, $leave_review_link, $disable_user_link, $open_link, $nofollow_link, $lazy_load_img); ?>
        </div>
    </div>

    <?php } elseif ($view_mode == 'grid') { ?>

    <style>
    .wp-gr .wp-google-grid {
        display: -webkit-flex!important;
        display: -ms-flexbox!important;
        display: flex!important;
        -webkit-flex-flow: row wrap!important;
        -ms-flex-flow: row wrap!important;
        flex-flow: row wrap!important;
        margin: 0 auto!important;
        -webkit-align-items: stretch!important;
        -ms-flex-align: stretch!important;
        align-items: stretch!important;
    }
    @media (min-width: 840px) {
        .wp-gr .wp-google-grid {
            padding: 8px!important;
        }
    }
    .wp-gr .wp-google-col {
        box-sizing: border-box!important;
    }
    @media (min-width: 840px) {
        .wp-gr .wp-google-col-4 {
            margin: 8px!important;
            width: calc(33.3333333333% - 16px)!important;
        }
    }
    @media (max-width: 839px) and (min-width: 480px) {
        .wp-gr .wp-google-col-4 {
            margin: 8px!important;
            width: calc(50% - 16px)!important;
        }
    }
    @media (max-width: 479px) {
        .wp-gr .wp-google-col-4 {
            margin: 8px!important;
            width: calc(100% - 16px)!important;
        }
    }
    .wp-gr .wp-google-col-6 {
        margin: 8px!important;
        width: calc(50% - 16px)!important;
    }
    </style>
    <div class="wp-google-grid<?php if ($dark_theme) { ?> wp-dark<?php } ?>">
        <?php
        switch ($count) {
            case 1:
                $col = 12;
                break;
            case 2:
                $col = 6;
                break;
            default:
               $col = 4;
        }
        $i = 1;
        $count_rem = $count % 3;
        foreach ($reviews as $review) {
            $col_class = 'wp-google-col-' . $col; ?>
            <div class="wp-google-col <?php echo $col_class; ?>">
                <?php grp_place_review($review, $hide_avatar, $text_size, $disable_user_link, $open_link, $nofollow_link, $lazy_load_img); ?>
            </div>
        <?php } ?>
    </div>

    <?php } else { ?>

    <div class="rplg-badge">
        <div class="wp-google-badge<?php if ($view_mode != 'badge_inner') { ?> wp-google-<?php echo $view_mode; ?>-fixed<?php } ?><?php if ($hide_float_badge) { ?> wp-google-badge-hide<?php } ?>">
            <div class="wp-google-border"></div>
            <div class="wp-google-badge-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="44" width="44">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"/>
                        <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"/>
                        <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"/>
                        <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"/>
                        <path d="M20 20h472v472H20V20z"/>
                    </g>
                </svg>
                <?php if ($rating_snippet) { ?>
                <meta itemprop="name" content="<?php echo $place->name; ?>"/>
                <meta itemprop="image" content="<?php echo $place_img; ?>"/>
                <div class="wp-google-badge-score" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                    <div><?php echo grp_i('Google Rating'); ?></div>
                    <span class="wp-google-rating" itemprop="ratingValue"><?php echo $rating; ?></span>
                    <span class="wp-google-stars"><?php grp_stars($rating); ?></span>
                    <meta itemprop="ratingCount" content="<?php echo $count; ?>"/>
                    <meta itemprop="bestRating" content="5"/>
                </div>
                <?php } else { ?>
                <div class="wp-google-badge-score">
                    <div><?php echo grp_i('Google Rating'); ?></div>
                    <span class="wp-google-rating"><?php echo $rating; ?></span>
                    <span class="wp-google-stars"><?php grp_stars($rating); ?></span>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="wp-google-form <?php if ($view_mode == 'badge_left') { ?>wp-google-form-left<?php } ?>" style="display:none">
            <div class="wp-google-head">
                <div class="wp-google-head-inner">
                    <?php grp_place($rating, $place, $place_img, false, 0, $hide_photo, $dark_theme, $open_link, $nofollow_link, $lazy_load_img, false); ?>
                </div>
                <button class="wp-google-close" type="button" onclick="this.parentNode.parentNode.style.display='none'">×</button>
            </div>
            <div class="wp-google-body"></div>
            <div class="wp-google-content">
                <div class="wp-google-content-inner">
                    <?php grp_place_reviews($place, $reviews, $pagination, $place_id, $min_filter, $hide_avatar, $text_size, $write_review, $leave_review_link, $disable_user_link, $open_link, $nofollow_link, $lazy_load_img); ?>
                </div>
            </div>
            <div class="wp-google-footer">
                <img src="<?php echo GRP_PLUGIN_URL; ?>/static/img/powered_by_google_on_<?php if ($dark_theme) { ?>non_<?php } ?>white.png" alt="powered by Google">
            </div>
        </div>
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" onload="(function(el) { var t = setInterval(function () {if (window.rplg_badge_init){rplg_badge_init(el, 'google', 'wp-gr');clearInterval(t);}}, 100); })(this.parentNode);" style="display:none">
    </div>
    <?php } ?>
</div>

<?php } ?>

<?php if ($auto_load) { ?>
<script type="text/javascript" data-cfasync="false">
setTimeout(function() {
    var script = document.createElement('script');
    script.async = true;
    script.src = '?cf_action=grp_auto_save&place_id=<?php echo $place_id; ?>&min_filter=<?php echo $min_filter; ?>&reviews_lang=<?php echo $reviews_lang; ?>&ver=' + new Date().getTime();
    var firstScript = document.getElementsByTagName('script')[0];
    firstScript.parentNode.insertBefore(script, firstScript);
}, 2000);
</script>
<?php } ?>