<?php 
/*
Template Name: HP Page Layout
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('templates/page', 'header'); ?>

<!-- <div class="container hppage">
	<div class="row section">
		<div class="col-sm-12">
			<div class="page-header"><h2>Novastar - One of the Largest Volume Resellers of HP Workstations</h2></div>
		</div>
	</div>
</div> -->



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
			<img class="img partner img-responsive"src="http://novastar.dev/wp-content/uploads/HP_Gold_Partner_Insignia.png">
			<?php the_content();?>
		</div>
	</div>

</div>

<div class="hppage-wrapper">
	<div class="container hppage">
		<div class="row hpproducts">
			<div class="col-sm-12 title">
				<h1 class="title">Novastar HP Product Line</h1>
			</div>
			<div class="col-sm-6 col-lg-3 hpproduct">
				<figure style="background-image:url(http://novastar.dev/wp-content/uploads/workstation.jpg);">
					<p class="lead">HP Workstations, Desktops, Laptops, Notebooks<span class="sub">For all your computing needs.</span></p>
					<a class="btn btn-info" href="#">Learn More</a>
				</figure>
			</div>
			<div class="col-sm-6 col-lg-3 hpproduct">
				<figure style="background-image:url(http://novastar.dev/wp-content/uploads/hpstorage.jpg);">
					<p class="lead">HP Servers, Storage & Networking<span class="sub">A network you can be proud of.</span></p>
					<a class="btn btn-info" href="#">Learn More</a>
				</figure>
			</div>
			<div class="col-sm-6 col-lg-3 hpproduct">
				<figure style="background-image:url(http://novastar.dev/wp-content/uploads/hpprinter.jpg);">
					<p class="lead">HP Printers<span class="sub">A printer you can be proud of.</span></p>
					<a class="btn btn-info" href="#">Learn More</a>
				</figure>
			</div>
			<div class="col-sm-6 col-lg-3 hpproduct">
				<figure style="background-image:url(http://novastar.dev/wp-content/uploads/workstation.jpg);">
					<p class="lead">HP Mobility<span class="sub">Products for mobility in the workplace.</span></p>
					<a class="btn btn-info" href="#">Learn More</a>
				</figure>
			</div>
		</div>
	</div>
</div>
	
<div class="container hppage">
	<div class="row section">
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
	<div class="row section">
		<div class="col-sm-12">
			<?php parentbutton(); ?>
		</div><!-- parent page button -->
	</div>
</div>


<?php endwhile; ?>
<?php endif; ?> 