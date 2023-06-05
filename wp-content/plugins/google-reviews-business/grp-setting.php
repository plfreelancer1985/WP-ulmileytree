<?php
if (!function_exists('wp_nonce_field')) {
    function wp_nonce_field() {}
}

if (!current_user_can('manage_options')) {
    die('The account you\'re logged in to doesn\'t have permission to access this page.');
}

function grp_has_valid_nonce() {
    $nonce_actions = array('grp_reset', 'grp_settings', 'grp_active');
    $nonce_form_prefix = 'grp-form_nonce_';
    $nonce_action_prefix = 'grp-wpnonce_';
    foreach ($nonce_actions as $key => $value) {
        if (isset($_POST[$nonce_form_prefix.$value])) {
            check_admin_referer($nonce_action_prefix.$value, $nonce_form_prefix.$value);
            return true;
        }
    }
    return false;
}

function grp_debug() {
    global $wpdb;
    $places = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "grp_google_place");
    $places_error = $wpdb->last_error;
    $reviews = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "grp_google_review");
    $reviews_error = $wpdb->last_error; ?>

DB Places: <?php echo print_r($places); ?>

DB Places error: <?php echo $places_error; ?>

DB Reviews: <?php echo print_r($reviews); ?>

DB Reviews error: <?php echo $reviews_error;
}

if (!empty($_POST)) {
    $nonce_result_check = grp_has_valid_nonce();
    if ($nonce_result_check === false) {
        die('Unable to save changes. Make sure you are accessing this page from the Wordpress dashboard.');
    }
}

// Reset
if (isset($_POST['reset'])) {
    grp_reset(isset($_POST['reset_db']));
    unset($_POST);
?>
<div class="wrap">
    <h3><?php echo grp_i('Google Reviews Business Reset'); ?></h3>
    <form method="POST" action="?page=grp">
        <?php wp_nonce_field('grp-wpnonce_grp_reset', 'grp-form_nonce_grp_reset'); ?>
        <p><?php echo grp_i('Google Reviews Business has been reset successfully.') ?></p>
        <ul style="list-style: circle;padding-left:20px;">
            <li><?php echo grp_i('Local settings for the plugin were removed.') ?></li>
        </ul>
        <p>
            <?php echo grp_i('If you wish to reinstall, you can do that now.') ?>
            <a href="?page=grp">&nbsp;<?php echo grp_i('Reinstall') ?></a>
        </p>
    </form>
</div>
<?php
die();
}

// Post fields that require verification.
$valid_fields = array(
    'grp_active' => array(
        'key_name' => 'grp_active',
        'values' => array('Disable', 'Enable')
    ));

// Check POST fields and remove bad input.
foreach ($valid_fields as $key) {

    if (isset($_POST[$key['key_name']]) ) {

        // SANITIZE first
        $_POST[$key['key_name']] = trim(sanitize_text_field($_POST[$key['key_name']]));

        // Validate
        if (isset($key['regexp']) && $key['regexp']) {
            if (!preg_match($key['regexp'], $_POST[$key['key_name']])) {
                unset($_POST[$key['key_name']]);
            }

        } else if (isset($key['type']) && $key['type'] == 'int') {
            if (!intval($_POST[$key['key_name']])) {
                unset($_POST[$key['key_name']]);
            }

        } else {
            $valid = false;
            $vals = $key['values'];
            foreach ($vals as $val) {
                if ($_POST[$key['key_name']] == $val) {
                    $valid = true;
                }
            }
            if (!$valid) {
                unset($_POST[$key['key_name']]);
            }
        }
    }
}

if (isset($_POST['grp_active']) && isset($_GET['grp_active'])) {
    update_option('grp_active', ($_GET['grp_active'] == '1' ? '1' : '0'));
}

if (isset($_POST['grp_setting'])) {
    update_option('grp_expired', '');
    update_option('grp_license', $_POST['grp_license']);
    update_option('grp_language', $_POST['grp_language']);
    update_option('grp_google_api_key', $_POST['grp_google_api_key']);

    /*$grp_google_api_key = $_POST['grp_google_api_key'];
    if (strlen($grp_google_api_key) > 0) {
        $test_url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJ3TH9CwFZwokRIvNO1SP0WLg&key=" . $grp_google_api_key;
        $test_response = rplg_urlopen($test_url);
        $test_response_data = $test_response['data'];
        $test_response_json = rplg_json_decode($test_response_data);
        if (isset($test_response_json->error_message) && strlen($test_response_json->error_message) > 0) {
            $grp_google_api_key_error = $test_response_json->error_message;
        }
        update_option('grp_google_api_key', $grp_google_api_key);
    }*/

    $grp_setting_page = true;
} else {
    $grp_setting_page = false;
}

