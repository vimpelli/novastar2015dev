<?php 
/*
Template Name: HP Servers Page Layout
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if(get_the_post_thumbnail()): ?>

<div class="wrapper-negative container serverhero">
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


<div class="container microsite">
	
	<div class="row">
		<div class="col-sm-12">
			<div class="microsite-well">
				<?php the_content(); ?>
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