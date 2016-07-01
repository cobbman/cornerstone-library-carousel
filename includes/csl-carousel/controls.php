<?php

/**
 * Element Controls: CSL Carousel
 */

return array(

	// Max Items

	'max_visible_items' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Max visible items', csl18n() ),
			'tooltip' => __( 'Carousel will automatically show less items to fit smaller screens. Limit the max amount here.', csl18n() ),
		),
    'suggest' => __( '3', csl18n() ),
	),

	// Slide by number of items

	'slide_by' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Slide to no. of items', csl18n() ),
			'tooltip' => __( 'Carousel will move based on what is specified here.', csl18n() ),
		),
		'suggest' => __( '3', csl18n() ),
	),

	// Auto Play

	'auto_play' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Auto Play', csl18n() ),
			'tooltip' => __( 'Will automatically play the carousel', csl18n() ),
		)
	),

	// Loop (instead of rewind)

	'loop' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Loop', csl18n() ),
			'tooltip' => __( 'Instead of rewinding at the end, simulate eternal looping.', csl18n() ),
		)
	),

	// Auto Vertial Align

	'auto_valign' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Automatically Center Items?', csl18n() ),
			'tooltip' => __( 'Will auto center vertically and horizontally', csl18n() ),
		)
	),

	// Pause on Hover

	'pause_hover' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Pause on Hover?', csl18n() ),
			'tooltip' => __( 'Will pause the carousel when the user hovers their mouse over it.', csl18n() ),
		)
	),

	// Pagination Type

	'pagination_type' => array(
		'type' => 'select',
		'ui'   => array(
			'title' => __( 'Navigation & Pagination', csl18n() ),
      'tooltip' => __( 'Select the pagination style.', csl18n() ),
		),
		'options' => array(
			'choices' => array(
        array( 'value' => 'none',        'label' => __( 'None', csl18n() ) ),
        // array( 'value' => 'dots',        'label' => __( 'Dots Only', csl18n() ) ),
        // array( 'value' => 'dots_nav',    'label' => __( 'Dots and Prev/Next', csl18n() ) ),
        // array( 'value' => 'numbers',     'label' => __( 'Numbers Only', csl18n() ) ),
        // array( 'value' => 'numbers_nav', 'label' => __( 'Numbers and Prev/Next', csl18n() ) ),
        array( 'value' => 'prev_next',   'label' => __( 'Prev/Next Only', csl18n() ) )
      ),
		),
	),

	

	// Carousel Items

	'elements' => array(
		'type' => 'sortable',
		'options' => array(
			'element' => 'csl-carousel-item',
			'newTitle' => __('Carousel Item %s', csl18n()),
			'floor' => 2,
			'capacity' => 100,
			'title_field' => 'heading'
		),
		'context' => 'content',
		'suggest' => array(
			array( 'heading' => __('Carousel Item 1', csl18n()) ),
			array( 'heading' => __('Carousel Item 2', csl18n()) ),
			array( 'heading' => __('Carousel Item 3', csl18n()) ),
		)
	)

);