if (isset($_POST['grp_install_db'])) {
    grp_install_db();
}

wp_register_style('twitter_bootstrap3_css', plugins_url('/static/css/bootstrap.min.css', __FILE__));
wp_enqueue_style('twitter_bootstrap3_css', plugins_url('/static/css/bootstrap.min.css', __FILE__));

wp_register_style('rplg_wp_css', plugins_url('/static/css/rplg-wp.css', __FILE__));
wp_enqueue_style('rplg_wp_css', plugins_url('/static/css/rplg-wp.css', __FILE__));

wp_register_style('rplg_setting_css', plugins_url('/static/css/rplg-setting.css', __FILE__));
wp_enqueue_style('rplg_setting_css', plugins_url('/static/css/rplg-setting.css', __FILE__));

wp_enqueue_script('jquery');

wp_register_script('wpac_js', plugins_url('/static/js/wpac.js', __FILE__));
wp_enqueue_script('wpac_js', plugins_url('/static/js/wpac.js', __FILE__));

wp_register_script('grw_finder_js', plugins_url('/static/js/grw-finder.js', __FILE__));
wp_localize_script('grw_finder_js', 'grwVars', array(
    'GOOGLE_AVATAR' => GRP_GOOGLE_AVATAR,
    'handlerUrl' => admin_url('options-general.php?page=grp'),
    'actionPrefix' => 'grp'
));
wp_enqueue_script('grw_finder_js', plugins_url('/static/js/grw-finder.js', __FILE__));

$grp_enabled = get_option('grp_active') == '1';
$grp_google_api_key = get_option('grp_google_api_key');
$grp_license = get_option('grp_license');
$grp_expired = get_option('grp_expired');
$grp_language = get_option('grp_language');

if (strlen($grp_license) > 1 && strlen($grp_expired) < 1) {
    $request = wp_remote_post('https://api.richplugins.com/plugins/license-expired', array(
        'timeout' => 15,
        'sslverify' => false,
        'body' => array(
            'license' => $grp_license,
            'slug' => 'grp',
            'plugin' => 'Google Reviews Business',
            'active' => '1',
            'siteurl' => get_option('siteurl')
        )
    ));

    if (!is_wp_error($request)) {
        $request = json_decode(wp_remote_retrieve_body($request));
    }
    if ($request && isset($request->expired)) {
        $grp_expired = $request->expired;
        update_option('grp_expired', $request->expired);
    } else {
        if (isset($request->error)) {
            $grp_license_error = $request->error;
        }
        update_option('grp_expired', 'false');
    }
}

if (isset($_POST['grp_license_deactivate'])) {
    $request = wp_remote_post('https://api.richplugins.com/plugins/license-expired', array(
        'timeout' => 15,
        'sslverify' => false,
        'body' => array(
            'license' => $grp_license,
            'slug' => 'grp',
            'plugin' => 'Google Reviews Business',
            'active' => '0'
        )
    ));

    if (!is_wp_error($request)) {
        $request = json_decode(wp_remote_retrieve_body($request));
    }
    if ($request && isset($request->error)) {
        $grp_license_error = $request->error;
    } else {
        $grp_license_deactivated = $grp_license;
        update_option('grp_expired', '');
        update_option('grp_license', '');
        $grp_expired = '';
        $grp_license = '';
        $grp_setting_page = true;
    }
}
?>

