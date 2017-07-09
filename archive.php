<?php 
	/*
	Template Name: Archives
	*/

	get_header(); 
?>

<!--******************************************************* Start Content Section *******************************************************-->

<div class="container">
	
	<div class="row">
		
		<div class="col-md-8">
			
			<?php the_post(); ?>          

				<?php if ( is_day() ) : ?>
				                <h1 class="page-title"><?php printf( __( 'Daily Archives: <span>%s</span>', 'hbd-theme' ), get_the_time(get_option('date_format')) ) ?></h1>
				<?php elseif ( is_month() ) : ?>
				                <h1 class="page-title"><?php printf( __( 'Monthly Archives: <span>%s</span>', 'hbd-theme' ), get_the_time('F Y') ) ?></h1>
				<?php elseif ( is_year() ) : ?>
				                <h1 class="page-title"><?php printf( __( 'Yearly Archives: <span>%s</span>', 'hbd-theme' ), get_the_time('Y') ) ?></h1>
				<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
				                <h1 class="page-title"><?php _e( 'Blog Archives', 'hbd-theme' ) ?></h1>
				<?php endif; ?>

				<?php rewind_posts(); ?>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                <div id="nav-above" class="navigation extraContent">
				                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?></div>
				                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?></div>
				                </div><!-- #nav-above -->
				<?php } ?>            

				<?php while ( have_posts() ) : the_post(); ?>

				                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

				                    <div class="entry-meta">
				                        <span class="meta-prep meta-prep-author"><?php _e('By ', 'hbd-theme'); ?></span>
				                        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'hbd-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
				                        <span class="meta-sep"> | </span>
				                        <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'hbd-theme'); ?></span>
				                        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
				                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
				                    </div><!-- .entry-meta -->

				                    <div class="entry-summary">
				<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
				                    </div><!-- .entry-summary -->

				                    <div class="entry-utility">
				                        <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'hbd-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
				                        <span class="meta-sep"> | </span>
				                        <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'hbd-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
				                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'hbd-theme' ), __( '1 Comment', 'hbd-theme' ), __( '% Comments', 'hbd-theme' ) ) ?></span>
				                        <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
				                    </div><!-- #entry-utility -->
				                </div><!-- #post-<?php the_ID(); ?> -->

				<?php endwhile; ?>            

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                <div id="nav-below" class="navigation optional">
				                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?></div>
				                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?></div>
				                </div><!-- #nav-below -->
			<?php } ?>

		</div>


		<!--******************************************************* Start Sidebar Section *******************************************************-->

		<div class="col-md-4">
			
			<div class="sidebarWrapper">
					
				<h2 class="sidebarTitle">Location</h2>

				<div class="sidebarBody">
					
					<p>2442 W Madison St, Chicago, IL, 60612, USA</p>

				</div>

			</div>

			<div class="sidebarWrapper">
					
				<h2 class="sidebarTitle">Opening Hours</h2>

				<div class="sidebarBody">
					
					<ul>
						<li>Monday: 9am - 5pm</li>
						<li>Tuesday: 9am - 5pm</li>
						<li>Wednesday: 9am - 5pm</li>
						<li>Thursday: 9am - 5pm</li>
						<li>Friday: 9am - 5pm</li>
						<li>Saturday: 11am - 5pm</li>
						<li>Sunday: 11am - 5pm</li>
					</ul>

				</div>

			</div>

			<div class="sidebarWrapper">
					
				<h2 class="sidebarTitle">Contact Us</h2>

				<div class="sidebarBody">
					
					<ul>
						<li>Phone</li>
						<li><a href="tel:+1 312-344-3759">+1 312-344-3759</a></li>
					</ul>

					<ul>
						<li>Email</li>
						<li><a href="mailto:user@company.com">user@company.com</a></li>
					</ul>

				</div>

			</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>