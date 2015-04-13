<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="container wrapper top">
	<div class="row section">
		<div class="col-sm-12 col-md-7">
			<?php the_content(); ?>
		</div>

		<div class="col-sm-12 col-md-5">
			<?php if(get_the_post_thumbnail()): ?>
				<br><img src="<?php echo "$feat_image"; ?>" class="img-responsive img-rounded" alt="Image"><br>
			<?php endif; ?>
		</div>

		<!-- <div class="col-sm-2">
			<?php dynamic_sidebar('page-sidebar'); ?>
		</div> -->

		<div class="col-sm-12">
			<?php parentbutton(); ?>
		</div>  <!-- parent page button -->

	</div> <!-- row section -->
</div> <!-- container wrapper -->




