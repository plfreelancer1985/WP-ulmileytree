<?php
 
// =============================================================================
// FUNCTIONS/GLOBAL/ADMIN/CUSTOMIZER/OUTPUT/VARIABLES.PHP
// -----------------------------------------------------------------------------
// Variables to be used across all Stacks for global CSS output.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Layout and Design
//   01. Typography
//   02. Header
//   03. Buttons
// =============================================================================

// Layout and Design
// =============================================================================

$x_stack                               = x_get_stack();
$x_layout_site                         = x_get_option( 'x_layout_site', 'full-width' );
$x_layout_site_max_width               = x_get_option( 'x_layout_site_max_width', '1200' );
$x_layout_site_width                   = x_get_option( 'x_layout_site_width', '88' );
$x_layout_content                      = x_get_option( 'x_layout_content', 'content-sidebar' );
$x_layout_content_width                = x_get_option( 'x_layout_content_width', '72' );
$x_layout_sidebar_width                = x_get_option( 'x_layout_sidebar_width', '250' );
$x_design_bg_color                     = x_get_option( 'x_design_bg_color', '#f3f3f3' );
$x_design_bg_image_pattern             = x_get_option( 'x_design_bg_image_pattern', '' );
$x_design_bg_image_full                = x_get_option( 'x_design_bg_image_full', '' );
$x_design_bg_image_full_fade           = x_get_option( 'x_design_bg_image_full_fade', '750' );



// Typography
// =============================================================================

$x_custom_fonts                        = x_get_option( 'x_custom_fonts', '' );
$x_logo_width                          = x_get_option( 'x_logo_width', '' );
$x_logo_font_family                    = x_get_option( 'x_logo_font_family', 'Lato' );
$x_logo_font_size                      = x_get_option( 'x_logo_font_size', '54' );
$x_logo_font_weight_and_style          = x_get_option( 'x_logo_font_weight', '400' );
$x_logo_font_color_enable              = x_get_option( 'x_logo_font_color_enable', '' );
$x_logo_font_color                     = x_get_option( 'x_logo_font_color', '#999999' );
$x_logo_letter_spacing                 = x_get_option( 'x_logo_letter_spacing', '-3' );
$x_logo_uppercase_enable               = x_get_option( 'x_logo_uppercase_enable', '' );
$x_navbar_font_family                  = x_get_option( 'x_navbar_font_family', 'Lato' );
$x_navbar_font_size                    = x_get_option( 'x_navbar_font_size', '12' );
$x_navbar_font_weight_and_style        = x_get_option( 'x_navbar_font_weight', '400' );
$x_navbar_link_color                   = x_get_option( 'x_navbar_link_color', '#b7b7b7' );
$x_navbar_link_color_hover             = x_get_option( 'x_navbar_link_color_hover', '#272727' );
$x_navbar_letter_spacing               = x_get_option( 'x_navbar_letter_spacing', '1' );
$x_headings_font_family                = x_get_option( 'x_headings_font_family', 'Lato' );
$x_headings_font_weight_and_style      = x_get_option( 'x_headings_font_weight', '400' );
$x_headings_font_color_enable          = x_get_option( 'x_headings_font_color_enable', '' );
$x_headings_font_color                 = x_get_option( 'x_headings_font_color', '#999999' );
$x_headings_letter_spacing             = x_get_option( 'x_headings_letter_spacing', '-1' );
$x_headings_uppercase_enable           = x_get_option( 'x_headings_uppercase_enable', '' );
$x_headings_widget_icons_enable        = x_get_option( 'x_headings_widget_icons_enable', '' );
$x_body_font_family                    = x_get_option( 'x_body_font_family', 'Lato' );
$x_body_font_size                      = x_get_option( 'x_body_font_size', '14' );
$x_body_font_weight_and_style          = x_get_option( 'x_body_font_weight', '400' );
$x_body_font_color_enable              = x_get_option( 'x_body_font_color_enable', '' );
$x_body_font_color                     = x_get_option( 'x_body_font_color', '#999999' );
$x_content_font_size                   = x_get_option( 'x_content_font_size', '14' );
$x_site_link_color                     = x_get_option( 'x_site_link_color', '#ff2a13' );
$x_site_link_color_hover               = x_get_option( 'x_site_link_color_hover', '#d80f0f' );


