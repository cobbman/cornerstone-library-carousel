<?php

/**
 * Shortcode: Cornerstone Carousel
 */
?>

<?php
/*
 * => SCRIPTS
 * ---------------------------------------------------------------------------*/
function csl_carousel_scripts() {
  wp_enqueue_script( 'owl-js', CSL_CAROUSEL_URL . '/assets/js/owl-carousel/owl.carousel.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'csl-carousel-js', CSL_CAROUSEL_URL . '/assets/js/cornerstone-carousel.js', array('owl-js'), null, true );

  wp_enqueue_style( 'owl-main-css',  CSL_CAROUSEL_URL . '/assets/js/owl-carousel/owl.carousel.css', array(), '1.2' );
  wp_enqueue_style( 'owl-theme-css', CSL_CAROUSEL_URL . '/assets/js/owl-carousel/owl.theme.css', array(), '1.2' );
}
// add_action( 'wp_enqueue_scripts', 'csl_carousel_scripts');

/*
 * => VARS & INFO
 * ---------------------------------------------------------------------------*/

  // switch ( $pagination_type ) {
  //   case 'dots':
  //     $dots = 'true';
  //     $nums = 'false';
  //     $nav  = 'false';
  //     break;

  //   case 'dots_nav':
  //     $dots = 'true';
  //     $nums = 'false';
  //     $nav  = 'true';
  //     break;

  //   case 'numbers':
  //     $dots = 'true';
  //     $nums = 'true';
  //     $nav  = 'false';
  //     break;

  //   case 'numbers_nav':
  //     $dots = 'true';
  //     $nums = 'true';
  //     $nav  = 'true';
  //     break;

  //   case 'prev_next':
  //     $dots = 'false';
  //     $nums = 'false';
  //     $nav  = 'true';
  //     break;

  //   default: // NONE
  //     $nav  = 'false';
  //     $dots = 'false';
  //     $nums = 'false';
  //     break;
  // }

  //$randnum = rand(0,5000); // doing this for now to namespace multiple elements on the same page. TODO: use a session var, transient or something else.

  // Class, ID, Styles
  // $carousel_id = "carousel-id-" . $randnum;
  // $class       = "csl-carousel " . $class;
  // $id          = $carousel_id . " " . $id;


/*
 * => ELEMENT HTML
 * ---------------------------------------------------------------------------*/
?>



<div <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ) ); ?>>
	<?php echo do_shortcode( $content ); ?>
</div>

<?php //$carousel_id = "#" . $carousel_id; ?>

