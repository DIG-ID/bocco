<?php
/**
 * Template Name: Channel Manager Page Template
 * Template Post Type: post, page, products
 */

get_header(); ?>
<?php do_action( 'before_main_content' ); ?>
	<?php
	get_template_part( 'template-parts/channelmanager/intro' );
	get_template_part( 'template-parts/channelmanager/content-1' );
	get_template_part( 'template-parts/channelmanager/content-2' );
	get_template_part( 'template-parts/channelmanager/content-3' );
	?>
<?php do_action( 'after_main_content' ); ?>
<?php get_footer();
