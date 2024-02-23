<section id="section-webinar-posts" class="section-webinar-posts">
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
			'order'       => 'ASC',
			'meta_query'     => array(
				array(
					'key'     => 'past_event', // Replace 'field_name' with the name of your ACF field
					'value'   => '0', // '0' for false, '1' for true
					'compare' => '==', // '=' for equal to (false)
					'type'    => 'NUMERIC' // Assuming your field stores 0 or 1 as the value
				)
			)
		);

		$webinar_query = new WP_Query( $webinar_args );

		if ( $webinar_query->have_posts() ) :
			while ( $webinar_query->have_posts() ) :
				$webinar_query->the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row card-webinar-wrapper' ); ?>>
					<div class="col-12 col-lg-11">
						<div class="card-webinar row">
							<div class="col-12 col-lg-2 text-lg-center">
								<img class="webinar-thumbnail" src="<?php echo get_template_directory_uri(); ?>/src/images/boccowebinar-post.svg" alt="bocco webinar event image thumbnail">
							</div>
							<div class="col-12 col-lg-10">
								<h3><?php the_title(); ?></h3>
								<hr>
								<div class="card-webinar-details row">
									<div class="col-12 col-lg-4">
										<p class="card-webinar-details--item">
											<span><?php esc_html_e( 'Datum:', 'bocco-group' ); ?></span><br>
											<?php the_field( 'date' ); ?>
										</p>
										<p class="card-webinar-details--item">
											<span><?php esc_html_e( 'Zeit:', 'bocco-group' ); ?></span><br>
											<?php the_field( 'duration' ); ?>
										</p>
										<?php
										if ( get_field( 'have_host' ) ) :
											?>
											<p class="card-webinar-details--item">
												<span><?php esc_html_e( 'Host:', 'bocco-group' ); ?></span><br>
												<?php the_field( 'host' ); ?>
											</p>
											<?php
										endif;
										?>
									</div>
									<div class="col-12 col-lg-8 card-webinar-details--description">
										<div class="card-webinar-details--item mb-2">
											<span><?php esc_html_e( 'Inhalt:', 'bocco-group' ); ?></span><br>
											<?php the_content(); ?>
										</div>

										<?php
										$card_link = get_field( 'link' );
										if ( $card_link ) :
											$link_url    = $card_link['url'];
											$link_title  = $card_link['title'];
											$link_target = $card_link['target'] ? $card_link['target'] : '_self';
											?>
											<a class="card-webinar-details--button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
												<svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
													<path d="M14 10C11.33 10 6 11.33 6 14V16H22V14C22 11.33 16.67 10 14 10ZM5 6V3H3V6H0V8H3V11H5V8H8V6M14 8C15.0609 8 16.0783 7.57857 16.8284 6.82843C17.5786 6.07828 18 5.06087 18 4C18 2.93913 17.5786 1.92172 16.8284 1.17157C16.0783 0.421427 15.0609 0 14 0C12.9391 0 11.9217 0.421427 11.1716 1.17157C10.4214 1.92172 10 2.93913 10 4C10 5.06087 10.4214 6.07828 11.1716 6.82843C11.9217 7.57857 12.9391 8 14 8Z" fill="#EDF1FD"/>
												</svg>
												<?php echo esc_html( $link_title ); ?>
											</a>
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
		
		<div class="row">
			<div class="col-10">
				<h2><?php esc_html_e( 'Vergangene Events', 'bocco-group' ); ?></h2>
			</div>
		</div>
		<?php
		$webinar_args = array(
			'post_type'   => 'webinar',
			'post_status' => 'publish',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'meta_query'     => array(
				array(
					'key'     => 'past_event', // Replace 'field_name' with the name of your ACF field
					'value'   => '1', // '0' for false, '1' for true
					'compare' => '==', // '=' for equal to (false)
					'type'    => 'NUMERIC' // Assuming your field stores 0 or 1 as the value
				)
			)
		);

		$webinar_query = new WP_Query( $webinar_args );

		if ( $webinar_query->have_posts() ) :
			while ( $webinar_query->have_posts() ) :
				$webinar_query->the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row card-webinar-wrapper' ); ?>>
					<div class="col-12 col-lg-11">
						<div class="card-webinar row">
							<div class="col-12 col-lg-2 text-lg-center">
								<img class="webinar-thumbnail" src="<?php echo get_template_directory_uri(); ?>/src/images/boccowebinar-post.svg" alt="bocco webinar event image thumbnail">
							</div>
							<div class="col-12 col-lg-10">
								<h3><?php the_title(); ?></h3>
								<hr>
								<div class="card-webinar-details row">
									<div class="col-12 col-lg-4">
										<p class="card-webinar-details--item">
											<span><?php esc_html_e( 'Datum:', 'bocco-group' ); ?></span><br>
											<?php the_field( 'date' ); ?>
										</p>
										<p class="card-webinar-details--item">
											<span><?php esc_html_e( 'Zeit:', 'bocco-group' ); ?></span><br>
											<?php the_field( 'duration' ); ?>
										</p>
										<?php
										if ( get_field( 'have_host' ) ) :
											?>
											<p class="card-webinar-details--item">
												<span><?php esc_html_e( 'Host:', 'bocco-group' ); ?></span><br>
												<?php the_field( 'host' ); ?>
											</p>
											<?php
										endif;
										?>
									</div>
									<div class="col-12 col-lg-8 card-webinar-details--description">
										<div class="card-webinar-details--item mb-2">
											<span><?php esc_html_e( 'Inhalt:', 'bocco-group' ); ?></span><br>
											<?php the_content(); ?>
										</div>

										<?php
										$card_link = get_field( 'youtube_link' );
										if ( $card_link ) :
											$link_url    = $card_link['url'];
											$link_title  = $card_link['title'];
											$link_target = $card_link['target'] ? $card_link['target'] : '_self';
											?>
											<a class="card-webinar-details--button youtube-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
												<path d="M1.61723 16C1.34857 15.9995 1.08468 15.9295 0.851494 15.797C0.32642 15.5013 0 14.9274 0 14.3044V1.69572C0 1.07094 0.32642 0.49877 0.851494 0.203119C1.09023 0.0667878 1.36143 -0.00332087 1.63677 0.000120885C1.9121 0.00356264 2.18144 0.0804287 2.41665 0.222685L13.2616 6.67309C13.4876 6.81391 13.6739 7.00946 13.8031 7.24141C13.9322 7.47335 14 7.73409 14 7.99917C14 8.26425 13.9322 8.52499 13.8031 8.75693C13.6739 8.98888 13.4876 9.18443 13.2616 9.32525L2.4149 15.7774C2.17419 15.922 1.8985 15.9989 1.61723 16Z" fill="#EDF1FD"/>
											</svg>
												<?php echo esc_html( $link_title ); ?>
											</a>
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
