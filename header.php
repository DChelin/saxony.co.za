<!DOCTYPE html>
<html <?php language_attributes('html'); ?>>
	<head>
		<meta charset="<?php get_bloginfo( 'charset', 'display' ); ?>" />
		<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" />
		<?php } ?>
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title><?php the_title(); ?></title>

		<!-- Fontawesome  -->
		<script src="https://use.fontawesome.com/0618dfa81c.js"></script>

		<!-- Bootstrap css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		

		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Gothic+A1:300,400,600,700,900" rel="stylesheet">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

		<?php wp_scripts(); ?>

		<!--Fonts-->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<!-- DEVDEV FIX - COMMENT OUT CODE BELOW AS IT WAS THROWING AN UNCAUGHT ERROR -->
		<?php //if( get_field('header_scripts', 'option') ): the_field('header_scripts', 'option');  endif;
		 //if( get_field('facebook_pixel') ): the_field('facebook_pixel');  endif; ?>
	</head>

	<body <?php get_body_class(); ?>>

		<?php //get_template_part('parts/header/header-1');?><!--logo left, menu right-->
		<?php get_template_part('parts/header/header-2');?><!--logo top center, menu below-->
		<?php //get_template_part('parts/header/header-3');?><!--menu top bar, logo centered below-->
		<?php //get_template_part('parts/header/header-4');?><!--logo left, menu and account menu right-->
		<?php //get_template_part('parts/header/header-5');?><!--logo left, menu and account menu right with cart-->
		<?php //get_template_part('parts/header/header-6');?><!--logo left, social icons right, menu bar below-->
		<?php //get_template_part('parts/header/header-7');?><!--logo left, widget position right, menu bar below-->

		<?php get_template_part('parts/header/header-responsive-nav');?>
