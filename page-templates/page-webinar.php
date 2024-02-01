<?php
/**
 * Template Name: Landing Page - Webinar
 */

get_header( 'webinar' ); ?>
	<?php do_action( 'before_main_content' ); ?>
		<?php
		get_template_part( 'template-parts/webinar/hero' );
		get_template_part( 'template-parts/webinar/intro' );
		get_template_part( 'template-parts/webinar/loop' );
		//get_template_part( 'template-parts/webinar/newsletter' );
		?>
	<?php do_action( 'after_main_content' ); ?>
<?php get_footer( 'webinar' );
