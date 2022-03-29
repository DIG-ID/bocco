<?php
/**
 * Template Name: Home Page Template
 */
?>
<?php get_header(); ?>
<main id="main-content" class="main-content">
	<?php get_template_part( 'template-parts/home-page/banner' ); ?>
	<?php get_template_part( 'template-parts/home-page/highlights' ); ?>
	<?php get_template_part( 'template-parts/home-page/products' ); ?>
	<?php get_template_part( 'template-parts/home-page/services' ); ?>
	<?php get_template_part( 'template-parts/home-page/call-to-action' ); ?>
	<?php get_template_part( 'template-parts/home-page/testimonials' ); ?>
	<?php get_template_part( 'template-parts/home-page/partners' ); ?>
	<?php get_template_part( 'template-parts/newsletter' ); ?>
</main>
<?php get_footer(); ?>
