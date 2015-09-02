<?php 
/*========================================================================*
  Shortcode wrapper for horizontal scrolling element
 *========================================================================*/


function bigwilliamScrollingElementShortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
    'id'    => '',
    'class' => '',
    'style' => '',
    'speed' => ''
  ), $atts, 'bw-horizontal-scroll' ) );

  $id     = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
  $class  = ( $class != '' ) ? 'class="bw-horiz-scroll ' . esc_attr( $class ) . '"' : 'class="bw-horiz-scroll"';
  $style  = ( $style != '' ) ? 'style="' . $style . '"' : '';

  $randnum = rand(0,1000);

  $output = "<div {$id} {$class} {$style}>";

	$output .= '<script type="text/javascript">
		(function($) {
			$(function() {
				$("#scroller'.$randnum.'").simplyScroll({
					auto: true,
					manualMode: \'loop\',
          frameRate: 30,
					speed: 1
				});
			});
		})(jQuery);
	</script>';

  $output .= "<ul id=\"scroller".$randnum."\">" . do_shortcode( $content ) . "</ul>";
  $output .= "</div>";

  return $output;
}
add_shortcode( 'bw-horizontal-scroll', 'bigwilliamScrollingElementShortcode' );


function bigwilliamScrollingElementItemShortcode( $atts, $content = null ) {
	
	extract( shortcode_atts( array(
    'id'    => '',
    'class' => '',
    'style' => ''
  ), $atts, 'bw-horizontal-scroll-item' ) );

  $id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
  $class = ( $class != '' ) ? 'class="' . esc_attr( $class ) . '"' : '';
  $style = ( $style != '' ) ? 'style="' . $style . '"' : '';


  $output = "<li {$id} {$class} {$style}>" . do_shortcode( $content ) . "</li>";

  return $output;
}
add_shortcode( 'bw-horizontal-scroll-item', 'bigwilliamScrollingElementItemShortcode' );

