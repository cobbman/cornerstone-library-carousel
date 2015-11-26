<?php
/*
Plugin Name: Cornerstone: Carousel
Plugin URI:  http://bigwilliam.com/
Description: Adds a horizontal scrolling element to the Cornerstone Page builder. Download plugin at <a href="http://cornerstonelibrary.com" target="_blank">Cornerstone Library</a>.
Version:     1.0
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
function cornerstone_carousel_scripts() {

	// OWL CAROUSEL
	wp_enqueue_script( 'owl-carousel', plugins_url('/assets/js/owl-carousel/owl.carousel.min.js', __FILE__ ), array('jquery'), null, true );
	wp_enqueue_style('owl-main-css', plugins_url('/assets/js/owl/owl-carousel/owl.carousel.css', __FILE__ ), array(), '1.0' );
	wp_enqueue_style('owl-theme-css', plugins_url('/assets/js/owl/owl-carousel/owl.theme.css', __FILE__ ), array(), '1.0' );

	// CUSTOM
	// wp_enqueue_script( 'cornerstone-carousel-js', plugins_url('/assets/js/cornerstone-carousel.js', __FILE__ ), array('jquery'), null, true );
	// wp_enqueue_style('csl-scroll-css', plugins_url('/assets/css/cornerstone-carousel.css', __FILE__ ), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'cornerstone_carousel_scripts', 100 );


/*
 * => SHORTCODES
 * ---------------------------------------------------------------------------*/

require_once('shortcodes/cornerstone-carousel-shortcodes.php');


/*
 * => ADD ELEMENTS TO CORNERSTONE
 * ---------------------------------------------------------------------------*/
function cornerstone_carousel_elements() {
	require_once( 'elements/cornerstone-carousel-element.php' );
	require_once( 'elements/cornerstone-carousel-element-item.php' );
}
add_action( 'cornerstone_load_elements', 'cornerstone_carousel_elements' );
