<?php
	$image = get_sub_field('background_image');
	$color = get_sub_field('background_colour');
	$font_color = get_sub_field('font_colour');
	$custom_class = get_sub_field('custom_class');
?>

<div class="newsletter-signup full-width-panel <?php echo $custom_class ?>" style="background-image: url('<?php echo $image ?>'); background-color: <?php echo $color ?>; color: <?php echo $font_color ?>;">
	<div class="wrapper">
		<?php if( get_sub_field('title') ): ?>
			<h2 class="rowtitle">
				<?php the_sub_field('title');?>
			</h2>
		<?php endif; ?>
		<?php
//DEVDEV Fix - String missing form ID which was causing a PHP Uncuaght Error//
		    $form_object = get_sub_field('form');
		    echo do_shortcode('[gravityform id=1"' . $form_object['1'] . '" title="true" description="false" ajax="true"]');
		?>
	</div>
</div>
