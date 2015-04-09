<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('templates/page', 'headerhero'); ?>

<div class="container remarketing">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h1><?php the_field('page_title'); ?></h1>
			</div><!-- /.page-header -->
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<h2 class="heading"><?php the_field('section_1_heading'); ?></h2>
			<p><?php the_field('s1_body'); ?></p>
		</div><!-- /.col-sm-10 -->
	</div><!-- /.row -->

	<div class="row logo-row section divider">
		<div class="col-xs-6 col-sm-3 logo">
			<img class="img-responsive" src="<?php the_field('logo_1'); ?>">
		</div>
		<div class="col-xs-6 col-sm-3 logo">
			<img class="img-responsive" src="<?php the_field('logo_2'); ?>">
		</div>
		<div class="col-xs-6 col-sm-3 logo">
			<img class="img-responsive" src="<?php the_field('logo_3'); ?>">
		</div>
		<div class="col-xs-6 col-sm-3 logo">
			<img class="img-responsive" src="<?php the_field('logo_4'); ?>">
		</div>
	</div>

	<div class="row section divider">
		<div class="col-sm-6">
			<img src="<?php the_field('s2_image'); ?>" class="img-responsive" alt="Image">
		</div>
		<div class="col-sm-6">
			<h2 class="heading"><?php the_field('section_2_heading'); ?></h2>
			<?php the_field('s2_body'); ?>
			<div class="lead col-xs-offset-2 col-sm-offset-1"><?php the_field('section_6'); ?></div>
		</div>
	</div>

	<div class="row section divider">
		<div class="col-sm-6">
			<h2 class="heading"><?php the_field('s3_heading_1'); ?></h2>
			<?php the_field('s3_body_1'); ?>
		</div>
		<div class="col-sm-6">
			<h2 class="heading"><?php the_field('s3_heading_2'); ?></h2>
			<?php the_field('s3_body_2'); ?>
		</div>
	</div>

	<div class="row section divider">
		<div class="col-sm-12">
			<h2 class="heading"><?php the_field('s4_heading'); ?></h2>
			<?php the_field('s4_body'); ?>
		</div>
	</div>

	<div class="row section divider">
		<div class="col-sm-12">
			<h2 class="heading"><?php the_field('s5_heading'); ?></h2>
			<?php the_field('s5_body'); ?>
		</div>
	</div>

	<div class="row section divider">
		<div class="col-sm-12">
			<h2 class="heading"><?php the_field('s6_heading'); ?></h2>
			<?php the_field('s6_body'); ?>
		</div>
	</div>

	<div class="row section">
		<div class="col-sm-6">
			<h2 class="heading"><?php the_field('t_heading'); ?></h2>
			<p><?php the_field('t_body'); ?></p>
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