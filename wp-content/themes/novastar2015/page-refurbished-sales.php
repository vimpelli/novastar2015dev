<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('templates/page', 'headerhero'); ?>

<div class="container wrapper-top remarketing">
	<!-- <div class="row section divider">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1><?php the_field('section_1_heading'); ?></h1>
		</div>
	</div>	 -->
			
	<div class="row section">
		<div class="col-sm-12">
			<h2><?php the_field('section_2_heading'); ?></h2>
			<?php the_field('section_2'); ?>
		</div>
		<div class="col-md-8">
			<img src="<?php the_field('image_1'); ?>" class="img-responsive" alt="Image">
		</div>
		<div class="col-md-4">
			<?php the_field('section_1'); ?>
			<a target=_blank href="https://store.piapc.com/Default.aspx"><button type="button" class="btn btn-lg btn-block btn-success">Visit Website</button></a>
		</div>
	</div>
</div>




<?php endwhile; ?>