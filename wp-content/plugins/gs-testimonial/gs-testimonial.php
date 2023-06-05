<?php
/**
 *
 * @package   GS_Testimonial
 * @author    Golam Samdani <samdani1997@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.gsamdani.com
 * @copyright 2015 Golam Samdani
 *
 * @wordpress-plugin
 * Plugin Name:			GS Testimonial Lite
 * Plugin URI:			http://www.gsamdani.com/wordpress-plugins
 * Description:       	Best Responsive Testimonials slider to display client's testimonials / recommendations. Display anywhere at your site using shortcode like [gs_testimonial] Check more shortcode examples and documention at <a href="http://testimonial.gsamdani.com">GS Testimonial Pro Docs</a> 
 * Version:           	1.8.2
 * Author:       		Golam Samdani
 * Author URI:       	http://www.gsamdani.com
 * Text Domain:       	gst
 * License:           	GPL-2.0+
 * License URI:       	http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Defining constants
 */
if( ! defined( 'GST_VERSION' ) ) define( 'GST_VERSION', '1.8.2' );
if( ! defined( 'GST_MENU_POSITION' ) ) define( 'GST_MENU_POSITION', 32 );
if( ! defined( 'GST_PLUGIN_DIR' ) ) define( 'GST_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if( ! defined( 'GST_PLUGIN_URI' ) ) define( 'GST_PLUGIN_URI', plugins_url( '', __FILE__ ) );
if( ! defined( 'GST_FILES_DIR' ) ) define( 'GST_FILES_DIR', GST_PLUGIN_DIR . 'gst-files' );
if( ! defined( 'GST_FILES_URI' ) ) define( 'GST_FILES_URI', GST_PLUGIN_URI . '/gst-files' );


require_once GST_FILES_DIR . '/gs-testimonial-cpt.php';
require_once GST_FILES_DIR . '/gs-testimonial-metabox.php';
require_once GST_FILES_DIR . '/gs-testimonial-column.php';
require_once GST_FILES_DIR . '/gs-testimonial-shortcode.php';
require_once GST_FILES_DIR . '/gs-plugins/gs-plugins.php';
require_once GST_FILES_DIR . '/gs-plugins/gs-plugins-free.php';
require_once GST_FILES_DIR . '/gs-plugins/gs-testimonial-help.php';
require_once GST_FILES_DIR . '/gs-testimonial-script.php';
require_once GST_FILES_DIR . '/admin/class.settings-api.php';
require_once GST_FILES_DIR . '/admin/gs_testi_options_config.php';


add_action('do_meta_boxes', 'gs_testimonial_change_image_box');
function gs_testimonial_change_image_box()
{
    remove_meta_box( 'postimagediv', 'gs_testimonial', 'side' );
    add_meta_box('postimagediv', __('Testimonial Author Image'), 'post_thumbnail_meta_box', 'gs_testimonial', 'side', 'low');
}


/**
 * Admin notice for Free
 */
function gst_get_free() { ?>
	
	<?php ob_start(); ?>
	<div class="update-nag">
			<h3>Upgrade to PRO GS Testimonial Slider for free!!</h3>
			<p>Dear GS Testimonial Slider User --<br>
			Great News! <br>
			Upgrade your existing one to PRO version, it's 100% free !!
			 As we are lunching, offering you to download GS Testimonial slider wordpress PRO plugin completely free till 15th March'15. Hurry up & grab your copy. <br>

			Download here <a href="http://goo.gl/6SrINy" target="_blank">Download PRO version</a></p>
			<p>GS Testimonial Slider Team</p>
	</div>
	<?php echo ob_get_clean();
}
//add_action('admin_notices', 'gst_get_free');
//add_action('network_admin_notices', 'gst_get_free');

if ( ! function_exists('gs_testimonial_pro_link') ) {
	function gs_testimonial_pro_link( $gsTesti_links ) {
		$gsTesti_links[] = '<a class="gs-pro-link" href="https://www.gsamdani.com/product/gs-testimonial-slider" target="_blank">Go Pro!</a>';
		$gsTesti_links[] = '<a href="https://www.gsamdani.com/wordpress-plugins" target="_blank">GS Plugins</a>';
		return $gsTesti_links;
	}
	add_filter( 'plugin_action_links_' .plugin_basename(__FILE__), 'gs_testimonial_pro_link' );
}


/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function appsero_init_tracker_gs_testimonial() {

    if ( ! class_exists( 'AppSero\Insights' ) ) {
        require_once GST_FILES_DIR . '/client-testimonial/src/insights.php';
    }

    $insights = new AppSero\Insights( 'efbbfe11-e706-422e-99a3-fb49bce74e2d', 'GS Testimonial Slider', __FILE__ );
    $insights->init_plugin();
}

add_action( 'init', 'appsero_init_tracker_gs_testimonial' );


/**
 * @review_dismiss()
 * @gstestimonial_review_pending()
 * @gsteam_review_notice_message()
 * Make all the above functions working.
 */
function gstestimonial_review_notice(){

    gstestimonial_review_dismiss();
    gstestimonial_review_pending();

    $activation_time    = get_site_option( 'gstestimonial_active_time' );
    $review_dismissal   = get_site_option( 'gstestimonial_review_dismiss' );
    $maybe_later        = get_site_option( 'gstestimonial_maybe_later' );

    if ( 'yes' == $review_dismissal ) {
        return;
    }

    if ( ! $activation_time ) {
        add_site_option( 'gstestimonial_active_time', time() );
    }
    
    $daysinseconds = 259200; // 3 Days in seconds.
   
    if( 'yes' == $maybe_later ) {
        $daysinseconds = 604800 ; // 7 Days in seconds.
    }

    if ( time() - $activation_time > $daysinseconds ) {
        add_action( 'admin_notices' , 'gstestimonial_review_notice_message' );
    }

}
add_action( 'admin_init', 'gstestimonial_review_notice' );



/**
 * For the notice preview.
 */
function gstestimonial_review_notice_message(){
    $scheme      = (parse_url( $_SERVER['REQUEST_URI'], PHP_URL_QUERY )) ? '&' : '?';
    $url         = $_SERVER['REQUEST_URI'] . $scheme . 'gstestimonial_review_dismiss=yes';
    $dismiss_url = wp_nonce_url( $url, 'gstestimonial-review-nonce' );

    $_later_link = $_SERVER['REQUEST_URI'] . $scheme . 'gstestimonial_review_later=yes';
    $later_url   = wp_nonce_url( $_later_link, 'gstestimonial-review-nonce' );
    ?>
    
    <div class="gsteam-review-notice">
        <div class="gsteam-review-thumbnail">
            <img src="<?php echo plugins_url('gs-testimonial/gst-files/img/gs-testimonial-slider.png') ?>" alt="">
        </div>
        <div class="gsteam-review-text">
            <h3><?php _e( 'Leave A Review?', 'gst' ) ?></h3>
            <p><?php _e( 'We hope you\'ve enjoyed using GS Testimonial Slider! Would you consider leaving us a review on WordPress.org?', 'gst' ) ?></p>
            <ul class="gsteam-review-ul">
                <li>
                    <a href="https://wordpress.org/support/plugin/gs-testimonial/reviews/?filter=5" target="_blank">
                        <span class="dashicons dashicons-external"></span>
                        <?php _e( 'Sure! I\'d love to!', 'gst' ) ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $dismiss_url ?>">
                        <span class="dashicons dashicons-smiley"></span>
                        <?php _e( 'I\'ve already left a review', 'gst' ) ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $later_url ?>">
                        <span class="dashicons dashicons-calendar-alt"></span>
                        <?php _e( 'Maybe Later', 'gst' ) ?>
                    </a>
                </li>
                <li>
                    <a href="https://www.gsamdani.com/support/" target="_blank">
                        <span class="dashicons dashicons-sos"></span>
                        <?php _e( 'I need help!', 'gst' ) ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $dismiss_url ?>">
                        <span class="dashicons dashicons-dismiss"></span>
                        <?php _e( 'Never show again', 'gst' ) ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <?php
}

/**
 * For Dismiss! 
 */
function gstestimonial_review_dismiss(){

    if ( ! is_admin() ||
        ! current_user_can( 'manage_options' ) ||
        ! isset( $_GET['_wpnonce'] ) ||
        ! wp_verify_nonce( sanitize_key( wp_unslash( $_GET['_wpnonce'] ) ), 'gstestimonial-review-nonce' ) ||
        ! isset( $_GET['gstestimonial_review_dismiss'] ) ) {

        return;
    }

    add_site_option( 'gstestimonial_review_dismiss', 'yes' ); 
}

/**
 * For Maybe Later Update.
 */
function gstestimonial_review_pending() {

    if ( ! is_admin() ||
        ! current_user_can( 'manage_options' ) ||
        ! isset( $_GET['_wpnonce'] ) ||
        ! wp_verify_nonce( sanitize_key( wp_unslash( $_GET['_wpnonce'] ) ), 'gstestimonial-review-nonce' ) ||
        ! isset( $_GET['gstestimonial_review_later'] ) ) {

        return;
    }
    // Reset Time to current time.
    update_site_option( 'gstestimonial_active_time', time() );
    update_site_option( 'gstestimonial_maybe_later', 'yes' );

}

/**
 * Remove Reviews Metadata on plugin Deactivation.
 */
function gstestimonial_deactivate() {
    delete_option('gstestimonial_active_time');
    delete_option('gstestimonial_maybe_later');
}
register_deactivation_hook(__FILE__, 'gstestimonial_deactivate');


/**
 * Activation redirects
 *
 * @since v1.0.0
 */
function gstestimonial_activate() {
    add_option('gstestimonial_activation_redirect', true);
}
register_activation_hook(__FILE__, 'gstestimonial_activate');

/**
 * Redirect to options page
 *
 * @since v1.0.0
 */
function gstestimonial_redirect() {
    if (get_option('gstestimonial_activation_redirect', false)) {
        delete_option('gstestimonial_activation_redirect');
        if(!isset($_GET['activate-multi']))
        {
            
            wp_redirect("edit.php?post_type=gs_testimonial&page=gs-testimonial-help");
        }
    }
}
add_action('admin_init', 'gstestimonial_redirect');



/**
 * Admin Notice
 */
function gstestimonial_admin_notice() {
  if ( current_user_can( 'install_plugins' ) ) {
    global $current_user ;
    $user_id = $current_user->ID;
    /* Check that the user hasn't already clicked to ignore the message */
    if ( ! get_user_meta($user_id, 'gstesti_ignore_notice279') ) {
      echo '<div class="gstesti-admin-notice updated" style="display: flex; align-items: center; padding-left: 0; border-left-color: #EF4B53"><p style="width: 32px;">';
      echo '<img style="width: 100%; display: block;"  src="' . plugins_url('gs-testimonial/gst-files/img/gs-testimonial-slider.png'). '" ></p><p> ';
      printf(__('<strong>GS Testimonial Slider</strong> now powering huge websites. Use the coupon code <strong>ENJOY25P</strong> to redeem a <strong>25&#37; </strong> discount on Pro. <a href="https://www.gsamdani.com/product/gs-testimonial-slider/" target="_blank" style="text-decoration: none;"><span class="dashicons dashicons-smiley" style="margin-left: 10px;"></span> Apply Coupon</a>
        <a href="%1$s" style="text-decoration: none; margin-left: 10px;"><span class="dashicons dashicons-dismiss"></span> I\'m good with free version</a>'),  admin_url( 'edit.php?post_type=gs_testimonial&page=testimonial-settings&gstestimonial_nag_ignore=0' ));
      echo "</p></div>";
    }
  }
}
add_action('admin_notices', 'gstestimonial_admin_notice');

/**
 * Nag Ignore
 */
function gstestimonial_nag_ignore() {
  global $current_user;
        $user_id = $current_user->ID;
        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset($_GET['gstestimonial_nag_ignore']) && '0' == $_GET['gstestimonial_nag_ignore'] ) {
             add_user_meta($user_id, 'gstesti_ignore_notice279', 'true', true);
  }
}
add_action('admin_init', 'gstestimonial_nag_ignore');