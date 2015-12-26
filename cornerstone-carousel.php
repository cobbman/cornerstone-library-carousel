<?php
/*
Plugin Name: Cornerstone Library: Carousel
Plugin URI:  http://bigwilliam.com/
Description: Adds a horizontal scrolling carousel to the Cornerstone Page builder. Download plugin at <a href="http://cornerstonelibrary.com" target="_blank">Cornerstone Library</a>.
Version:     2.0
Author:      William
Author URI:  http://bigwilliam.com
Author Email: william@d3fy.com
Text Domain: __x__

*/


// Prevent direct access
if ( ! defined( 'WPINC' ) ) die;

define( 'CSL_CAROUSEL_PATH', plugin_dir_path( __FILE__ ) );
define( 'CSL_CAROUSEL_URL', plugin_dir_url( __FILE__ ) );


/*
 * => ENQUEUE SCRIPTS
 * ---------------------------------------------------------------------------*/
function csl_carousel_scripts() {

	// OWL
	wp_enqueue_script( 'owl-carousel-js', CSL_CAROUSEL_URL . '/assets/js/owl-carousel/owl.carousel.min.js', array('jquery'), null, true );
	wp_enqueue_style( 'owl-main-css',  CSL_CAROUSEL_URL . '/assets/js/owl-carousel/owl.carousel.css', array(), '1.2' );
	wp_enqueue_style( 'owl-theme-css', CSL_CAROUSEL_URL . '/assets/js/owl-carousel/owl.theme.css', array(), '1.2' );
}
add_action( 'wp_enqueue_scripts', 'csl_carousel_scripts');


/*
 * => ADD TO CORNERSTONE
 * ---------------------------------------------------------------------------*/
function csl_carousel_elements() {
	// require_once( 'elements/cornerstone-carousel-element.php' );
	// require_once( 'elements/cornerstone-carousel-element-item.php' );
	cornerstone_register_element( 'CSL_Carousel', 'csl-carousel', CSL_CAROUSEL_PATH . 'includes/my-element' );
	cornerstone_register_element( 'CSL_Carousel', 'csl-carousel', CSL_CAROUSEL_PATH . 'includes/my-element' );
}
add_action( 'cornerstone_register_elements', 'csl_carousel_elements' );
