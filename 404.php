<?php get_header(); ?>
	<?php do_action( 'before_main_content' ); ?>
			<section class="page-content notfound-content">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<?php echo wp_get_attachment_image( absint( get_theme_mod( '404_image' ) ), 'full' ); ?>
							<h1 class="page-title text-center"><?php echo esc_html( get_theme_mod( '404_title' ) ); ?></h1>
							<?php echo wp_kses_post( wpautop( get_theme_mod( '404_description' ) ) ); ?>
							<a href="<?php echo get_home_url(); ?>" class="btn"><?php echo esc_html( get_theme_mod( '404_btn_text' ) ); ?></a>
						</div>
					</div>
				</div>
			</section>
	<?php do_action( 'after_main_content' ); ?>
<?php get_footer(); ?>
