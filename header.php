<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta name="theme-color" content="#080f26" />
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php do_action( 'wp_body_open' ); ?>
		<?php get_template_part( 'template-parts/main-header' ); ?>