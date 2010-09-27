<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }       
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
	
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<!--<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css'>-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>?e" />
	<link rel="icon" type="image/x-icon" href="/wp-content/themes/omgubuntu/favicon.ico" />
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_enqueue_script("jquery"); ?>
	<?php if ( is_single() ) {   
		wp_register_script('share_bar', get_bloginfo('template_directory') . '/js/share_bar.js');
	   	wp_enqueue_script('share_bar');
	 } ?>
	<?php wp_head(); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/d0od" title="<?php printf( __( '%s latest posts', 'omgubuntu' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
</head>
<?php flush(); ?>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	
	<div id="header">
		<div id="masthead">
		
			<div id="branding">
				<?php $title = explode(" ", get_bloginfo( 'name' ) ); ?>
				<div id="blog-title"><a href="<?php bloginfo( 'url' ) ?>/" title="You should click here to go back home" rel="home"><span id="o"><?php echo $title[0]; ?></span><span id="u"><?php echo $title[1]; ?></span></a></div>
<?php if ( is_home() || is_front_page() ) { ?>
		    		<h1 id="blog-description"><?php bloginfo( 'description' ) ?></h1>
<?php } else { ?>	
		    		<div id="blog-description"><?php bloginfo( 'description' ) ?></div>
<?php } ?>
			</div><!-- #branding --> 
			
			<div id="access">
				<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'omgubuntu' ) ?>"><?php _e( 'Skip to content', 'omgubuntu' ) ?></a></div>
				<?php #wp_page_menu( 'sort_column=menu_order' ); ?>
				<?php wp_nav_menu( array('menu' => 'Primary Menu' )); ?>
				<?php the_widget('WP_Widget_Search'); ?>
				<?php wp_nav_menu( array('menu' => 'Secondary Menu' )); ?>	
			</div><!-- #access -->
			
		</div><!-- #masthead -->
	</div><!-- #header -->
	
	<div id="main">
<?php if ( is_sidebar_active('upper-widget-area') ) : ?>
		<div id="upper" class="widget-area">
			<ul class="xoxo">
				<?php dynamic_sidebar('upper-widget-area'); ?>			  
			</ul>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>