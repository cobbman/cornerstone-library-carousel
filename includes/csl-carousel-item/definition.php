<?php

/**
 * Element Definition: Cornerstone Carousel ITEM
 */

class CSL_Carousel_Item {

	public function ui() {
		return array(
			'title' => __( 'Carousel Item', '__x__' )
		);
	}

	public function flags() {
		return array(
			'child' => true
		);
	}

	// public function update_build_shortcode_atts( $atts, $parent ) {

	// 	if ( ! is_null( $parent ) ) {
	// 		$atts['linked'] = $parent['linked'];
	// 	}

	// 	return $atts;

	// }
	
}