<?php

/**
 * Shortcode: Cornerstoen Carousel
 */

?>

<?php

// Navigation & Pagination

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

?>
<!-- Carousel Element -->
<div <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ) ); ?>>
	<?php echo do_shortcode( $content ); ?>
</div>

<script type=\"text/javascript\">
  jQuery(document).ready(function($) {

  	$carousel_id = "#" . $carousel_id;

  	// Trigger Carousel Script

    $(<?= $carousel_id ?>).owlCarousel({
      autoPlay: true,
      items: <?= $max_visible_items ?>,
      navigation: <?= $nav ?>,
      pagination: <?= $dots ?>,
      paginationNumbers: <?= $nums ?>,
      stopOnHover: <?= $pause_hover ?>
    });

    // Vertical Align

		<?php if ( $auto_valign ) : ?>
		  var currentOwl = "<?= $carousel_id ?>",
		  var owlHeight  = $(currentOwl + ' .owl-wrapper').height();
		  $(currentOwl + ' .owl-item').css('height', owlHeight + 'px' );
		  $("<?= $carousel_id ?> .owl-item").css({
		  	'display' : 'flex',
		  	'align-items' : 'center',
		  	'justify-content' : 'center'
		  });
		<?php endif; ?>

	});
</script>
