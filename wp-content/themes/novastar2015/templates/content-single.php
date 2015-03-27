<!-- Template for an individual post -->

<div class="container wrapper single-post">
  <div class="row">
    <div class="col-sm-12">

      <?php while (have_posts()) : the_post(); ?>

            <?php if(get_the_post_thumbnail()) {
              echo '<div class="post-header-image">';
              echo  the_post_thumbnail('full' ); 
              echo '</div>'; } ?>

          <header>
            <?php the_breadcrumb(); ?>
            <h1 class="entry-title page-header"><?php the_title(); ?><small><time class="updated" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time></small></h1>          
          </header>
    </div>
    <div class="col-lg-8">
      <article <?php post_class(); ?>>

        <div class="entry-content">
          <?php the_content(); ?>
        </div>

      </article>
    </div>

    <div class="col-lg-4">
      <aside class="single-sidebar">
        <?php dynamic_sidebar('Single Post Sidebar' ); ?>
      </aside>
    </div>
    <div class="col-sm-12">
      <aside class="post-bottom-actions">

        <?php $category = get_the_category(); ?>

        <div class="col-sm-6 back">
          <a href="<?php echo get_category_link($category[0]); ?>" type="button" class="btn btn-block btn-default">Back to <?php echo $category[0]->cat_name; ?></a>
        </div>

        <div class="col-sm-6 subscribe">
          <input type="email" name="" id="input" class="form-control" value="YOUR EMAIL ADDRESS HERE" required="required" title="">
          <a href="<?php echo get_category_link($category[0]); ?>" type="button" class="btn btn-default">SUBSCRIBE</a>
        </div>
      </aside>
    </div>
      <?php endwhile; ?>

    </div>
  </div>
</div>