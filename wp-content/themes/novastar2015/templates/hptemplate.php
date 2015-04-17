<?php 
/*
Template Name: HP Page Layout
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="container hppage">
	<div class="row">
		<?php the_post_thumbnail('full'); ?>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="page-header"><h2>Novastar - One of the Largest Volume Resellers of HP Workstations</h2></div>
		</div>
	</div>

	<div class="row section">
		<div class="col-sm-12">
			<img class="img partner img-responsive"src="<?php the_field('partner_logo'); ?>">
			<?php the_field('section_1'); ?>
		</div>
	</div>

</div>

<div class="hppage-wrapper">
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
</div>
	
<div class="container hppage">
	<div class="row section divider">
		<div class="col-sm-12 title">
				<h1 class="title">HP Product Videos</h1>
			</div>
		<div class="col-sm-6 video">
			<div class="embed embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BuB-dc3fWdE"></iframe>
			</div>
		</div>
		<div class="col-sm-6 video">
			<div class="embed embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BuB-dc3fWdE"></iframe>
			</div>
		</div>
	</div>

	<!-- <?php print_r( $title = wp_get_attachment(get_field('sheet_2'))); ?> -->
	
	<!-- <div class="row datasheets section">
		<div class="col-sm-12">
			<h2>Data Sheets</h2>
		</div>
		<div class="col-sm-3">
			<a href="<?php echo $title = wp_get_attachment(get_field('sheet_1'))['src']; ?>" target=_blank><i class="fa fa-file-text"></i></a>
			<p class="lead"><?php echo $title = wp_get_attachment(get_field('sheet_1'))['title']; ?></p>
		</div>
		<div class="col-sm-3">
			<a href="<?php echo $title = wp_get_attachment(get_field('sheet_2'))['src']; ?>" target=_blank><i class="fa fa-file-text"></i></a>
			<p class="lead"><?php echo $title = wp_get_attachment(get_field('sheet_2'))['title']; ?></p>
		</div>
		<div class="col-sm-3">
			<a href="<?php echo $title = wp_get_attachment(get_field('sheet_3'))['src']; ?>" target=_blank><i class="fa fa-file-text"></i></a>
			<p class="lead"><?php echo $title = wp_get_attachment(get_field('sheet_3'))['title']; ?></p>
		</div>
		<div class="col-sm-3">
			<a href="<?php echo $title = wp_get_attachment(get_field('sheet_4'))['src']; ?>" target=_blank><i class="fa fa-file-text"></i></a>
			<p class="lead"><?php echo $title = wp_get_attachment(get_field('sheet_4'))['title']; ?></p>
		</div>
	</div> -->


	<div class="row section">
		<div class="col-sm-12">
			<?php parentbutton(); ?>
		</div><!-- parent page button -->
	</div>
</div>

<?php endwhile; ?>
<?php endif; ?> 