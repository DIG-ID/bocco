<section class="section-webinar-hero">
	<div class="section-webinar-hero__image--bg">
		<svg xml:space="preserve" width="963" height="1075" viewBox="0 0 963 1075" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M225.973 851.123C-243.139 431.703 103.991 103.324 490.569 90.6938C1291.15 72.1699 1208.5 522.568 1067.1 750.083C943.093 923.57 601.262 1186.66 225.973 851.123Z" fill="#4DEBB3"/>
			<path d="M457.343 744.337C-11.769 324.917 335.362 -3.46238 721.939 -16.0923C1522.52 -34.6163 1439.87 415.782 1298.47 643.297C1174.46 816.784 832.632 1079.87 457.343 744.337Z" fill="#080F26"/>
			<path d="M710.191 -137.671C328.401 -137.671 81.8694 160.568 81.8694 469.23C96.528 1113.81 759.497 1197.99 966.716 1149.09C1173.94 1100.18 1054.67 875.702 886.76 571.048C718.853 266.395 1091.98 -137.671 710.191 -137.671Z" fill="#0040E5"/>
		</svg>
	</div>
	<div class="container">
		<div class="row">
			<div class="col webinar-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/boccowebinar.svg" alt="bocco-webinar logo">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6">
				<h1><?php the_field( 'hero_title' ); ?></h1>
				<h2><?php the_field( 'hero_subtitle' ); ?></h2>
				<p><?php the_field( 'hero_description' ); ?></p>
				<?php
				$hero_link = get_field( 'hero_link' );
				if ( $hero_link ) :
					$link_url    = $hero_link['url'];
					$link_title  = $hero_link['title'];
					$link_target = $hero_link['target'] ? $hero_link['target'] : '_self';
					?>
					<a class="section-webinar-hero__button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php echo esc_html( $link_title ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
							<path d="M7.29289 12.7071C7.68342 13.0976 8.31658 13.0976 8.70711 12.7071L15.0711 6.34315C15.4616 5.95262 15.4616 5.31946 15.0711 4.92893C14.6805 4.53841 14.0474 4.53841 13.6569 4.92893L8 10.5858L2.34315 4.92893C1.95262 4.53841 1.31946 4.53841 0.928932 4.92893C0.538408 5.31946 0.538408 5.95262 0.928932 6.34315L7.29289 12.7071ZM7 4.37114e-08L7 12L9 12L9 -4.37114e-08L7 4.37114e-08Z" fill="#EDF1FD"/>
						</svg>
					</a>
					<?php
				endif;
				?>
			</div>
			<div class="col-12 col-lg-6">
				<div class="section-webinar-hero__image">
					<?php
					$hero_img    = get_field( 'hero_image' );
					$hero_img_xl = get_field( 'hero_image_xl' );
					if ( $hero_img || $hero_img_xl ) :
						echo wp_get_attachment_image( $hero_img, 'full', false, array( 'class' => 'section-webinar-hero__image--sm' ) );
						echo wp_get_attachment_image( $hero_img_xl, 'full', false, array( 'class' => 'section-webinar-hero__image--xl' ) );
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
