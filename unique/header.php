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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'unique' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
	 ?>
		</div><!-- .site-branding -->

		<div class="main-off-menu">
		<img src="./wp-content/uploads/2023/01/navshape.png" onclick="openNav()" class="open_btn" style="cursor:pointer" > 
	


<div id="mySidenav" class="sidenav">
<img src="./wp-content/uploads/2023/01/icons8-close-50.png" onclick="closeNav()" class="closebtn" style="cursor:pointer" >

  <div class="inner-menu">
<div class="first-col height-con">

</div>
<div class="sec-col height-con"><h4  class=" menu-head">Our Work</h4></div>
<div class="third-col height-con"><h4 class=" menu-head">Services</h4>
<div class="inner-con">
<?php wp_nav_menu( array( 'theme_location' => 'services-menu' ) ); ?>

</div>
</div>
<div class="fourth-col height-con"><h4 class=" menu-head">Resources</h4></div>
<div class="fifth-col height-con"></div>

		</div>

		

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
