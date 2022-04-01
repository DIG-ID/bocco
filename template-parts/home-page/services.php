<section id="section-services" class="section section-services">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6">
			<?php
				$image = get_field( 'services_image' );
				$size  = 'full';
				if ( $image ) :
					echo wp_get_attachment_image( $image, $size );
				endif;
				?>
			</div>
			<div class="col-12 col-lg-6">
				<p class="section-services__subtitle"><?php the_field( 'services_subtitle' ); ?></p>
				<h2 class="section-services__title"><?php the_field( 'services_title' ); ?></h2>
				<p class="section-services__description"><?php the_field( 'services_description' ); ?></p>
				<a href="/demo-anfragen/" class="btn section-services__btn"><?php _e( 'Mehr Erfahren', 'bocco-group' ); ?></a>
			</div>

		</div>
	</div>
</section>
