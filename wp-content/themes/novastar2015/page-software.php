<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('templates/page', 'headerhero'); ?>

<div class="container wrapper top software">
	<div class="row section">
		<div class="col-sm-12">
			<div class="page-header">
				<h2><?php the_field('page_heading'); ?></h2>
			</div>
			<p class="lead"><?php the_field('page_sub_heading'); ?></p>
		</div>
	</div>

	<?php if (get_field('sl1_title')): ?>
		<h2 class="software-title"><?php the_field('sl1_title'); ?></h2>
		<div class="row section item">

			<div class="col-md-7 img-container">
				<div class="col-xs-4 centered-img">
					<img class="img-responsive" src="<?php the_field('sl1_image_1'); ?>">
				</div>
				<div class="col-xs-4 centered-img">
					<img class="img-responsive" src="<?php the_field('sl1_image_2'); ?>">
				</div>
				<div class="col-xs-4 centered-img">
					<img class="img-responsive" src="<?php the_field('sl1_image_3'); ?>">
				</div>
			</div>

			<article class="col-md-5">
				<h3><?php the_field('sl1_description_heading'); ?></h3>
				<p><?php the_field('sl1_description'); ?></p>
				<?php if(get_field('sl1_button_link')): ?>
					<a href="<?php the_field('sl1_button_link'); ?>" type="button" class="btn btn-success btn-block">Learn More</a>
				<?php endif; ?>
			</article>
		</div>
	<?php endif; ?>

	<?php if (get_field('sl2_title')): ?>
		<h2 class="software-title"><?php the_field('sl2_title'); ?></h2>
		<div class="row section item">

			<div class="col-md-7 img-container">
				<div class="col-xs-6 centered-img">
					<img class="img-responsive" src="<?php the_field('sl2_image_1'); ?>">
				</div>
				<div class="col-xs-6 centered-img">
					<img class="img-responsive" src="<?php the_field('sl2_image_2'); ?>">
				</div>
			</div>

			<article class="col-md-5">
				<h3><?php the_field('sl2_description_heading'); ?></h3>
				<p><?php the_field('sl2_description'); ?></p>
				<?php if(get_field('sl2_button_link')): ?>
					<a href="<?php the_field('sl2_button_link'); ?>" class="btn btn-success btn-block">Learn More</a>
				<?php endif; ?>
			</article>

		</div>
	<?php endif; ?>

	<?php if (get_field('sl3_title')): ?>
		<h2 class="software-title"><?php the_field('sl3_title'); ?></h2>
		<div class="row section item">
			<img class="single col-md-7 img-responsive" src="<?php the_field('sl3_image_1'); ?>">
			<article class="col-md-5 col-md-offset-7">
				<h3><?php the_field('sl3_description_heading'); ?></h3>
				<p><?php the_field('sl3_description'); ?></p>
				<?php if(get_field('sl3_button_link')): ?>
					<a href="<?php the_field('sl3_button_link'); ?>" class="btn btn-success btn-block">Learn More</a>
				<?php endif; ?>
			</article>
		</div>
	<?php endif; ?>
</div>



<?php endwhile; ?>
