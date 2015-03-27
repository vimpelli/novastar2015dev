<!-- Template file for displaying the archive -->

<div class="container">
  <div class="row">
    <div class="col-xs-12 archive-header">
      <h1 class="page-header"><?php echo roots_title(); ?></h1>
    </div>
  </div>
</div>

<div class="container wrapper">
  <div class="row">
    <div class="col-sm-12 col-md-8">

      
    <!-- The posts -->
      <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
          <?php _e('Sorry, no results were found.', 'roots'); ?>
        </div>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', get_post_format()); ?>
      <?php endwhile; ?>

      <?php if ($wp_query->max_num_pages > 1) : ?>
        <nav class="post-nav">
          <ul class="pager">
            <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
            <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
          </ul>
        </nav>
      <?php endif; ?>

    </div>



    <div class="archive-sidebar col-sm-12 col-md-4">
      <?php dynamic_sidebar('primary' ); ?>
    </div>

  </div>
</div>