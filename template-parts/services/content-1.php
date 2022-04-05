<section id="servicescontent-1" class="section section-servicescontent-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-servicescontent-1__leftcol">
                <div class="section-servicescontent-1__content-wrapper">
                    <p class="section-servicescontent-1__subtitle"><?php echo the_field('set_up_subtitle'); ?></p>
                    <h1 class="section-servicescontent-1__title"><?php echo the_field('set_up_title'); ?></h1>
                    <p class="section-servicescontent-1__text"><?php echo the_field('set_up_description'); ?></p>
                    <ul class="section-servicescontent-1__list">
                    <?php
                        if( have_rows('set_up_set_up_list') ):
                            while( have_rows('set_up_set_up_list') ) : the_row(); ?>
                                <li><?php echo the_sub_field('list_title_field'); ?></li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-servicescontent-1__rightcol">
                <div class="section-servicescontent-1__img-pack">
                    <img class="section-cmcontent-3__img-svg-notfloat" src="<?php echo wp_upload_dir()['url'] . '/02_Setup.svg' ?>">
                </div>
			</div>
		</div>
	</div>
</section>