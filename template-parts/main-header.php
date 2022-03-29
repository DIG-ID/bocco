<header id="main-header" class="main-header fixed-top" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar navbar-expand-xl navbar-dark">
		<div class="container">
			<?php
			$site_name = esc_attr( get_bloginfo( 'name', 'display' ) );
			if ( ! has_custom_logo() ) :
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo $site_name; ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo $site_name; ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
					<?php
				endif;
			else :
				//the_custom_logo();
				?>
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="custom-logo-link">
					<h1 class="screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
					<?xml version="1.0" encoding="UTF-8"?>
					<svg enable-background="new 0 0 202.4 60" version="1.1" viewBox="0 0 202.4 60" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
						<style type="text/css">
							.st0{fill:#FFFFFF;}
							.st1{fill:url(#a);}
						</style>
						<path class="st0" d="m90.2 40.5v2.7h-5.7v-29.5h6v9.6c1.6-1.9 4.2-3 6.8-3 6.2 0 10.2 5.2 10.2 11.7s-3.9 11.7-10.1 11.7c-2.7-0.1-5.5-1-7.2-3.2zm11.2-8.5c0-3.5-2.3-6.1-5.6-6.1-3.1 0-5.3 2.6-5.3 6.1 0 3.6 2.3 6.1 5.3 6.1 3.3 0 5.6-2.6 5.6-6.1z"/>
							<path class="st0" d="m109.9 32c0-6.5 5.3-11.7 12-11.7s12 5.2 12 11.7-5.3 11.7-12 11.7c-6.8-0.1-12-5.2-12-11.7zm17.8 0c0-3.5-2.5-6.1-5.9-6.1s-5.9 2.6-5.9 6.1 2.5 6.1 5.9 6.1 5.9-2.6 5.9-6.1z"/>
							<path class="st0" d="m136.2 32c0-6.5 5.3-11.7 12-11.7 3.1 0 5.8 1 8 2.9l-3.6 4.2c-1-0.9-2.5-1.5-4.3-1.5-3.5 0-6 2.6-6 6.1s2.4 6.1 6.2 6.1c1.9 0 3.7-0.7 4.9-1.8l3.2 4.5c-2.2 1.8-5.2 2.9-8.4 2.9-6.8-0.1-12-5.2-12-11.7z"/>
							<path class="st0" d="m157.3 32c0-6.5 5.3-11.7 12-11.7 3.1 0 5.8 1 8 2.9l-3.6 4.2c-1-0.9-2.5-1.5-4.3-1.5-3.5 0-6 2.6-6 6.1s2.4 6.1 6.2 6.1c1.9 0 3.7-0.7 4.9-1.8l3.2 4.5c-2.2 1.8-5.2 2.9-8.4 2.9-6.7-0.1-12-5.2-12-11.7z"/>
							<path class="st0" d="m178.5 32c0-6.5 5.3-11.7 12-11.7s12 5.2 12 11.7-5.3 11.7-12 11.7c-6.7-0.1-12-5.2-12-11.7zm17.8 0c0-3.5-2.5-6.1-5.9-6.1s-5.9 2.6-5.9 6.1 2.5 6.1 5.9 6.1 5.9-2.6 5.9-6.1z"/>
						<linearGradient id="a" x1="31.261" x2="31.261" y1="60" gradientUnits="userSpaceOnUse">
							<stop stop-color="#0090DF" offset="0"/>
							<stop stop-color="#4DEBB3" offset=".906"/>
						</linearGradient>
						<path class="st1" d="m24 60-23.9-13.8-0.1-3 9.9-6.2-9.9-6.3 0.1-2.9 9-5.3-9.1-5.7 0.1-2.9 23.9-13.9h1.7l36.8 20.7 0.1 3-9.9 6.1 9.8 5.8v3l-36.8 21.4h-1.7zm-19.7-15.4 20.6 11.9 33.2-19.5-8.9-5.2-23.5 14.4h-1.8l-10.8-7c-0.1 0-0.1 0.1-0.2 0.1l-8.6 5.3zm-0.1-15.3 20.7 13.4 21-12.8-21.2-12.6-20.5 12zm19.7-15.5h1.7l23.6 14 9-5.5-33.3-18.8-20.6 11.9 8.2 5.1 11.4-6.7z"/>
					</svg>
				</a>

				<?php
			endif;
			?>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-nav',
					'container_class' => 'collapse navbar-collapse justify-content-xl-end',
					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav align-items-xl-center',
					'fallback_cb'     => '',
					'menu_id'         => 'main-nav',
					'walker'          => new Custom_Walker_Nav_Menu(),
				)
			);
			?>
		</div>
	</nav>
</header>
