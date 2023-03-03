<link rel="stylesheet" href="style.css">

<?php get_header()?>


<section class="post-hero">

<div class="post-header">
    <P>WriteUps </P> <p class="post-title"> >> <?php echo get_the_title()?></p>
</div>

<h1 class="real-h1"><?php echo get_the_title()?></h1>

<div class="site-bio">

<div class="author-bio">

<div class="author-left">
  <?php
 
 // Get the author ID    
 $author_id = get_the_author_meta('ID');
  
 // Get the author image URL    
 $output = get_avatar_url($author_id);
  
 // Display the author image    
 echo '<img src="'.$output.'"/>';
  
 ?>
</div>
<div class="author-right">
    <p>  <?php
 
 // Get the author ID    

    
 echo get_the_author_meta('display_name');
  
 ?></p>
 <p> <?php echo get_field('job_designation')?></p>
</div>

</div>
<div class="post-date">
<p><?php the_time('F jS, Y'); ?></p>
</div>
</div>

</section>



<?php echo do_shortcode("[lwptoc]"); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<header class="custom-page-header pt-5 pb-5">

<div class="container">

<div class="row align-items-center">

<div class="post-content">
<div class="page-title-heading">

<h1 class="fas-4 fw-600"><?php echo get_the_title();?></h1>
<P> <?php echo get_the_excerpt();?></p>
<P><span class="badge bg-primary"><?php the_time('F jS, Y'); ?></span> by <?php the_author_posts_link(); ?></P>

</div>

</div>

<div class="col-lg-6 col-md-6">

<?php

// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) { ?>
   <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid rounded" alt="<?php echo get_the_title(); ?>">
<?php  } else { ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" class="img-fluid rounded" alt="<?php echo get_the_title(); ?>">
<?php }

?>


</div>

</div>

</div>


</header>


<section class="page-content border-top pt-5 pb-5">
    <div class="container">
<div class="row">

<div class="col-lg-9 col-md-9">

<article class="main-content small">

<?php the_content(); ?>
<div class="alert alert-secondary" role="alert">
<p class="postmetadata mb-0" ><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
<?php the_tags( 'Social tagging: ',' , ' ); ?>
</div>

<?php comments_template(); ?> 

</article>
</div>
<div class="col-lg-3 md-3">

<?php get_sidebar();?>
</div>

</div>
    </div>
</section>







<?php endwhile;
                else : ?>
                    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
<?php get_footer()?>