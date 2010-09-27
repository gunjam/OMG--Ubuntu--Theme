	</div><!-- #main -->
	
	<div id="footer">
		<div id="colophon">
		
			<div id="site-info">
				<?php wp_nav_menu( array('menu' => 'Footer Menu 1' )); ?>
				<?php wp_nav_menu( array('menu' => 'Footer Menu 2' )); ?>	
				<div id="omg-ubuntu">
					<p><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></p>
					<p><?php bloginfo( 'description' ) ?></p>
				</div>
				<div id="copyright">
					<p>&copy; 2010 <a href="http://ohso.co">Ohso Ltd</a>. All rights reserved.</p>
					<p><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a> is a member of the Ohso Ltd Network.</p>
					<p><a href="http://www.ubuntu.com">Ubuntu</a> is a registered trademark of <a href="http://www.canonical.com">Canonical Ltd.</a></p>
				</div>
			</div><!-- #site-info -->
			
		</div><!-- #colophon -->
	</div><!-- #footer -->
	
</div><!-- #wrapper -->	
<?php if ( is_single() ) { ?>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript">
	(function() {
	var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
	s.type = 'text/javascript';
	s.async = true;
	s.src = 'http://widgets.digg.com/buttons.js';
	s1.parentNode.insertBefore(s, s1);
	})();
</script>
<?php } ?>
<?php wp_footer(); ?>

</body>
</html>
