<?php
/**
 * Template Name: Home Page Template
 */
?>
<?php get_header(); ?>
<?php do_action( 'before_main_content' ); ?>
	<?php get_template_part( 'template-parts/home-page/banner' ); ?>
	<?php get_template_part( 'template-parts/home-page/highlights' ); ?>
	<?php get_template_part( 'template-parts/home-page/products' ); ?>
	<?php get_template_part( 'template-parts/home-page/services' ); ?>
	<?php get_template_part( 'template-parts/home-page/call-to-action' ); ?>
	<?php get_template_part( 'template-parts/home-page/testimonials' ); ?>
	<?php get_template_part( 'template-parts/home-page/partners' ); ?>
<?php do_action( 'after_main_content' ); ?>
<?php get_footer(); ?>
