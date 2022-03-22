<header id="main-header" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-nav',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'main-nav',
					'depth'           => 2,
					'walker'          => '',
				)
			);
			?>
		</div>
	</nav>
</header>