//
// Check if fonts are italic as well as removing 'italic' from setting output
// if it exsists to provide us with just the weight to work with.
//

$x_body_font_is_italic                 = x_is_font_italic( $x_body_font_weight_and_style );
$x_logo_font_is_italic                 = x_is_font_italic( $x_logo_font_weight_and_style );
$x_navbar_font_is_italic               = x_is_font_italic( $x_navbar_font_weight_and_style );
$x_headings_font_is_italic             = x_is_font_italic( $x_headings_font_weight_and_style );

$x_body_font_weight                    = x_get_font_weight( $x_body_font_weight_and_style );
$x_logo_font_weight                    = x_get_font_weight( $x_logo_font_weight_and_style );
$x_navbar_font_weight                  = x_get_font_weight( $x_navbar_font_weight_and_style );
$x_headings_font_weight                = x_get_font_weight( $x_headings_font_weight_and_style );



// Header
// =============================================================================

$x_navbar_positioning                  = x_get_navbar_positioning();
$x_logo_adjust_navbar_top              = x_get_option( 'x_logo_adjust_navbar_top', '13' );
$x_logo_adjust_navbar_side             = x_get_option( 'x_logo_adjust_navbar_side', '30' );
$x_logo_navigation_layout              = x_get_option( 'x_logo_navigation_layout', 'inline' );
$x_logobar_adjust_spacing_top          = x_get_option( 'x_logobar_adjust_spacing_top', '15' );
$x_logobar_adjust_spacing_bottom       = x_get_option( 'x_logobar_adjust_spacing_bottom', '15' );
$x_navbar_width                        = x_get_option( 'x_navbar_width', '235' );
$x_navbar_height                       = x_get_option( 'x_navbar_height', '90' );
$x_navbar_adjust_links_top             = x_get_option( 'x_navbar_adjust_links_top', '34' );
$x_navbar_adjust_links_top_spacing     = x_get_option( 'x_navbar_adjust_links_top_spacing', 20 );
$x_navbar_adjust_links_side            = x_get_option( 'x_navbar_adjust_links_side', '50' );
$x_navbar_adjust_button                = x_get_option( 'x_navbar_adjust_button', '20' );
$x_navbar_adjust_button_size           = x_get_option( 'x_navbar_adjust_button_size', '24' );
$x_header_widget_areas                 = x_header_widget_areas_count();
$x_widgetbar_button_background         = x_get_option( 'x_widgetbar_button_background', '#000000' );
$x_widgetbar_button_background_hover   = x_get_option( 'x_widgetbar_button_background_hover', '#444444' );



// Buttons
// =============================================================================

$x_button_style                        = x_get_option( 'x_button_style', 'real' );
$x_button_shape                        = x_get_option( 'x_button_shape', 'rounded' );
$x_button_size                         = x_get_option( 'x_button_size', 'regular' );
$x_button_color                        = x_get_option( 'x_button_color', '#ffffff' );
$x_button_background_color             = x_get_option( 'x_button_background_color', '#ff2a13' );
$x_button_border_color                 = x_get_option( 'x_button_border_color', '#ac1100' );
$x_button_bottom_color                 = x_get_option( 'x_button_bottom_color', '#a71000' );
$x_button_color_hover                  = x_get_option( 'x_button_color_hover', '#ffffff' );
$x_button_background_color_hover       = x_get_option( 'x_button_background_color_hover', '#ef2201' );
$x_button_border_color_hover           = x_get_option( 'x_button_border_color_hover', '#600900' );
$x_button_bottom_color_hover           = x_get_option( 'x_button_bottom_color_hover', '#a71000' );

?>