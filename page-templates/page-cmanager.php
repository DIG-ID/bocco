<?php
/**
 * Template Name: Channel Manager Page Template
 * Template Post Type: post, page, products
 */

get_header(); ?>
<main id="main-content" class="main-content">
    <?php
    get_template_part( 'template-parts/channelmanager/intro' );
    get_template_part( 'template-parts/channelmanager/content-1' );
    get_template_part( 'template-parts/channelmanager/content-2' );
    get_template_part( 'template-parts/channelmanager/content-3' );
    ?>
</main>
<?php get_footer();