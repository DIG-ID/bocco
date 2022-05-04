<?php
/**
 * Template Name: Landing Page
 */

get_header( 'landing-page' ); ?>
	<?php do_action( 'before_main_content' ); ?>
		<?php
		get_template_part( 'template-parts/landing-page/hero' );
		get_template_part( 'template-parts/landing-page/highlights' );
		get_template_part( 'template-parts/landing-page/html-templates' );
		get_template_part( 'template-parts/landing-page/offers' );
		get_template_part( 'template-parts/landing-page/contact-form' );
		?>
	<?php do_action( 'after_main_content' ); ?>
<?php get_footer();
