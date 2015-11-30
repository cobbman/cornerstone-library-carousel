<?php

class BW_Cornerstone_Carousel extends Cornerstone_Element_Base {

  public function data() {
    return array(
      'name'        => 'cornerstone-carousel',
      'title'       => __( 'Carousel', csl18n() ),
      'section'     => 'content',
      'description' => __( 'Scrolls content horizontally.', csl18n() ),
      'supports'    => array( 'id', 'class', 'style' ),
      'childType'   => 'cornerstone-carousel-item',
      'renderChild' => true
    );
  }

  public function controls() {

    // Extra controls

    $this->addControl(
      'maxitems',
      'number',
      __( 'Number of items to show at one time', csl18n() ),
      __( 'Number of items to show at once', csl18n() ),
      4,
      ''
    );

    $this->addControl(
      'auto_valign',
      'toggle',
      __( 'Automatically Vertical Center Items?', csl18n() ),
      __( 'Uses CSS Flex attribute to vertically position items in the middle', csl18n() ),
      false
    );

    $this->addControl(
      'pause_hover',
      'toggle',
      __( 'Pause on Hover?', csl18n() ),
      __( 'Will pause the animation when the user hovers their mouse over it.', csl18n() ),
      false
    );

    // $this->addControl(
    //   'navigation',
    //   'toggle',
    //   __( 'Navigation?', csl18n() ),
    //   __( 'Show previous and next controls', csl18n() ),
    //   false
    // );

    $this->addControl(
      'pagination_type',
      'select',
      __( 'Navigation & Pagination', csl18n() ),
      __( 'Select the pagination style.', csl18n() ),
      'none',
      array(
        'choices' => array(
          array( 'value' => 'none',    'label' => __( 'None', csl18n() ) ),
          array( 'value' => 'dots',    'label' => __( 'Dots Only', csl18n() ) ),
          array( 'value' => 'dots_nav', 'label' => __( 'Dots and Prev/Next', csl18n() ) ),
          array( 'value' => 'numbers', 'label' => __( 'Numbers Only', csl18n() ) ),
          array( 'value' => 'numbers_nav', 'label' => __( 'Numbers and Prev/Next', csl18n() ) ),
          array( 'value' => 'prev_next', 'label' => __( 'Prev/Next Only', csl18n() ) )
        )
      )
    );

    // Elements Items

    $this->addControl(
      'elements',
      'sortable',
      __( 'Carousel Items', csl18n() ),
      __( 'Add a new item.', csl18n() ),
      array(
        array( 'title' => __( 'Scroll item 1', csl18n() ) ),
        array( 'title' => __( 'Scroll item 2', csl18n() ) ),
        array( 'title' => __( 'Scroll item 3', csl18n() ) ),
        array( 'title' => __( 'Scroll item 4', csl18n() ) )
      ),
      array(
        'newTitle' => __( 'Scroll item %s', csl18n() ),
        'floor'    => 2
      )
    );
  }

  public function render( $atts ) {

    extract( $atts );

    $contents = '';

    foreach ( $elements as $e ) {

      $item_extra = $this->extra( array(
        'id'    => $e['id'],
        'class' => $e['class'],
        'style' => $e['style']
      ) );

      $contents .= '[cornerstone-carousel-item'  .  ' auto_valign=' . $auto_valign . $item_extra . ']' . $e['content'] . '[/cornerstone-carousel-item]';

    }

    $shortcode = "[cornerstone-carousel maxitems=\"{$maxitems}\" auto_valign=\"{$auto_valign}\" pause_hover=\"{$pause_hover}\" pagination_type=\"{$pagination_type}\" {$extra}]{$contents}[/cornerstone-carousel]";

    return $shortcode;

  }

}
cornerstone_add_element( 'BW_Cornerstone_Carousel' );