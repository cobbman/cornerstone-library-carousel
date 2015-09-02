<?php
/*
Plugin Name: Cornerstone Library: Horizontal Scrolling Elements
Plugin URI:  http://bigwilliam.com/
Description: Adds a horizontal scrolling element to the Cornerstone Page builder. Learn more at http://cornerstonelibrary.com
Version:     0.1
Author:      BigWilliam
Author URI:  http://bigwilliam.com
Author Email: hello@bigwilliam.com
Text Domain: __x__
*/


// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) exit;



/*
 * => Enqueue Scripts
 * ---------------------------------------------------------------------------*/
function csl_horiz_scroll_scripts() {
	wp_enqueue_script( 'simplyscroll', plugins_url('/assets/js/jquery.simplyscroll.min.js', __FILE__ ), array('jquery'), null, true );
	wp_enqueue_style('scrollercss', plugins_url('/assets/css/simplyscroll.css', __FILE__ ), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'csl_horiz_scroll_scripts', 100 );


// shortcodes
require_once('includes/bw-horiz-scroll-shortcodes.php');


/*
 * => ADD ELEMENTS TO CORNERSTONE
 * ---------------------------------------------------------------------------*/
add_action( 'cornerstone_load_elements', 'bw_cornerstone_horiz_scroll' );
function bw_cornerstone_horiz_scroll() {
	require_once( 'includes/bw-horiz-scroll-element.php' );
	require_once( 'includes/bw-horiz-scroll-element-item.php' );
  cornerstone_add_element( 'CSL_Horizontal_Scroll' );
  cornerstone_add_element( 'CSL_Horizontal_Scroll_Item' );
}