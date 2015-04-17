<?php if(get_field('header_image')) { get_template_part('templates/page', 'headerhero'); } ?>

<?php if(!get_field('header_image')): ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header"><h1><?php echo roots_title(); ?></h1></div>
		</div>
		<div class="col-sm-12">
			<ol class="breadcrumb"><?php breadcrumb_trail(); ?></ol>
		</div>
	</div>
</div>

<?php endif; ?>