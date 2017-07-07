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

		<img class="hero fluid" src="<?php echo get_template_directory_uri();?>/assets/images/home_hero.jpg" alt="Hero Image">

		<div class="headerWrapper">

			<div class="container">
				
				<div class="row">

					<header>
					
						<div class="col-sm-3">
							
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="MyNotes Logo" width="45px" height="45px">

						</div>

						<div class="col-sm-9">
								
							<nav class="headerNav">

								<ul>

									<li><a href="">Home</a></li>
									<li><a href="">About</a></li>
									<li><a href="">Products</a></li>
									<li><a href="">Services</a></li>
									<li><a href="">Contact</a></li>
								
								</ul>

							</nav>

						</div>

					</header>

				</div>

			</div>

		</div>

	</body>

</html>