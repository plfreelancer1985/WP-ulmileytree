<?php

// =============================================================================
// FUNCTIONS/GLOBAL/ADMIN/CUSTOMIZER/REGISTER.PHP
// -----------------------------------------------------------------------------
// Sets up the options to be used in the Customizer.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Register Options
//       a. Lists
//       b. Sections
//       c. Options - Stack
//       d. Options - Integrity
//       e. Options - Renew
//       f. Options - Icon
//       g. Options - Ethos
//       h. Options - Layout and Design
//       i. Options - Typography
//       j. Options - Buttons
//       k. Options - Header
//       l. Options - Footer
//       m. Options - Blog
//       n. Options - Portfolio
//       o. Options - bbPress
//       p. Options - BuddyPress
//       q. Options - WooCommerce
//       r. Options - Social
//       s. Options - Site Icons
//       t. Options - Custom
//       u. Output - Sections
//       v. Output - Settings
//       w. Output - Controls
// =============================================================================

// Register Options
// =============================================================================

function x_customizer_options_register( $wp_customize ) {

  //
  // Lists.
  //

  $list_on_off = array(
    '1' => 'On',
    ''  => 'Off'
  );

  $list_stacks = array(
    'integrity' => __( 'Integrity', '__x__' ),
    'renew'     => __( 'Renew', '__x__' ),
    'icon'      => __( 'Icon', '__x__' ),
    'ethos'     => __( 'Ethos', '__x__' )
  );

  $list_site_layouts = array(
    'full-width' => __( 'Fullwidth', '__x__' ),
    'boxed'      => __( 'Boxed', '__x__' )
  );

  $list_content_layouts = array(
    'content-sidebar' => __( 'Content Left, Sidebar Right', '__x__' ),
    'sidebar-content' => __( 'Sidebar Left, Content Right', '__x__' ),
    'full-width'      => __( 'Fullwidth', '__x__' )
  );

  $list_section_layouts = array(
    'sidebar'    => __( 'Use Global Content Layout', '__x__' ),
    'full-width' => __( 'Fullwidth', '__x__' )
  );

  $list_integrity_designs = array(
    'light' => __( 'Light', '__x__' ),
    'dark'  => __( 'Dark', '__x__' )
  );

  $list_renew_entry_icon_positions = array(
    'standard' => __( 'Standard', '__x__' ),
    'creative' => __( 'Creative', '__x__' )
  );

  $list_ethos_post_carousel_and_slider_display = array(
    'most-commented' => __( 'Most Commented', '__x__' ),
    'random'         => __( 'Random', '__x__' ),
    'featured'       => __( 'Featured', '__x__' )
  );

  $list_button_styles = array(
    'real'        => __( '3D', '__x__' ),
    'flat'        => __( 'Flat', '__x__' ),
    'transparent' => __( 'Transparent', '__x__' )
  );

  $list_button_shapes = array(
    'square'  => __( 'Square', '__x__' ),
    'rounded' => __( 'Rounded', '__x__' ),
    'pill'    => __( 'Pill', '__x__' )
  );

  $list_button_sizes = array(
    'mini'    => __( 'Mini', '__x__' ),
    'small'   => __( 'Small', '__x__' ),
    'regular' => __( 'Regular', '__x__' ),
    'large'   => __( 'Large', '__x__' ),
    'x-large' => __( 'Extra Large', '__x__' ),
    'jumbo'   => __( 'Jumbo', '__x__' )
  );

  $list_navbar_positions = array(
    'static-top'  => __( 'Static Top', '__x__' ),
    'fixed-top'   => __( 'Fixed Top', '__x__' ),
    'fixed-left'  => __( 'Fixed Left', '__x__' ),
    'fixed-right' => __( 'Fixed Right', '__x__' )
  );

  $list_logo_navigation_layouts = array(
    'inline'  => __( 'Inline', '__x__' ),
    'stacked' => __( 'Stacked', '__x__' )
  );

  $list_widget_areas = array(
    0 => __( 'None (Disables Widget Areas)', '__x__' ),
    1 => __( 'One', '__x__' ),
    2 => __( 'Two', '__x__' ),
    3 => __( 'Three', '__x__' ),
    4 => __( 'Four', '__x__' )
  );

  $list_left_right_positioning = array(
    'left'  => __( 'Left', '__x__' ),
    'right' => __( 'Right', '__x__' )
  );

  $list_blog_styles = array(
    'standard' => __( 'Standard', '__x__' ),
    'masonry'  => __( 'Masonry', '__x__' )
  );

  $list_masonry_columns = array(
    2 => __( 'Two', '__x__' ),
    3 => __( 'Three', '__x__' )
  );

  $list_shop_columns = array(
    1 => __( 'One', '__x__' ),
    2 => __( 'Two', '__x__' ),
    3 => __( 'Three', '__x__' ),
    4 => __( 'Four', '__x__' )
  );

  $list_sizing_site_max_width = array(
    'min'  => '500',
    'max'  => '1500',
    'step' => '10'
  );

  $list_sizing_site_width = array(
    'min'  => '72',
    'max'  => '90',
    'step' => '1'
  );

  $list_sizing_content_width = array(
    'min'  => '60',
    'max'  => '74',
    'step' => '1'
  );

  $list_sizing_sidebar_width = array(
    'min'  => '150',
    'max'  => '350',
    'step' => '10'
  );

  $list_woocommerce_navbar_cart_info = array(
    'inner'       => __( 'Single (Inner)', '__x__' ),
    'outer'       => __( 'Single (Outer)', '__x__' ),
    'inner-outer' => __( 'Double (Inner / Outer)', '__x__' ),
    'outer-inner' => __( 'Double (Outer / Inner)', '__x__' )
  );

  $list_woocommerce_navbar_cart_layout = array(
    'inline'  => __( 'Inline', '__x__' ),
    'stacked' => __( 'Stacked', '__x__' )
  );

  $list_woocommerce_navbar_cart_style = array(
    'square'  => __( 'Square', '__x__' ),
    'rounded' => __( 'Rounded', '__x__' )
  );

  $list_woocommerce_navbar_cart_content = array(
    'icon'  => __( 'Icon', '__x__' ),
    'total' => __( 'Cart Total', '__x__' ),
    'count' => __( 'Item Count', '__x__' )
  );

  $list_fonts            = x_font_data_families();
  $list_font_weights     = x_font_data_family_weights();
  $list_all_font_weights = x_font_data_all_weights();


  //
  // Sections.
  //

  $x['sec'][] = array( 'x_customizer_section_stack',             __( 'Stack', '__x__' ),             1  );
  $x['sec'][] = array( 'x_customizer_section_integrity',         __( 'Integrity', '__x__' ),         2  );
  $x['sec'][] = array( 'x_customizer_section_renew',             __( 'Renew', '__x__' ),             3  );
  $x['sec'][] = array( 'x_customizer_section_icon',              __( 'Icon', '__x__' ),              4  );
  $x['sec'][] = array( 'x_customizer_section_ethos',             __( 'Ethos', '__x__' ),             5  );
  $x['sec'][] = array( 'x_customizer_section_layout_and_design', __( 'Layout and Design', '__x__' ), 6  );
  $x['sec'][] = array( 'x_customizer_section_typography',        __( 'Typography', '__x__' ),        7  );
  $x['sec'][] = array( 'x_customizer_section_buttons',           __( 'Buttons', '__x__' ),           8  );
  $x['sec'][] = array( 'x_customizer_section_header',            __( 'Header', '__x__' ),            9  );
  $x['sec'][] = array( 'x_customizer_section_footer',            __( 'Footer', '__x__' ),            10 );
  $x['sec'][] = array( 'x_customizer_section_blog',              __( 'Blog', '__x__' ),              11 );
  $x['sec'][] = array( 'x_customizer_section_portfolio',         __( 'Portfolio', '__x__' ),         12 );
  $x['sec'][] = array( 'x_customizer_section_social',            __( 'Social', '__x__' ),            16 );
  $x['sec'][] = array( 'x_customizer_section_site_icons',        __( 'Site Icons', '__x__' ),        17 );
  $x['sec'][] = array( 'x_customizer_section_custom',            __( 'Custom', '__x__' ),            18 );

  if ( X_BBPRESS_IS_ACTIVE ) {
    $x['sec'][] = array( 'x_customizer_section_bbpress', __( 'bbPress', '__x__' ), 13 );
  }

  if ( X_BUDDYPRESS_IS_ACTIVE ) {
    $x['sec'][] = array( 'x_customizer_section_buddypress', __( 'BuddyPress', '__x__' ), 14 );
  }

  if ( X_WOOCOMMERCE_IS_ACTIVE ) {
    $x['sec'][] = array( 'x_customizer_section_woocommerce', __( 'WooCommerce', '__x__' ), 15 );
  }


  //
  // Options - Stack.
  //

      $x['set'][] = array( 'x_stack', 'integrity', 'refresh' );
      $x['con'][] = array( 'x_stack', 'radio', __( 'Select', '__x__' ), $list_stacks, 'x_customizer_section_stack' );


  //
  // Options - Integrity.
  //

      $x['set'][] = array( 'x_integrity_design', 'light', 'refresh' );
      $x['con'][] = array( 'x_integrity_design', 'radio', __( 'Design', '__x__' ), $list_integrity_designs, 'x_customizer_section_integrity' );

      $x['set'][] = array( 'x_integrity_topbar_transparency_enable', '', 'refresh' );
      $x['con'][] = array( 'x_integrity_topbar_transparency_enable', 'radio', __( 'Topbar Transparency', '__x__' ), $list_on_off, 'x_customizer_section_integrity' );

      $x['set'][] = array( 'x_integrity_navbar_transparency_enable', '', 'refresh' );
      $x['con'][] = array( 'x_integrity_navbar_transparency_enable', 'radio', __( 'Navbar Transparency', '__x__' ), $list_on_off, 'x_customizer_section_integrity' );

      $x['set'][] = array( 'x_integrity_footer_transparency_enable', '', 'refresh' );
      $x['con'][] = array( 'x_integrity_footer_transparency_enable', 'radio', __( 'Footer Transparency', '__x__' ), $list_on_off, 'x_customizer_section_integrity' );


      //
      // Blog options.
      //

      $x['set'][] = array( 'x_integrity_blog_header_enable', '1', 'refresh' );
      $x['con'][] = array( 'x_integrity_blog_header_enable', 'radio', __( 'Blog Header', '__x__' ), $list_on_off, 'x_customizer_section_integrity' );

      $x['set'][] = array( 'x_integrity_blog_title', __( 'The Blog', '__x__' ), 'postMessage' );
      $x['con'][] = array( 'x_integrity_blog_title', 'text', __( 'Blog Title', '__x__' ), 'x_customizer_section_integrity' );

      $x['set'][] = array( 'x_integrity_blog_subtitle', __( 'Welcome to our little corner of the Internet. Kick your feet up and stay a while.', '__x__' ), 'postMessage' );
      $x['con'][] = array( 'x_integrity_blog_subtitle', 'text', __( 'Blog Subtitle', '__x__' ), 'x_customizer_section_integrity' );


      //
      // Portfolio options.
      //

      $x['set'][] = array( 'x_integrity_portfolio_archive_sort_button_text', __( 'Sort Portfolio', '__x__' ), 'postMessage' );
      $x['con'][] = array( 'x_integrity_portfolio_archive_sort_button_text', 'text', __( 'Sort Button Text', '__x__' ), 'x_customizer_section_integrity' );

      $x['set'][] = array( 'x_integrity_portfolio_archive_post_sharing_enable', '', 'refresh' );
      $x['con'][] = array( 'x_integrity_portfolio_archive_post_sharing_enable', 'radio', __( 'Portfolio Index Sharing', '__x__' ), $list_on_off, 'x_customizer_section_integrity' );


      //
      // Shop options.
      //

      if ( X_WOOCOMMERCE_IS_ACTIVE ) {

          $x['set'][] = array( 'x_integrity_shop_header_enable', '1', 'refresh' );
          $x['con'][] = array( 'x_integrity_shop_header_enable', 'radio', __( 'Shop Header', '__x__' ), $list_on_off, 'x_customizer_section_integrity' );

          $x['set'][] = array( 'x_integrity_shop_title', __( 'The Shop', '__x__' ), 'postMessage' );
          $x['con'][] = array( 'x_integrity_shop_title', 'text', __( 'Shop Title', '__x__' ), 'x_customizer_section_integrity' );

          $x['set'][] = array( 'x_integrity_shop_subtitle', __( 'Welcome to our online store. Take some time to browse through our items.', '__x__' ), 'postMessage' );
          $x['con'][] = array( 'x_integrity_shop_subtitle', 'text', __( 'Shop Subtitle', '__x__' ), 'x_customizer_section_integrity' );

      }


  //
  // Options - Renew.
  //

      $x['set'][] = array( 'x_renew_topbar_background', '#1f2c39', 'refresh' );
      $x['con'][] = array( 'x_renew_topbar_background', 'color', __( 'Topbar Background', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_logobar_background', '#2c3e50', 'refresh' );
      $x['con'][] = array( 'x_renew_logobar_background', 'color', __( 'Logobar Background', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_navbar_background', '#2c3e50', 'refresh' );
      $x['con'][] = array( 'x_renew_navbar_background', 'color', __( 'Navbar Background', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_navbar_button_color', '#ffffff', 'refresh' );
      $x['con'][] = array( 'x_renew_navbar_button_color', 'color', __( 'Mobile Button Color', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_navbar_button_background', '#3e5771', 'refresh' );
      $x['con'][] = array( 'x_renew_navbar_button_background', 'color', __( 'Mobile Button Background', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_navbar_button_background_hover', '#476481', 'refresh' );
      $x['con'][] = array( 'x_renew_navbar_button_background_hover', 'color', __( 'Mobile Button Background Hover', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_footer_background', '#2c3e50', 'refresh' );
      $x['con'][] = array( 'x_renew_footer_background', 'color', __( 'Footer Background', '__x__' ), 'x_customizer_section_renew' );


      //
      // Typography options.
      //

      $x['set'][] = array( 'x_renew_topbar_text_color', '#ffffff', 'refresh' );
      $x['con'][] = array( 'x_renew_topbar_text_color', 'color', __( 'Topbar Links and Text', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_topbar_link_color_hover', '#959baf', 'refresh' );
      $x['con'][] = array( 'x_renew_topbar_link_color_hover', 'color', __( 'Topbar Links Hover', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_footer_text_color', '#ffffff', 'refresh' );
      $x['con'][] = array( 'x_renew_footer_text_color', 'color', __( 'Footer Links and Text', '__x__' ), 'x_customizer_section_renew' );


      //
      // Blog options.
      //

      $x['set'][] = array( 'x_renew_blog_title', __( 'The Blog', '__x__' ), 'postMessage' );
      $x['con'][] = array( 'x_renew_blog_title', 'text', __( 'Blog Title', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_entry_icon_color', '#dddddd', 'refresh' );
      $x['con'][] = array( 'x_renew_entry_icon_color', 'color', __( 'Entry Icons', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_entry_icon_position', 'standard', 'refresh' );
      $x['con'][] = array( 'x_renew_entry_icon_position', 'radio', __( 'Entry Icon Position', '__x__' ), $list_renew_entry_icon_positions, 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_entry_icon_position_horizontal', '18', 'refresh' );
      $x['con'][] = array( 'x_renew_entry_icon_position_horizontal', 'text', __( 'Entry Icon Horizontal Alignment (%)', '__x__' ), 'x_customizer_section_renew' );

      $x['set'][] = array( 'x_renew_entry_icon_position_vertical', '25', 'refresh' );
      $x['con'][] = array( 'x_renew_entry_icon_position_vertical', 'text', __( 'Entry Icon Vertical Alignment (px)', '__x__' ), 'x_customizer_section_renew' );


      //
      // Shop options.
      //

      if ( X_WOOCOMMERCE_IS_ACTIVE ) {

          $x['set'][] = array( 'x_renew_shop_title', __( 'The Shop', '__x__' ), 'postMessage' );
          $x['con'][] = array( 'x_renew_shop_title', 'text', __( 'Shop Title', '__x__' ), 'x_customizer_section_renew' );

      }


  //
  // Options - Icon.
  //

      $x['set'][] = array( 'x_icon_post_title_icon_enable', '1', 'refresh' );
      $x['con'][] = array( 'x_icon_post_title_icon_enable', 'radio', __( 'Post Title Icon', '__x__' ), $list_on_off, 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_standard_colors_enable', '', 'refresh' );
      $x['con'][] = array( 'x_icon_post_standard_colors_enable', 'radio', __( 'Standard Post Custom Colors', '__x__' ), $list_on_off, 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_standard_color', '#d1f2eb', 'refresh' );
      $x['con'][] = array( 'x_icon_post_standard_color', 'color', __( 'Standard Post Text', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_standard_background', '#16a085', 'refresh' );
      $x['con'][] = array( 'x_icon_post_standard_background', 'color', __( 'Standard Post Background', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_image_colors_enable', '', 'refresh' );
      $x['con'][] = array( 'x_icon_post_image_colors_enable', 'radio', __( 'Image Post Custom Colors', '__x__' ), $list_on_off, 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_image_color', '#d1eedd', 'refresh' );
      $x['con'][] = array( 'x_icon_post_image_color', 'color', __( 'Image Post Text', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_image_background', '#27ae60', 'refresh' );
      $x['con'][] = array( 'x_icon_post_image_background', 'color', __( 'Image Post Background', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_gallery_colors_enable', '', 'refresh' );
      $x['con'][] = array( 'x_icon_post_gallery_colors_enable', 'radio', __( 'Gallery Post Custom Colors', '__x__' ), $list_on_off, 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_gallery_color', '#d1eedd', 'refresh' );
      $x['con'][] = array( 'x_icon_post_gallery_color', 'color', __( 'Gallery Post Text', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_gallery_background', '#27ae60', 'refresh' );
      $x['con'][] = array( 'x_icon_post_gallery_background', 'color', __( 'Gallery Post Background', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_video_colors_enable', '', 'refresh' );
      $x['con'][] = array( 'x_icon_post_video_colors_enable', 'radio', __( 'Video Post Custom Colors', '__x__' ), $list_on_off, 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_video_color', '#e9daef', 'refresh' );
      $x['con'][] = array( 'x_icon_post_video_color', 'color', __( 'Video Post Text', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_video_background', '#8e44ad', 'refresh' );
      $x['con'][] = array( 'x_icon_post_video_background', 'color', __( 'Video Post Background', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_audio_colors_enable', '', 'refresh' );
      $x['con'][] = array( 'x_icon_post_audio_colors_enable', 'radio', __( 'Audio Post Custom Colors', '__x__' ), $list_on_off, 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_audio_color', '#cfd4d9', 'refresh' );
      $x['con'][] = array( 'x_icon_post_audio_color', 'color', __( 'Audio Post Text', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_audio_background', '#2c3e50', 'refresh' );
      $x['con'][] = array( 'x_icon_post_audio_background', 'color', __( 'Audio Post Background', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_quote_colors_enable', '', 'refresh' );
      $x['con'][] = array( 'x_icon_post_quote_colors_enable', 'radio', __( 'Quote Post Custom Colors', '__x__' ), $list_on_off, 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_quote_color', '#fcf2c8', 'refresh' );
      $x['con'][] = array( 'x_icon_post_quote_color', 'color', __( 'Quote Post Text', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_quote_background', '#f1c40f', 'refresh' );
      $x['con'][] = array( 'x_icon_post_quote_background', 'color', __( 'Quote Post Background', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_link_colors_enable', '', 'refresh' );
      $x['con'][] = array( 'x_icon_post_link_colors_enable', 'radio', __( 'Link Post Custom Colors', '__x__' ), $list_on_off, 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_link_color', '#f9d0cc', 'refresh' );
      $x['con'][] = array( 'x_icon_post_link_color', 'color', __( 'Link Post Text', '__x__' ), 'x_customizer_section_icon' );

      $x['set'][] = array( 'x_icon_post_link_background', '#c0392b', 'refresh' );
      $x['con'][] = array( 'x_icon_post_link_background', 'color', __( 'Link Post Background', '__x__' ), 'x_customizer_section_icon' );


      //
      // Shop options.
      //

      if ( X_WOOCOMMERCE_IS_ACTIVE ) {

          $x['set'][] = array( 'x_icon_shop_title', __( 'The Shop', '__x__' ), 'postMessage' );
          $x['con'][] = array( 'x_icon_shop_title', 'text', __( 'Shop Title', '__x__' ), 'x_customizer_section_icon' );

      }


  //
  // Options - Ethos.
  //


      $x['set'][] = array( 'x_ethos_topbar_background', '#222222', 'refresh' );
      $x['con'][] = array( 'x_ethos_topbar_background', 'color', __( 'Topbar Background Color', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_navbar_background', '#333333', 'refresh' );
      $x['con'][] = array( 'x_ethos_navbar_background', 'color', __( 'Navbar Background Color', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_sidebar_widget_headings_color', '#333333', 'refresh' );
      $x['con'][] = array( 'x_ethos_sidebar_widget_headings_color', 'color', __( 'Sidebar Widget Headings Color', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_sidebar_color', '#333333', 'refresh' );
      $x['con'][] = array( 'x_ethos_sidebar_color', 'color', __( 'Sidebar Text Color', '__x__' ), 'x_customizer_section_ethos' );


      //
      // Post carousel.
      //

      $x['set'][] = array( 'x_ethos_post_carousel_enable', '', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_carousel_enable', 'radio', __( 'Post Carousel', '__x__' ), $list_on_off, 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_carousel_count', '6', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_carousel_count', 'text', __( 'Posts Per Page', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_carousel_display', 'most-commented', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_carousel_display', 'radio', __( 'Display', '__x__' ), $list_ethos_post_carousel_and_slider_display, 'x_customizer_section_ethos' );


      //
      // Post carousel - screen display.
      //

      $x['set'][] = array( 'x_ethos_post_carousel_display_count_extra_large', '5', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_carousel_display_count_extra_large', 'text', __( 'Over 1500 Pixels', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_carousel_display_count_large', '4', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_carousel_display_count_large', 'text', __( '1200 &ndash; 1499 Pixels', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_carousel_display_count_medium', '3', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_carousel_display_count_medium', 'text', __( '979 &ndash; 1199 Pixels', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_carousel_display_count_small', '2', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_carousel_display_count_small', 'text', __( '550 &ndash; 978 Pixels', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_carousel_display_count_extra_small', '1', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_carousel_display_count_extra_small', 'text', __( 'Below 549 Pixels', '__x__' ), 'x_customizer_section_ethos' );


      //
      // Post slider - blog.
      //

      $x['set'][] = array( 'x_ethos_post_slider_blog_enable', '', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_slider_blog_enable', 'radio', __( 'Post Slider for Blog', '__x__' ), $list_on_off, 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_slider_blog_height', '425', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_slider_blog_height', 'text', __( 'Slider Height (px)', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_slider_blog_count', '5', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_slider_blog_count', 'text', __( 'Posts Per Page', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_slider_blog_display', 'most-commented', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_slider_blog_display', 'radio', __( 'Display', '__x__' ), $list_ethos_post_carousel_and_slider_display, 'x_customizer_section_ethos' );


      //
      // Post slider - archives.
      //

      $x['set'][] = array( 'x_ethos_post_slider_archive_enable', '', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_slider_archive_enable', 'radio', __( 'Post Slider for Archives', '__x__' ), $list_on_off, 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_slider_archive_height', '425', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_slider_archive_height', 'text', __( 'Slider Height (px)', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_slider_archive_count', '5', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_slider_archive_count', 'text', __( 'Posts Per Page', '__x__' ), 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_post_slider_archive_display', 'most-commented', 'refresh' );
      $x['con'][] = array( 'x_ethos_post_slider_archive_display', 'radio', __( 'Display', '__x__' ), $list_ethos_post_carousel_and_slider_display, 'x_customizer_section_ethos' );


      //
      // Blog options.
      //

      $x['set'][] = array( 'x_ethos_filterable_index_enable', '', 'refresh' );
      $x['con'][] = array( 'x_ethos_filterable_index_enable', 'radio', __( 'Filterable Index', '__x__' ), $list_on_off, 'x_customizer_section_ethos' );

      $x['set'][] = array( 'x_ethos_filterable_index_categories', '', 'refresh' );
      $x['con'][] = array( 'x_ethos_filterable_index_categories', 'text', __( 'Category IDs', '__x__' ), 'x_customizer_section_ethos' );


      //
      // Shop options.
      //

      if ( X_WOOCOMMERCE_IS_ACTIVE ) {

          $x['set'][] = array( 'x_ethos_shop_title', __( 'The Shop', '__x__' ), 'postMessage' );
          $x['con'][] = array( 'x_ethos_shop_title', 'text', __( 'Shop Title', '__x__' ), 'x_customizer_section_ethos' );

      }


  //
  // Options - Layout and Design.
  //

      $x['set'][] = array( 'x_layout_site', 'full-width', 'refresh' );
      $x['con'][] = array( 'x_layout_site', 'radio', __( 'Site Layout', '__x__' ), $list_site_layouts, 'x_customizer_section_layout_and_design' );

      $x['set'][] = array( 'x_layout_site_max_width', '1200', 'postMessage' );
      $x['con'][] = array( 'x_layout_site_max_width', 'slider', __( 'Site Max Width (px)', '__x__' ), $list_sizing_site_max_width, 'x_customizer_section_layout_and_design' );

      $x['set'][] = array( 'x_layout_site_width', '88', 'postMessage' );
      $x['con'][] = array( 'x_layout_site_width', 'slider', __( 'Site Width (%)', '__x__' ), $list_sizing_site_width, 'x_customizer_section_layout_and_design' );

      $x['set'][] = array( 'x_layout_content', 'content-sidebar', 'refresh' );
      $x['con'][] = array( 'x_layout_content', 'radio', __( 'Content Layout', '__x__' ), $list_content_layouts, 'x_customizer_section_layout_and_design' );

      $x['set'][] = array( 'x_layout_content_width', '72', 'postMessage' );
      $x['con'][] = array( 'x_layout_content_width', 'slider', __( 'Content Width (%)', '__x__' ), $list_sizing_content_width, 'x_customizer_section_layout_and_design' );

      $x['set'][] = array( 'x_layout_sidebar_width', '250', 'refresh' );
      $x['con'][] = array( 'x_layout_sidebar_width', 'text', __( 'Sidebar Width (px)', '__x__' ), 'x_customizer_section_layout_and_design' );


      //
      // Background options.
      //
      // integrity_light / integrity_dark
      // renew
      // icon
      // ethos
      //

      $x['set'][] = array( 'x_design_bg_color', '#f3f3f3', 'postMessage' );
      $x['con'][] = array( 'x_design_bg_color', 'color', __( 'Background Color', '__x__' ), 'x_customizer_section_layout_and_design' );

      $x['set'][] = array( 'x_design_bg_image_pattern', '', 'refresh' );
      $x['con'][] = array( 'x_design_bg_image_pattern', 'image', __( 'Background Pattern', '__x__' ), 'x_customizer_section_layout_and_design' );

      $x['set'][] = array( 'x_design_bg_image_full', '', 'refresh' );
      $x['con'][] = array( 'x_design_bg_image_full', 'image', __( 'Background Image', '__x__' ), 'x_customizer_section_layout_and_design' );

      $x['set'][] = array( 'x_design_bg_image_full_fade', '750', 'refresh' );
      $x['con'][] = array( 'x_design_bg_image_full_fade', 'text', __( 'Background Image Fade (ms)', '__x__' ), 'x_customizer_section_layout_and_design' );


  //
  // Options - Typography.
  //

      $x['set'][] = array( 'x_list_font_weights', $list_font_weights, 'postMessage' );

      $x['set'][] = array( 'x_custom_fonts', '', 'refresh' );
      $x['con'][] = array( 'x_custom_fonts', 'radio', __( 'Custom Fonts', '__x__' ), $list_on_off, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_custom_font_subsets', '', 'refresh' );
      $x['con'][] = array( 'x_custom_font_subsets', 'radio', __( 'Font Subsets', '__x__' ), $list_on_off, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_custom_font_subset_cyrillic', '', 'refresh' );
      $x['con'][] = array( 'x_custom_font_subset_cyrillic', 'radio', __( 'Cyrillic', '__x__' ), $list_on_off, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_custom_font_subset_greek', '', 'refresh' );
      $x['con'][] = array( 'x_custom_font_subset_greek', 'radio', __( 'Greek', '__x__' ), $list_on_off, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_custom_font_subset_vietnamese', '', 'refresh' );
      $x['con'][] = array( 'x_custom_font_subset_vietnamese', 'radio', __( 'Vietnamese', '__x__' ), $list_on_off, 'x_customizer_section_typography' );


      //
      // Logo.
      //

      $x['set'][] = array( 'x_logo_font_family', 'Lato', 'refresh' );
      $x['con'][] = array( 'x_logo_font_family', 'select', __( 'Logo Font', '__x__' ), $list_fonts, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_logo_font_color_enable', '', 'refresh' );
      $x['con'][] = array( 'x_logo_font_color_enable', 'radio', __( 'Logo Font Color', '__x__' ), $list_on_off, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_logo_font_color', '#999999', 'refresh' );
      $x['con'][] = array( 'x_logo_font_color', 'color', __( 'Logo Font Color', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_logo_font_size', '54', 'refresh' );
      $x['con'][] = array( 'x_logo_font_size', 'text', __( 'Logo Font Size (px)', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_logo_font_weight', '400', 'refresh' );
      $x['con'][] = array( 'x_logo_font_weight', 'radio', __( 'Logo Font Weight', '__x__' ), $list_all_font_weights, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_logo_letter_spacing', '-3', 'refresh' );
      $x['con'][] = array( 'x_logo_letter_spacing', 'text', __( 'Logo Letter Spacing (px)', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_logo_uppercase_enable', '', 'refresh' );
      $x['con'][] = array( 'x_logo_uppercase_enable', 'radio', __( 'Uppercase', '__x__' ), $list_on_off, 'x_customizer_section_typography' );


      //
      // Navbar.
      //

      $x['set'][] = array( 'x_navbar_font_family', 'Lato', 'refresh' );
      $x['con'][] = array( 'x_navbar_font_family', 'select', __( 'Navbar Font', '__x__' ), $list_fonts, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_navbar_link_color', '#b7b7b7', 'refresh' );
      $x['con'][] = array( 'x_navbar_link_color', 'color', __( 'Navbar Links', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_navbar_link_color_hover', '#272727', 'refresh' );
      $x['con'][] = array( 'x_navbar_link_color_hover', 'color', __( 'Navbar Links Hover', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_navbar_font_size', '12', 'refresh' );
      $x['con'][] = array( 'x_navbar_font_size', 'text', __( 'Navbar Font Size (px)', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_navbar_font_weight', '400', 'refresh' );
      $x['con'][] = array( 'x_navbar_font_weight', 'radio', __( 'Navbar Font Weight', '__x__' ), $list_all_font_weights, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_navbar_letter_spacing', '1', 'refresh' );
      $x['con'][] = array( 'x_navbar_letter_spacing', 'text', __( 'Navbar Letter Spacing (px)', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_navbar_uppercase_enable', '', 'refresh' );
      $x['con'][] = array( 'x_navbar_uppercase_enable', 'radio', __( 'Uppercase', '__x__' ), $list_on_off, 'x_customizer_section_typography' );


      //
      // Headings.
      //

      $x['set'][] = array( 'x_headings_font_family', 'Lato', 'refresh' );
      $x['con'][] = array( 'x_headings_font_family', 'select', __( 'Headings Font', '__x__' ), $list_fonts, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_headings_font_color_enable', '', 'refresh' );
      $x['con'][] = array( 'x_headings_font_color_enable', 'radio', __( 'Headings Font Color', '__x__' ), $list_on_off, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_headings_font_color', '#999999', 'refresh' );
      $x['con'][] = array( 'x_headings_font_color', 'color', __( 'Headings Font Color', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_headings_font_weight', '400', 'refresh' );
      $x['con'][] = array( 'x_headings_font_weight', 'radio', __( 'Headings Font Weight', '__x__' ), $list_all_font_weights, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_headings_letter_spacing', '-1', 'refresh' );
      $x['con'][] = array( 'x_headings_letter_spacing', 'text', __( 'Headings Letter Spacing (px)', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_headings_uppercase_enable', '', 'refresh' );
      $x['con'][] = array( 'x_headings_uppercase_enable', 'radio', __( 'Uppercase', '__x__' ), $list_on_off, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_headings_widget_icons_enable', '', 'refresh' );
      $x['con'][] = array( 'x_headings_widget_icons_enable', 'radio', __( 'Widget Icons', '__x__' ), $list_on_off, 'x_customizer_section_typography' );


      //
      // Body and content.
      //

      $x['set'][] = array( 'x_body_font_family', 'Lato', 'refresh' );
      $x['con'][] = array( 'x_body_font_family', 'select', __( 'Body Font', '__x__' ), $list_fonts, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_body_font_color_enable', '', 'refresh' );
      $x['con'][] = array( 'x_body_font_color_enable', 'radio', __( 'Body Font Color', '__x__' ), $list_on_off, 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_body_font_color', '#999999', 'refresh' );
      $x['con'][] = array( 'x_body_font_color', 'color', __( 'Body Font Color', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_body_font_size', '14', 'refresh' );
      $x['con'][] = array( 'x_body_font_size', 'text', __( 'Body Font Size (px)', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_content_font_size', '14', 'refresh' );
      $x['con'][] = array( 'x_content_font_size', 'text', __( 'Content Font Size (px)', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_body_font_weight', '400', 'refresh' );
      $x['con'][] = array( 'x_body_font_weight', 'radio', __( 'Body Font Weight', '__x__' ), $list_all_font_weights, 'x_customizer_section_typography' );


      //
      // Site links.
      //

      $x['set'][] = array( 'x_site_link_color', '#ff2a13', 'refresh' );
      $x['con'][] = array( 'x_site_link_color', 'color', __( 'Site Links', '__x__' ), 'x_customizer_section_typography' );

      $x['set'][] = array( 'x_site_link_color_hover', '#d80f0f', 'refresh' );
      $x['con'][] = array( 'x_site_link_color_hover', 'color', __( 'Site Links Hover', '__x__' ), 'x_customizer_section_typography' );


  //
  // Options - Buttons.
  //

      $x['set'][] = array( 'x_button_style', 'real', 'refresh' );
      $x['con'][] = array( 'x_button_style', 'radio', __( 'Button Style', '__x__' ), $list_button_styles, 'x_customizer_section_buttons' );

      $x['set'][] = array( 'x_button_shape', 'rounded', 'refresh' );
      $x['con'][] = array( 'x_button_shape', 'radio', __( 'Button Shape', '__x__' ), $list_button_shapes, 'x_customizer_section_buttons' );

      $x['set'][] = array( 'x_button_size', 'regular', 'refresh' );
      $x['con'][] = array( 'x_button_size', 'radio', __( 'Button Size', '__x__' ), $list_button_sizes, 'x_customizer_section_buttons' );



      //
      // Colors.
      //

      $x['set'][] = array( 'x_button_color', '#ffffff', 'refresh' );
      $x['con'][] = array( 'x_button_color', 'color', __( 'Button Text', '__x__' ), 'x_customizer_section_buttons' );

      $x['set'][] = array( 'x_button_background_color', '#ff2a13', 'refresh' );
      $x['con'][] = array( 'x_button_background_color', 'color', __( 'Button Background', '__x__' ), 'x_customizer_section_buttons' );

      $x['set'][] = array( 'x_button_border_color', '#ac1100', 'refresh' );
      $x['con'][] = array( 'x_button_border_color', 'color', __( 'Button Border', '__x__' ), 'x_customizer_section_buttons' );

      $x['set'][] = array( 'x_button_bottom_color', '#a71000', 'refresh' );
      $x['con'][] = array( 'x_button_bottom_color', 'color', __( 'Button Bottom', '__x__' ), 'x_customizer_section_buttons' );


      //
      // Hover colors.
      //

      $x['set'][] = array( 'x_button_color_hover', '#ffffff', 'refresh' );
      $x['con'][] = array( 'x_button_color_hover', 'color', __( 'Button Text', '__x__' ), 'x_customizer_section_buttons' );

      $x['set'][] = array( 'x_button_background_color_hover', '#ef2201', 'refresh' );
      $x['con'][] = array( 'x_button_background_color_hover', 'color', __( 'Button Background', '__x__' ), 'x_customizer_section_buttons' );

      $x['set'][] = array( 'x_button_border_color_hover', '#600900', 'refresh' );
      $x['con'][] = array( 'x_button_border_color_hover', 'color', __( 'Button Border', '__x__' ), 'x_customizer_section_buttons' );

      $x['set'][] = array( 'x_button_bottom_color_hover', '#a71000', 'refresh' );
      $x['con'][] = array( 'x_button_bottom_color_hover', 'color', __( 'Button Bottom', '__x__' ), 'x_customizer_section_buttons' );


  //
  // Options - Header.
  //

      $x['set'][] = array( 'x_navbar_positioning', 'static-top', 'refresh' );
      $x['con'][] = array( 'x_navbar_positioning', 'radio', __( 'Navbar Position', '__x__' ), $list_navbar_positions, 'x_customizer_section_header' );


      //
      // Logo and navigation.
      //

      $x['set'][] = array( 'x_logo_navigation_layout', 'inline', 'refresh' );
      $x['con'][] = array( 'x_logo_navigation_layout', 'radio', __( 'Layout', '__x__' ), $list_logo_navigation_layouts, 'x_customizer_section_header' );

      $x['set'][] = array( 'x_logobar_adjust_spacing_top', '15', 'refresh' );
      $x['con'][] = array( 'x_logobar_adjust_spacing_top', 'text', __( 'Logobar Top Spacing (px)', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_logobar_adjust_spacing_bottom', '15', 'refresh' );
      $x['con'][] = array( 'x_logobar_adjust_spacing_bottom', 'text', __( 'Logobar Bottom Spacing (px)', '__x__' ), 'x_customizer_section_header' );


      //
      // Navbar.
      //

      $x['set'][] = array( 'x_navbar_height', '90', 'refresh' );
      $x['con'][] = array( 'x_navbar_height', 'text', __( 'Navbar Top Height (px)', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_navbar_width', '235', 'refresh' );
      $x['con'][] = array( 'x_navbar_width', 'text', __( 'Navbar Side Width (px)', '__x__' ), 'x_customizer_section_header' );


      //
      // Logo.
      //

      $x['set'][] = array( 'x_logo', '', 'refresh' );
      $x['con'][] = array( 'x_logo', 'image', __( 'Upload Your Logo', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_logo_width', '', 'refresh' );
      $x['con'][] = array( 'x_logo_width', 'text', __( 'Logo Width (px)', '__x__' ), 'x_customizer_section_header' );


      //
      // Search.
      //

      $x['set'][] = array( 'x_header_search_enable', '', 'refresh' );
      $x['con'][] = array( 'x_header_search_enable', 'radio', __( 'Navbar Search', '__x__' ), $list_on_off, 'x_customizer_section_header' );


      //
      // Alignment.
      //

      $x['set'][] = array( 'x_logo_adjust_navbar_top', '13', 'refresh' );
      $x['con'][] = array( 'x_logo_adjust_navbar_top', 'text', __( 'Navbar Top Logo Alignment (px)', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_navbar_adjust_links_top', '37', 'refresh' );
      $x['con'][] = array( 'x_navbar_adjust_links_top', 'text', __( 'Navbar Top Link Alignment (px)', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_navbar_adjust_links_top_spacing', '20', 'refresh' );
      $x['con'][] = array( 'x_navbar_adjust_links_top_spacing', 'text', __( 'Navbar Top Link Spacing (px)', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_logo_adjust_navbar_side', '30', 'refresh' );
      $x['con'][] = array( 'x_logo_adjust_navbar_side', 'text', __( 'Navbar Side Logo Alignment (px)', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_navbar_adjust_links_side', '50', 'refresh' );
      $x['con'][] = array( 'x_navbar_adjust_links_side', 'text', __( 'Navbar Side Link Alignment (px)', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_navbar_adjust_button', '20', 'refresh' );
      $x['con'][] = array( 'x_navbar_adjust_button', 'text', __( 'Mobile Navbar Button Alignment (px)', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_navbar_adjust_button_size', '24', 'refresh' );
      $x['con'][] = array( 'x_navbar_adjust_button_size', 'text', __( 'Mobile Navbar Button Size (px)', '__x__' ), 'x_customizer_section_header' );


      //
      // Widgetbar.
      //

      $x['set'][] = array( 'x_header_widget_areas', '2', 'refresh' );
      $x['con'][] = array( 'x_header_widget_areas', 'radio', __( 'Header Widget Areas', '__x__' ), $list_widget_areas, 'x_customizer_section_header' );

      $x['set'][] = array( 'x_widgetbar_button_background', '#000000', 'refresh' );
      $x['con'][] = array( 'x_widgetbar_button_background', 'color', __( 'Widgetbar Button Background', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_widgetbar_button_background_hover', '#444444', 'refresh' );
      $x['con'][] = array( 'x_widgetbar_button_background_hover', 'color', __( 'Widgetbar Button Background Hover', '__x__' ), 'x_customizer_section_header' );


      //
      // Miscellaneous.
      //

      $x['set'][] = array( 'x_topbar_display', '', 'refresh' );
      $x['con'][] = array( 'x_topbar_display', 'radio', __( 'Topbar', '__x__' ), $list_on_off, 'x_customizer_section_header' );

      $x['set'][] = array( 'x_topbar_content', '', 'refresh' );
      $x['con'][] = array( 'x_topbar_content', 'textarea', __( 'Topbar Content', '__x__' ), 'x_customizer_section_header' );

      $x['set'][] = array( 'x_breadcrumb_display', '1', 'refresh' );
      $x['con'][] = array( 'x_breadcrumb_display', 'radio', __( 'Breadcrumbs', '__x__' ), $list_on_off, 'x_customizer_section_header' );


  //
  // Options - Footer.
  //

      $x['set'][] = array( 'x_footer_widget_areas', '3', 'refresh' );
      $x['con'][] = array( 'x_footer_widget_areas', 'radio', __( 'Footer Widget Areas', '__x__' ), $list_widget_areas, 'x_customizer_section_footer' );

      $x['set'][] = array( 'x_footer_bottom_display', '1', 'refresh' );
      $x['con'][] = array( 'x_footer_bottom_display', 'radio', __( 'Bottom Footer', '__x__' ), $list_on_off, 'x_customizer_section_footer' );

      $x['set'][] = array( 'x_footer_menu_display', '1', 'refresh' );
      $x['con'][] = array( 'x_footer_menu_display', 'radio', __( 'Footer Menu', '__x__' ), $list_on_off, 'x_customizer_section_footer' );

      $x['set'][] = array( 'x_footer_social_display', '1', 'refresh' );
      $x['con'][] = array( 'x_footer_social_display', 'radio', __( 'Footer Social', '__x__' ), $list_on_off, 'x_customizer_section_footer' );

      $x['set'][] = array( 'x_footer_content_display', '1', 'refresh' );
      $x['con'][] = array( 'x_footer_content_display', 'radio', __( 'Footer Content', '__x__' ), $list_on_off, 'x_customizer_section_footer' );

      $x['set'][] = array( 'x_footer_content', '<p>POWERED BY THE <a href="//theme.co/x/" title="X &ndash; The Ultimate WordPress Theme">X THEME</a></p>', 'refresh' );
      $x['con'][] = array( 'x_footer_content', 'textarea', __( 'Footer Content', '__x__' ), 'x_customizer_section_footer' );


      //
      // Scroll top anchor.
      //

      $x['set'][] = array( 'x_footer_scroll_top_display', '', 'refresh' );
      $x['con'][] = array( 'x_footer_scroll_top_display', 'radio', __( 'Scroll Top Anchor', '__x__' ), $list_on_off, 'x_customizer_section_footer' );

      $x['set'][] = array( 'x_footer_scroll_top_position', 'right', 'refresh' );
      $x['con'][] = array( 'x_footer_scroll_top_position', 'radio', __( 'Scroll Top Anchor Position', '__x__' ), $list_left_right_positioning, 'x_customizer_section_footer' );

      $x['set'][] = array( 'x_footer_scroll_top_display_unit', '75', 'refresh' );
      $x['con'][] = array( 'x_footer_scroll_top_display_unit', 'text', __( 'When to Display the Scroll Top Anchor (%)', '__x__' ), 'x_customizer_section_footer' );


  //
  // Options - Blog.
  //

      $x['set'][] = array( 'x_blog_style', 'standard', 'refresh' );
      $x['con'][] = array( 'x_blog_style', 'radio', __( 'Style', '__x__' ), $list_blog_styles, 'x_customizer_section_blog' );

      $x['set'][] = array( 'x_blog_layout', 'sidebar', 'refresh' );
      $x['con'][] = array( 'x_blog_layout', 'radio', __( 'Layout', '__x__' ), $list_section_layouts, 'x_customizer_section_blog' );

      $x['set'][] = array( 'x_blog_masonry_columns', '2', 'refresh' );
      $x['con'][] = array( 'x_blog_masonry_columns', 'radio', __( 'Columns', '__x__' ), $list_masonry_columns, 'x_customizer_section_blog' );


      //
      // Archives.
      //

      $x['set'][] = array( 'x_archive_style', 'standard', 'refresh' );
      $x['con'][] = array( 'x_archive_style', 'radio', __( 'Style', '__x__' ), $list_blog_styles, 'x_customizer_section_blog' );

      $x['set'][] = array( 'x_archive_layout', 'sidebar', 'refresh' );
      $x['con'][] = array( 'x_archive_layout', 'radio', __( 'Layout', '__x__' ), $list_section_layouts, 'x_customizer_section_blog' );

      $x['set'][] = array( 'x_archive_masonry_columns', '2', 'refresh' );
      $x['con'][] = array( 'x_archive_masonry_columns', 'radio', __( 'Columns', '__x__' ), $list_masonry_columns, 'x_customizer_section_blog' );


      //
      // Content.
      //

      $x['set'][] = array( 'x_blog_enable_post_meta', '', 'refresh' );
      $x['con'][] = array( 'x_blog_enable_post_meta', 'radio', __( 'Post Meta', '__x__' ), $list_on_off, 'x_customizer_section_blog' );

      $x['set'][] = array( 'x_blog_enable_full_post_content', '', 'refresh' );
      $x['con'][] = array( 'x_blog_enable_full_post_content', 'radio', __( 'Full Post Content on Index', '__x__' ), $list_on_off, 'x_customizer_section_blog' );

      $x['set'][] = array( 'x_blog_excerpt_length', '60', 'refresh' );
      $x['con'][] = array( 'x_blog_excerpt_length', 'text', __( 'Excerpt Length', '__x__' ), 'x_customizer_section_blog' );


  //
  // Options - Portfolio.
  //

      $x['set'][] = array( 'x_custom_portfolio_slug', 'portfolio-item', 'refresh' );
      $x['con'][] = array( 'x_custom_portfolio_slug', 'text', __( 'Custom URL Slug', '__x__' ), 'x_customizer_section_portfolio' );


      //
      // Content.
      //

      $x['set'][] = array( 'x_portfolio_enable_cropped_thumbs', '', 'refresh' );
      $x['con'][] = array( 'x_portfolio_enable_cropped_thumbs', 'radio', __( 'Cropped Featured Images', '__x__' ), $list_on_off, 'x_customizer_section_portfolio' );

      $x['set'][] = array( 'x_portfolio_enable_post_meta', '1', 'refresh' );
      $x['con'][] = array( 'x_portfolio_enable_post_meta', 'radio', __( 'Post Meta', '__x__' ), $list_on_off, 'x_customizer_section_portfolio' );


      //
      // Labels.
      //

      $x['set'][] = array( 'x_portfolio_tag_title', __( 'Skills', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_portfolio_tag_title', 'text', __( 'Tag List Title', '__x__' ), 'x_customizer_section_portfolio' );

      $x['set'][] = array( 'x_portfolio_launch_project_title', __( 'Launch Project', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_portfolio_launch_project_title', 'text', __( 'Launch Project Title', '__x__' ), 'x_customizer_section_portfolio' );

      $x['set'][] = array( 'x_portfolio_launch_project_button_text', __( 'See it Live!', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_portfolio_launch_project_button_text', 'text', __( 'Launch Project Button Text', '__x__' ), 'x_customizer_section_portfolio' );

      $x['set'][] = array( 'x_portfolio_share_project_title', __( 'Share this Project', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_portfolio_share_project_title', 'text', __( 'Share Project Title', '__x__' ), 'x_customizer_section_portfolio' );


      //
      // Sharing.
      //

      $x['set'][] = array( 'x_portfolio_enable_facebook_sharing', '1', 'refresh' );
      $x['con'][] = array( 'x_portfolio_enable_facebook_sharing', 'radio', __( 'Facebook Sharing Link', '__x__' ), $list_on_off, 'x_customizer_section_portfolio' );

      $x['set'][] = array( 'x_portfolio_enable_twitter_sharing', '1', 'refresh' );
      $x['con'][] = array( 'x_portfolio_enable_twitter_sharing', 'radio', __( 'Twitter Sharing Link', '__x__' ), $list_on_off, 'x_customizer_section_portfolio' );

      $x['set'][] = array( 'x_portfolio_enable_google_plus_sharing', '', 'refresh' );
      $x['con'][] = array( 'x_portfolio_enable_google_plus_sharing', 'radio', __( 'Google+ Sharing Link', '__x__' ), $list_on_off, 'x_customizer_section_portfolio' );

      $x['set'][] = array( 'x_portfolio_enable_linkedin_sharing', '', 'refresh' );
      $x['con'][] = array( 'x_portfolio_enable_linkedin_sharing', 'radio', __( 'LinkedIn Sharing Link', '__x__' ), $list_on_off, 'x_customizer_section_portfolio' );

      $x['set'][] = array( 'x_portfolio_enable_pinterest_sharing', '', 'refresh' );
      $x['con'][] = array( 'x_portfolio_enable_pinterest_sharing', 'radio', __( 'Pinterest Sharing Link', '__x__' ), $list_on_off, 'x_customizer_section_portfolio' );

      $x['set'][] = array( 'x_portfolio_enable_reddit_sharing', '', 'refresh' );
      $x['con'][] = array( 'x_portfolio_enable_reddit_sharing', 'radio', __( 'Reddit Sharing Link', '__x__' ), $list_on_off, 'x_customizer_section_portfolio' );

      $x['set'][] = array( 'x_portfolio_enable_email_sharing', '', 'refresh' );
      $x['con'][] = array( 'x_portfolio_enable_email_sharing', 'radio', __( 'Email Sharing Link', '__x__' ), $list_on_off, 'x_customizer_section_portfolio' );


  //
  // Options - bbPress.
  //

  if ( X_BBPRESS_IS_ACTIVE ) {

      $x['set'][] = array( 'x_bbpress_layout_content', 'sidebar', 'refresh' );
      $x['con'][] = array( 'x_bbpress_layout_content', 'radio', __( 'Layout', '__x__' ), $list_section_layouts, 'x_customizer_section_bbpress' );

      $x['set'][] = array( 'x_bbpress_enable_quicktags', '', 'refresh' );
      $x['con'][] = array( 'x_bbpress_enable_quicktags', 'radio', __( 'Topic/Reply Quicktags', '__x__' ), $list_on_off, 'x_customizer_section_bbpress' );


      //
      // Header links.
      //

      $x['set'][] = array( 'x_bbpress_header_menu_enable', '', 'refresh' );
      $x['con'][] = array( 'x_bbpress_header_menu_enable', 'radio', __( 'Navbar Menu', '__x__' ), $list_on_off, 'x_customizer_section_bbpress' );

  }


  //
  // Options - BuddyPress.
  //

  if ( X_BUDDYPRESS_IS_ACTIVE ) {

      $x['set'][] = array( 'x_buddypress_layout_content', 'sidebar', 'refresh' );
      $x['con'][] = array( 'x_buddypress_layout_content', 'radio', __( 'Layout', '__x__' ), $list_section_layouts, 'x_customizer_section_buddypress' );


      //
      // Header links.
      //

      $x['set'][] = array( 'x_buddypress_header_menu_enable', '', 'refresh' );
      $x['con'][] = array( 'x_buddypress_header_menu_enable', 'radio', __( 'Navbar Menu', '__x__' ), $list_on_off, 'x_customizer_section_buddypress' );


      //
      // Component titles.
      //

      $x['set'][] = array( 'x_buddypress_activity_title', __( 'Activity', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_activity_title', 'text', __( 'Activity Title', '__x__' ), 'x_customizer_section_buddypress' );

      $x['set'][] = array( 'x_buddypress_groups_title', __( 'Groups', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_groups_title', 'text', __( 'Groups Title', '__x__' ), 'x_customizer_section_buddypress' );

      $x['set'][] = array( 'x_buddypress_blogs_title', __( 'Sites', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_blogs_title', 'text', __( 'Sites Title', '__x__' ), 'x_customizer_section_buddypress' );

      $x['set'][] = array( 'x_buddypress_members_title', __( 'Members', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_members_title', 'text', __( 'Members Title', '__x__' ), 'x_customizer_section_buddypress' );

      $x['set'][] = array( 'x_buddypress_register_title', __( 'Create An Account', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_register_title', 'text', __( 'Register Title', '__x__' ), 'x_customizer_section_buddypress' );

      $x['set'][] = array( 'x_buddypress_activate_title', __( 'Activate Your Account', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_activate_title', 'text', __( 'Activate Title', '__x__' ), 'x_customizer_section_buddypress' );


      //
      // Component subtitles.
      //

      $x['set'][] = array( 'x_buddypress_activity_subtitle', __( 'Meet new people, get involved, and stay connected.', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_activity_subtitle', 'text', __( 'Activity Subtitle', '__x__' ), 'x_customizer_section_buddypress' );

      $x['set'][] = array( 'x_buddypress_groups_subtitle', __( 'Find others with similar interests and get plugged in.', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_groups_subtitle', 'text', __( 'Groups Subtitle', '__x__' ), 'x_customizer_section_buddypress' );

      $x['set'][] = array( 'x_buddypress_blogs_subtitle', __( 'See what others are writing about. Learn something new and exciting today!', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_blogs_subtitle', 'text', __( 'Sites Subtitle', '__x__' ), 'x_customizer_section_buddypress' );

      $x['set'][] = array( 'x_buddypress_members_subtitle', __( 'Meet your new online community. Kick up your feet and stay awhile.', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_members_subtitle', 'text', __( 'Members Subtitle', '__x__' ), 'x_customizer_section_buddypress' );

      $x['set'][] = array( 'x_buddypress_register_subtitle', __( 'Just fill in the fields below and we\'ll get a new account set up for you in no time!', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_register_subtitle', 'text', __( 'Register Subtitle', '__x__' ), 'x_customizer_section_buddypress' );

      $x['set'][] = array( 'x_buddypress_activate_subtitle', __( 'You\'re almost there! Simply enter your activation code below and we\'ll take care of the rest.', '__x__' ), 'refresh' );
      $x['con'][] = array( 'x_buddypress_activate_subtitle', 'text', __( 'Activate Subtitle', '__x__' ), 'x_customizer_section_buddypress' );

  }


  //
  // Options - WooCommerce.
  //

  if ( X_WOOCOMMERCE_IS_ACTIVE ) {

      $x['set'][] = array( 'x_woocommerce_header_menu_enable', '', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_menu_enable', 'radio', __( 'Navbar Menu', '__x__' ), $list_on_off, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_header_cart_info', 'outer-inner', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_cart_info', 'radio', __( 'Cart Information', '__x__' ), $list_woocommerce_navbar_cart_info, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_header_cart_style', 'square', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_cart_style', 'radio', __( 'Cart Style', '__x__' ), $list_woocommerce_navbar_cart_style, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_header_cart_layout', 'inline', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_cart_layout', 'radio', __( 'Cart Layout', '__x__' ), $list_woocommerce_navbar_cart_layout, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_header_cart_adjust', '30', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_cart_adjust', 'text', __( 'Cart Alignment (px)', '__x__' ), 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_header_cart_content_inner', 'count', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_cart_content_inner', 'radio', __( 'Cart Content &ndash; Inner', '__x__' ), $list_woocommerce_navbar_cart_content, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_header_cart_content_outer', 'total', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_cart_content_outer', 'radio', __( 'Cart Content &ndash; Outer', '__x__' ), $list_woocommerce_navbar_cart_content, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_header_cart_content_inner_color', '#ffffff', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_cart_content_inner_color', 'color', __( 'Cart Content &ndash; Inner Color', '__x__' ), 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_header_cart_content_inner_color_hover', '#ffffff', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_cart_content_inner_color_hover', 'color', __( 'Cart Content &ndash; Inner Color Hover', '__x__' ), 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_header_cart_content_outer_color', '#b7b7b7', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_cart_content_outer_color', 'color', __( 'Cart Content &ndash; Outer Color', '__x__' ), 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_header_cart_content_outer_color_hover', '#272727', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_header_cart_content_outer_color_hover', 'color', __( 'Cart Content &ndash; Outer Color Hover', '__x__' ), 'x_customizer_section_woocommerce' );


      //
      // Shop.
      //

      $x['set'][] = array( 'x_woocommerce_shop_layout_content', 'sidebar', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_shop_layout_content', 'radio', __( 'Shop Layout', '__x__' ), $list_section_layouts, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_shop_columns', '3', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_shop_columns', 'radio', __( 'Shop Columns', '__x__' ), $list_shop_columns, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_shop_count', '12', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_shop_count', 'text', __( 'Posts Per Page', '__x__' ), 'x_customizer_section_woocommerce' );


      //
      // Single product.
      //

      $x['set'][] = array( 'x_woocommerce_product_tabs_enable', '1', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_product_tabs_enable', 'radio', __( 'Product Tabs', '__x__' ), $list_on_off, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_product_tab_description_enable', '1', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_product_tab_description_enable', 'radio', __( 'Description Tab', '__x__' ), $list_on_off, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_product_tab_additional_info_enable', '1', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_product_tab_additional_info_enable', 'radio', __( 'Additional Information Tab', '__x__' ), $list_on_off, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_product_tab_reviews_enable', '1', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_product_tab_reviews_enable', 'radio', __( 'Reviews Tab', '__x__' ), $list_on_off, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_product_related_enable', '1', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_product_related_enable', 'radio', __( 'Related Products', '__x__' ), $list_on_off, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_product_related_columns', '4', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_product_related_columns', 'radio', __( 'Related Product Columns', '__x__' ), $list_shop_columns, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_product_related_count', '4', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_product_related_count', 'text', __( 'Related Product Post Count', '__x__' ), 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_product_upsells_enable', '1', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_product_upsells_enable', 'radio', __( 'Upsells', '__x__' ), $list_on_off, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_product_upsell_columns', '4', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_product_upsell_columns', 'radio', __( 'Upsell Columns', '__x__' ), $list_shop_columns, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_product_upsell_count', '4', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_product_upsell_count', 'text', __( 'Upsell Post Count', '__x__' ), 'x_customizer_section_woocommerce' );


      //
      // Cart.
      //

      $x['set'][] = array( 'x_woocommerce_cart_cross_sells_enable', '1', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_cart_cross_sells_enable', 'radio', __( 'Cross Sells', '__x__' ), $list_on_off, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_cart_cross_sells_columns', '4', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_cart_cross_sells_columns', 'radio', __( 'Cross Sell Columns', '__x__' ), $list_shop_columns, 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_cart_cross_sells_count', '4', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_cart_cross_sells_count', 'text', __( 'Cross Sell Post Count', '__x__' ), 'x_customizer_section_woocommerce' );


      //
      // AJAX add to cart.
      //

      $x['set'][] = array( 'x_woocommerce_ajax_add_to_cart_color', '#545454', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_ajax_add_to_cart_color', 'color', __( 'Icon Color', '__x__' ), 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_ajax_add_to_cart_bg_color', '#000000', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_ajax_add_to_cart_bg_color', 'color', __( 'Background Color', '__x__' ), 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_ajax_add_to_cart_color_hover', '#ffffff', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_ajax_add_to_cart_color_hover', 'color', __( 'Icon Color Hover', '__x__' ), 'x_customizer_section_woocommerce' );

      $x['set'][] = array( 'x_woocommerce_ajax_add_to_cart_bg_color_hover', '#46a546', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_ajax_add_to_cart_bg_color_hover', 'color', __( 'Background Color Hover', '__x__' ), 'x_customizer_section_woocommerce' );


      //
      // Widgets.
      //

      $x['set'][] = array( 'x_woocommerce_widgets_image_alignment', 'left', 'refresh' );
      $x['con'][] = array( 'x_woocommerce_widgets_image_alignment', 'radio', __( 'Image Alignment', '__x__' ), $list_left_right_positioning, 'x_customizer_section_woocommerce' );

  }


  //
  // Options - Social.
  //

      $x['set'][] = array( 'x_social_facebook', '', 'refresh' );
      $x['con'][] = array( 'x_social_facebook', 'text', __( 'Facebook Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_twitter', '', 'refresh' );
      $x['con'][] = array( 'x_social_twitter', 'text', __( 'Twitter Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_googleplus', '', 'refresh' );
      $x['con'][] = array( 'x_social_googleplus', 'text', __( 'Google+ Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_linkedin', '', 'refresh' );
      $x['con'][] = array( 'x_social_linkedin', 'text', __( 'LinkedIn Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_xing', '', 'refresh' );
      $x['con'][] = array( 'x_social_xing', 'text', __( 'XING Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_foursquare', '', 'refresh' );
      $x['con'][] = array( 'x_social_foursquare', 'text', __( 'Foursquare Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_youtube', '', 'refresh' );
      $x['con'][] = array( 'x_social_youtube', 'text', __( 'YouTube Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_vimeo', '', 'refresh' );
      $x['con'][] = array( 'x_social_vimeo', 'text', __( 'Vimeo Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_instagram', '', 'refresh' );
      $x['con'][] = array( 'x_social_instagram', 'text', __( 'Instagram Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_pinterest', '', 'refresh' );
      $x['con'][] = array( 'x_social_pinterest', 'text', __( 'Pinterest Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_dribbble', '', 'refresh' );
      $x['con'][] = array( 'x_social_dribbble', 'text', __( 'Dribbble Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_flickr', '', 'refresh' );
      $x['con'][] = array( 'x_social_flickr', 'text', __( 'Flickr Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_behance', '', 'refresh' );
      $x['con'][] = array( 'x_social_behance', 'text', __( 'Behance Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_tumblr', '', 'refresh' );
      $x['con'][] = array( 'x_social_tumblr', 'text', __( 'Tumblr Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_whatsapp', '', 'refresh' );
      $x['con'][] = array( 'x_social_whatsapp', 'text', __( 'Whatsapp Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_soundcloud', '', 'refresh' );
      $x['con'][] = array( 'x_social_soundcloud', 'text', __( 'SoundCloud Profile URL', '__x__' ), 'x_customizer_section_social' );

      $x['set'][] = array( 'x_social_rss', '', 'refresh' );
      $x['con'][] = array( 'x_social_rss', 'text', __( 'RSS Feed URL', '__x__' ), 'x_customizer_section_social' );


      //
      // Open Graph.
      //

      $x['set'][] = array( 'x_social_open_graph', '1', 'refresh' );
      $x['con'][] = array( 'x_social_open_graph', 'radio', __( 'Enable Open Graph', '__x__' ), $list_on_off, 'x_customizer_section_social' );


      //
      // Social Fallback Image.
      //

      $x['set'][] = array( 'x_social_fallback_image', '', 'refresh' );
      $x['con'][] = array( 'x_social_fallback_image', 'image', __( 'Social Fallback Image', '__x__' ), 'x_customizer_section_social' );


  //
  // Options - Site Icons.
  //

      $x['set'][] = array( 'x_icon_favicon', '', 'refresh' );
      $x['con'][] = array( 'x_icon_favicon', 'text', __( 'Favicon (Set Path to Image Below)', '__x__' ), 'x_customizer_section_site_icons' );

      $x['set'][] = array( 'x_icon_touch', '', 'refresh' );
      $x['con'][] = array( 'x_icon_touch', 'image', __( 'Touch Icon (iOS and Android)', '__x__' ), 'x_customizer_section_site_icons' );

      $x['set'][] = array( 'x_icon_tile', '', 'refresh' );
      $x['con'][] = array( 'x_icon_tile', 'image', __( 'Tile Icon (Microsoft)', '__x__' ), 'x_customizer_section_site_icons' );

      $x['set'][] = array( 'x_icon_tile_bg_color', '#ffffff', 'refresh' );
      $x['con'][] = array( 'x_icon_tile_bg_color', 'color', __( 'Tile Icon Background Color', '__x__' ), 'x_customizer_section_site_icons' );


  //
  // Options - Custom.
  //

      $x['set'][] = array( 'x_custom_styles', '', 'refresh' );
      $x['con'][] = array( 'x_custom_styles', 'textarea', __( 'CSS', '__x__' ), 'x_customizer_section_custom' );

      $x['set'][] = array( 'x_custom_scripts', '', 'refresh' );
      $x['con'][] = array( 'x_custom_scripts', 'textarea', __( 'JavaScript', '__x__' ), 'x_customizer_section_custom' );


  //
  // Output - Sections.
  //

  foreach ( $x['sec'] as $section ) {

    $wp_customize->add_section( $section[0], array(
      'title'    => $section[1],
      'priority' => $section[2],
    ) );

  }


  //
  // Output - Settings.
  //

  foreach ( $x['set'] as $setting ) {

    $wp_customize->add_setting( $setting[0], array(
      'type'      => 'option',
      'default'   => $setting[1],
      'transport' => $setting[2]
    ));

  }


  //
  // Output - Controls.
  //

  foreach ( $x['con'] as $control ) {

    static $i = 1;

    if ( $control[1] == 'radio' ) {

      $wp_customize->add_control( $control[0], array(
        'type'     => $control[1],
        'label'    => $control[2],
        'section'  => $control[4],
        'priority' => $i,
        'choices'  => $control[3]
      ));

    } elseif ( $control[1] == 'select' ) {

      $wp_customize->add_control( $control[0], array(
        'type'     => $control[1],
        'label'    => $control[2],
        'section'  => $control[4],
        'priority' => $i,
        'choices'  => $control[3]
      ));

    } elseif ( $control[1] == 'slider' ) {

      $wp_customize->add_control(
        new X_Customize_Control_Slider( $wp_customize, $control[0], array(
          'label'    => $control[2],
          'section'  => $control[4],
          'settings' => $control[0],
          'priority' => $i,
          'choices'  => $control[3]
        ))
      );

    } elseif ( $control[1] == 'text' ) {

      $wp_customize->add_control( $control[0], array(
        'type'     => $control[1],
        'label'    => $control[2],
        'section'  => $control[3],
        'priority' => $i
      ));

    } elseif ( $control[1] == 'textarea' ) {

      $wp_customize->add_control(
        new X_Customize_Control_Textarea( $wp_customize, $control[0], array(
          'label'    => $control[2],
          'section'  => $control[3],
          'settings' => $control[0],
          'priority' => $i
        ))
      );

    } elseif ( $control[1] == 'checkbox' ) {

      $wp_customize->add_control( $control[0], array(
        'type'     => $control[1],
        'label'    => $control[2],
        'section'  => $control[3],
        'priority' => $i
      ));

    } elseif ( $control[1] == 'color' ) {

      $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, $control[0], array(
          'label'    => $control[2],
          'section'  => $control[3],
          'settings' => $control[0],
          'priority' => $i
        ))
      );

    } elseif ( $control[1] == 'image' ) {

      $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize, $control[0], array(
          'label'    => $control[2],
          'section'  => $control[3],
          'settings' => $control[0],
          'priority' => $i
        ))
      );

    }

    $i++;

  }

}

add_action( 'customize_register', 'x_customizer_options_register' );