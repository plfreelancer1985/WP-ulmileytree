<?php

// =============================================================================
// FUNCTIONS/GLOBAL/ADMIN/CUSTOMIZER/SETUP.PHP
// -----------------------------------------------------------------------------
// Initializes and sets up the WordPress Live Preview feature by including
// sections, controls, and settings.
//
// - Sections: organize the controls.
// - Controls: receive input and pass it to the settings.
// - Settings: interface with the existing options in the theme.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Set Path
//   02. Require Files
//   03. Update Native Customizer Functionality
// =============================================================================

// Set Path
// =============================================================================

$cstm_path = X_TEMPLATE_PATH . '/framework/functions/global/admin/customizer';



// Require Files
// =============================================================================

require_once( $cstm_path . '/controls.php' );
require_once( $cstm_path . '/fonts.php' );
require_once( $cstm_path . '/register.php' );
require_once( $cstm_path . '/output.php' );
require_once( $cstm_path . '/transients.php' );
require_once( $cstm_path . '/preloader.php' );



// Update Native Customizer Functionality
// =============================================================================

function x_update_native_customizer_functionality( $wp_customize ) {

  $wp_customize->remove_section( 'nav' );
  $wp_customize->remove_section( 'colors' );
  $wp_customize->remove_section( 'themes' );
  $wp_customize->remove_section( 'title_tagline' );
  $wp_customize->remove_section( 'background_image' );
  $wp_customize->remove_section( 'static_front_page' );

  $wp_customize->remove_control( 'blogname' );
  $wp_customize->remove_control( 'blogdescription' );
  $wp_customize->remove_control( 'nav_menu_locations[primary]' );
  $wp_customize->remove_control( 'nav_menu_locations[footer]' );

  // if ( $wp_customize->get_control( 'site_icon' ) ) {
  //   $wp_customize->get_control( 'site_icon' )->section     = 'x_customizer_section_social';
  //   $wp_customize->get_control( 'site_icon' )->priority    = '1000';
  //   $wp_customize->get_control( 'site_icon' )->description = '';
  // }

}

add_action( 'customize_register', 'x_update_native_customizer_functionality' );