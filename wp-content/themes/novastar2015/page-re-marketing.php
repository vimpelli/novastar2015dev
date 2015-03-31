<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('templates/page', 'headerhero'); ?>

<div class="container remarketing">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h1>Asset Recovery & Remarketing </h1>
			</div><!-- /.page-header -->
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h2 class="heading"><?php the_field('section_1_heading'); ?></h2>
			<p><?php the_field('section_1'); ?></p>
		</div><!-- /.col-sm-10 -->
	</div><!-- /.row -->
	<div class="row logo-row section divider">
		<div class="col-xs-6 col-sm-3 logo">
			<img class="img-responsive" src="<?php the_field('image_1'); ?>">
		</div>
		<div class="col-xs-6 col-sm-3 logo">
			<img class="img-responsive" src="<?php the_field('image_2'); ?>">
		</div>
		<div class="col-xs-6 col-sm-3 logo">
			<img class="img-responsive" src="<?php the_field('image_3'); ?>">
		</div>
		<div class="col-xs-6 col-sm-3 logo">
			<img class="img-responsive" src="<?php the_field('image_4'); ?>">
		</div>
	</div>
	<div class="row section divider">
		<div class="col-sm-6">
			<img src="<?php the_field('image_5'); ?>" class="img-responsive" alt="Image">
		</div>
		<div class="col-sm-6">
			<h2 class="heading"><?php the_field('section_2_heading'); ?></h2>
			<?php the_field('section_2'); ?>
			<div class="lead col-xs-offset-2 col-sm-offset-1"><?php the_field('section_6'); ?></div>
		</div>
	</div>
	<div class="row section divider">
		<div class="col-sm-6">
			<h2 class="heading"><?php the_field('section_3_heading'); ?></h2>
			<?php the_field('section_3'); ?>
		</div>
		<div class="col-sm-6">
			<h2 class="heading"><?php the_field('section_4_heading'); ?></h2>
			<?php the_field('section_4'); ?>
		</div>
	</div>
	<div class="row section divider">
		<div class="col-sm-12">
			<h2 class="heading"><?php the_field('section_5_heading'); ?></h2>
			<?php the_field('section_5'); ?>
		</div>
	</div>
	<div class="row section divider">
		<div class="col-sm-12">
			<h2 class="heading"><?php the_field('section_7_heading'); ?></h2>
			<?php the_field('section_7'); ?>
		</div>
	</div>
	<div class="row section">
		<div class="col-sm-6">
			<h2 class="heading"><?php the_field('section_8_heading'); ?></h2>
			<p class="lead"><?php the_field('section_8'); ?></p><!-- /.lead -->
		</div>

		<div class="col-sm-12">
			<?php
			$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 4);

			$postslist = get_posts( $args );

			foreach ( $postslist as $post ) :

			  setup_postdata( $post ); ?> 
				<div class="testimonial">
					<h4><?php the_title(); ?></h4>  
					<?php the_content(); ?>
				</div>
			<?php
			endforeach; 
			wp_reset_postdata();
			?>

		</div>
	</div>
</div>




<?php endwhile; ?>