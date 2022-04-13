<footer id="main-footer">
	<div class="container main-footer__container">
		<div class="row">
			<div class="col-12 col-lg-5 footer-logo-button">
				<?php get_template_part( 'template-parts/main-logo' ); ?>
				<a href="/demo-anfragen/" class="btn btn--demo-request"><?php _e( 'Anfrage Senden', 'bocco-group' ); ?></a>
			</div>
			<div class="col-12 col-lg-7">
				<div class="row">
					<?php dynamic_sidebar( 'footer_widgets' ); ?>
					<div class="col-12">
						<div class="footer-contact-details">
							<?php
							$contacts_title   = get_theme_mod( 'footer_contacts_title' );
							$contacts_address = get_theme_mod( 'footer_contacts_address' );
							$contacts_tel     = get_theme_mod( 'footer_contacts_tel' );
							//$contacts_fax     = get_theme_mod( 'footer_contacts_fax' );
							$contacts_email   = get_theme_mod( 'footer_contacts_email' );
							?>
							<div class="row">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12">
									<h3 class="widget-title"><?php echo esc_html( $contacts_title ); ?></h3>
								</div>
								<div class="col-12 col-sm-6 col-md-6 col-lg-6"> 
									<?php echo wpautop( $contacts_address ); ?>
								</div>
								<div class="col-12 col-sm-6 col-md-6 col-lg-6"> 
									<ul class="footer-contacts-info">
										<li><?php _e( 'Tel.', 'bocco-group' ); ?><a href="tel:<?php echo esc_attr( $contacts_tel ); ?>"> <?php echo $contacts_tel; ?></a></li>
										<!--<li><?php //_e( 'Fax', 'bocco-group' ); ?> <?php //echo esc_html( $contacts_fax ); ?></li>-->
										<li><?php _e( 'Mail:', 'bocco-group' ); ?> <a href="mailto:<?php echo esc_attr( $contacts_email ); ?>"><?php echo $contacts_email; ?></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="footer-nav-container">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'footer-nav',
							'menu_class'      => 'footer-nav',
							'menu_id'         => 'footer-nav',
							'container_class' => 'footer-nav-wrapper',
							'container_id'    => 'footer-nav-wrapper',
							'walker'          => '',
							'fallback_cb'     => '',
						)
					);
					?>
				</div>
			</div>
		</div>
	</section>
</footer>
