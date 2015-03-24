<?php 
/*
Template Name: Home Page Layout 2
*/
?>
<div class="container wrapper top">

	<h1 class="page-header aligncenter home-tagline">Complete Lifecycle Solutions</h1>

	<div class="row home-hero">
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php uploads_dir(); ?>calibration.jpg" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2>Calibration</h2>
						<p>A2LA accredited instrument calibration.</p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/calibration"></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php uploads_dir(); ?>newhardware.jpg" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2>New IT Hardware</h2>
						<p>HP, CISCO, SGI and more.</p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/new-hardware"></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php uploads_dir(); ?>printer.jpg" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2>Software</h2>
						<p>Dassault Systemes, Siemens, and Microsoft.</p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/software"></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php uploads_dir(); ?>services.jpg" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2>IT Services</h2>
						<p>Full IT lifecycle asset managment tracking.</p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/it-services"></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php uploads_dir(); ?>remarketing.jpg" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2>Remarketing</h2>
						<p>Recover value of used IT assets.</p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/re-marketing"></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php uploads_dir(); ?>usedsales2.jpg" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2>Used IT Hardware</h2>
						<p>Play it Again PCs</p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/used-sales"></a>
			</div>
		</div>
	</div> <!-- row home hero -->
<!-- </div> -->

<!-- <div class="container-fluid wrapper"> -->
	<div class="row logo-row">
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php uploads_dir(); ?>piapc72.png">
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php uploads_dir(); ?>dass.png">
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php uploads_dir(); ?>hp.png">
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php uploads_dir(); ?>sgi.png">
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php uploads_dir(); ?>siemens72.png">
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php uploads_dir(); ?>cisco72.png">
		</div>
	</div>
<!-- </div> -->

<!-- <div class="container"> -->
	<div class="row news-hero">
		<p class="news-title">News</p>
	
		<?php $args = array( 'posts_per_page' => 1, 'category_name' => 'news');

			$postslist = get_posts( $args );

			foreach ( $postslist as $post ) :

			setup_postdata( $post ); ?>
			<?php if (!get_field('use_image')): ?>
				<div class="news-image col-sm-6 col-md-4">
			   		<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium'); ?></a>
			   	</div>
			    <div class="news col-sm-6 col-md-8">
			    	<h3><?php the_title(); ?></h3> 
			    	<?php the_content(); ?>
			   	</div>
			<?php endif; ?>
			<?php if (get_field('use_image')): ?>
				<a href="<?php the_permalink();?>">
					<div class="col-sm-12">
			  			<img class="img-responsive large-image" src="<?php the_field('large_image'); ?>">
			   		</div>
			   	</a>
			<?php endif; ?>
		   	
		<?php endforeach; wp_reset_postdata(); ?>
		<a href=""><p class="news-more">More News</p></a>
	</div>
<!-- </div> -->

<!-- <div class="wrapper top container"> -->
	<div class="triangle two"></div>
</div>

<div class="video-wrapper wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 video-info">
				<h1 class="title">A Legacy of Service</h1>
				<p class="lead">From the beginning, Novastar's goal has been to provide quality technology solutions for today’s businesses. We strive to keep our focus on quality people, the right product, competitive pricing and customized solutions.</p>
				<button type="button" class="btn btn-default">Contact Us</button>
			</div>
			<div class="col-sm-7 inner">
				<div class="video">
					<img class="img img-responsive" src="<?php uploads_dir();?>placeholder.jpg">
				</div>
			</div>
		</div>
	</div>
	<div class="triangle three"></div>
</div>
<div class="contact-cta container-fluid">
	<div class="row">
		<div class="map-container col-sm-6 col-md-6 col-lg-6">
			<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB6tQetPDHJT8s23jPfXp4591Acgj0FNgc&q=Nova+Star+Solutions&zoom=7" width="600" height="450" frameborder="0" style="border:0"></iframe>
		</div>
		<div class="col-sm-6 contact-info">
			<div class="content-block">
				<h1>Get In Touch</h1>
				<h4>616.456.7894</h4>
				<address><i class="fa fa-map-marker"></i>35200 Plymouth Rd. Livonia, MI 48154</address>
				<address><i class="fa fa-envelope-o"></i>info@novastar.net</address>
			<div>
		</div>
	</div>
</div>


