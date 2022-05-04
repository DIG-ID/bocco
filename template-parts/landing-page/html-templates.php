<?php if ( have_rows( 'html_templates' ) ) : ?>
	<section id="section-html-templates" class="section-html-templates">
		<?php
		while ( have_rows( 'html_templates' ) ) :
			the_row();
			$image = get_sub_field( 'image' );
			?>
			<article class="html-mailing-wrapper">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-12 col-sm-12 col-md-10 col-lg-7 text-center ">
							<h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
							<p class="description"><?php the_sub_field( 'description' ); ?></p>
							<?php echo wp_get_attachment_image( $image, 'full' ); ?>
							<a href="<?php the_sub_field( 'button_url' ); ?>" class="btn">
								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="15" viewBox="0 0 22 15">
									<path id="ic_visibility_24px" d="M12,4.5A11.827,11.827,0,0,0,1,12a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4.5ZM12,17a5,5,0,1,1,5-5A5,5,0,0,1,12,17Zm0-8a3,3,0,1,0,3,3A3,3,0,0,0,12,9Z" transform="translate(-1 -4.5)" fill="#fff"/>
								</svg>
								<?php the_sub_field( 'button_text' ); ?>
							</a>
						</div>
					</div>
				</div>
			</article>
			<?php
		endwhile;
		?>
	</section>
<?php endif; ?>

