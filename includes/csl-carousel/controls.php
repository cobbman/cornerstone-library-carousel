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
		)
	),

	// Pause on Hover

	'pause_hover' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Pause on Hover?', '__x__' ),
			'tooltip' => __( 'Will pause the carousel when the user hovers their mouse over it.', '__x__' ),
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

	// Carousel Items

	'elements' => array(
		'type' => 'sortable',
		'options' => array(
			'element' => '',
			'newTitle' => __('Carousel Item %s', '__x__'),
			'floor' => 1,
			'capacity' => 500,
			'title_field' => 'heading'
		),
		'context' => 'content',
		'suggest' => array(
			array( 'heading' => __('First Item', '__x__') ),
			array( 'heading' => __('Second Item', '__x__') ),
		)
	)

);