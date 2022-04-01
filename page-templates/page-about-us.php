<?php
/**
 * Template Name: About Us Page Template
 */
?>

<?php get_header(); ?>
	<?php do_action( 'before_main_content' ); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="page-header">
				<div class="container">
					<div class="row justify-content align-item-center">
						<div class="col">
							<?php the_title( '<h1 class="page-title text-center">', '</h1>' ); ?>
						</div>
					</div>
				</div>
			</header>
			<section class="page-content">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>
		</article>
	<?php do_action( 'after_main_content' ); ?>
<?php get_footer(); ?>
