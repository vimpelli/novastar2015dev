<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('templates/page', 'headerhero'); ?>

<div class="container wrapper-top remarketing">
	<div class="row section">
		<div class="col-sm-12">
			<h2><?php the_field('intro_heading'); ?></h2>
			<?php the_field('section_2'); ?>
		</div>
		<div class="col-md-8">
			<img src="<?php the_field('logo'); ?>" class="img-responsive" alt="Image">
		</div>
		<div class="col-md-4">
			<h3><?php the_field('section_1_heading'); ?></h3>
			<?php the_field('s1_body'); ?>
			<a target=_blank href="<?php the_field('s1_button_link'); ?>"><button type="button" class="btn btn-lg btn-block btn-success">Visit Website</button></a>
		</div>
	</div>
</div>




<?php endwhile; ?>