<?php
/**
 * Template Name: Services Page Template
 */

get_header(); ?>
<?php do_action( 'before_main_content' ); ?>
	<?php
	get_template_part( 'template-parts/services/intro' );
	get_template_part( 'template-parts/services/content-1' );
	get_template_part( 'template-parts/services/content-2' );
	?>
<?php do_action( 'after_main_content' ); ?>
<?php get_footer();