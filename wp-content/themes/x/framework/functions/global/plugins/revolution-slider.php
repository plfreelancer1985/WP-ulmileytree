<?php

// =============================================================================
// FUNCTIONS/GLOBAL/PLUGINS/REVOLUTION-SLIDER.PHP
// -----------------------------------------------------------------------------
// Plugin setup for theme compatibility.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Remove Meta Boxes
// =============================================================================

// Remove Meta Boxes
// =============================================================================

if ( ! function_exists( 'x_revolution_slider_remove_meta_boxes' ) ) {

  function x_revolution_slider_remove_meta_boxes() {

    if ( is_admin() ) {
      foreach ( get_post_types() as $post_type ) {
        remove_meta_box( 'mymetabox_revslider_0', $post_type, 'normal' );
      }
    }

  }

  add_action( 'do_meta_boxes', 'x_revolution_slider_remove_meta_boxes' );

}