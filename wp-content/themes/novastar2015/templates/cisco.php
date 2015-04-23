<?php 
/*
Template Name: CISCO Page Layout
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if(get_the_post_thumbnail()): ?>

<div class="wrapper-negative container-fluid ">
	<div class="row">
		<div class="col-sm-12 centered-header">
			<?php the_post_thumbnail(full); ?>
		</div>
	</div>
</div>

<?php endif; ?>	

<?php get_template_part('templates/page', 'header'); ?>

<div class="container cisco">

	<div class="row section">
		<div class="col-sm-6">
			<div class="embed embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="<?php the_field('video_1'); ?>"></iframe>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="embed embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="<?php the_field('video_2'); ?>"></iframe>
			</div>
		</div>

	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<?php the_content(); ?>
		</div>
		<div class="col-xs-6 col-sm-6">
			<h4><?php the_field('data_col_title'); ?></h4>
			<?php the_field('data_col_1'); ?>
		</div>
		<div class="col-xs-6 col-sm-6">
			<?php the_field('data_col_2'); ?>
		</div>
	</div>

	<!-- <div class="row well">
		<div class="col-sm-12">
			<h4><?php the_field('data_col_title'); ?></h4>
		</div>
		<div class="col-sm-6">
			<?php the_field('data_col_1'); ?>
		</div>
		<div class="col-sm-6">
			<?php the_field('data_col_2'); ?>
		</div>
	</div> -->

	<div class="row section">
		<div class="col-sm-12">
			<?php parentbutton(); ?>
		</div><!-- parent page button -->
	</div>
	
</div>


<?php endwhile; ?>
<?php endif; ?> 