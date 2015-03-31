<?php get_template_part('templates/page', 'headerhero'); ?>
<div class="container wrapper calibration">

	<div class="row section divider">
		<div class="col-sm-12">
			<h2><?php the_field('section_1_heading'); ?></h2>
			<div class="col-sm-4">
				<?php the_field('list_1'); ?>
			</div>
			<div class="col-sm-4">
				<?php the_field('list_2'); ?>
			</div>
			<div class="col-sm-4">
				<?php the_field('list_3'); ?>
			</div>
		</div>
		<div class="col-sm-6">
			<?php the_field('section_1b1'); ?>
		</div>
		<div class="col-sm-6">
			<?php the_field('section_1b2'); ?>
		</div>
	</div>
	
	<div class="row section divider">
		<div class="col-sm-12 col-md-6 info">
			<h2><?php the_field('section_2_heading'); ?></h2>
			<p class="lead"><?php the_field('section_2b1'); ?></p>
			<p><?php the_field('section_2b2'); ?></p>
		</div>
		<div class="col-sm-12 col-md-6">
			<img class="img-responsive" src="<?php the_field('section_2_image'); ?>">
		</div>
	</div>

	<div class="row section divider">
		<div class="col-sm-12">
			<h2><?php the_field('section_3_heading'); ?></h2>
			<p class="lead"><?php the_field('section_3_subhead'); ?></p>
			<p><?php the_field('section_3_body'); ?>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-4">
				<?php the_field('section_3l1'); ?>
			</div>
			<div class="col-sm-4">
				<?php the_field('section_3l2'); ?>
			</div>
			<div class="col-sm-4">
				<?php the_field('section_3l3'); ?>
			</div>
		</div>
	</div>

	<div class="row section divider">
		<div class="col-sm-12 col-md-6">
			<img class="img-responsive" src="<?php the_field('section_4_image'); ?>">
		</div>
		<div class="col-sm-12 col-md-6 info">
			<h2><?php the_field('section_4_heading'); ?></h2>
			<p class="lead"><?php the_field('section_4_subhead'); ?></p>
			<p><?php the_field('section_4_body'); ?></p>
		</div>
	</div>

	<div class="row section">
		<div class="col-sm-12 col-md-12 info">
			<h2><?php the_field('section_5_heading'); ?></h2>
		</div>
		<div class="col-sm-12 col-md-6 info">	
			<p><?php the_field('section_5_body'); ?></p>
			<a href="<?php the_field('section_5_button_link'); ?>" target=_blank type="button" class="btn btn-md btn-success">Learn More <i class="fa fa-file-pdf-o"></i></a>
		</div>
		<div class="col-sm-6">
			<a target=_blank href="<?php the_field('section_5_image_link'); ?>"><img src="<?php the_field('section_5_image'); ?>" class="img-responsive" alt="Image"></a>
		</div>
	</div>
￼
</div>