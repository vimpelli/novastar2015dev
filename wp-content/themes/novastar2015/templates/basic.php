<?php 
/*
Template Name: Basic Page Layout With Sidebar
*/
?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="container wrapper">

	<div class="row section">
		
		<div class="col-sm-8">

			<?php if(get_the_post_thumbnail()): ?>
				<img src="<?php echo "$feat_image"; ?>" class="img-responsive" alt="Image">
			<?php endif; ?>

			<?php the_content(); ?>

		</div>

		<div class="col-sm-4">
			<?php dynamic_sidebar('page-sidebar'); ?>
		</div>

	</div>

</div>