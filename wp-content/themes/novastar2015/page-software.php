<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('templates/page', 'headerhero'); ?>

<div class="container wrapper top software">
	<div class="row section">
		<div class="col-sm-12">
			<div class="page-header">
				<h2><?php the_field('section_1_heading'); ?></h2>
			</div>
			<p class="lead"><?php the_field('section_1'); ?></p>
		</div>
	</div>

	<h2 class="software-title">Dassault Systemes</h2>
	<div class="row section item">

		<div class="col-md-7 img-container">
			<div class="col-xs-4 centered-img">
				<img class="img-responsive" src="<?php the_field('image_1'); ?>">
			</div>
			<div class="col-xs-4 centered-img">
				<img class="img-responsive" src="<?php the_field('image_4'); ?>">
			</div>
			<div class="col-xs-4 centered-img">
				<img class="img-responsive" src="<?php the_field('image_5'); ?>">
			</div>
		</div>

		<article class="col-md-5">
			<h3><?php the_field('section_2_heading'); ?></h3>
			<p><?php the_field('section_2'); ?></p>
			<button type="button" class="btn btn-success btn-block">Learn More</button>
		</article>
	</div>
	<h2 class="software-title">Siemens</h2>
	<div class="row section item">

		<div class="col-md-7 img-container">
			<div class="col-xs-6 centered-img">
				<img class="img-responsive" src="<?php the_field('image_2'); ?>">
			</div>
			<div class="col-xs-6 centered-img">
				<img class="img-responsive" src="<?php the_field('image_6'); ?>">
			</div>
		</div>

		<article class="col-md-5">
			<h3><?php the_field('section_3_heading'); ?></h3>
			<p><?php the_field('section_3'); ?></p>
			<button type="button" class="btn btn-success btn-block">Learn More</button>
		</article>

	</div>

	<h2 class="software-title">Microsoft</h2>
	<div class="row section item">
		<img class="single col-md-7 img-responsive" src="<?php the_field('image_3'); ?>">
		<article class="col-md-5 col-md-offset-7">
			<h3><?php the_field('section_4_heading'); ?></h3>
			<p><?php the_field('section_4'); ?></p>
			<button type="button" class="btn btn-success btn-block">Learn More</button>
		</article>
	</div>
</div>



<?php endwhile; ?>