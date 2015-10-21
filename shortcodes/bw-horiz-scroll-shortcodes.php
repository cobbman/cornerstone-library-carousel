<?php 
/*========================================================================*
  Shortcode wrapper for horizontal scrolling element
 *========================================================================*/


function CornerstoneLibraryScrollingElement_Shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
    'id'    => '',
    'class' => '',
    'style' => '',
    'numitems' => '',
    'duration' => ''
  ), $atts, 'csl-horizontal-scroll' ) );

  $id     = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
  $class  = ( $class != '' ) ? 'class="csl-horiz-scroll ' . esc_attr( $class ) . '"' : 'class="csl-horiz-scroll"';
  $style  = ( $style != '' ) ? 'style="' . $style . '"' : '';
  $numitems = ( $numitems != '' ) ? $numitems : 3;
  $duration = ( $duration != '' ) ? $duration : 700;
  $randnum = rand(0,1000);


  $output = "<div {$id} {$class} {$style}>"
              . "<div id='caroufredsel-{$randnum}'>" . do_shortcode( $content ) . "</div>"
          . "</div>"
          . "<script type=\"text/javascript\">"
            . "jQuery(document).ready(function($) {
                $('#caroufredsel-{$randnum}').carouFredSel({
                  items     : {$numitems},
                  direction : 'left',
                  responsive: true,
                  height: 'auto',
                  scroll    : {
                    items        : 1,
                    easing       : 'swing',
                    duration     : {$duration},
                    pauseOnHover : false
                  },
                  /*swipe : {
                    onTouch : true,
                    onMouse : true
                  }*/
                });
              });"
          . "</script>";


  return $output;
}
add_shortcode( 'csl-horizontal-scroll', 'CornerstoneLibraryScrollingElement_Shortcode' );




/* The individual items */



function CornerstoneLibraryScrollingElement_Item_Shortcode( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
    'id'    => '',
    'class' => '',
    'style' => '',
    'auto_valign' => 1
  ), $atts, 'csl-horizontal-scroll-item' ) );

  if ( $auto_valign === 'true' ) {
    $flex = "display:flex; align-items:center; justify-content:center; height:100%;";
  } else {
    $flex = '';
  }

  $id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
  $class = ( $class != '' ) ? 'class="' . esc_attr( $class ) . '"' : '';
  $style = ( $style != '' ) ? 'style="float:left; ' . $flex . $style . '"' : 'style="float:left; ' . $flex . '"';


  $output = "<div {$id} {$class} {$style}>" . do_shortcode( $content ) . "</div>";

  return $output;
}
add_shortcode( 'csl-horizontal-scroll-item', 'CornerstoneLibraryScrollingElement_Item_Shortcode' );

