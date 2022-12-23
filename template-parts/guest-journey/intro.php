<section id="gjintro" class="section section-gjintro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-7 col-xl-7 section-gjintro__leftcol">
                <div class="section-gjintro__content-wrapper">
                    <p class="section-gjintro__subtitle"><?php echo the_field('overview_subtitle'); ?></p>
                    <h1 class="section-gjintro__title"><?php echo the_field('overview_title'); ?></h1>
                    <p class="section-gjintro__text"><?php echo the_field('overview_description'); ?></p>
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-5 col-xl-5 section-wbeintro__rightcol">
                <div class="section-gjintro__img-pack">
                    <img class="section-gjintro__img-abtop" src="<?php echo wp_upload_dir()['url'] . '/GJT_overview.png' ?>">
                </div>
			</div>
		</div>
	</div>
</section>