<?php 
/*
Template Name: Home Page Layout
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
				<a href="<?php echo home_url(); ?>/?p=10"></a>
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
				<a href="<?php echo home_url(); ?>/?p=12"></a>
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
				<a href="<?php echo home_url(); ?>/?p=14"></a>
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
				<a href="<?php echo home_url(); ?>/?p=131"></a>
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
				<a href="<?php echo home_url(); ?>/?p=18"></a>
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
				<a href="<?php echo home_url(); ?>/?p=20"></a>
			</div>
		</div>
	</div> <!-- row home hero -->

	<div class="row logo-row">
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<a href="<?php the_field('logo_link_1'); ?>"><img class="img-responsive" src="<?php the_field('logo_1'); ?>"></a>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<a href="<?php the_field('logo_link_2'); ?>"><img class="img-responsive" src="<?php the_field('logo_2'); ?>"></a>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<a href="<?php the_field('logo_link_3'); ?>"><img class="img-responsive" src="<?php the_field('logo_3'); ?>"></a>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<a href="<?php the_field('logo_link_4'); ?>"><img class="img-responsive" src="<?php the_field('logo_4'); ?>"></a>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<a href="<?php the_field('logo_link_5'); ?>"><img class="img-responsive" src="<?php the_field('logo_5'); ?>"></a>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-2 logo">
			<a href="<?php the_field('logo_link_6'); ?>"><img class="img-responsive" src="<?php the_field('logo_6'); ?>"></a>
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
			    	<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>

			    	<?php // Display special excerpt if it exists, else, show the post excerpt.
			    	if(get_field('homepage_hero_excerpt')) { 
			    		the_field('homepage_hero_excerpt');
			    	} else {
			    		the_excerpt(); 
			    	}
			    	?>

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
	  
		<a href=".


		/category/news/"><p class="news-more">More News</p></a>
	</div>

	<div class="triangle two"></div>
</div>

<div class="video-wrapper wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-5 video-info">
				<h1 class="title"><?php the_field('video_headline'); ?></h1>
				<p><?php the_field('video_desc'); ?></p>
				<a href="<?php the_field('video_contact_link'); ?>" type="button" class="btn btn-default">Contact Us</a>
			</div>
			<div class="col-md-7 inner">
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
				<h1><?php the_field('home_contact_heading'); ?></h1>
				<h4><?php echo get_option('phonenumber'); ?></h4>
				<address class="large"><i class="fa fa-map-marker"></i><?php echo get_option('address'); ?></address>
				<address class="large"><i class="fa fa-envelope-o"></i><?php echo get_option('email'); ?></address>
			<div>
		</div>
	</div>
</div>