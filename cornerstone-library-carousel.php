<?php
/*
Plugin Name: Cornerstone Library: CarouFredSel Carousel
Plugin URI:  http://bigwilliam.com/
Description: Adds a horizontal scrolling element to the Cornerstone Page builder, based on <a href="http://docs.dev7studios.com/jquery-plugins/caroufredsel" target="_blank">Dev7Studios CarouFredSel</a>. Download plugin at <a href="http://cornerstonelibrary.com" target="_blank">Cornerstone Library</a>
Version:     0.4
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
	wp_enqueue_script( 'caroufredsel', plugins_url('/assets/js/carouFredSel/jquery.carouFredSel-6.2.1-packed.js', __FILE__ ), array('jquery'), null, true );
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
