<section id="cmintro" class="section section-cmintro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-cmintro__leftcol">
                <div class="section-cmintro__content-wrapper">
                    <p class="section-cmintro__subtitle"><?php echo the_field('overview_subtitle'); ?></p>
                    <h1 class="section-cmintro__title"><?php echo the_field('overview_title'); ?></h1>
                    <p class="section-cmintro__text"><?php echo the_field('overview_description'); ?></p>
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-cmintro__rightcol">
                <div class="section-cmintro__img-pack">
                    <img src="<?php echo wp_upload_dir()['url'] . '/ChannelM_Overview.png' ?>">
                </div>
			</div>
		</div>
	</div>
</section>