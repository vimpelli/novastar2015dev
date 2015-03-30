<div class="container wrapper contact">

	<div class="row">
		<div class="col-sm-12">
			<div class="map-wrapper">
				<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB6tQetPDHJT8s23jPfXp4591Acgj0FNgc&q=Nova+Star+Solutions&zoom=8" width="600" height="450" frameborder="0" style="border:0"></iframe>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1 class="page-header">Get In Touch</h1>
		</div>
	</div>
	<div class="row contact-info-row">
		
		<div class="col-sm-6 contact-info">
			<div class="content-block">
				<h3><?php the_field('phone_number'); ?></h3>
				<address><i class="fa fa-map-marker"></i><?php the_field('address'); ?></address>
				<address><i class="fa fa-envelope-o"></i><?php the_field('email'); ?></address>
				<aside><?php the_field('contact_text'); ?></aside>
			</div>
		</div>
		<div class="col-sm-6 contact-form">
			<?php the_field('contact_form_code'); ?>
		</div>
	</div>

	<div class="row facilities">
		<div class="col-xs-6 col-sm-3">
			<figure>
			<!-- <img src="<?php the_field('facilities_1'); ?>" class="img-responsive" alt="Image"> -->
				<img src="<?php uploads_dir(); ?>east1.jpg" class="img-responsive" alt="Image">
				<figcaption>Livonia East</figcaption>
			</figure>
		</div><!-- /.col-xs-6 col-sm-3 -->

		<div class="col-xs-6 col-sm-3">
			<figure>
			<!-- <img src="<?php the_field('facilities_2'); ?>" class="img-responsive" alt="Image"> -->
				<img src="<?php uploads_dir(); ?>east2.jpg" class="img-responsive" alt="Image">
				<figcaption>Livonia East</figcaption>
			</figure>
		</div><!-- /.col-xs-6 col-sm-3 -->

		<div class="col-xs-6 col-sm-3">
			<figure>
			<!-- <img src="<?php the_field('facilities_3'); ?>" class="img-responsive" alt="Image"> -->
				<img src="<?php uploads_dir(); ?>east3.jpg" class="img-responsive" alt="Image">
				<figcaption>Livonia West</figcaption>
			</figure>
		</div><!-- /.col-xs-6 col-sm-3 -->

		<div class="col-xs-6 col-sm-3">
			<figure>
			<!-- <img src="<?php the_field('facilities_4'); ?>" class="img-responsive" alt="Image"> -->
				<img src="<?php uploads_dir(); ?>east4.jpg" class="img-responsive" alt="Image">
				<figcaption>Livonia West</figcaption>
			</figure>
		</div><!-- /.col-xs-6 col-sm-3 -->
	</div>
</div>