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

				</div>


				<!--******************************************************* Start Sidebar Section *******************************************************-->

				<div class="col-md-4">
					
					<?php get_sidebar(); ?>

				</div>

			</div>

		</div>

		<?php get_footer(); ?>