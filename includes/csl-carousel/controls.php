<?php

/**
 * Element Controls: CSL Carousel
 */

return array(

	// Max Items
	'maxitems' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Max number of items', '__x__' ),
			'tooltip' => __( 'Carousel will automatically show less for smaller screens. Limit the max amount here.', '__x__' ),
		),
		'context' => 'content',
    'suggest' => __( '4', '__x__' ),
	),

	// Auto Vertial Align
	'auto_valign' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Automatically Center Items?', '__x__' ),
			'tooltip' => __( 'Will auto center vertically and horizontally', '__x__' ),
		),
		'context' => 'content', // KEEP THIS???
	),

	// Pause on Hover
	'pause_hover' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Pause on Hover?', '__x__' ),
			'tooltip' => __( 'Will pause the animation when the user hovers their mouse over it.', '__x__' ),
		),
	),

	// Pagination Type
	'pagination_type' => array(
		'type' => 'select',
		'ui'   => array(
			'title' => __( 'Navigation & Pagination', '__x__' ),
      'tooltip' => __( 'Select the pagination style.', '__x__' ),
		),
		'options' => array(
			'choices' => array(
        array( 'value' => 'none',    'label' => __( 'None', '__x__' ) ),
        array( 'value' => 'dots',    'label' => __( 'Dots Only', '__x__' ) ),
        array( 'value' => 'dots_nav', 'label' => __( 'Dots and Prev/Next', '__x__' ) ),
        array( 'value' => 'numbers', 'label' => __( 'Numbers Only', '__x__' ) ),
        array( 'value' => 'numbers_nav', 'label' => __( 'Numbers and Prev/Next', '__x__' ) ),
        array( 'value' => 'prev_next', 'label' => __( 'Prev/Next Only', '__x__' ) )
      ),
		),
	),



	//  asdfadsfasd
	'asdf' => array(
		'type' => 'choose',
		'ui' => array(
			'title' => __( 'Orientation', '__x__' ),
      'tooltip' => __( 'Choose to display the heading vertically or horizonatally', '__x__' ),
		),
		'options' => array(
      'columns' => '2',
      'choices' => array(
        array( 'value' => 'vertical',   'tooltip' => __( 'Vertical', '__x__' ),   'icon' => fa_entity( 'arrows-v' ) ),
        array( 'value' => 'horizontal', 'tooltip' => __( 'Horizontal', '__x__' ), 'icon' => fa_entity( 'arrows-h' ) ),
      )
    )
  ),

	'heading_color' => array(
	 	'type' => 'color',
	 	'ui' => array(
			'title'   => __( 'Heading Color', '__x__' )
		)
	),

	'background_color' => array(
	 	'type' => 'color',
	 	'ui' => array(
			'title'   => __( 'Background Color', '__x__' )
		)
	),

	'border' => array(
	 	'mixin' => 'border',
	),

);