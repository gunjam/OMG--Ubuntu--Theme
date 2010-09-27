<?php get_header(); ?>
	
		<div id="container">	
			<div id="content">
			
<?php the_post(); ?>			
			
				<h1 class="page-title"><?php _e( 'Category Archives:', 'omgubuntu' ) ?> <span><?php single_cat_title() ?></span></span></h1>
				<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>

<?php rewind_posts(); ?>
			
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="index-nav-above" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( 'Older posts', 'omgubuntu' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts', 'omgubuntu' )) ?></div>
				</div><!-- #nav-below -->
<?php } ?>			

<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="post-inner">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'omgubuntu'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

					<div class="entry-meta">
						<span class="meta-prep meta-prep-author"><?php _e('By ', 'omgubuntu'); ?></span>
						<span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'omgubuntu' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
						<span class="meta-sep"> | </span>
						<span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'omgubuntu'); ?></span>
						<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
						<?php edit_post_link( __( 'Edit', 'omgubuntu' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
					</div><!-- .entry-meta -->
					
						<div class="entry-summary">	
	<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'omgubuntu' )  ); ?>
	<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'omgubuntu' ) . '&after=</div>') ?>
							<div class="read-more"><a href="<?php the_permalink(); ?>">Continue Reading</a></div>
						</div><!-- .entry-summary -->

						<div class="entry-utility">
							<div class="tag-links"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
							<div class="social-stuff">
								<div class="social-stuff-email"><a target="_blank" href="http://www.addthis.com/bookmark.php?pub=weblogsinc&amp;v=250&amp;source=tbx-250&amp;s=email&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">Email</a></div>
								<div class="social-stuff-facebook"><a target="_blank" href="http://www.addthis.com/bookmark.php?pub=weblogsinc&amp;v=250&amp;source=tbx-250&amp;s=facebook&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">Facebook</a></div>
								<div class="social-stuff-stumble"><a target="_blank" href="http://www.addthis.com/bookmark.php?pub=weblogsinc&amp;v=250&amp;source=tbx-250&amp;s=stumbleupon&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">Stumble Upon</a></div>
								<div class="social-stuff-digg"><a target="_blank" href="http://www.addthis.com/bookmark.php?pub=weblogsinc&amp;v=250&amp;source=tbx-250&amp;s=digg&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">Digg</a></div>
								<div class="social-stuff-twitter"><a target="_blank" href="http://www.addthis.com/bookmark.php?pub=weblogsinc&amp;v=250&amp;source=tbx-250&amp;s=twitter&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">Twitter</a></div>
							</div>
							<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'omgubuntu' ), __( '1 Comment', 'omgubuntu' ), __( '% Comments', 'omgubuntu' ) ) ?></span>
						</div><!-- #entry-utility -->
					</div>
					<div class="left-block">
						<div class="cat-links"><?php foreach( get_the_category() as $cat ) echo '<a rel="category" class="cat-' . $cat->slug . '" title="View all posts in ' . $cat->name . '" href="' . get_category_link($cat->term_id) . '">' . $cat->name . '</a>'; ?></div>
						<!-- <div class="share-links"><a href="#">Share</a></div> -->
					</div>
				</div><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>			

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="index-nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( 'Older posts', 'omgubuntu' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts', 'omgubuntu' )) ?></div>
				</div><!-- #nav-below -->
<?php } ?>			
			
			</div><!-- #content -->		
		</div><!-- #container -->
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>