		<?php get_header(); ?>


		<!--******************************************************* Start Content Section *******************************************************-->

		<div class="container">
			
			<div class="row">
				
				<div class="col-md-8">
					
					<?php if ( have_posts() ) : ?>

	  					<?php while(have_posts()): the_post(); ?>
	    
	              			<h1><?php the_title(); ?></h1>
	              
	              			<?php the_content(); ?>
	          
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