<div class="container wrapper-negative">
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
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php if(!is_page('about')): ?>
				<ol class="breadcrumb"><?php breadcrumb_trail(); ?></ol>
			<?php endif; ?>
		</div>
	</div>
</div>