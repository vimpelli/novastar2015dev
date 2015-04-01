<?php get_template_part('templates/page', 'headerhero'); ?>
<div class="container wrapper-top new-hardware">
	<div class="row section divider">
		<div class="col-sm-12">
			<h2><?php the_field('intro_heading'); ?></h2>
			<p><?php the_field('intro_body'); ?></p>
		</div>
	</div>
	<ul class="row products-listing section">
		<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<article>
				<div class="img-container">
					<img class="img img-responsive" src="<?php the_field('product_1_image'); ?>">
				</div>
				<p class="product-title"><?php the_field('product_1_title'); ?></p>
				<p class="product-description"><?php the_field('product_1_desc'); ?></p>
				<?php if(get_field('product_1_link')): ?>
					<a href="<?php the_field('product_1_link'); ?>"type=button class="btn btn-success btn-block">Learn More</a>
				<?php endif; ?>
			</article>
		</li>
		<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<article>
				<div class="img-container">
					<img class="img img-responsive" src="<?php the_field('product_2_image'); ?>">
				</div>
				<p class="product-title"><?php the_field('product_2_title'); ?></p>
				<p class="product-description"><?php the_field('product_2_desc'); ?></p>
				<?php if(get_field('product_2_link')): ?>
					<a href="<?php the_field('product_2_link'); ?>"type=button class="btn btn-success btn-block">Learn More</a>
				<?php endif; ?>
			</article>
		</li>
		<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<article>
				<div class="img-container">
					<img class="img img-responsive" src="<?php the_field('product_3_image'); ?>">
				</div>
				<p class="product-title"><?php the_field('product_3_title'); ?></p>
				<p class="product-description"><?php the_field('product_3_desc'); ?></p>
				<?php if(get_field('product_3_link')): ?>
					<a href="<?php the_field('product_3_link'); ?>"type=button class="btn btn-success btn-block">Learn More</a>
				<?php endif; ?>
			</article>
		</li>
		<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<article>
				<div class="img-container">
					<img class="img img-responsive" src="<?php the_field('product_4_image'); ?>">
				</div>
				<p class="product-title"><?php the_field('product_4_title'); ?></p>
				<p class="product-description"><?php the_field('product_4_desc'); ?></p>
				<?php if(get_field('product_4_link')): ?>
					<a href="<?php the_field('product_4_link'); ?>"type=button class="btn btn-success btn-block">Learn More</a>
				<?php endif; ?>
			</article>
		</li>
	</ul>
</div>
