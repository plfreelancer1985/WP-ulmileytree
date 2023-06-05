<?php

// =============================================================================
// FUNCTIONS/GLOBAL/ENQUEUE/STYLES.PHP
// -----------------------------------------------------------------------------
// Theme styles.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Site Styles
//   02. Enqueue Admin Styles
//   03. Enqueue Customizer Styles
//   04. Filter Style Loader Tags
// =============================================================================

// Enqueue Site Styles
// =============================================================================

if ( ! function_exists( 'x_enqueue_site_styles' ) ) :
  function x_enqueue_site_styles() {

    //
    // Stack data.
    //

    $stack  = x_get_stack();
    $design = x_get_option( 'x_integrity_design', 'light' );

    if ( $stack == 'integrity' && $design == 'light' ) {
      $ext = '-light';
    } elseif ( $stack == 'integrity' && $design == 'dark' ) {
      $ext = '-dark';
    } else {
      $ext = '';
    }


    //
    // Font data.
    //

    $body_font_family_query         = x_get_font_family_query( x_get_option( 'x_body_font_family', 'Lato' ) );
    $body_font_weight_and_style     = x_get_option( 'x_body_font_weight', '400' );
    $body_font_weight               = x_get_font_weight( $body_font_weight_and_style );

    $headings_font_family_query     = x_get_font_family_query( x_get_option( 'x_headings_font_family', 'Lato' ) );
    $headings_font_weight_and_style = x_get_option( 'x_headings_font_weight', '400' );
    $headings_font_weight           = x_get_font_weight( $headings_font_weight_and_style );

    $logo_font_family_query         = x_get_font_family_query( x_get_option( 'x_logo_font_family', 'Lato' ) );
    $logo_font_weight_and_style     = x_get_option( 'x_logo_font_weight', '400' );
    $logo_font_weight               = x_get_font_weight( $logo_font_weight_and_style );

    $navbar_font_family_query       = x_get_font_family_query( x_get_option( 'x_navbar_font_family', 'Lato' ) );
    $navbar_font_weight_and_style   = x_get_option( 'x_navbar_font_weight', '400' );
    $navbar_font_weight             = x_get_font_weight( $navbar_font_weight_and_style );

    $subsets                        = 'latin,latin-ext';

    if ( x_get_option( 'x_custom_font_subsets', '' ) == '1' ) {
      if ( x_get_option( 'x_custom_font_subset_cyrillic', '' ) == '1'   ) { $subsets .= ',cyrillic,cyrillic-ext'; }
      if ( x_get_option( 'x_custom_font_subset_greek', '' ) == '1'      ) { $subsets .= ',greek,greek-ext'; }
      if ( x_get_option( 'x_custom_font_subset_vietnamese', '' ) == '1' ) { $subsets .= ',vietnamese'; }
    }

    $custom_font_args = array(
      'family' => $body_font_family_query . ':' . $body_font_weight . ',' . $body_font_weight . 'italic,700,700italic|' . $navbar_font_family_query . ':' . $navbar_font_weight_and_style . '|' . $headings_font_family_query . ':' . $headings_font_weight_and_style . '|' . $logo_font_family_query . ':' . $logo_font_weight_and_style,
      'subset' => $subsets
    );

    $standard_font_args = array(
      'family' => 'Lato:' . $body_font_weight . ',' . $body_font_weight . 'italic,' . $navbar_font_weight_and_style . ',' . $headings_font_weight_and_style . ',' . $logo_font_weight_and_style . ',700,700italic',
      'subset' => $subsets
    );

    $get_custom_font_family   = add_query_arg( $custom_font_args,   '//fonts.googleapis.com/css' );
    $get_standard_font_family = add_query_arg( $standard_font_args, '//fonts.googleapis.com/css' );


    //
    // Register styles.
    //

    wp_register_style( 'x-stack', X_TEMPLATE_URL . '/framework/css/site/stacks/' . $stack . $ext . '.css', NULL, X_VERSION, 'all' );


    //
    // Enqueue styles.
    //

    if ( is_child_theme() ) {
      $dep = ( apply_filters( 'x_enqueue_parent_stylesheet', false ) ) ? array( 'x-stack' ) : NULL;
      wp_enqueue_style( 'x-child', get_stylesheet_directory_uri() . '/style.css', $dep, X_VERSION, 'all' );
    } else {
      wp_enqueue_style( 'x-stack' );
    }

    if ( is_rtl() ) {
      wp_enqueue_style( 'x-rtl', X_TEMPLATE_URL . '/framework/css/site/rtl/' . $stack . '.css', NULL, X_VERSION, 'all' );
    }

    if ( X_BBPRESS_IS_ACTIVE ) {
      if ( x_is_bbpress() ) {
        wp_deregister_style( 'buttons' );
      }
      wp_deregister_style( 'bbp-default' );
      wp_enqueue_style( 'x-bbpress', X_TEMPLATE_URL . '/framework/css/site/bbpress/' . $stack . $ext . '.css', NULL, X_VERSION, 'all' );
    }

    if ( X_BUDDYPRESS_IS_ACTIVE ) {
      wp_deregister_style( 'bp-legacy-css' );
      wp_deregister_style( 'bp-admin-bar' );
      wp_enqueue_style( 'x-buddypress', X_TEMPLATE_URL . '/framework/css/site/buddypress/' . $stack . $ext . '.css', NULL, X_VERSION, 'all' );
    }

    if ( X_WOOCOMMERCE_IS_ACTIVE ) {
      wp_deregister_style( 'woocommerce-layout' );
      wp_deregister_style( 'woocommerce-general' );
      wp_deregister_style( 'woocommerce-smallscreen' );
      wp_enqueue_style( 'x-woocommerce', X_TEMPLATE_URL . '/framework/css/site/woocommerce/' . $stack . $ext . '.css', NULL, X_VERSION, 'all' );
    }

    if ( X_GRAVITY_FORMS_IS_ACTIVE ) {
      wp_enqueue_style( 'x-gravity-forms', X_TEMPLATE_URL . '/framework/css/site/gravity_forms/' . $stack . $ext . '.css', NULL, X_VERSION, 'all' );
    }

    if ( X_CONTACT_FORM_7_IS_ACTIVE ) {
      wp_deregister_style( 'contact-form-7' );
    }

    if ( x_get_option( 'x_custom_fonts', '' ) == '1' ) {
      wp_enqueue_style( 'x-font-custom', $get_custom_font_family, NULL, X_VERSION, 'all' );
    } else {
      wp_enqueue_style( 'x-font-standard', $get_standard_font_family, NULL, X_VERSION, 'all' );
    }

  }
