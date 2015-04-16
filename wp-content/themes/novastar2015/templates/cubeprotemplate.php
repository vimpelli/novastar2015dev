<?php 
/*
Template Name: Cube Pro Page Layout
*/
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="container-fluid
 cubepro">
	<div class="row">
	<video 
	controls 
	id="cubeprovid" 
	class="video-js vjs-default-skin vjs-big-play-centered" 
	width="100%" 
	height="900" 
	poster="http://novastar.dev/wp-content/uploads/cubeproposter.jpg"
	data-setup='{"example_option":true}'>
	>
		<source src="http://novastar.dev/wp-content/uploads/CubePro_05.12.14.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	</div>

<?php get_template_part('templates/page', 'header'); ?>

<?php endwhile; ?>
<?php endif; ?> 