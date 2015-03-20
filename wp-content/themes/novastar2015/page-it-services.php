<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('templates/page', 'headerhero'); ?>

<div class="container wrapper-top itservices">
	<div class="row section divider">
		<div class="col-sm-12">
			<h1><?php the_field('section_1_heading'); ?></h1>
			<p class="lead"><?php the_field('section_1'); ?></p>
		</div><!-- /.col-sm-12 -->
	</div>
	<div class="row section">
		<div class="col-sm-6">
			<div class="info">
				<h3 class="heading"><?php the_field('section_2_heading'); ?></h3>
				<p><?php the_field('section_2'); ?></p>
				<button class="btn btn-block btn-success btn-md">Learn More</button>
			</div>
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<div class="info">
				<h3 class="heading"><?php the_field('section_3_heading'); ?></h3>
				<p><?php the_field('section_3'); ?></p>
				<button class="btn btn-block btn-success btn-md">Learn More</button>
			</div>
		</div><!-- /.col-sm-6 -->
		<!-- <div class="col-sm-6">
			<div class="info">
				<h3 class="heading"><?php the_field('section_4_heading'); ?></h3>
				<p><?php the_field('section_4'); ?></p>
				<button class="btn btn-block btn-success btn-md">Learn More</button>
			</div>
		</div> --><!-- /.col-sm-6 -->
		<!-- <div class="col-sm-6">
			<div class="info">
				<h3 class="heading"><?php the_field('section_5_heading'); ?></h3>
				<p><?php the_field('section_5'); ?></p>
				<button class="btn btn-block btn-success btn-md">Learn More</button>
			</div>
		</div> --><!-- /.col-sm-6 -->
	</div>
</div>




<?php endwhile; ?>