<div class="container">
	<div class="row section">
		<div class="col-sm-12">
			<div class="alert alert-warning">
				<h1>404 Page Not Found</h1>
			  <p class="lead"><?php _e('It looks like the page you were trying to view does not exist.', 'roots'); ?></p>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="well">
				<h4>You can try searching...</h4>
					<?php get_search_form(); ?>
	
				<h4>...contact us...</h4>
				<a href="/contact" class="btn btn-info btn-md btn-block">Contact</a>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="well">
				<h4>...or browse all the pages.</h4>
				<?php wp_list_pages(); ?> 
			</div>
		</div>

	</div>
</div>

