<section id="gdsintro" class="section section-gdsintro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-7 col-xl-7 section-gdsintro__leftcol">
                <div class="section-gdsintro__content-wrapper">
                    <p class="section-gdsintro__subtitle"><?php echo the_field('overview_subtitle'); ?></p>
                    <h1 class="section-gdsintro__title"><?php echo the_field('overview_title'); ?></h1>
                    <p class="section-gdsintro__text"><?php echo the_field('overview_description'); ?></p>
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-5 col-xl-5 section-gdsintro__rightcol">
                <div class="section-gdsintro__img-pack">
                    <img src="<?php echo wp_upload_dir()['url'] . '/GDS_O_1.png' ?>">
                </div>
			</div>
		</div>
	</div>
</section>