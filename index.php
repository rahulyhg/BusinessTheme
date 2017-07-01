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

		<div class="container">
			
			<div class="row">
				
				<div class="col-md-6">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero doloremque recusandae distinctio sit dolore quaerat quod, ab ad vitae repudiandae necessitatibus nihil consectetur itaque modi ipsa doloribus delectus ipsam placeat!</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum veritatis excepturi ab voluptatem sed eveniet sequi odit culpa! Delectus, aspernatur, minima. Doloribus nihil accusamus iste, maiores vitae asperiores quos, repellat.</p>

				</div>

				<div class="col-md-6">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero doloremque recusandae distinctio sit dolore quaerat quod, ab ad vitae repudiandae necessitatibus nihil consectetur itaque modi ipsa doloribus delectus ipsam placeat!</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum veritatis excepturi ab voluptatem sed eveniet sequi odit culpa! Delectus, aspernatur, minima. Doloribus nihil accusamus iste, maiores vitae asperiores quos, repellat.</p>

				</div>

			</div>

		</div>

	</body>

</html>