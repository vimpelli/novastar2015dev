<?php 
/*
Template Name: Siemens Page
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php if(get_the_post_thumbnail()): ?>

<div class="wrapper-negative container-fluid">
	<div class="row">
		<div class="col-sm-12 wide-header">
			<?php the_post_thumbnail(full); ?>
		</div>
	</div>
</div>

<?php endif; ?>	

<?php get_template_part('templates/page', 'header'); ?>

<div class="container">
	<div class="row section divider">
		<div class="col-sm-12">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<div class="container dassault">
	<div class="row section">
		<div class="col-md-6">
			<div class="siemens">
				<div class="embed-responsive embed-responsive-16by9">
  					<iframe class="embed-responsive-item" src="<?php the_field('s1_video'); ?>"></iframe>
				</div>

				<?php if(get_field('s1_logo')): ?>
					<div class="logo">
						<img class="img logo" src="<?php the_field('s1_logo'); ?>">
						<img class="img partner" src="<?php the_field('s1_logo_2'); ?>">
					</div>
				<?php endif; ?>

				<span class="spacer"></span>
				<?php the_field('s1_body'); ?>
				<span class="callout">
					<?php the_field('s1_callout'); ?>
				</span>
			</div>
		</div>
	
		<div class="col-md-6">
			<div class="siemens
			">
				<div class="embed-responsive embed-responsive-16by9">
  					<iframe class="embed-responsive-item" src="<?php the_field('s2_video'); ?>"></iframe>
				</div>

				<?php if(get_field('s1_logo')): ?>
					<div class="logo">
						<img class="img logo" src="<?php the_field('s2_logo'); ?>">
						<img class="img partner" src="<?php the_field('s2_logo_2'); ?>">
					</div>
				<?php endif; ?>

				<span class="spacer"></span>
				<?php the_field('s2_body'); ?>
				<span class="callout">
					<?php the_field('s2_callout'); ?>
				</span>
			</div>
		</div>
	</div>

<?php if(get_field('page_bottom')): ?>

	<div class="row section well page-bottom">
		<div class="col-sm-12">
			<h4 class="lead"><?php the_field('page_callout'); ?></h4>
		</div>
		<div class="col-sm-4 software-logo">
			<a target=_blank href="<?php the_field('logo_1_link'); ?>"></a><img class="img" src="<?php the_field('logo_1'); ?>">
		</div>
		<div class="col-sm-4 software-logo">
			<a target=_blank href="<?php the_field('logo_2_link'); ?>"></a><img class="img" src="<?php the_field('logo_2'); ?>">
		</div>
		<div class="col-sm-4 software-logo">
			<a target=_blank href="<?php the_field('logo_3_link'); ?>"></a><img class="img" src="<?php the_field('logo_3'); ?>">
		</div>
	</div>

<?php endif; ?>

	<div class="row section">
		<div class="col-sm-12">
			<?php parentbutton(); ?>
		</div><!-- parent page button -->
	</div>

</div>


<?php endwhile; ?>
<?php endif; ?> 