<?php $offers = get_field( 'offers' ); ?>
<?php if ( $offers ) : ?>
	<section id="section-offers" class="section-offers">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col">
					<h2 class="section-title text-center text-white"><?php echo esc_html( $offers['section_title'] ); ?></h2>
				</div>
			</div>
			<div class="row justify-content-center ">
				<?php if ( have_rows( 'offers_offers_item' ) ) : ?>
					<?php while ( have_rows( 'offers_offers_item' ) ) : the_row(); ?>
						<div class="col-12 col-sm-12 col-md-6 col-lg-4 offer-card-column">
							<div class="offer-card">
								<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full' ); ?>
								<div>
									<h3 class="offer-card__title"><?php the_sub_field( 'title' ); ?></h3>
									<span class="offer-card__legend"><?php _e( '(nur DE)' ); ?></span>
									<p class="offer-card__includes"><?php _e( 'Includes' ); ?></p>
									<p class="offer-card__includes--items"><?php the_sub_field( 'includes' ); ?></p>
								</div>
								<p class="offer-card__price"><?php the_sub_field( 'price' ); ?></p>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row justify-content-center align-items-center">
				<div class="col">
					<p class="section-legend text-center text-white"><?php echo wp_kses_post( $offers['information_text'] ); ?></p>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>