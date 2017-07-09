

		<!--******************************************************* Start Footer Section *******************************************************-->

		<div class="footerWrapper">

			<footer class="footer">

				<div class="container">
					
					<div class="row">
						
						<div class="col-md-3">

							<nav class="footerNav">
							
								<?php wp_nav_menu( array( 'theme_location' => 'footer-first' ) ); ?>

							</nav>

						</div>

						<div class="col-md-3">

							<nav class="footerNav">
								
								<?php wp_nav_menu( array( 'theme_location' => 'footer-second' ) ); ?>

							</nav>

						</div>

						<div class="col-md-3">

							<nav class="footerNav">
							
								<?php wp_nav_menu( array( 'theme_location' => 'footer-third' ) ); ?>

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