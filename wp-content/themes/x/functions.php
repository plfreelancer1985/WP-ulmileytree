<?php

//hide posts
function posts_exclude_from_everywhere($query) {
      if ( $query->is_home() || $query->is_feed() ||  $query->is_search() || $query->is_archive() ) {
          $query->set('post__not_in', array(4545));
      }
}
add_action('pre_get_posts', 'posts_exclude_from_everywhere');

add_post_type_support( 'page', 'excerpt' );

/*function register_my_menu() {
  register_nav_menu('new-menu',__( 'New Menu' ));
}
add_action( 'init', 'register_my_menu' );*/

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Theme functions for X.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Set Paths
//   02. Require Files
// =============================================================================

// Set Paths
// =============================================================================

$func_path = 'framework/functions';
$glob_path = 'framework/functions/global';
$admn_path = 'framework/functions/global/admin';
$tmgp_path = 'framework/functions/global/admin/tmg';
$eque_path = 'framework/functions/global/enqueue';
$plgn_path = 'framework/functions/global/plugins';



// Require Files
// =============================================================================

//
// Helpers, conditionals, and stack data.
//

require_once( $glob_path . '/debug.php' );
require_once( $glob_path . '/helper.php' );
require_once( $glob_path . '/conditionals.php' );
require_once( $glob_path . '/stack-data.php' );


//
// Admin.
//

require_once( $admn_path . '/thumbnails/setup.php' );
require_once( $admn_path . '/setup.php' );
require_once( $admn_path . '/migration.php' );
require_once( $admn_path . '/meta/setup.php' );
require_once( $admn_path . '/sidebars.php' );
require_once( $admn_path . '/widgets.php' );
require_once( $admn_path . '/custom-post-types.php' );
require_once( $admn_path . '/customizer/setup.php' );
require_once( $admn_path . '/addons/setup.php' );


//
// TMG plugin activation.
//

require_once( $tmgp_path . '/activation.php' );
require_once( $tmgp_path . '/registration.php' );
require_once( $tmgp_path . '/updates.php' );


//
// Enqueue styles and scripts.
//

require_once( $eque_path . '/styles.php' );
require_once( $eque_path . '/scripts.php' );


//
// Global functions.
//

require_once( $glob_path . '/meta.php' );
require_once( $glob_path . '/featured.php' );
require_once( $glob_path . '/pagination.php' );
require_once( $glob_path . '/navbar.php' );
require_once( $glob_path . '/breadcrumbs.php' );
require_once( $glob_path . '/classes.php' );
require_once( $glob_path . '/portfolio.php' );
require_once( $glob_path . '/social.php' );
require_once( $glob_path . '/content.php' );
require_once( $glob_path . '/remove.php' );


//
// Stack specific functions.
//

require_once( $func_path . '/integrity.php' );
require_once( $func_path . '/renew.php' );
require_once( $func_path . '/icon.php' );
require_once( $func_path . '/ethos.php' );


//
// Integrated plugins.
//

if ( X_BBPRESS_IS_ACTIVE ) {
  require_once( $plgn_path . '/bbpress.php' );
}

if ( X_BUDDYPRESS_IS_ACTIVE ) {
  require_once( $plgn_path . '/buddypress.php' );
}

if ( X_REVOLUTION_SLIDER_IS_ACTIVE ) {
  require_once( $plgn_path . '/revolution-slider.php' );
}

if ( X_SOLILOQUY_IS_ACTIVE ) {
  require_once( $plgn_path . '/soliloquy.php' );
}

if ( X_VISUAL_COMOPSER_IS_ACTIVE ) {
  require_once( $plgn_path . '/visual-composer.php' );
}

if ( X_WOOCOMMERCE_IS_ACTIVE ) {
  require_once( $plgn_path . '/woocommerce.php' );
}

if ( X_WPML_IS_ACTIVE ) {
  require_once( $plgn_path . '/wpml.php' );
}

add_action('wp_head', 'font_awesome_cdn');
function font_awesome_cdn(){ ?>
<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<?php
}

add_action('wp_head', function(){?>
<meta name="geo.region" content="CA-ON" />
<meta name="geo.placename" content="Etobicoke" />
<meta name="geo.position" content="43.7301915;-79.5588389" />
<meta name="ICBM" content="43.7301915, -79.5588389" />




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89453328-1', 'auto');
  ga('send', 'pageview');

</script>

<script>
  gtag('config', 'AW-849186798/QJX_CJqry6QBEO6f9pQD', {
    'phone_conversion_number': '4167493723'
  });
</script>


<?php });


