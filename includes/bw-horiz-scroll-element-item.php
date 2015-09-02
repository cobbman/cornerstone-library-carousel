<?php

class Custom_Horizontal_Scroll_Item extends Cornerstone_Element_Base {

  public function data() {
    return array(
      'name'        => 'csl-horiz-scroll-item',
      'title'       => __( 'Scroll Item', csl18n() ),
      'section'     => '_content',
      'description' => __( 'Scroll Item description.', csl18n() ),
      'supports'    => array( 'id', 'class', 'style' ),
      'render'      => false,
      'delegate'    => true
    );
  }

  public function controls() {

    $this->addControl(
      'title',
      'title',
      NULL,
      NULL,
      ''
    );

    $this->addControl(
      'content',
      'editor',
      __( 'Content', csl18n() ),
      __( 'Include your desired content here.', csl18n() ),
      __( 'Add some content to your scrolling section here.', csl18n() )
    );

  }

  // public function render( $atts ) {

  //   extract( $atts );

  //   $extra = $this->extra( array(
  //     'id'    => $id,
  //     'class' => $class,
  //     'style' => $style
  //   ) );

  //   $shortcode = "[fashioneye-horizontal-scroll-item{$extra}][/fashioneye-horizontal-scroll-item]";

  //   return $shortcode;

  // }

}