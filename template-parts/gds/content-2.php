<section id="gdscontent-2" class="section section-gdscontent-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-gdscontent-2__leftcol">
                <div class="section-gdscontent-2__content-wrapper">
                    <p class="section-gdscontent-2__subtitle"><?php echo the_field('functions_subtitle'); ?></p>
                    <h1 class="section-gdscontent-2__title"><?php echo the_field('functions_title'); ?></h1>
                    <ul class="section-gdscontent-2__list">
                    <?php
                        if( have_rows('functions_functions_list') ):
                            while( have_rows('functions_functions_list') ) : the_row(); ?>
                                <li><?php echo the_sub_field('list_title_field'); ?></li>
                                <p><?php echo the_sub_field('list_description_field'); ?></p>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-gdscontent-2__rightcol">
                <div class="section-gdscontent-2__img-pack">
                    <img class="section-gdscontent-2__img-abtop" src="<?php echo wp_upload_dir()['url'] . '/GDS_F_3.png' ?>">
                    <img class="section-gdscontent-2__img-abbot" src="<?php echo wp_upload_dir()['url'] . '/GDS_F_1.png' ?>">
                    <img class="section-gdscontent-2__img-abbot2" src="<?php echo wp_upload_dir()['url'] . '/GDS_F_2.png' ?>">
                </div>
			</div>
		</div>
	</div>
</section>