<header id="main-header" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">
			<?php
			if ( ! has_custom_logo() ) :
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
					<?php
				endif;
			else :
				the_custom_logo();
			endif;
			?>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-nav',
					'container_class' => 'collapse navbar-collapse justify-content-end',
					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav align-items-center',
					'fallback_cb'     => '',
					'menu_id'         => 'main-nav',
					'depth'           => 2,
					'walker'          => new Custom_Walker_Nav_Menu(),
				)
			);
			?>
		</div>
	</nav>
</header>
