<?php if ( is_sidebar_active('primary-widget-area') ) : ?>
		<div id="primary" class="widget-area">
			<ul class="xoxo">
				<?php dynamic_sidebar('primary-widget-area'); ?>
			</ul>
		</div><!-- #primary .widget-area -->
<?php endif; ?>		
		
<?php if ( is_sidebar_active('secondary-widget-area') ) : ?>
		<div id="secondary" class="widget-area">
			<ul class="xoxo">
				<?php dynamic_sidebar('secondary-widget-area'); ?>			  
			</ul>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>		
