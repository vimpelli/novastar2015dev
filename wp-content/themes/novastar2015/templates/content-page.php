<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>


<?php /*==========  GET PARENT PAGE BUTTON  ==========*/

	/* get id of current page */
	$pageid = get_the_id();

	/* get id of parent page */
	$parent = get_post_ancestors( $post->ID );

	$id = ($parent) ? $parent[count($parent)-1]: $post->ID;

	/* set variable for link to parent page */
	$permalink = get_permalink($id);

	/* set variable for title of parent page */
	$title = get_the_title($id);

	/* if the two id variables are not equal, display button to parent page */
	if ($id != $pageid) {

		$parentbutton = '<br><a type="button" class="btn btn-default btn-block btn-md" href="' .$permalink. '">Back to ' .$title. '</a>';

	} 
?>

<div class="container wrapper top">
	<div class="row section">
		<div class="col-sm-12 col-md-7">
			<?php the_content(); 

			?>
		</div>

		<div class="col-sm-12 col-md-5">
			<?php if(get_the_post_thumbnail()): ?>
				<br><img src="<?php echo "$feat_image"; ?>" class="img-responsive img-rounded" alt="Image"><br>
			<?php endif; ?>
		</div>

		<!-- <div class="col-sm-2">
			<?php dynamic_sidebar('page-sidebar'); ?>
		</div> -->

		<div class="col-sm-12">
			<?php echo $parentbutton; ?>
		</div>  <!-- parent page button -->

	</div> <!-- row section -->
</div> <!-- container wrapper -->




