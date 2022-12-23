<section id="gjcontent-2" class="section section-gjcontent-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-gjcontent-2__leftcol">
                <div class="section-gjcontent-2__content-wrapper">
                    <p class="section-gjcontent-2__subtitle"><?php echo the_field('functions_subtitle'); ?></p>
                    <h1 class="section-gjcontent-2__title"><?php echo the_field('functions_title'); ?></h1>
                    <ul class="section-gjcontent-2__list">
                    <?php
                        if( have_rows('functions_functions_list') ):
                            while( have_rows('functions_functions_list') ) : the_row(); ?>
                                <li><?php echo the_sub_field('list_title_field'); ?></li>
                                <p><?php echo the_sub_field('list_description_field'); ?></p>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-gjcontent-2__rightcol">
                <div class="section-gjcontent-2__img-pack">
                    <img class="section-gjcontent-2__img-abtop" src="<?php echo wp_upload_dir()['url'] . '/Einfache-Nutzung-des-Systems.png' ?>">
                    <img class="section-gjcontent-2__img-abbot" src="<?php echo wp_upload_dir()['url'] . '/Automatisch-Buchung.png' ?>">
                    <img class="section-gjcontent-3__img-abbot" src="<?php echo wp_upload_dir()['url'] . '/Automatisch-Statistiken.png' ?>">
                </div>
			</div>
		</div>
	</div>
</section>