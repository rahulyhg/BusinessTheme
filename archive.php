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

			<?php while ( have_posts() ) : the_post(); ?>

				
                
			<?php endwhile; ?>	

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