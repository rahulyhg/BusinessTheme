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

								<ul>

									<li><a href="">Home</a></li>
									<li><a href="">About</a></li>
									<li><a href="">Products</a></li>
									<li><a href="">Services</a></li>
									<li><a href="">Contact</a></li>
								
								</ul>

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



		<!--******************************************************* Start Content Section *******************************************************-->

		<div class="container">
			
			<div class="row">
				
				<div class="col-md-8">
					
					<h1 class="pageTitle">Page Title</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur placerat nisl nec volutpat. Mauris dictum ligula at libero vestibulum hendrerit. Vestibulum lobortis magna eget arcu iaculis sodales. Donec blandit suscipit tempor. Vivamus aliquet arcu vitae nisl pharetra condimentum. Cras viverra libero odio, sit amet hendrerit diam venenatis sed. In cursus laoreet mi vel molestie. Nulla quis pharetra elit, a scelerisque eros.</p>

					<p>Vivamus in lacus a est aliquet facilisis vitae et lectus. Pellentesque eget elit sed libero consequat tempus a vitae lorem. Proin lacus leo, pellentesque vitae felis vel, vehicula fermentum augue. Sed auctor neque a diam egestas, nec tempor justo scelerisque. Praesent lobortis eros elit. Nunc consequat aliquam magna at dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc sollicitudin molestie purus. Pellentesque dictum felis et mi ornare euismod. Mauris eros lorem, tincidunt et placerat non, egestas quis lectus.</p>

					<p>Praesent a leo aliquam, viverra orci sit amet, elementum ante. Vestibulum ultrices vulputate sollicitudin. Nunc libero elit, imperdiet at felis sed, sagittis pretium risus. Aliquam non efficitur ipsum, vitae vulputate nisi. Quisque vel dignissim lorem. Suspendisse laoreet, nulla at imperdiet laoreet, arcu justo consequat ligula, non fringilla nulla ex nec turpis. Vivamus ut dui vitae diam venenatis ornare blandit non nisl. Sed gravida commodo arcu, non mattis sapien sagittis sed. Proin dignissim bibendum justo quis venenatis. Sed a magna in nisi pellentesque finibus. Nam fermentum fringilla est, ac varius erat. Mauris vestibulum, diam id semper faucibus, dui lacus consequat metus, vitae tempor enim purus at velit. Phasellus et nisi varius, hendrerit neque id, imperdiet tortor. Quisque eu dictum ipsum, nec tempus magna. Mauris dictum aliquam libero, nec ultrices enim.</p>

					<p>Donec bibendum diam ipsum, non tempus nisl iaculis a. Morbi bibendum ac risus id rutrum. Vivamus a bibendum justo. Cras tristique metus ac dui mollis elementum. Nunc sit amet enim id lacus semper accumsan eget at ante. Nullam ornare, ipsum ut interdum molestie, dui risus bibendum eros, eu convallis risus turpis eu dolor. Ut ut magna et ante condimentum blandit at sed magna. Nulla rhoncus, arcu vitae aliquet sagittis, libero urna finibus mauris, ac varius quam enim a sapien. Morbi non euismod ex, ut consectetur nibh. Cras ut lectus venenatis, fringilla urna non, dictum ipsum. Mauris malesuada ultrices sem a varius. In at massa vehicula, malesuada erat ullamcorper, porttitor nisi.</p>

					<p>Morbi leo lectus, malesuada a urna nec, interdum pulvinar tellus. Aenean eu libero ac nisl volutpat iaculis sed a ligula. Morbi molestie hendrerit quam, nec blandit nisl consequat eget. Maecenas mattis risus nec est condimentum, non aliquet massa rutrum. Nulla porta lectus sed mi gravida volutpat. Integer at interdum lectus. Proin sed leo metus. Vestibulum sollicitudin nulla at justo convallis congue. Nam eget ante nisi.</p> 

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


		<!--******************************************************* Start Footer Section *******************************************************-->
		
		<div class="footerWrapper">

			<footer class="footer">

				<div class="container">
					
					<div class="row">
						
						<div class="col-md-3">

							<nav class="footerNav">
							
								<ul>

									<li><a href="#">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Contact</a></li>

								</ul>

							</nav>

						</div>

						<div class="col-md-3">

							<nav class="footerNav">
								
								<ul>

									<li><a href="#">Products</a></li>
									<li><a href="#">Services</a></li>
									
								</ul>

							</nav>

						</div>

						<div class="col-md-3">

							<nav class="footerNav">
							
								<ul>

									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Disclaimer</a></li>
									<li><a href="#">Site Map</a></li>
									
								</ul>

							</nav>

						</div>

						<div class="col-md-3">

							<div class="socialMedia">
							
								<ul>

									<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" alt="Business on Facebook"></a></li>
									<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" alt="Business on Twitter"></a></li>
									<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png" alt="Business on Youtube"></a></li>

								</ul>

							</div>

						</div>

					</div>

					<div class="row">
						
						<div class="col-md-12 copyright">
							
							<p>Copyright © 2017 Business Theme | All Rights Reserved | <a href="mailto:user@company.com">Webmaster</a></p>

						</div>

					</div>

				</div>

			</footer>

		</div>

	</body>

</html>