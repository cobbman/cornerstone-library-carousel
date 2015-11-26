<?php

class BW_Cornerstone_Carousel_Item extends Cornerstone_Element_Base {

  public function data() {
    return array(
      'name'        => 'cornerstone-carousel-item',
      'title'       => __( 'Carousel Item', csl18n() ),
      'section'     => '_content',
      'description' => __( 'Carousel Item description.', csl18n() ),
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
      __( 'Add an image, shortcode, or text here! Button links also work!', csl18n() ),
      __( 'Add an image, shortcode, or text here! Button links also work!', csl18n() )
    );

  }

}
cornerstone_add_element( 'BW_Cornerstone_Carousel_Item' );