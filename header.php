<!DOCTYPE html>

<html class="no-js" lang="en">

	<head>

		<meta charset="UTF-8">

		<!-- Defines the page's title and will appear in the toolbar of the web browser -->
	    <title><?php wp_title(); ?></title>
	    
	    <!-- Sets the Mobile viewport size, this is telling the viewport width to equal the device's width, more info here http://tinyurl.com.au/37qg -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	    <!-- This is a speical Wordpress function which injects all the necessary CSS, JavaScript and plugin files into the head of your document -->
	    <?php wp_head(); ?>

	</head>
	
	<body>

		<!--******************************************************* Start Header Section *******************************************************-->

		<div class="headerWrapper">

			<div class="container">

				<div class="row">

					<header>
					
						<div class="col-md-3">

							<a href="#"><img class="burgerButton" src="<?php echo get_template_directory_uri();?>/assets/images/burgerButton.png" alt="MyNotes Logo" width="45px" height="45px"></a>
							
							<a href="#"><img class="logo" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="MyNotes Logo" width="45px" height="45px"></a>

							<a href="#"><img class="searchMenu" src="<?php echo get_template_directory_uri();?>/assets/images/search.png" alt="Search My Business"></a>


						</div>

						<div class="col-md-9">
								
							<nav class="headerNav">

								<?php wp_nav_menu( array( 'theme_location' => 'header-main' ) ); ?>

								<a href="#"><img class="searchIcon" src="<?php echo get_template_directory_uri();?>/assets/images/search.png" alt="Search My Business"></a>

							</nav>

						</div>

					</header>
	
					<div class="searchWrapper">
						
						<?php get_search_form(); ?>

					</div>

				</div>

			</div>

		</div>


		<div class="hero" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/home_hero.jpg)"></div>
