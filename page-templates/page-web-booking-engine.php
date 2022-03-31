<?php
/**
 * Template Name: Web Booking Engine Page Template
 * Template Post Type: post, page, products
 */

get_header(); ?>
<main id="main-content" class="main-content">
    <?php
    get_template_part( 'template-parts/webbookingengine/intro' );
    get_template_part( 'template-parts/webbookingengine/content-1' );
    get_template_part( 'template-parts/webbookingengine/content-2' );
    get_template_part( 'template-parts/webbookingengine/content-3' );
    ?>
</main>
<?php get_footer();