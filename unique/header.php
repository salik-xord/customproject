<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Unique
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'unique'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div><!-- .site-branding -->

			<div class="main-off-menu">
				<img src="./wp-content/uploads/2023/01/navshape.png" onclick="openNav()" class="open_btn" alt="open-btn" style="cursor:pointer">



				<div id="mySidenav" class="sidenav">
					<img src="./wp-content/uploads/2023/01/icons8-close-50.png" onclick="closeNav()" class="closebtn" style="cursor:pointer">
					<div class="outer-main">
						<div class="inner-menu">
							<div class="first-col height-con">

							</div>
							<div class="sec-col height-con">
								
								<h4 class=" menu-head">Our Work</h4>
								<a href="#" class="parent-link "></a>
							</div>
							<div class="third-col height-con">
								<h4 class=" menu-head">Services</h4>
								<div class="inner-con">
									<?php wp_nav_menu(array('theme_location' => 'services-menu')); ?>

								</div>
								<a href="#" class="parent-link less-index"></a>
							</div>
							<div class="fourth-col height-con">
								<h4 class=" menu-head">Resources</h4>
								<div class="inner-con">
									<?php wp_nav_menu(array('theme_location' => 'resources-menu')); ?>

								</div>
								<a href="#" class="parent-link less-index"></a>

							</div>
							<div class="fifth-col height-con"></div>

						</div>
						<!-- //second row -->

						<div class="inner-menu sec-menu">
							<div class="first-col height-con">

							</div>
							<div class="sec-col height-con">
								<h4 class=" menu-head">Company</h4>
								<div class="inner-con">
									<?php wp_nav_menu(array('theme_location' => 'company-menu')); ?>

								</div>
								<a href="#" class="parent-link less-index"></a>
							</div>
							<div class="third-col height-con">
								<h4 class=" menu-head">Contact Us</h4>
								<a href="#" class="parent-link"></a>
							</div>
							<div class="fourth-col height-con middle-col">

								<div class="middle-con">
									<a href="#">
										<h6>Start a Project</h6>

										<img class="orange-arrow" src="<?php echo get_template_directory_uri(); ?>/img/orangearrow.png" alt="">
										<img class="white-arrow" src="<?php echo get_template_directory_uri(); ?>/img/whitearrow.png" alt="">
									</a>
								</div>

							</div>
							<div class="fifth-col height-con"></div>

						</div>
					</div>

<!-- social links and company xord -->
<div class="bottom-canvas">
<div class="comp-xord">

<p>Company by</p>
<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/compxord.png" alt="xord"></a>

</div>
<div class="social-icons">
	<a href="https://www.twitter.com/expeditedesign" target="_blank"><i class="fa fa-twitter" ></i></a>
	<a href="https://discord.com/invite/xc9QCxv7jJ/" target="_blank"><i class="fa fa-discord" ></i></a>
	<a href="https://www.facebook.com/expeditedesign" target="_blank"><i class="fa fa-facebook" ></i></a> 
	<a href="https://www.behance.net/expeditedesign" target="_blank"><i class="fa fa-behance" ></i></a>
	<a href="https://www.linkedin.com/company/expeditedesign" target="_blank"><i class="fa fa-linkedin" ></i></a>
	<a href="mailto:hey@expeditedesign.com" target="_blank"><i class="fa-solid fa fa-envelope" ></i></a>
	

</div>

</div>



					</nav><!-- #site-navigation -->
		</header><!-- #masthead -->