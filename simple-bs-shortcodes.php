<?php
/*
Plugin Name: Simple Bootstrap Shortcodes
Description: Some pretty simple shortcodes to make it easier to include Bootstrap grid markup in your pages and posts.
Plugin URI:  https://github.com/JulienMelissas/simple-bs-shortcodes
Author:      Julien Melissas
Author URI:  http://www.julienmelissas.com
Version:     1.0
License:     WTFPL2
*/


// Columns outer shortcode
function BS_columns( $atts, $content = null )
{
  return '<div class="row">
    '. do_shortcode( $content ) .'
  </div>';
}
add_shortcode( 'columns', 'BS_columns' );


// Columns inner (width = 1/2)
// Note: must be called within above columns shortcode
function BS_columns_one_half( $atts, $content = null )
{
  return '<div class="col-md-6">
    '. do_shortcode( $content ) .'
  </div>';
}
add_shortcode( 'half', 'BS_columns_one_half' );

// Columns inner (width = 1/3)
// Note: must be called within above columns shortcode
function BS_columns_one_third( $atts, $content = null )
{
  return '<div class="col-md-4">
    '. do_shortcode( $content ) .'
  </div>';
}
add_shortcode( 'one-third', 'BS_columns_one_third' );

// Columns inner (width = 2/3)
// Note: must be called within above columns shortcode
function BS_columns_two_thirds( $atts, $content = null )
{
  return '<div class="col-md-8">
    '. do_shortcode( $content ) .'
  </div>';
}
add_shortcode( 'two-thirds', 'BS_columns_two_thirds' );