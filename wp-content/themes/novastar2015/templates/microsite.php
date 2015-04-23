<?php 
/*
Template Name: Microsite Page Layout
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if(get_the_post_thumbnail()): ?>

<div class="wrapper-negative container-fluid microsite-header">
	<div class="row">
		<div class="col-sm-12">
			<?php the_post_thumbnail(full); ?>
		</div>
	</div>
</div>
<?php endif; ?>	

<div class="menu-hpproducts-wrapper">
	<div class="container">
			<?php wp_nav_menu( array('menu' => 'hpproducts' )); ?>
	</div><!-- /.container -->
</div>


<?php get_template_part('templates/page', 'header'); ?>

<?php if(get_field(t1_1image)): ?>
<div class="container hppage">
	<div class="row hpproducts">
		<div class="col-sm-12 title">
			<h1 class="title"><?php the_field('product_section_title'); ?></h1>
		</div>
		<div class="col-sm-6 col-lg-3 hpproduct">
			<figure style="background-image:url(<?php the_field('t1_image'); ?>);">
				<p class="lead"><?php the_field('t1_title'); ?><span class="sub"><?php the_field('t1_sub'); ?></span></p>
				<a class="btn btn-info" href="<?php the_field('t1_link'); ?>">Learn More</a>
			</figure>
		</div>
		<div class="col-sm-6 col-lg-3 hpproduct">
			<figure style="background-image:url(<?php the_field('t2_image'); ?>);">
				<p class="lead"><?php the_field('t2_title'); ?><span class="sub"><?php the_field('t2_sub'); ?></span></p>
				<a class="btn btn-info" href="<?php the_field('t2_link'); ?>">Learn More</a>
			</figure>
		</div>
		<div class="col-sm-6 col-lg-3 hpproduct">
			<figure style="background-image:url(<?php the_field('t3_image'); ?>);">
				<p class="lead"><?php the_field('t3_title'); ?><span class="sub"><?php the_field('t3_sub'); ?></span></p>
				<a class="btn btn-info" href="<?php the_field('t3_link'); ?>">Learn More</a>
			</figure>
		</div>
		<div class="col-sm-6 col-lg-3 hpproduct">
			<figure style="background-image:url(<?php the_field('t4_image'); ?>);">
				<p class="lead"><?php the_field('t4_title'); ?><span class="sub"><?php the_field('t4_sub'); ?></span></p>
				<a class="btn btn-info" href="<?php the_field('t4_link'); ?>">Learn More</a>
			</figure>
		</div>
	</div>
</div>
<?php endif; ?>


<div class="container microsite">
	
	<div class="row">
		<div class="col-sm-12">
			<div class="microsite-well">
				<?php the_field('embed_script'); ?>
			</div>
		</div>
	</div>

	<div class="row section">
		<div class="col-sm-12">
			<?php parentbutton(); ?>
		</div><!-- parent page button -->
	</div>
	
</div>


<?php endwhile; ?>
<?php endif; ?> 