		<footer id="main-footer" class="landing-page-footer">
			<div class="container main-footer__container">
				<div class="row justify-content-center align-items-center">
					<div class="col-12 col-lg-8 footer-logo-button text-center">
						<div class="footer-logo">
							<?php get_template_part( 'template-parts/main-logo' ); ?>
						</div>
						<div class="footer-buttons-wrapper">
							<a href="/demo-anfragen/" class="btn btn--demo-request"><?php _e( 'Anfrage Senden', 'bocco-group' ); ?></a>
							<a href="https://boccogroup.com/" class="btn btn--demo-request"><?php _e( 'Visit Bocco', 'bocco-group' ); ?></a>
						</div>
					</div>
				</div>
				<div class="row justify-content-center align-items-center">
					<div class="col-12 col-lg-8">
						<div class="footer-contact-details">
							<?php
							$contacts_title   = get_theme_mod( 'footer_contacts_title' );
							$contacts_address = get_theme_mod( 'footer_contacts_address' );
							$contacts_tel     = get_theme_mod( 'footer_contacts_tel' );
							$contacts_email   = get_theme_mod( 'footer_contacts_email' );
							?>
							<div class="row justify-content-center align-items-center">
								<div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
									<h3 class="widget-title text-center"><?php echo esc_html( $contacts_title ); ?></h3>
									<ul class="footer-contacts-info text-center">
										<li><?php _e( 'Tel.', 'bocco-group' ); ?><a href="tel:<?php echo esc_attr( $contacts_tel ); ?>"> <?php echo $contacts_tel; ?></a></li>
										<!--<li><?php //_e( 'Fax', 'bocco-group' ); ?> <?php //echo esc_html( $contacts_fax ); ?></li>-->
										<li><?php _e( 'Mail:', 'bocco-group' ); ?> <a href="mailto:<?php echo esc_attr( $contacts_email ); ?>"><?php echo $contacts_email; ?></a></li>
									</ul>
									<?php echo wpautop( $contacts_address ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="footer-nav-container">
				<div class="container">
					<div class="row">
						<div class="col-12 footer-nav-content">
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
							<p><?php esc_html_e( 'Developed by:', 'bocco-group' ); ?> <a href="https://dig.id" target="_blank"><?php echo esc_html( 'dig.id' ); ?></a></p>
						</div>
					</div>
				</div>
			</section>
		</footer>
		<a id="button-btt">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
				<path d="M416 352c-8.188 0-16.38-3.125-22.62-9.375L224 173.3l-169.4 169.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25C432.4 348.9 424.2 352 416 352z"/>
			</svg>
		</a>
		<?php wp_footer(); ?>
	</body>
</html>
