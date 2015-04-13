<?php 
/*
Template Name: HP Page Layout
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="container wrapper top">

	<div class="row section">
		<div class="col-sm-12">
			<div class="page-header"><h3>Novastar - One of the Largest Volume Value-Added Resellers of HP Workstations in the US</h3></div><!-- /.page-header -->
		</div>
		
		<div class="col-sm-8">
			<?php the_content();?>
		</div>
		<div class="col-sm-4">
			<img class="img-responsive img-rounded visible-lg" src="http://novastar.dev/wp-content/uploads/hphd.jpg">
		</div><!-- /.col-sm-4 -->
	</div>

	<div class="row section">
		<div class="col-sm-6 col-lg-3 hpproduct">
			<figure style="background-image:url(http://novastar.dev/wp-content/uploads/workstation.jpg);">
				<p class="lead">Workstations, Desktops, Servers, Storage & Networking, Laptops, Notebooks</p>
				<a class="btn btn-info" href="#">Learn More</a>
			</figure>
		</div>
		<div class="col-sm-6 col-lg-3 hpproduct">
			<figure style="background-image:url(http://novastar.dev/wp-content/uploads/hpstorage.jpg);">
				<p class="lead">HP Servers, Storage & Networking</p>
				<a class="btn btn-info" href="#">Learn More</a>
			</figure>
		</div>
		<div class="col-sm-6 col-lg-3 hpproduct">
			<figure style="background-image:url(http://novastar.dev/wp-content/uploads/hpprinter.jpg);">
				<p class="lead">HP Printers	</p>
				<a class="btn btn-info" href="#">Learn More</a>
			</figure>
		</div>
		<div class="col-sm-6 col-lg-3 hpproduct">
			<figure style="background-image:url(http://novastar.dev/wp-content/uploads/workstation.jpg);">
				<p class="lead">HP Mobility</p>
				<a class="btn btn-info" href="#">Learn More</a>
			</figure>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<?php parentbutton(); ?>
		</div><!-- parent page button -->
	</div>

	</div><!-- row section -->
</div><!-- container wrapper -->


<?php endwhile; ?>
<?php endif; ?> 