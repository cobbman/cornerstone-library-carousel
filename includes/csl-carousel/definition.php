<?php

/**
 * Definition: Cornerstone Carousel
 */

class CSL_Carousel {

	public function ui() {
		return array(
			'title' => __( 'Carousel', '__x__' )
		);
	}

	public function flags() {
		// dynamic_child allows child elements to render individually, but may cause
		// styling or behavioral issues in the page builder depending on how your
		// shortcodes work. If you have trouble with element presentation, try
		// removing this flag.
		return array(
			'dynamic_child' => false
		);
	}
	
}