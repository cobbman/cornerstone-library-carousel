<?php
/**
 * Shortcode: Cornerstone Carousel
 */
?>

<?php

/*
 * => VARS & INFO
 * ---------------------------------------------------------------------------*/

  switch ( $pagination_type ) {
    case 'dots':
      $dots = 'true';
      $nums = 'false';
      $nav  = 'false';
      break;

    case 'dots_nav':
      $dots = 'true';
      $nums = 'false';
      $nav  = 'true';
      break;

    case 'numbers':
      $dots = 'true';
      $nums = 'true';
      $nav  = 'false';
      break;

    case 'numbers_nav':
      $dots = 'true';
      $nums = 'true';
      $nav  = 'true';
      break;

    case 'prev_next':
      $dots = 'false';
      $nums = 'false';
      $nav  = 'true';
      break;

    default: // NONE
      $nav  = 'false';
      $dots = 'false';
      $nums = 'false';
      break;
  }

  $randnum = rand(0,5000); // doing this for now to namespace multiple elements on the same page. TODO: use a session var, transient or something else.

  // Class, ID, Styles
  $carousel_id = "carousel-id-" . $randnum;
  $class       = "csl-carousel " . $class;
  $id          = $carousel_id . " " . $id;


/*
 * => ELEMENT HTML
 * ---------------------------------------------------------------------------*/
?>

<div <?php echo cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ) ); ?>>
	<?php echo do_shortcode( $content ); ?>
</div>


<?php
/*
 * => LOCALIZE SCRIPT
 * ---------------------------------------------------------------------------*/

$carousel_id = "#" . $carousel_id;

$carouselData = array(
  'carouselID'    => $carousel_id,
    'items'       => $max_visible_items,
    'nav'         => $nav,
    'dots'        => $dots,
    'nums'        => $nums,
    'pause_hover' => $pause_hover,
    'valign'      => $auto_valign
);
wp_localize_script( 'csl-carousel-js', 'php_vars', $carouselData );

/*
 * => SCRIPTS
 * ---------------------------------------------------------------------------*/

add_action( 'wp_enqueue_scripts', 'csl_carousel_scripts');



