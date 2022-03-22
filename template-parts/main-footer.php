<footer id="main-footer">
	<div class="container main-footer__container">
		<div class="row">
			<div class="col-4">
				logo
				<a href="/demorequest/">Demo Anfragen</a>
			</div>
			<div class="col-8">
				<div class="row">
					<?php dynamic_sidebar( 'footer_widgets' ); ?>
					<div class="col-12">
						<div class="row">
							<div class="col-12">
								Contact Us
							</div>
							<div class="col-6"> 
								address
							</div>
							<div class="col-6"> 
								contacts
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container footer-nav-container">
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
</footer>
