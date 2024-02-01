<section class="section-webinar-posts">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h2><?php esc_html_e( 'Events', 'bocco-group' ); ?></h2>
			</div>
		</div>


		<?php

		/*$today = gmdate( 'Ymd' );
		$webinar_args = array(
			'post_type'   => 'webinar',
			'post_status' => 'publish',
			'orderby'     => 'meta_value_num',
			'order'       => 'ASC',
			'meta_query'  => array(
				array(
					'key'     => 'date', // Replace with your ACF date field key
					'value'   => $today, // Today's date in the format 'YYYY-MM-DD'
					'compare' => '>=', // Compare greater than or equal to today's date
					'type'    => 'DATE',
				),
			),
		);*/
		$webinar_args = array(
			'post_type'   => 'webinar',
			'post_status' => 'publish',
			'orderby'     => 'date',
			'order'       => 'DESC',
		);

		$webinar_query = new WP_Query( $webinar_args );

		if ( $webinar_query->have_posts() ) :
			while ( $webinar_query->have_posts() ) :
				$webinar_query->the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row card-webinar-wrapper' ); ?>>
					<div class="col-10">
						<div class="card-webinar row">
							<div class="col-3">
								<img src="<?php echo get_template_directory_uri(); ?>/src/images/boccowebinar-post.svg" alt="bocco webinar event image thumbnail">
							</div>
							<div class="col-9">
								<h3><?php the_title(); ?></h3>
								<hr>
								<div class="card-webinar-details row">
									<div class="col-4">
										<p class="card-webinar-details--item">
											<span><?php esc_html_e( 'Datum:', 'bocco-group' ); ?></span><br>
											<?php the_field( 'date' ); ?>
										</p>
										<p class="card-webinar-details--item">
											<span><?php esc_html_e( 'Zeit:', 'bocco-group' ); ?></span><br>
											<?php the_field( 'duration' ); ?>
										</p>
										<p class="card-webinar-details--item">
											<span><?php esc_html_e( 'Host:', 'bocco-group' ); ?></span><br>
											<?php the_field( 'host' ); ?>
										</p>
									</div>
									<div class="col-8">
										<span><?php esc_html_e( 'Beschreibung:', 'bocco-group' ); ?></span><br>
										<?php the_content(); ?>
										<?php
										$card_link = get_field( 'link' );
										if ( $card_link ) :
											$link_url    = $card_link['url'];
											$link_title  = $card_link['title'];
											$link_target = $card_link['target'] ? $card_link['target'] : '_self';
											?>
											<a class="card-webinar-details--button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											<?php
										endif;
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
				<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>

	</div>
</section>
