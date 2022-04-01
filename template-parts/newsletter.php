<section id="section-newsletter" class="section section-newsletter">
	<div class="container">
		<div class="row justify-content-xl-between align-items-xl-center">
			<div class="col-8 col-sm-8 col-md-12 col-lg-12 col-xl-6">
				<h3 class="section-newsletter__title"><?php echo esc_html( get_theme_mod( 'newsletter_title' ) ); ?></h3>
				<p class="section-newsletter__description"><?php echo esc_html( get_theme_mod( 'newsletter_description' ) ); ?></p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
				<?php echo do_shortcode( esc_attr( get_theme_mod( 'newsletter_shortcode' ) ) ); ?>
			</div>
		</div>
	</div>
</section>
