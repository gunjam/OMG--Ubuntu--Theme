<?php header('HTTP/1.1 404 Not Found');
$uri = strtolower($_SERVER['REQUEST_URI']);
if(strstr($uri,'.')) { die(”); }
get_header(); ?>
		<div id="container">	
			<div id="content">
				
				<div id="post-0" class="post error404 not-found">
					<h1 class="entry-title"><?php _e( 'Not Found', 'omgubuntu' ); ?></h1>
					<div class="entry-content">
						<p><?php _e( 'Apologies, but we were unable to find what you were looking for. Perhaps searching will help.', 'omgubuntu' ); ?></p>
	<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->

			</div><!-- #content -->		
		</div><!-- #container -->
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>
