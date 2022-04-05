<section id="servicescontent-2" class="section section-servicescontent-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-servicescontent-2__leftcol">
                <div class="section-servicescontent-2__img-pack">
                    <img class="section-cmcontent-3__img-svg" src="<?php echo wp_upload_dir()['url'] . '/03_Support.svg' ?>">
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-servicescontent-2__rightcol">
                <div class="section-servicescontent-2__content-wrapper">
                    <p class="section-servicescontent-2__subtitle"><?php echo the_field('support_subtitle'); ?></p>
                    <h1 class="section-servicescontent-2__title"><?php echo the_field('support_title'); ?></h1>
                    <p class="section-servicescontent-1__text"><?php echo the_field('support_description'); ?></p>
                    <ul class="section-servicescontent-2__list">
                    <?php
                        if( have_rows('support_support_list') ):
                            while( have_rows('support_support_list') ) : the_row(); ?>
                                <li><?php echo the_sub_field('list_title_field'); ?></li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
			</div>
		</div>
	</div>
</section>