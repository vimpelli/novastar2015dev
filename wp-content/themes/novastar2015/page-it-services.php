<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('templates/page', 'headerhero'); ?>

<div class="container wrapper-top itservices">
	<div class="row section divider">
		<h1 class="page-header"><?php the_field('intro_heading'); ?></h1>
		<div class="col-md-6 col-lg-8">
			<p class="lead"><?php the_field('intro_body'); ?></p>
		</div>
		<div class="col-md-6 col-lg-4">
			<img src="<?php the_field('intro_image'); ?>" class="img-responsive img-rounded" alt="Image">
		</div>
	</div>

	<div class="row section divider lifecycle">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2 class="heading"><?php the_field('first_section_heading'); ?></h2>
		</div>
		<div class="col-md-6 col-lg-4 stage">
			<?php the_field('first_section_content'); ?>
		</div>
		<div class="col-md-6 col-lg-8 img-wrapper">
			<img src="<?php the_field('first_section_image'); ?>" class="img-responsive" alt="Image">
		</div>
	</div>

	<div class="row section">
		<div class="col-sm-6">
			<div class="info">
				<h3 class="heading"><?php the_field('block_1_heading'); ?></h3>
				<p><?php the_field('block_1_content'); ?></p>
				<?php if(get_field('block_1_link')): ?>
					<a href="<?php the_field('block_1_link'); ?>" class="btn btn-block btn-success btn-md">Learn More</a>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="info">
				<h3 class="heading"><?php the_field('block_2_heading'); ?></h3>
				<p><?php the_field('block_2_content'); ?></p>
				<?php if(get_field('block_2_link')): ?>
					<a href="<?php the_field('block_2_link'); ?>" class="btn btn-block btn-success btn-md">Learn More</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>




<?php endwhile; ?>