<span class="rplg-version rplg-business"><?php echo grp_i('Business Version: %s', esc_html(GRP_VERSION)); ?></span>
<div class="rplg-setting container-fluid">
    <img src="<?php echo GRP_PLUGIN_URL . '/static/img/google.png'; ?>" alt="Google">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"<?php if (!$grp_setting_page) { ?> class="active"<?php } ?>>
            <a href="#about" aria-controls="about" role="tab" data-toggle="tab"><?php echo grp_i('About'); ?></a>
        </li>
        <li role="presentation">
            <a href="#doc" aria-controls="doc" role="tab" data-toggle="tab"><?php echo grp_i('Documentation'); ?></a>
        </li>
        <li role="presentation"<?php if ($grp_setting_page) { ?> class="active"<?php } ?>>
            <a href="#setting" aria-controls="setting" role="tab" data-toggle="tab"><?php echo grp_i('Setting'); ?></a>
        </li>
        <li role="presentation">
            <a href="#shortcode" aria-controls="shortcode" role="tab" data-toggle="tab"><?php echo grp_i('Shortcode Builder'); ?></a>
        </li>
        <li role="presentation">
            <a href="#mod" aria-controls="mod" role="tab" data-toggle="tab"><?php echo grp_i('Review Moderation'); ?></a>
        </li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane<?php if (!$grp_setting_page) { ?> active<?php } ?>" id="about">
            <div class="row">
                <div class="col-sm-6">
                    <h4><?php echo grp_i('Google Reviews Business for WordPress'); ?></h4>
                    <p><?php echo grp_i('Google Reviews plugin is an easy and fast way to integrate Google place reviews right into your WordPress website. This plugin can work without a Google Places API key and you can instantly add Google reviews right now.'); ?></p>
                    <p><?php echo grp_i('Our development team is very responsive and we will be happy to hear from you suggestions to improve the plugin and features. Feel free to contact us by email <a href="mailto:support@richplugins.com">support@richplugins.com</a>.'); ?></p>
                    <p><?php echo grp_i('<b>Like this plugin? Give it a like on social:</b>'); ?></p>
                    <div class="row">
                        <div class="col-sm-4">
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.6&appId=1501100486852897";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-like" data-href="https://richplugins.com/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
                        </div>
                        <div class="col-sm-4 twitter">
                            <a href="https://twitter.com/richplugins" class="twitter-follow-button" data-show-count="false">Follow @RichPlugins</a>
                            <script>!function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + '://platform.twitter.com/widgets.js';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, 'script', 'twitter-wjs');</script>
                        </div>
                        <div class="col-sm-4 googleplus">
                            <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="200" data-href="https://plus.google.com/101080686931597182099"></div>
                            <script type="text/javascript">
                                window.___gcfg = { lang: 'en-US' };
                                (function () {
                                    var po = document.createElement('script');
                                    po.type = 'text/javascript';
                                    po.async = true;
                                    po.src = 'https://apis.google.com/js/plusone.js';
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <br>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/lmaTBmvDPKk?rel=0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="doc">
            <div class="row">
                <div class="col-sm-9">
                    <h4 id="usecase">Use cases</h4>
                    <p>There have two main use cases of using Google Reviews Business. Use as widget in sidebar or shortcode in any side.</p>
                    <h5 id="usecase-widget">Sidebar widget</h5>
                    <p>To use it as a widget, please do follow:</p>
                    <ol>
                        <li>Go to menu <b>"Appearance"</b> -> <b>"Widgets"</b></li>
                        <li>Move "Google Reviews Business" widget to sidebar</li>
                        <li>Enter search query of your business place in "Google Place Search Query" field and click "Search Place"</li>
                        <li>Select your found place in the panel below and click "Save Place and Reviews"</li>
                        <li>"Google Place Name" and "Google Place ID" must be filled, if so click "Save" button below</li>
                    </ol>
                    <h5 id="usecase-shortcode">Shortcode</h5>
                    <p>On this page you need to go to <b>Shortcode Builder</b> tab and do follow:</p>
                    <ol>
                        <li>Enter search query of your business place in "Google Place Search Query" field and click "Search Place"</li>
                        <li>Select your found place in the panel below and click "Save Place and Reviews"</li>
                        <li>"Google Place Name" and "Google Place ID" in parameters panel must be filled and shortcode appear</li>
                        <li>Copy and paste shortcode to any page of your WordPress website.</li>
                    </ol>

                    <h4 id="option">Options</h4>
                    <p>The Google Reviews Business have a lot of many options to manage behavior and appearance. The following is an overview of each of the fields in the Widget and Shortcode Builder:</p>

                    <h5 id="option-title">Title</h5>
                    <p>This is the title of the widget. You can leave it blank.</p>

                    <h5 id="option-schedule">Auto-download new reviews from Google</h5>
                    <p>Google only serves 5 reviews total but these reviews may change over time, especially if for your business place are constantly being added new reviews. This option enabled schedule which check daily for a new reviews and save these in your WordPress database automatically. Thus you can get a more then 5 reviews from Google and display them in the widget.</p>

                    <h5 id="option-schema">Enable Google Rich Snippet for rating (schema.org)</h5>
                    <p>This option enabled <b>schema.org/AggregateRating</b> marked to indexing in Google your website with Google Rich Snippet (stars in search).</p><img src="https://developers.google.com/search/docs/data-types/images/reviews01.png" class="screenshot">

                    <h5 id="option-pagination">Pagination</h5>
                    <p>The number of visible reviews before <b>See Next Reviews</b> link.</p>

                    <h5 id="option-sort">Sorting</h5>
                    <p>There have five cases for sort Google reviews:</p>
                    <ol>
                        <li><b>Default:</b> this is a default Google order they call “Most Helpful”</li>
                        <li><b>Most recent:</b> from newest to oldest</li>
                        <li><b>Most oldest:</b> from oldest to newest</li>
                        <li><b>Highest score:</b> from reviews with highest rating to lowest</li>
                        <li><b>Lowest score:</b> from reviews with lowest rating to highest</li>
                    </ol>

                    <h5 id="option-filter">Minimum Review Rating</h5>
                    <p>This limits which reviews will show based on their rating. Setting this to "4 Stars", for instance, will show reviews with 4 stars or higher in widget.</p>

                    <h5 id="option-photo">Place Photo</h5>
                    <p>Your custom uploaded image which will show in widget at head of business place.</p>

                    <h5 id="option-textlimit">Review chat limit</h5>
                    <p>The number of characters in each reviews before trimming and show "read more" link. If it's blank the reviews will be shown in full.</p>

                    <h5 id="option-dark">Dark theme</h5>
                    <p>If your website used dark background, please check this option to show the widget in dark theme.</p>

                    <h5 id="option-leave">Leave Google review link</h5>
                    <p>This feature allows you to add a link "Write a review" below for a list of reviews. To enabled it, please do follow:</p>
                    <ol>
                        <li>Go to <a href="https://google.com" target="_blank">https://google.com</a></li>
                        <li>Find in Google your business place</li>
                        <li>In the right panel where you can see your business place click by "Write a review" button</li>
                        <li>Copy and paste address link (for instance https://www.google.de/#q=steak+benjamin+house&lrd=0x89c259010bfd31dd:0xb858f423d54ef322,3,) to "Leave Google review link" field in widget</li>
                        <li>Save the widget</li>
                    </ol>

                    <h5 id="option-open">Open links in new Window</h5>
                    <p>Add to each links target="_blank" attribute to open in a new tab by click.</p>

                    <h5 id="option-nofollow">User no follow links</h5>
                    <p>Add rel="nofollow" attribute to each links to SEO.</p>

                    <h4 id="problem">Problems</h4>
                    <p>If your can't find your problem in list below please let we know us support@richplugins.com.</p>

                    <h5 id="problem-notfound">My business place can't be found</h5>
                    <p>Please keep in mind that Google only serves business places which have physical address on map and as a result have map identificator named <b>Place ID</b>. To check this go to <a href="https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder?hl=ru" target="_blank">Google Place ID finder</a> and try to find your business place in "Enter a location".</p>

                    <h5 id="problem-googlekey">Show red warning "Default limit of requests to Google Places API exceeded..."</h5>
                    <p>We provider several API Keys to access to Google Places API. But sometimes it can be blocked by Google if limit of requests exceeded. Then you need to get your own Google Place API Key, to do it please go to <a href="https://console.developers.google.com/flows/enableapi?apiid=places_backend&keyType=SERVER_SIDE&reusekey=true" target="_blank">Get Key</a> link and follow the instructions. Once you see the API Key, copy it to the "Google API Key" field in widget and search again.</p>

                    <h4 id="faq">FAQ</h4>
                    <p>Feel free to ask a questions to support@richplugins.com and commons we will past to there.</p>
                </div>
                <div class="col-sm-3">
                    <div class="bs-sidebar" data-spy="affix" data-offset-top="170" data-offset-bottom="100">
                        <ul class="nav bs-sidenav">
                            <li class="active"><a href="#usecase">Use cases</a></li>
                            <li><a href="#option">Options</a></li>
                            <li><a href="#problem">Problems</a></li>
                            <li><a href="#faq">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane<?php if ($grp_setting_page) { ?> active<?php } ?>" id="setting">
            <h4><?php echo grp_i('Google Reviews Business Setting'); ?></h4>
            <!-- Configuration form -->
            <form method="POST" enctype="multipart/form-data">
                <?php wp_nonce_field('grp-wpnonce_grp_settings', 'grp-form_nonce_grp_settings'); ?>
                <div class="form-group">
                    <label class="control-label" for="grp_license"><?php echo grp_i('Business license'); ?></label>
                    <input class="form-control" type="text" id="grp_license" name="grp_license" value="<?php echo esc_attr($grp_license); ?>">
                </div>
                <?php if (strlen($grp_expired) > 0 && $grp_expired != 'false') { ?>
                <div class="alert alert-dismissible alert-success">
                    <strong>Your Business license is active until <u><?php echo date(get_option('date_format'), $grp_expired / 1000); ?></u></strong><br>
                    * Plugin automatically updates<br>
                    * Access to priority support <a href="mailto:priority@richplugins.com">priority@richplugins.com</a><br>
                    <button name="grp_license_deactivate" type="submit" class="button-primary button" onclick="return confirm('Are you sure you want to deactivate the license?');">Deactivate License</button>
                </div>
                <?php } elseif (isset($grp_license_error) && strlen($grp_license_error) > 0) { ?>
                <div class="alert alert-dismissible alert-danger">
                    <strong>Activation error </strong><br><?php echo $grp_license_error; ?>
                </div>
                <?php } elseif (isset($grp_license_deactivated) && strlen($grp_license_deactivated) > 0) { ?>
                <div class="alert alert-dismissible alert-success">
                    <strong>The license was deactivated: </strong> <?php echo $grp_license_deactivated; ?>
                </div>
                <?php } else { ?>
                <p>Activate your Business license to receive automatic plugin updates and priority support for the life of your license.</p>
                <?php } ?>
                <div class="form-group">
                    <label class="control-label" for="grp_google_api_key"><?php echo grp_i('Google Places API Key'); ?></label>
                    <input class="form-control" type="text" id="grp_google_api_key" name="grp_google_api_key" value="<?php echo esc_attr($grp_google_api_key); ?>">
                    <?php if (isset($grp_google_api_key_error)) {?>
                    <div class="alert alert-dismissible alert-danger">
                        The Google API Key is wrong, error message: <?php echo $grp_google_api_key_error; ?><br>
                        Please get the correct key by instruction below ↓
                    </div>
                    <?php } ?>
                    <small>
                        <b>How to get Google Places API key</b>:<br>
                        1. Go to <a href="https://developers.google.com/places/web-service/get-api-key#get_an_api_key" target="_blank">Google Places API Key</a><br>
                        2. Click by '<b>GET A KEY</b>' button<br>
                        3. Fill the name, agree term and click by '<b>NEXT</b>' button<br>
                        4. Copy key to plugin field<br>
                        <iframe src="//www.youtube.com/embed/uW-PTKeZAXs?rel=0" allowfullscreen=""></iframe>
                    </small>
                </div>
                <div class="form-group">
                    <label class="control-label"><?php echo grp_i('Google Places API language'); ?></label>
                    <select class="form-control" id="grp_language" name="grp_language">
                        <option value="" <?php selected('', $grp_language); ?>><?php echo grp_i('Disable'); ?></option>
                        <option value="ar" <?php selected('ar', $grp_language); ?>><?php echo grp_i('Arabic'); ?></option>
                        <option value="bg" <?php selected('bg', $grp_language); ?>><?php echo grp_i('Bulgarian'); ?></option>
                        <option value="bn" <?php selected('bn', $grp_language); ?>><?php echo grp_i('Bengali'); ?></option>
                        <option value="ca" <?php selected('ca', $grp_language); ?>><?php echo grp_i('Catalan'); ?></option>
                        <option value="cs" <?php selected('cs', $grp_language); ?>><?php echo grp_i('Czech'); ?></option>
                        <option value="da" <?php selected('da', $grp_language); ?>><?php echo grp_i('Danish'); ?></option>
                        <option value="de" <?php selected('de', $grp_language); ?>><?php echo grp_i('German'); ?></option>
                        <option value="el" <?php selected('el', $grp_language); ?>><?php echo grp_i('Greek'); ?></option>
                        <option value="en" <?php selected('en', $grp_language); ?>><?php echo grp_i('English'); ?></option>
                        <option value="en-AU" <?php selected('en-AU', $grp_language); ?>><?php echo grp_i('English (Australian)'); ?></option>
                        <option value="en-GB" <?php selected('en-GB', $grp_language); ?>><?php echo grp_i('English (Great Britain)'); ?></option>
                        <option value="es" <?php selected('es', $grp_language); ?>><?php echo grp_i('Spanish'); ?></option>
                        <option value="eu" <?php selected('eu', $grp_language); ?>><?php echo grp_i('Basque'); ?></option>
                        <option value="eu" <?php selected('eu', $grp_language); ?>><?php echo grp_i('Basque'); ?></option>
                        <option value="fa" <?php selected('fa', $grp_language); ?>><?php echo grp_i('Farsi'); ?></option>
                        <option value="fi" <?php selected('fi', $grp_language); ?>><?php echo grp_i('Finnish'); ?></option>
                        <option value="fil" <?php selected('fil', $grp_language); ?>><?php echo grp_i('Filipino'); ?></option>
                        <option value="fr" <?php selected('fr', $grp_language); ?>><?php echo grp_i('French'); ?></option>
                        <option value="gl" <?php selected('gl', $grp_language); ?>><?php echo grp_i('Galician'); ?></option>
                        <option value="gu" <?php selected('gu', $grp_language); ?>><?php echo grp_i('Gujarati'); ?></option>
                        <option value="hi" <?php selected('hi', $grp_language); ?>><?php echo grp_i('Hindi'); ?></option>
                        <option value="hr" <?php selected('hr', $grp_language); ?>><?php echo grp_i('Croatian'); ?></option>
                        <option value="hu" <?php selected('hu', $grp_language); ?>><?php echo grp_i('Hungarian'); ?></option>
                        <option value="id" <?php selected('id', $grp_language); ?>><?php echo grp_i('Indonesian'); ?></option>
                        <option value="it" <?php selected('it', $grp_language); ?>><?php echo grp_i('Italian'); ?></option>
                        <option value="iw" <?php selected('iw', $grp_language); ?>><?php echo grp_i('Hebrew'); ?></option>
                        <option value="ja" <?php selected('ja', $grp_language); ?>><?php echo grp_i('Japanese'); ?></option>
                        <option value="kn" <?php selected('kn', $grp_language); ?>><?php echo grp_i('Kannada'); ?></option>
                        <option value="ko" <?php selected('ko', $grp_language); ?>><?php echo grp_i('Korean'); ?></option>
                        <option value="lt" <?php selected('lt', $grp_language); ?>><?php echo grp_i('Lithuanian'); ?></option>
                        <option value="lv" <?php selected('lv', $grp_language); ?>><?php echo grp_i('Latvian'); ?></option>
                        <option value="ml" <?php selected('ml', $grp_language); ?>><?php echo grp_i('Malayalam'); ?></option>
                        <option value="mr" <?php selected('mr', $grp_language); ?>><?php echo grp_i('Marathi'); ?></option>
                        <option value="nl" <?php selected('nl', $grp_language); ?>><?php echo grp_i('Dutch'); ?></option>
                        <option value="no" <?php selected('no', $grp_language); ?>><?php echo grp_i('Norwegian'); ?></option>
                        <option value="pl" <?php selected('pl', $grp_language); ?>><?php echo grp_i('Polish'); ?></option>
                        <option value="pt" <?php selected('pt', $grp_language); ?>><?php echo grp_i('Portuguese'); ?></option>
                        <option value="pt-BR" <?php selected('pt-BR', $grp_language); ?>><?php echo grp_i('Portuguese (Brazil)'); ?></option>
                        <option value="pt-PT" <?php selected('pt-PT', $grp_language); ?>><?php echo grp_i('Portuguese (Portugal)'); ?></option>
                        <option value="ro" <?php selected('ro', $grp_language); ?>><?php echo grp_i('Romanian'); ?></option>
                        <option value="ru" <?php selected('ru', $grp_language); ?>><?php echo grp_i('Russian'); ?></option>
                        <option value="sk" <?php selected('sk', $grp_language); ?>><?php echo grp_i('Slovak'); ?></option>
                        <option value="sl" <?php selected('sl', $grp_language); ?>><?php echo grp_i('Slovenian'); ?></option>
                        <option value="sr" <?php selected('sr', $grp_language); ?>><?php echo grp_i('Serbian'); ?></option>
                        <option value="sv" <?php selected('sv', $grp_language); ?>><?php echo grp_i('Swedish'); ?></option>
                        <option value="ta" <?php selected('ta', $grp_language); ?>><?php echo grp_i('Tamil'); ?></option>
                        <option value="te" <?php selected('te', $grp_language); ?>><?php echo grp_i('Telugu'); ?></option>
                        <option value="th" <?php selected('th', $grp_language); ?>><?php echo grp_i('Thai'); ?></option>
                        <option value="tl" <?php selected('tl', $grp_language); ?>><?php echo grp_i('Tagalog'); ?></option>
                        <option value="tr" <?php selected('tr', $grp_language); ?>><?php echo grp_i('Turkish'); ?></option>
                        <option value="uk" <?php selected('uk', $grp_language); ?>><?php echo grp_i('Ukrainian'); ?></option>
                        <option value="vi" <?php selected('vi', $grp_language); ?>><?php echo grp_i('Vietnamese'); ?></option>
                        <option value="zh-CN" <?php selected('zh-CN', $grp_language); ?>><?php echo grp_i('Chinese (Simplified)'); ?></option>
                        <option value="zh-TW" <?php selected('zh-TW', $grp_language); ?>><?php echo grp_i('Chinese (Traditional)'); ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control" type="checkbox" id="grp_install_db" name="grp_install_db" >
                    <label class="control-label" for="grp_install_db"><?php echo grp_i('Re-create the DB tables for the plugin (service option)'); ?></label>
                </div>
                <p class="submit" style="text-align: left">
                    <input name="grp_setting" type="submit" value="Save" class="button-primary button" tabindex="4">
                </p>
            </form>
            <hr>
            <!-- Enable/disable Google Reviews Business toggle -->
            <form method="POST" action="?page=grp&amp;grp_active=<?php echo (string)((int)($grp_enabled != true)); ?>">
                <?php wp_nonce_field('grp-wpnonce_grp_active', 'grp-form_nonce_grp_active'); ?>
                <span class="status">
                    <?php echo grp_i('Google Reviews Business is currently '). '<b>' .($grp_enabled ? grp_i('enabled') : grp_i('disabled')). '</b>'; ?>
                </span>
                <input type="submit" name="grp_active" class="button" value="<?php echo $grp_enabled ? grp_i('Disable') : grp_i('Enable'); ?>" />
            </form>
            <hr>
            <!-- Debug information -->
            <button class="btn btn-primary btn-small" type="button" data-toggle="collapse" data-target="#debug" aria-expanded="false" aria-controls="debug">
                <?php echo grp_i('Debug Information'); ?>
            </button>
            <div id="debug" class="collapse">
                <textarea style="width:90%; height:200px;" onclick="this.select();return false;" readonly><?php
                    rplg_debug(GRP_VERSION, grp_options(), 'widget_grp_widget'); grp_debug(); ?>
                </textarea>
            </div>
            <div style="max-width:700px"><?php echo grp_i('Feel free to contact support team by support@richplugins.com for any issues but please don\'t forget to provide debug information that you can get by click on \'Debug Information\' button.'); ?></div>
            <hr>
            <!-- Reset form -->
            <form action="?page=grp" method="POST">
                <?php wp_nonce_field('grp-wpnonce_grp_reset', 'grp-form_nonce_grp_reset'); ?>
                <p>
                    <input type="submit" value="Reset" name="reset" onclick="return confirm('<?php echo grp_i('Are you sure you want to reset the Google Reviews Business plugin?'); ?>')" class="button" />
                    <?php echo grp_i('This removes all plugin-specific settings.') ?>
                </p>
                <p>
                    <input type="checkbox" id="reset_db" name="reset_db">
                    <label for="reset_db"><?php echo grp_i('Remove all data including Google Reviews'); ?></label>
                </p>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane" id="shortcode">
            <?php wp_nonce_field('grw_wpnonce', 'grw_nonce'); ?>
            <h4><?php echo grp_i('Shortcode Builder'); ?></h4>
            <?php
            class grp_widget {
                function get_field_id($id) {
                    return $id;
                }
                function get_field_name($name) {
                    return $name;
                }
                function render_id_options() {
                    $place_name           = '';
                    $place_id             = '';
                    $place_photo          = '';
                    include(dirname(__FILE__) . '/grp-id-options.php');
                }
                function render_options() {
                    $auto_load            = '';
                    $rating_snippet       = '';
                    $pagination           = '';
                    $sort                 = '';
                    $min_filter           = '';
                    $text_size            = '';
                    $dark_theme           = '';
                    $view_mode            = '';
                    $hide_photo           = '';
                    $hide_avatar          = '';
                    $write_review         = '';
                    $leave_review_link    = '';
                    $disable_user_link    = '';
                    $slider_speed         = '';
                    $slider_count         = '';
                    $slider_hide_pagin    = '';
                    $open_link            = '';
                    $nofollow_link        = '';
                    $max_width            = '';
                    $max_height           = '';
                    $reviews_lang         = '';
                    $hide_float_badge     = '';
                    $lazy_load_img        = '';
                    include(dirname(__FILE__) . '/grp-options.php');
                }
            }
            $grp_widget = new grp_widget;
            if ($grp_google_api_key) { ?>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form form-horizontal">
                        <?php
                        include(dirname(__FILE__) . '/grp-finder.php');
                        $grp_widget->render_id_options();
                        ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form form-horizontal">
                        <?php $grp_widget->render_options(); ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form form-horizontal">
                        <textarea class="rplg-shortcode" onclick="this.select();return false;" readonly></textarea>
                    </div>
                </div>
            </div>
            <?php } else { ?>
                <p><?php echo grp_i('To use shortcode, please first fill \'Google Places API Key\' fields on Setting tab'); ?></p>
            <?php } ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="mod">
            <h4><?php echo grp_i('Moderation'); ?></h4>
            <?php if ($grp_google_api_key) { ?>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form form-horizontal">
                        <div class="wp-places">There are no Places yet</div>
                    </div>
                </div>
                <div id="mod-reviews" class="col-sm-4" style="display:none">
                    <div class="form form-horizontal">
                        <div class="wp-reviews"></div>
                    </div>
                </div>
                <div id="mod-shortcode-builder" class="col-sm-4" style="display:none">
                    <div class="form form-horizontal">
                        <h4>Shortcode</h4>
                        <textarea class="rplg-shortcode" onclick="this.select();return false;" readonly></textarea>
                        <?php
                        $grp_widget->render_id_options();
                        $grp_widget->render_options();
                        ?>
                    </div>
                </div>
            </div>
            <?php } else { ?>
                <p><?php echo grp_i('To use moderation, please first fill \'Google Places API Key\' fields on Setting tab'); ?></p>
            <?php } ?>
        </div>
        <script type="text/javascript">
            function shortcode(el) {
                if (!el.querySelector('.grw-google-place-id').value) {
                    return;
                }
                var args = '', ctrls = el.querySelectorAll('.form-control[name]');
                for (var i = 0; i < ctrls.length; i++) {
                    var ctrl = ctrls[i];
                    if (ctrl.type == 'checkbox') {
                        if (ctrl.checked) {
                            args += ' ' + ctrl.getAttribute('name') + '=' + ctrl.checked;
                        }
                    } else if (ctrl.value) {
                        args += ' ' + ctrl.getAttribute('name') + '=';
                        if (ctrl.value.indexOf(' ') > -1) {
                            args += '"' + ctrl.value + '"';
                        } else {
                            args += ctrl.value;
                        }
                    }
                }
                var textarea = el.querySelector('.rplg-shortcode');
                textarea.innerHTML = '[google-reviews-pro' + args + ']';
            }

            jQuery(document).ready(function($) {
                $('a[data-toggle="tab"]').on('click', function(e)  {
                    var active = $(this).attr('href');
                    $('.tab-content ' + active).addClass('active').show().siblings().hide();
                    $(this).parent('li').addClass('active').siblings().removeClass('active');
                    e.preventDefault();
                });
                $('button[data-toggle="collapse"]').click(function () {
                    $target = $(this);
                    $collapse = $target.next();
                    $collapse.slideToggle(500);
                });

                // Init shortcode tab
                var shortcodeEl = document.getElementById('shortcode'),
                    grw_init_async = function(attempts) {
                        if (!window.grw_init) {
                            if (attempts > 0) {
                                setTimeout(function() { grw_init_async(attempts - 1); }, 300);
                            }
                            return;
                        }
                        grw_init({
                            widgetId: 'shortcode',
                            cb: function() {
                                shortcode(shortcodeEl);
                            }
                        });
                    };

                grw_init_async(10);

                $('#shortcode input.form-control[type="text"]').keyup(function() {
                    shortcode(shortcodeEl);
                });
                $('#shortcode input.form-control[type="checkbox"],select.form-control').change(function() {
                    shortcode(shortcodeEl);
                });

                // Init moderation tab
                var modEl = document.getElementById('mod'),
                    grw_mod_init_async = function(attempts) {
                        if (!window.grw_mod_init) {
                            if (attempts > 0) {
                                setTimeout(function() { grw_mod_init_async(attempts - 1); }, 300);
                            }
                            return;
                        }
                        grw_mod_init({
                            widgetId: 'mod',
                            cb: function() {
                                shortcode(modEl);
                            }
                        });
                    };

                grw_mod_init_async(10);

                $('#mod input.form-control[type="text"]').keyup(function() {
                    shortcode(modEl);
                });
                $('#mod input.form-control[type="checkbox"],select.form-control').change(function() {
                    shortcode(modEl);
                });

                $('.bs-sidenav > li > a').each(function() {
                    var $this = $(this),
                        ul = $('<ul class="nav"></ul>'),
                        name = $this.attr('href').replace('#', '');

                    $('h5[id^="' + name + '-"]').each(function() {
                        var li = $('<li></li>');
                        li.html('<a href="#' + this.id + '">' + this.textContent + '</a>');
                        ul.append(li);
                    });
                    $($this.parent()).append(ul);
                });
                $('.bs-sidenav a').click(function() {
                    $('.bs-sidenav li.active').removeClass('active');
                    $(this).parent().addClass('active');
                    return true;
                });
            });
        </script>
    </div>
</div>