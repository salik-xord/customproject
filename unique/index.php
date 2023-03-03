<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Unique
 */

get_header();
?>

	<section class="hero-sec">
        <div class=" hero-left">
    <div class="wrapper">
    <h1>WEB3
    <div class="words">
   
        <span class="changetTex_item glitch" data-text="DESIGN" >Design</span> 
        <span class="changetTex_item glitch" data-text="GAMES">Games</span>
        <span class="changetTex_item glitch" data-text="DESIGN">Design</span>
        <span class="changetTex_item glitch" data-text="GAMES">Games</span>
        <span class="changetTex_item glitch" data-text="DESIGN">Design</span>
 
    </div>
  SIMPLIFIED.</h1>
  </div>

  <p>Being the thought leaders in the Web3 design space, Expedite is laying down
     the building blocks to create user-centered and trust-enhancing products.</p>

     <a href="#" class="exp-btn">Let's Expedite</a>

  </div>

  <div class=" hero-right">
    <div class="banner-parent">
  <div class="banner">
	<video autoplay muted loop>
	  <source src="<?php echo get_template_directory_uri()?>/video/DS1.webm" type="video/webm">
	</video>
    </div>
</div>
  </div>

    </section>




<section class="only-text">


<p>
The biggest challenge newcomers face when navigating the Web3 landscape is how complex the technology is to adopt. Expedite is here to help you cross this bridge through our user-centered designs
 and technical expertise, elevating your experience in this new world!
</p>


</section>






<?php
get_sidebar();
get_footer();
