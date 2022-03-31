<section id="section-partners" class="section section-partners">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6">
				<p class="section-partners__title"><?php the_field( 'partners_title' ); ?></p>
				<p class="section-partners__description"><?php the_field( 'partners_description' ); ?></p>
			</div>
			<div class="col-12 col-lg-6">
				<div class="swiper partners-swiper">
					<div class="swiper-wrapper">
						<?php
						$partners = get_field( 'partners_partners_logos' );
						if ( $partners ) :
							foreach ( $partners as $slide ) :
								?>
								<div class="swiper-slide partner">
									<?php echo wp_get_attachment_image( $slide, 'full' ); ?>
								</div>
								<?php
							endforeach;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
