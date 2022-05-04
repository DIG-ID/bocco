<?php $cf = get_field( 'contact_form' ); ?>
<?php if ( $cf ) : ?>
	<section class="page-content demo-request-content">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col">
					<p class="page-subtitle text-center"><?php echo esc_html( $cf['subtitle'] ); ?></p>
					<h2 class="page-title text-center"><?php echo wp_kses_post( $cf['title'] ); ?></h2>
				</div>
			</div>
			<div class="row justify-content-center align-item-center">
				<div class="col-12 col-sm-12 col-md-9 col-lg-8 col-xl-7">
					<?php echo do_shortcode( $cf['contact_form_shortcode'] ); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
