<?php

class CSL_Horizontal_Scroll extends Cornerstone_Element_Base {

  public function data() {
    return array(
      'name'        => 'csl-horizontal-scroll',
      'title'       => __( 'Scrolling Carousel', csl18n() ),
      'section'     => 'content',
      'description' => __( 'Scrolls content horizontally.', csl18n() ),
      'supports'    => array( 'id', 'class', 'style' ),
      'childType'   => 'csl-horizontal-scroll-item',
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
      'numitems',
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

      $contents .= '[csl-horizontal-scroll-item'  . $item_extra . ']' . $e['content'] . '[/csl-horizontal-scroll-item]';

    }

    $shortcode = "[csl-horizontal-scroll numitems=\"{$numitems}\" duration=\"{$duration}\" {$extra}]{$contents}[/csl-horizontal-scroll]";

    return $shortcode;

  }

}
cornerstone_add_element( 'CSL_Horizontal_Scroll' );