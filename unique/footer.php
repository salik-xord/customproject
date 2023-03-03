<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Unique
 */

?>

<footer class="site-footer">
	<section class="footer-set">
		<div class="upper-footer">
			<div class="futer-div futer-left">
				<div class="footer-img"><a href="#"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/img/site-logo.png" alt="">
					</a></div>

				<p class="site-bio">


					A web3 design agency that seamlessly transitions users into the web3 ecosystem by providing them with an exceptional experience.
				</p>

				<h6>Join Our Web3 Design Newsletter</h6>
				<div class="email-form">
					<?php echo do_shortcode("[contact-form-7 id=10437]"); ?>
				</div>

				<div class="site-reach">

					<div class="sitemap-head">

						<a href="#">Sitemap</a>

					</div>
					<div class="reach-head">
						<p>Reach out:<span> <a href="#">hey@expeditedesign.com</a> </span></p>
					</div>
				</div>

			</div>
			<div class="futer-div futer-right ">
<div class="futer-list">
				<div class="futerpart ">

					<div class="futer-menuz">
						<P class="futer-menuz-head">Company</P>
						<?php wp_nav_menu(array('theme_location' => 'company-footer')); ?>
					</div>
					</div>

					<div class="futerpart ">
					<div class="futer-menuz">
						<P class="futer-menuz-head">Services</P>
						<?php wp_nav_menu(array('theme_location' => 'services-menu')); ?>
					</div>
					</div>

						<div class="futerpart ">
							<div class="futer-menuz">
							<P class="futer-menuz-head">Resources</P>
						<?php wp_nav_menu(array('theme_location' => 'resource-footer')); ?>
							</div>
						</div>
						</div>
					</div>

				</div>


			</div>


		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/footer-img.png" alt="sep-footer" class="sep-footer">
			<div class="bottom-canvas">

				<div class="comp-xord">

					<p>Company by</p>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/compxord.png" alt="xord"></a>

				</div>

				<div class="copyright-text">
					<p>All rights reserved. Copyright <?php echo date("Y"); ?></p>
				</div>
				<div class="social-icons">
					<a href="https://www.twitter.com/expeditedesign" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="https://discord.com/invite/xc9QCxv7jJ/" target="_blank"><i class="fa fa-discord"></i></a>
					<a href="https://www.facebook.com/expeditedesign" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://www.behance.net/expeditedesign" target="_blank"><i class="fa fa-behance"></i></a>
					<a href="https://www.linkedin.com/company/expeditedesign" target="_blank"><i class="fa fa-linkedin"></i></a>
					<a href="mailto:hey@expeditedesign.com" target="_blank"><i class="fa-solid fa fa-envelope"></i></a>


				</div>

			</div>


	</section>



	<?php wp_footer(); ?>

	</body>

	</html>