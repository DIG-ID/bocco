<section id="rmintro" class="section section-rmintro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-7 col-xl-7 section-rmintro__leftcol">
                <div class="section-rmintro__content-wrapper">
                    <p class="section-rmintro__subtitle"><?php echo the_field('overview_subtitle'); ?></p>
                    <h1 class="section-rmintro__title"><?php echo the_field('overview_title'); ?></h1>
                    <p class="section-rmintro__text"><?php echo the_field('overview_description'); ?></p>
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-5 col-xl-5 section-wbeintro__rightcol">
                <div class="section-rmintro__img-pack">
                    <img class="section-rmintro__img-abtop" src="<?php echo wp_upload_dir()['url'] . '/GJT_overview.png' ?>">
                </div>
			</div>
		</div>
	</div>
</section>