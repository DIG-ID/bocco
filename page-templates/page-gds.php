<?php
/**
 * Template Name: GDS Page Template
 * Template Post Type: post, page, products
 */

get_header(); ?>
<main id="main-content" class="main-content">
    <?php
    get_template_part( 'template-parts/gds/intro' );
    get_template_part( 'template-parts/gds/content-1' );
    get_template_part( 'template-parts/gds/content-2' );
    get_template_part( 'template-parts/gds/content-3' );
    ?>
</main>
<?php get_footer();