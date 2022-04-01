<section id="wbecontent-2" class="section section-wbecontent-2">
	<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <p class="section-wbecontent-2__subtitle"><?php echo the_field('functions_subtitle'); ?></p>
                <h1 class="section-wbecontent-2__title"><?php echo the_field('functions_title'); ?></h1>
                <img class="section-wbecontent-2__img" src="<?php echo wp_upload_dir()['url'] . '/WBE_F_illustration.svg' ?>">
            </div>
        </div>
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12 col-xl-12 section-wbecontent-2__leftcol">
                <div class="section-wbecontent-2__content-wrapper">
                    <ul class="section-wbecontent-2__list">
                    <?php
                        if( have_rows('functions_functions_list') ):
                            while( have_rows('functions_functions_list') ) : the_row(); ?>
                                <li><?php echo the_sub_field('list_title_field'); ?></li>
                                <p><?php echo the_sub_field('list_description_field'); ?></p>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
			</div>
		</div>
	</div>
</section>