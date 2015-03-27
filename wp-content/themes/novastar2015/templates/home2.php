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
					<div class="img-wrapper"><img src="<?php the_field('box_1_image'); ?>" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2><?php the_field('box_1_heading'); ?></h2>
						<p><?php the_field('box_1_sub'); ?></p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/calibration"></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php the_field('box_2_image'); ?>" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2><?php the_field('box_2_heading'); ?></h2>
						<p><?php the_field('box_2_sub'); ?></p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/new-hardware"></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php the_field('box_3_image'); ?>" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2><?php the_field('box_3_heading'); ?></h2>
						<p><?php the_field('box_3_sub'); ?></p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/software"></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php the_field('box_4_image'); ?>" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2><?php the_field('box_4_heading'); ?></h2>
						<p><?php the_field('box_4_sub'); ?></p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/it-services"></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php the_field('box_5_image'); ?>" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2><?php the_field('box_5_heading'); ?></h2>
						<p><?php the_field('box_5_sub'); ?></p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/re-marketing"></a>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="block">
				<figure class="service">
					<div class="img-wrapper"><img src="<?php the_field('box_6_image'); ?>" class="img-responsive" alt="Image"></div>
					<figcaption>
						<h2><?php the_field('box_6_heading'); ?></h2>
						<p><?php the_field('box_6_sub'); ?></p>
					</figcaption>
				</figure>
				<a href="<?php echo home_url(); ?>/used-sales"></a>
			</div>
		</div>
	</div> <!-- row home hero -->

	<div class="row logo-row">
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php the_field('logo_1'); ?>">
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php the_field('logo_2'); ?>">
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php the_field('logo_3'); ?>">
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php the_field('logo_4'); ?>">
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php the_field('logo_5'); ?>">
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<img class="img-responsive" src="<?php the_field('logo_6'); ?>">
		</div>
	</div>

	<div class="row news-hero">
		<p class="news-title">News</p>
	
		<?php $posts = get_field('home_page_hero_post');

			foreach ( $posts as $post ) :

			setup_postdata( $post ); ?>

			<!-- If we're using a standard post -->
			<?php if (!get_field('use_image')): ?>

				<?php if(get_field('home_news_img')): ?>
				<div class="news-image col-sm-6 col-md-4">
			   		<a href="<?php the_permalink();?>"><img src="<?php the_field('home_news_img'); ?>" class="img-responsive" alt="Image"></a>
			   	</div>
			   	<?php endif; ?>

			    <div class="news <?php if(!get_field('home_news_img')){ echo 'col-sm-12'; } else { echo 'col-sm-6 col-md-8'; } ?>">
			    	<h3><?php the_title(); ?></h3> 
			    	<?php the_excerpt(); ?>
			   	</div>

			<?php endif; ?>

			<!-- If we're using a large image instead -->
			<?php if (get_field('use_image')): ?>
				<a href="<?php the_permalink();?>">
					<div class="col-sm-12">
			  			<img class="img-responsive large-image" src="<?php the_field('large_image'); ?>">
			   		</div>
			   	</a>
			<?php endif; ?>
		   	
		<?php endforeach; wp_reset_postdata(); ?>
	  
		<a href="/category/news/"><p class="news-more">More News</p></a>
	</div>

	<div class="triangle two"></div>
</div>

<div class="video-wrapper wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 video-info">
				<h1 class="title"><?php the_field('video_headline'); ?></h1>
				<p><?php the_field('video_desc'); ?></p>
				<button type="button" class="btn btn-default">Contact Us</button>
			</div>
			<div class="col-sm-7 inner">
				<div class="embed-responsive embed-responsive-16by9">
  					<iframe class="embed-responsive-item" src="<?php the_field('video_url'); ?>"></iframe>
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


