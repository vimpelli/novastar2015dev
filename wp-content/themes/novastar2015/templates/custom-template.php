<?php 
/*
Template Name: Big Header Page Template
*/
?>

<?php while (have_posts()) : the_post(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="header-hero">
				<img class="img img-responsive" src="<?php the_field('header_image'); ?>">
				<?php get_template_part('templates/page', 'header'); ?>
			</div>
		</div>
	</div>
</div>
<?php the_breadcrumb(); ?>
<?php the_content(); ?>


<?php endwhile; ?>