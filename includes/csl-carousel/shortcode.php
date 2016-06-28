<?php
/**
 * Shortcode: Cornerstone Carousel
 */
?>

<?php

/*
 * => VARS & INFO
 * ---------------------------------------------------------------------------*/


$randnum = rand(0,5000); // doing this for now to namespace multiple elements on the same page. TODO: use a session var, transient or something else.

// Class, ID, Styles
$carousel_id = "csl-carousel-".$randnum;
$class       = "csl-carousel " . $class;

// Toggle
$auto_play   = ( ($auto_play   == 1) ? "true" : "false" );
$auto_valign = ( ($auto_valign == 1) ? true : false );
$loop        = ( ($loop == 1) ? "true" : "false" );
$pause_hover = ( ($pause_hover == 1) ? "true" : "false" );

// Pagination
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




/*
 * => ELEMENT HTML
 * ---------------------------------------------------------------------------*/
?>

<div <?php echo cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ) ); ?>>
  <div id="<?= $carousel_id ?>" class="owl-carousel owl-theme">
    <?php echo do_shortcode( $content ); ?>
  </div>
</div>


<?php
/*
 * => SCRIPTS
 * ---------------------------------------------------------------------------*/

// add_action( 'wp_enqueue_scripts', 'csl_carousel_scripts');
?>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("<?= '#'.$carousel_id ?>").owlCarousel({
      autoplay: <?= $auto_play ?>,
      loop: <?= $loop ?>,
      items: <?= $max_visible_items ?>,
      autoplayHoverPause: <?= $pause_hover ?>,
      slideBy: <?= is_numeric($slide_by) ? $slide_by : "'{$slide_by}'" ?>,
      nav: <?= $nav ?>,
      dotsEach: <?= is_numeric($slide_by) ? 'true' : 'false' ?>,
      dots: <?= $dots ?>
      <?php
        // TODO: In order to display the page numbers set `dotData` to true and follow
        //  this tip: https://github.com/OwlCarousel2/OwlCarousel2/issues/158#issuecomment-56747066
        // dotData: true
      ?>
    });

    <?php if ( $auto_valign ) : ?>
      /* Auto Valign */
      var elem = "<?= '#'.$carousel_id ?>";
      var height = $(elem+" .owl-stage-outer").height();
      $(elem+" .owl-item").css({
        'min-height'          : height,
        'display'         : 'flex',
        'align-items'     : 'center',
        'justify-content' : 'center'
      });
    <?php endif; ?>
  });
</script> 


