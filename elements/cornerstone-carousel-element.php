<?php

class BW_Cornerstone_Carousel extends Cornerstone_Element_Base {

  public function data() {
    return array(
      'name'        => 'cornerstone-carousel',
      'title'       => __( 'Scrolling Carousel', csl18n() ),
      'section'     => 'content',
      'description' => __( 'Scrolls content horizontally.', csl18n() ),
      'supports'    => array( 'id', 'class', 'style' ),
      'childType'   => 'cornerstone-carousel-item',
      'renderChild' => true
    );
  }

  public function controls() {

    $this->addControl(
      'elements',
      'sortable',
      __( 'Scroll Items', csl18n() ),
      __( 'Add a new item.', csl18n() ),
      array(
        array( 'title' => __( 'Scroll item 1', csl18n() ) ),
        array( 'title' => __( 'Scroll item 2', csl18n() ) )
      ),
      array(
        'newTitle' => __( 'Scroll item %s', csl18n() ),
        'floor'    => 2
      )
    );

    $this->addControl(
      'maxitems',
      'number',
      __( 'Number of items to show at once', csl18n() ),
      __( 'Number of items to show at once', csl18n() ),
      3,
      ''
    );

    $this->addControl(
      'duration',
      'number',
      __( 'Milliseconds between scroll movements', csl18n() ),
      __( '1 second = 1000 milliseconds', csl18n() ),
      700,
      ''
    );

    $this->addControl(
      'auto_valign',
      'toggle',
      __( 'Automatically Vertical Center Items?', csl18n() ),
      __( 'Uses CSS Flex attribute to vertically position items in the middle', csl18n() ),
      true
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

    $shortcode = "[cornerstone-carousel maxitems=\"{$maxitems}\" duration=\"{$duration}\" {$extra}]{$contents}[/cornerstone-carousel]";

    return $shortcode;

  }

}
cornerstone_add_element( 'BW_Cornerstone_Carousel' );