endif;

add_action( 'wp_enqueue_scripts', 'x_enqueue_site_styles' );



// Enqueue Admin Styles
// =============================================================================

if ( ! function_exists( 'x_enqueue_admin_styles' ) ) :
  function x_enqueue_admin_styles( $hook ) {

    wp_enqueue_style( 'x-global', X_TEMPLATE_URL . '/framework/css/admin/global.css', NULL, X_VERSION, 'all' );
    wp_enqueue_style( 'wp-color-picker' );

    if ( $hook == 'widgets.php' ) {
      wp_enqueue_style( 'x-widgets', X_TEMPLATE_URL . '/framework/css/admin/widgets.css', NULL, X_VERSION, 'all' );
    }

    if ( strpos( $hook, 'x-addons' ) != false ) {
      wp_enqueue_style( 'x-addons', X_TEMPLATE_URL . '/framework/css/admin/addons.css', NULL, X_VERSION, 'all' );
    }

    if ( strpos( $hook, 'x-extensions' ) != false ) {
      wp_enqueue_style( 'jquery-ui-datepicker', X_TEMPLATE_URL . '/framework/css/admin/datepicker.css', NULL, X_VERSION, 'all' );
    }

    if ( $hook == 'appearance_page_ups_sidebars' ) {
      wp_enqueue_style( 'x-sidebars', X_TEMPLATE_URL . '/framework/css/admin/sidebars.css', NULL, X_VERSION, 'all' );    
    }

    if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'edit-tags.php' ) {
      wp_enqueue_style( 'x-meta', X_TEMPLATE_URL . '/framework/css/admin/meta.css', NULL, X_VERSION, 'all' );
    }

    if ( X_VISUAL_COMOPSER_IS_ACTIVE ) {
      wp_enqueue_style( 'x-visual-composer', X_TEMPLATE_URL . '/framework/css/admin/visual-composer.css', NULL, X_VERSION, 'all' );
    }

  }
endif;

add_action( 'admin_enqueue_scripts', 'x_enqueue_admin_styles' );



// Enqueue Customizer Styles
// =============================================================================

if ( ! function_exists( 'x_enqueue_customizer_controls_styles' ) ) :
  function x_enqueue_customizer_controls_styles() {

    wp_enqueue_style( 'x-customizer-controls', X_TEMPLATE_URL . '/framework/css/admin/customizer-controls.css', NULL, X_VERSION, 'all' );

  }
endif;

add_action( 'customize_controls_print_styles', 'x_enqueue_customizer_controls_styles' );



// Filter Style Loader Tags
// =============================================================================

if ( ! function_exists( 'x_filter_style_loader_tag' ) ) :
  function x_filter_style_loader_tag( $tag, $handle ) {

    if ( X_BBPRESS_IS_ACTIVE ) {
      if ( $handle == 'editor-buttons' && x_is_bbpress() && ! is_admin() ) {
        $tag = '';
      }
    }

    return $tag;

  }
endif;

add_filter( 'style_loader_tag', 'x_filter_style_loader_tag', 10, 2 );