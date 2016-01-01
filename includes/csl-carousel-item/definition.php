<?php

/**
 * Element Definition: Cornerstone Carousel ITEM
 */

class CSL_Cornerstone_Item {

	public function ui() {
		return array(
			'title' => __( 'Cornerstone Carousel Item', '__x__' )
		);
	}

	public function flags() {
		return array(
			'child' => true
		);
	}
	
}