<?php if (!is_front_page()): ?>
<div class="container-fluid">
	<div class="row footer-menu">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar('footer' ); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="wrapper space-top pre-footer">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar('Pre Footer' ); ?>
		</div>
	</div>
</div>
<footer class="content-info" role="contentinfo">
    <p class="copyright">© 2015 NovaStar Solutions. All rights reserved.<a class="pixelvine-link" href="http://www.pixelvinecreative.com" target=_blank><img style="margin-left:10px;" src="<?php echo get_bloginfo('template_directory') . "/assets/img/leaf.png"; ?>"></a></p>
</footer>