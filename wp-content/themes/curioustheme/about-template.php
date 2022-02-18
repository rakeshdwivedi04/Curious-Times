<?php
/*
Template Name: About Template
Template post Type: post, page, product*/
get_header();
?>



<section class="container paddingtop innerpg">
   <?php
         if (have_posts()):
        while(have_posts()): the_post(); ?>
<div class="about_left"><h2><?php the_title();  ?> </h2>
  <?php the_content();  ?>
</div>
 
 <?php 
        endwhile;

        endif;
        wp_reset_query();?>

<div class="about_right">
        <?php if( get_field('about_image_1') ): ?>
                     
                  <img src="<?php echo get_field('about_image_1');?>">
                   <?php   endif; ?>
                    <?php if( get_field('about_image_2') ): ?>
                     
                  <img src="<?php echo get_field('about_image_2');?>">
                   <?php   endif; ?>
               </div>

  </section>






<?php
get_footer();
?>
