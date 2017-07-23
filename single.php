		<?php get_header(); ?>


		<!--******************************************************* Start Content Section *******************************************************-->

		<div class="container">
			
			<div class="row">
				
				<div class="col-md-8">
					
					<?php if ( have_posts() ) : ?>

	  					<?php while(have_posts()): the_post(); ?>
	    
	              			<h1><?php the_title(); ?></h1>
	              
	              			<div class="content">
	              				
								<?php the_content(); ?>

	              			</div>
	          
	           			<?php endwhile; ?>
  
          			<?php endif; ?>

          			<div class="entry-meta authorExtra">
	                    <span class="meta-prep meta-prep-author">POSTED BY: </span>
	                    
	                    <span class="author vcard"><a class="capitalise url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'hbd-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>

	                    <br>
	                    <span class="meta-prep meta-prep-entry-date"> </span>
	                    <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>

	                </div>

	                <?php comments_template('comments.php', true); ?>

				</div>


				<!--******************************************************* Start Sidebar Section *******************************************************-->

				<div class="col-md-4">
					
					<?php get_sidebar(); ?>

				</div>

			</div>

		</div>

		<?php get_footer(); ?>