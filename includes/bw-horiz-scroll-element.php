<?php

class CSL_Horizontal_Scroll extends Cornerstone_Element_Base {

  public function data() {
    return array(
      'name'        => 'csl-horizontal-scroll',
      'title'       => __( 'Custom Horizontal Scroll', csl18n() ),
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


    // $this->addControl(
    //   'speed',
    //   'select',
    //   __( 'Speed', csl18n() ),
    //   __( 'Select a scroll speed. Higher is faster. 1 is usually good.', csl18n() ),
    //   '1',
    //   array(
    //     'choices' => array(
    //       array( 'value' => '1',  'label' => __( '1', csl18n() ) ),
    //       array( 'value' => '2',  'label' => __( '2', csl18n() ) ),
    //       array( 'value' => '3',  'label' => __( '3', csl18n() ) ),
    //       array( 'value' => '4',  'label' => __( '4', csl18n() ) ),
    //       array( 'value' => '5',  'label' => __( '5', csl18n() ) ),
    //       array( 'value' => '6',  'label' => __( '6', csl18n() ) ),
    //       array( 'value' => '7',  'label' => __( '7', csl18n() ) ),
    //       array( 'value' => '8',  'label' => __( '8', csl18n() ) ),
    //       array( 'value' => '9',  'label' => __( '9', csl18n() ) ),
    //       array( 'value' => '10', 'label' => __( '10', csl18n() ) )
    //     )
    //   )
    // );

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

    $shortcode = "[csl-horizontal-scroll {$extra}]{$contents}[/csl-horizontal-scroll]";

    return $shortcode;

  }

}