		<?php get_header(); ?>


		<!--******************************************************* Start Content Section *******************************************************-->

		<div class="container">
			
			<div class="row">
				
				<div class="col-md-8">
					
					<?php if ( have_posts() ) : ?>

						<?php
							global $wp_query;
							$total_results = $wp_query->post_count;
						?>

						<p>Showing <?php echo $total_results; ?> results for "<?php echo get_search_query(); ?>"</p>

	  					<?php while(have_posts()): the_post(); ?>
	    
	              			<?php get_template_part("content", "search"); ?>

          				<?php endwhile; else : ?>

							<p><?php echo 'Sorry, no posts matched your criteria. Try searching again'; ?></p>

							<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	
								<input type="search" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="Search" />

							</form>

					<?php endif; ?>

				</div>


				<!--******************************************************* Start Sidebar Section *******************************************************-->

				<div class="col-md-4">
					
					<?php get_sidebar(); ?>

				</div>

			</div>

		</div>

		<?php get_footer(); ?>