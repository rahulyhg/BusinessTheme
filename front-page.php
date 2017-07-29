		<?php get_header(); ?>


		<!--******************************************************* Start Content Section *******************************************************-->
				
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-5">
						
					<h1 class="homeH1">Company Name</h1>
					<h2 class="welcome">Welcome</h2>

				</div>

				<div class="col-md-7">
					
					<?php if ( have_posts() ) : ?>

	  					<?php while(have_posts()): the_post(); ?>
	    	              
	              			<?php the_content(); ?>
	          
	           			<?php endwhile; ?>
  
          			<?php endif; ?>

				</div>

			</div>

		</div>


		<!--******************************************************* Start Tiles Section *******************************************************-->

		<div class="tileWrapper">

			<div class="container">
				
				<div class="row">
					
					<div class="col-md-4">

						<div class="view">

							<img src="<?php echo get_template_directory_uri();?>/assets/images/tile_1.jpg" alt="Product 1">

							<div class="mask">
								
								<h2>Product One</h2>
				        		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptatum ex, dolore.</p>
				        		<a class="info" href="#">Learn More</a>

							</div>			        		
				        				      	
				      	</div>

					</div>

					<div class="col-md-4">

						<div class="view">

							<img src="<?php echo get_template_directory_uri();?>/assets/images/tile_2.jpg" alt="Product 1">

							<div class="mask">
								
								<h2>Product One</h2>
				        		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptatum ex, dolore.</p>
				        		<a class="info" href="#">Learn More</a>

							</div>			        		
				        				      	
				      	</div>
					
					</div>

					<div class="col-md-4">

						<div class="view">

							<img src="<?php echo get_template_directory_uri();?>/assets/images/tile_3.jpg" alt="Product 1">

							<div class="mask">
								
								<h2>Product One</h2>
				        		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptatum ex, dolore.</p>
				        		<a class="info" href="#">Learn More</a>

							</div>			        		
				        				      	
				      	</div>

					</div>

				</div>

			</div>

		</div>


		<!--******************************************************* Start Services Section *******************************************************-->

		<div class="container">
				
			<div class="row">
				
				<div class="col-md-12 services">
					
					<h1>Our Services</h1>

				</div>

			</div>

			<div class="row">
				
				<div class="col-md-4 service">
					
					<img src="<?php echo get_template_directory_uri();?>/assets/images/service_1.jpg" alt="Service One">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid saepe nesciunt est nemo, provident dolorem aperiam a molestiae magni nulla maxime porro, esse, ducimus, ipsum dolores repellat itaque iusto vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam velit iusto explicabo facilis, ea, itaque autem rem cum quam aliquid voluptate alias quibusdam doloribus vitae amet, eaque aliquam consequatur eius.</p>

				</div>

				<div class="col-md-4 service">
					
					<img src="<?php echo get_template_directory_uri();?>/assets/images/service_2.jpg" alt="Service Two">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid saepe nesciunt est nemo, provident dolorem aperiam a molestiae magni nulla maxime porro, esse, ducimus, ipsum dolores repellat itaque iusto vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam velit iusto explicabo facilis, ea, itaque autem rem cum quam aliquid voluptate alias quibusdam doloribus vitae amet, eaque aliquam consequatur eius.</p>

				</div>

				<div class="col-md-4 service">
					
					<img src="<?php echo get_template_directory_uri();?>/assets/images/service_3.jpg" alt="Service Three">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid saepe nesciunt est nemo, provident dolorem aperiam a molestiae magni nulla maxime porro, esse, ducimus, ipsum dolores repellat itaque iusto vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam velit iusto explicabo facilis, ea, itaque autem rem cum quam aliquid voluptate alias quibusdam doloribus vitae amet, eaque aliquam consequatur eius.</p>

				</div>

			</div>

		</div>



		<!--******************************************************* Start Services Section *******************************************************-->

		<div class="map-wrap">
        
        	<div class="overlay" onClick="style.pointerEvents='none'"></div>

			<iframe width="100%" height="450px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJcdtXHpqvD4gR4pTkJQDGZHU&key=AIzaSyB0MY76SOV79MCuyV1SGLLsHghkvRvJPIQ" allowfullscreen></iframe>

		</div>



		<?php get_footer(); ?>