<?php
/**
 * Template Name: Revenue Manager Page Template
 * Template Post Type: post, page, products
 */

get_header(); ?>
<?php do_action( 'before_main_content' ); ?>
	<?php
	get_template_part( 'template-parts/revenue-manager/intro' );
	get_template_part( 'template-parts/revenue-manager/content-1' );
	get_template_part( 'template-parts/revenue-manager/content-2' );
	get_template_part( 'template-parts/revenue-manager/content-3' );
	?>
<?php do_action( 'after_main_content' ); ?>
<?php get_footer();
