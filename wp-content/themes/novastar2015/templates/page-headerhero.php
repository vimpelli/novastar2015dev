<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="header-hero">
				<img class="img img-responsive" src="<?php the_field('header_image'); ?>">
				<div class="page-header">
					<h1><?php echo roots_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php the_breadcrumb(); ?>
		</div>
	</div>
</div>