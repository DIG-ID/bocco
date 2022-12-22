<section id="rmcontent-1" class="section section-rmcontent-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-rmcontent-1__leftcol">
                <div class="section-rmcontent-1__img-pack">
                    <img class="section-rmcontent-1__img-abtop" src="<?php echo wp_upload_dir()['url'] . '/vorgeschlagene.png' ?>">
                    <img class="section-rmcontent-1__img-abbot" src="<?php echo wp_upload_dir()['url'] . '/Pre-poststay.png' ?>">
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-rmcontent-1__rightcol">
                <div class="section-rmcontent-1__content-wrapper">
                    <p class="section-rmcontent-1__subtitle"><?php echo the_field('advantages_subtitle'); ?></p>
                    <h1 class="section-rmcontent-1__title"><?php echo the_field('advantages_title'); ?></h1>
                    <ul class="section-rmcontent-1__list">
                    <?php
                        if( have_rows('advantages_advantages_list') ):
                            while( have_rows('advantages_advantages_list') ) : the_row(); ?>
                                <li><?php echo the_sub_field('list_title_field'); ?></li>
                                <p><?php echo the_sub_field('list_description_field'); ?></p>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
			</div>
		</div>
	</div>
</section>