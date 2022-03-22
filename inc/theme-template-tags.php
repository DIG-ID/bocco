<?php
/**
 * The custom theme tags file.
 */

/**
 * This function open the main content.
 */
function boccog_theme_before_main_content() {
	?>
	<main id="main-content">
	<?php
}

add_action( 'before_main_content', 'boccog_theme_before_main_content' );

/**
 * This function closes the main content.
 */
function boccog_theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'boccog_theme_after_main_content' );
