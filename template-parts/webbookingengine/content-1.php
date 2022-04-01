<section id="wbecontent-1" class="section section-wbecontent-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-wbecontent-1__leftcol">
                <div class="section-wbecontent-1__img-pack">
                    <img class="section-wbecontent-1__img-abtop" src="<?php echo wp_upload_dir()['url'] . '/WBE_A_2.png' ?>">
                    <img class="section-wbecontent-1__img-abbot" src="<?php echo wp_upload_dir()['url'] . '/WBE_A_1.png' ?>">
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-wbecontent-1__rightcol">
                <div class="section-wbecontent-1__content-wrapper">
                    <p class="section-cmcontent-1__subtitle"><?php echo the_field('advantages_subtitle'); ?></p>
                    <h1 class="section-cmcontent-1__title"><?php echo the_field('advantages_title'); ?></h1>
                    <ul class="section-cmcontent-1__list">
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