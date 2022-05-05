<?php $offers = get_field( 'offers' ); ?>
<?php if ( $offers ) : ?>
	<section id="section-offers" class="section-offers">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-lg-6">
					<h2 class="section-title text-center text-white"><?php echo esc_html( $offers['section_title'] ); ?></h2>
					<p class="text-center text-white pb-4 mb-5"><?php echo wp_kses_post( $offers['section_subtitle'] ); ?></p>
				</div>
			</div>
			<div class="row justify-content-center ">
				<?php if ( have_rows( 'offers_offers_item' ) ) : ?>
					<?php while ( have_rows( 'offers_offers_item' ) ) : the_row(); ?>
						<div class="col-12 col-sm-12 col-md-9 col-lg-8 col-xl-4 offer-card-column">
							<div class="offer-card">
								<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); ?>
								<div class="offer-card__content-wrapper">
									<h3 class="offer-card__title"><?php the_sub_field( 'title' ); ?></h3>
									<span class="offer-card__legend"><?php the_sub_field( 'title_legend' ); ?></span>
									<p class="offer-card__includes"><?php _e( 'Inklusive:' ); ?></p>
									<div class="offer-card__includes--items"><?php the_sub_field( 'includes' ); ?></div>
								</div>
								<div class="offer-card__price-wrapper">
									<p class="offer-card__price"><?php the_sub_field( 'price' ); ?></p>
									<p class="info-notes"><?php the_sub_field( 'info_notes' ); ?></p>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-sm-12 col-md-8 col-lg-8">
					<p class="section-notes text-white text-center"><?php echo esc_html( $offers['section_notes'] ); ?></p>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
