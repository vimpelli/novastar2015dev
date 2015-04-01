<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('templates/page', 'headerhero'); ?>

<div class="container wrapper-top about">
	<div class="row section">
		<div class="col-md-8 about-us">
			<figure>
				<img src="<?php the_field('logo'); ?>" class="img-responsive logo" alt="Image">
				<figcaption><h2><?php the_field('logo_caption'); ?></h2></figcaption>
			</figure>
			<p class="lead"><?php the_field('lead_paragraph'); ?></p>
			<p><?php the_field('first_content'); ?></p>
		
			<div class="row logo-row">
				<div class="col-xs-6 col-sm-6 col-md-3 logo">
					<img class="img-responsive" src="<?php the_field('logo_1'); ?>">
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 logo">
					<img class="img-responsive" src="<?php the_field('logo_2'); ?>">
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 logo">
					<img class="img-responsive" src="<?php the_field('logo_3'); ?>">
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 logo">
					<img class="img-responsive" src="<?php the_field('logo_4'); ?>">
				</div>
			</div>

			<p><?php the_field('second_content'); ?></p>
		</div>
		<div class="col-md-4">
			<?php dynamic_sidebar('page-sidebar'); ?>
		</div>
	</div>
</div>




<?php endwhile; ?>