<section id="section-cta" class="section section-cta">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-9">
				<p class="section-cta__title"><?php the_field( 'call_to_action_title' ); ?></p>
			</div>
			<div class="col-3">
				<a href="<?php the_field( 'call_to_action_page_link' ); ?>" class="btn section-cta__btn"><?php _e( 'Contact Us', 'bocco-goup' ); ?></a>
			</div>
		</div>
	</div>
</section>
