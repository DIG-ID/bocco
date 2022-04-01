<?php
/**
 * The template for displaying services archive pages
 */

get_header(); ?>

<?php do_action( 'before_main_content' ); ?>

<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<?php the_archive_title( '<h1 class="page-title text-center">', '</h1>' ); ?>
	</header><!-- .page-header -->

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<section class="page-content">
			<?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
		</section>
	<?php endwhile; ?>

<?php endif; ?>

<?php do_action( 'after_main_content' ); ?>

<?php get_footer();
