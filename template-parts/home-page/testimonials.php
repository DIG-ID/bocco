<section id="section-testimonials" class="section section-testimonials">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<p class="section-testimonials__subtitle"><?php the_field( 'testimonials_subtitle' ); ?></p>
				<h1 class="section-testimonials__title"><?php the_field( 'testimonials_title' ); ?></h1>
				<div class="swiper testimonials-swiper">
					<div class="swiper-wrapper">
						<?php
						if ( have_rows( 'testimonials_customer_testimonials' ) ) :
							while ( have_rows( 'testimonials_customer_testimonials' ) ) : the_row();
								$testi_name    = get_sub_field( 'customer_name' );
								$testi_details = get_sub_field( 'customer_details' );
								$testi_quote   = get_sub_field( 'customer_quote' );
								?>
								<figure class="swiper-slide" >
									<blockquote class="testimonial_quote">
										<p><?php echo $testi_quote; ?></p>
									</blockquote>
									<figcaption><?php echo $testi_name; ?> <span><?php echo $testi_details; ?></span></figcaption>
								</figure>
								<?php
							endwhile;
						endif;
						?>
					</div>
					<div class="swiper-pagination testimonials-pagination"></div>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="swiper testimonials-swiper-thumbnails">
					<div class="swiper-wrapper">
						<?php
						if ( have_rows( 'testimonials_customer_testimonials' ) ) :
							while ( have_rows( 'testimonials_customer_testimonials' ) ) : the_row();
								$testi_image_thumb = get_sub_field( 'customer_image' );
								echo '<div class="swiper-slide">' . wp_get_attachment_image( $testi_image_thumb, 'full' ) . '</div>';
							endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
