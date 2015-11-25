<?php 
/*========================================================================*
  Shortcode wrapper for horizontal scrolling element
 *========================================================================*/


function CornerstoneCarouselElement_Shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
    'id'    => '',
    'class' => '',
    'style' => '',
    'maxitems' => '',
    'duration' => '',
    'height'   => ''
  ), $atts, 'cornerstone-carousel' ) );

  $id     =   ( $id       != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
  $class  =   ( $class    != '' ) ? 'class="cornerstone-carousel-wrap ' . esc_attr( $class ) . '"' : 'class="cornerstone-carousel-wrap"';
  $style  =   ( $style    != '' ) ? 'style="' . $style . '"' : '';
  $maxitems = ( $maxitems != '' ) ? $maxitems : 3;
  $duration = ( $duration != '' ) ? $duration : 700;
  $height   = ( $height   != '' ) ? $height : 'auto';
  $randnum = rand(0,1000);


  $output = "<div {$id} {$class} {$style}>"
              . "<div class='owl-carousel-" . $randnum . "'>" . do_shortcode( $content ) . "</div>"
          . "</div>";

  $output .= "<script>/* <![CDATA[ */" .
               "jQuery(document).ready(function($){" .
                "$('.owl-carousel-" . $randnum . "').owlCarousel({
                  items : {$maxitems},
                  slideSpeed : {$duration},
                  autoPlay : true
                });" .
               "});" .
             "/* ]]> */</script>";



  return $output;
}
add_shortcode( 'cornerstone-carousel', 'CornerstoneCarouselElement_Shortcode' );




/* The individual items */



function CornerstoneCarouselElement_Item_Shortcode( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
    'id'    => '',
    'class' => '',
    'style' => '',
    'auto_valign' => 1
  ), $atts, 'cornerstone-carousel-item' ) );

  if ( $auto_valign === 'true' ) {
    $flex = "display:flex; align-items:center; justify-content:center; height:100%; ";
  } else {
    $flex = '';
  }

  $id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
  $class = ( $class != '' ) ? 'class="' . esc_attr( $class ) . '"' : '';
  $style = ( $style != '' ) ? 'style="' . $flex . $style . '"' : 'style="' . $flex . '"';


  $output = "<div {$id} {$class} {$style}>" . do_shortcode( $content ) . "</div>";

  return $output;
}
add_shortcode( 'cornerstone-carousel-item', 'CornerstoneCarouselElement_Item_Shortcode' );

