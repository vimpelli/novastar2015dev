<!-- One post on an archive page -->

<div class="col-sm-12 the-post">
	<a href="<?php the_permalink(); ?>" class="permalink" ></a>

	<?php if (get_the_post_thumbnail()): ?>
		<div class="featured-image"><?php echo the_post_thumbnail('full'); ?></div>
	<?php endif; ?>

	<article <?php post_class(); ?>>
		<header>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><small><time class="updated" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time></small></h2>
			<?php echo the_category(); ?>
		</header>
		<div class="entry-summary">
		    <?php the_excerpt(); ?>
		</div>
	</article>

</div>
