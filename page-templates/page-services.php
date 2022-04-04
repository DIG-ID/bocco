<?php
/**
 * Template Name: Services Page Template
 */

get_header(); ?>
<?php do_action( 'before_main_content' ); ?>
	<?php
	get_template_part( 'template-parts/services/intro' );
	?>
<?php do_action( 'after_main_content' ); ?>
<?php get_footer();