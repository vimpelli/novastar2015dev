<?php 
/*
Template Name: Cube Pro Page Layout
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="container-fluid cubepro">
	<div class="container inner">
		<div class="col-sm-12">

			<video 
				class="video-js vjs-default-skin vjs-big-play-centered"

				controls preload="auto" width="auto" height="auto"

				poster="http://novastar.dev/wp-content/uploads/cubeproposter.jpg"

				data-setup='{"example_option":true}'>

				<source src="<?php the_field('video'); ?>" type="video/mp4"/>

			 	<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
			</video>
		</div>
	</div>
</div>

<?php get_template_part('templates/page', 'header'); ?>

<div class="container">

	<div class="row">
		<div class="col-sm-12">
			<h2 class="bold"><?php the_field('title'); ?></h2>
			<?php the_post_thumbnail(full); ?>	
		</div>
	</div>

	<div class="row section">
		<div class="col-sm-8">
			<h2 class="bold"><?php the_field('section_1_heading'); ?></h2>
			<?php the_field('section_1_body'); ?>
		</div>
		<div class="col-sm-4">
			<img src="<?php the_field('section_1_image'); ?>">
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<h3 class="bold"><?php the_field('colors_title'); ?></h3>
			<img src="<?php the_field('colors'); ?>">
		</div>
	</div>

	<div class="row section">	
		<div class="col-sm-6">
			<h2><?php the_field('section_2_heading'); ?></h2>
			<?php the_field('section_2_body'); ?>
		</div>
		<div class="col-sm-6">
			<h2><?php the_field('section_3_heading'); ?></h2>
			<?php the_field('section_3_body'); ?>
		</div>
	</div>

	<div class="row section">
		<div class="col-sm-12">
			<a target=_blank href="<?php the_field('banner_link'); ?>"><img src="<?php the_field('banner'); ?>"></a>
		</div><!-- /.col-sm-12 -->
	</div>

	<div class="row section">
		<div class="col-sm-12">
			<?php parentbutton(); ?>
		</div><!-- parent page button -->
	</div>

</div>
<?php endwhile; ?>
<?php endif; ?> 