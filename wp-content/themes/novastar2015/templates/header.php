<header class="navbar navbar-static-top" role="banner">

		<div class="header_flex_child header-left"><?php simplesearchform('header-search'); ?><div class="visible-lg"><p class="phone"><?php echo get_option('phonenumber'); ?></p></div></div>

		<a class="logo-container header_flex_child" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_home_url() . "/wp-content/uploads/logoWH72.png" ?>"/></a>
		
		<nav class="main-nav header_flex_child" role="navigation">
		<?php if (has_nav_menu('primary_navigation')) :
		wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
			endif; ?>
		</nav>

		<div class="triangle one"></div>
		
</header>