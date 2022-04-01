<section id="cmcontent-2" class="section section-cmcontent-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-cmcontent-2__leftcol">
            <div class="section-cmcontent-2__content-wrapper">
                    <p class="section-cmcontent-2__subtitle"><?php echo the_field('functions_subtitle'); ?></p>
                    <h1 class="section-cmcontent-2__title"><?php echo the_field('functions_title'); ?></h1>
                    <ul class="section-cmcontent-2__list">
                        <?php
                        if( have_rows('functions_functions_list') ):
                            while( have_rows('functions_functions_list') ) : the_row(); ?>
                                <li><?php echo the_sub_field('list_title_field'); ?></li>
                                <p><?php echo the_sub_field('list_description_field'); ?></p>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-cmcontent-2__rightcol">
                <img class="section-cmcontent-2__img-overflow" src="<?php echo wp_upload_dir()['url'] . '/CM_F_1.png' ?>">
			</div>
		</div>
	</div>
</section>