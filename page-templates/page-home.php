<?php
/**
 * Template Name: Home Page Template
 */
?>
<?php get_header(); ?>
<main id="main-content" class="main-content">
	<?php get_template_part( 'template-parts/front-page/banner' ); ?>
	<?php get_template_part( 'template-parts/front-page/highlights' ); ?>
	<?php get_template_part( 'template-parts/front-page/products' ); ?>
	<?php get_template_part( 'template-parts/front-page/services' ); ?>
	<?php get_template_part( 'template-parts/front-page/call-to-action' ); ?>
	<?php get_template_part( 'template-parts/front-page/testimonials' ); ?>
	<?php get_template_part( 'template-parts/front-page/partners' ); ?>
	<?php get_template_part( 'template-parts/newsletter' ); ?>
</main>
<?php get_footer(); ?>
