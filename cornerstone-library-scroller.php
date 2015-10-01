<?php
/*
Plugin Name: Cornerstone Library: Horizontal Scrolling Elements
Plugin URI:  http://bigwilliam.com/
Description: Adds a horizontal scrolling element to the Cornerstone Page builder, based on http://docs.dev7studios.com/jquery-plugins/caroufredsel. Download plugin at http://cornerstonelibrary.com
Version:     0.1
Author:      BigWilliam
Author URI:  http://bigwilliam.com
Author Email: hello@bigwilliam.com
Text Domain: __x__

CarouFredSel Documentation: http://docs.dev7studios.com/jquery-plugins/caroufredsel
*/


// Prevent direct access
if ( ! defined( 'WPINC' ) ) die;



/*
 * => ENQUEUE SCRIPTS
 * ---------------------------------------------------------------------------*/
function csl_horiz_scroll_scripts() {
	wp_enqueue_script( 'caroufredsel', plugins_url('/assets/js/carouFredSel/jquery.carouFredSel-6.2.1.js', __FILE__ ), array('jquery'), null, true );
	// wp_enqueue_script( 'touchswipe', plugins_url('/assets/js/carouFredSel/helper-plugins/jquery.touchSwipe.min.js', __FILE__ ), array('jquery'), null, true );

	// wp_enqueue_script( 'caroufredsel-launcher', plugins_url('/assets/js/custom.js', __FILE__ ), array('jquery'), null, true );
	
	// wp_enqueue_style('csl-scroll-css', plugins_url('/assets/css/custom.css', __FILE__ ), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'csl_horiz_scroll_scripts', 100 );


// shortcodes
require_once('shortcodes/bw-horiz-scroll-shortcodes.php');


/*
 * => ADD ELEMENTS TO CORNERSTONE
 * ---------------------------------------------------------------------------*/
function csl_horizontal_scroll() {
	require_once( 'elements/bw-horiz-scroll-element.php' );
	require_once( 'elements/bw-horiz-scroll-element-item.php' );
}
add_action( 'cornerstone_load_elements', 'csl_horizontal_scroll' );
