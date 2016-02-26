<?php

/**
 * Shortcode: CSL Carousel ITEM
 */

$class = 'item ' . $class;
?>

<div <?php echo cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ) ); ?>>
	<?php echo do_shortcode( $content ); ?>
</div>