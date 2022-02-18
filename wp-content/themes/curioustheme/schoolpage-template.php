<?php
/*
Template Name: School Page Template
Template post Type: post, page, product*/
get_header();
?>



<section class="container paddingtop innerpg">
   <?php
         if (have_posts()):
        while(have_posts()): the_post(); ?>
<h2><?php the_title();  ?> </h2>
  <?php the_content();  ?>

 <?php 
        endwhile;

        endif;
        wp_reset_query();?>

        <div class="divider"></div>
 <?php if( get_field('sub_heading') ): ?>
<h5><?php echo get_field('sub_heading')?></h5>

<ul class="schoolpoints clearall"><li><img src="<?php echo get_field('subpointer_1_image')?>" alt="<?php echo get_field('subpointer_1')?>" class="image"><h6><?php echo get_field('subpointer_1')?></h6> <div class="overlay">
    <div class="text"><?php echo get_field('subpointer_1_content')?></div>
  </div></li>
<?php if( get_field('subpointer_2') ): ?>
  <li><img src="<?php echo get_field('subpointer_2_image')?>" alt="<?php echo get_field('subpointer_2')?>" class="image"><h6><?php echo get_field('subpointer_2')?></h6> <div class="overlay">
    <div class="text"><?php echo get_field('subpointer_2_content')?></div>
  </div></li>
  <?php endif; ?>
<?php if( get_field('subpointer_3') ): ?>
  <li><img src="<?php echo get_field('subpointer_3_image')?>" alt="<?php echo get_field('subpointer_3')?>" class="image"><h6><?php echo get_field('subpointer_3')?></h6> <div class="overlay">
    <div class="text"><?php echo get_field('subpointer_3_content')?></div>
  </div></li>
  <?php endif; ?>
<?php if( get_field('subpointer_4') ): ?>
  <li><img src="<?php echo get_field('subpointer_4_image')?>" alt="<?php echo get_field('subpointer_4')?>" class="image"><h6><?php echo get_field('subpointer_4')?></h6> <div class="overlay">
    <div class="text"><?php echo get_field('subpointer_4_content')?></div>
  </div></li>
  <?php endif; ?>
  <?php if( get_field('subpointer_5') ): ?>
  <li><img src="<?php echo get_field('subpointer_5_image')?>" alt="<?php echo get_field('subpointer_5')?>" class="image"><h6><?php echo get_field('subpointer_5')?></h6> <div class="overlay">
    <div class="text"><?php echo get_field('subpointer_5_content')?></div>
  </div></li>
  <?php endif; ?>
  <?php if( get_field('subpointer_6') ): ?>
  <li><img src="<?php echo get_field('subpointer_6_image')?>" alt="<?php echo get_field('subpointer_6')?>" class="image"><h6><?php echo get_field('subpointer_6')?></h6> <div class="overlay">
    <div class="text"><?php echo get_field('subpointer_6_content')?></div>
  </div></li>
  <?php endif; ?>
</ul>
<?php endif; ?>

 <div class="divider"></div>

 <section class=" container empower">

  
    <h2 class="testimon par"><span>Why do our <?php if (is_page(205)  ){?>Teachers<?php } else{?>Parents <?php }?> &nbsp;</span> <span><img src="http://localhost/curious-times/wp-content/uploads/2019/02/heart.jpg"></span> <span>&nbsp;us!</span></h2>
    
<div class="testimonial">
    <ul id="demo3" >  <?php if (is_page(205)){  
     $args= array('post_type' => 'testimonials', 'category_name'=>'teachers', 'posts_per_page' => 5);
   } else{

    $args= array('post_type' => 'testimonials', 'category_name'=>'parents', 'posts_per_page' => 5);

   }

    
        $loop= new WP_Query($args);
         if ($loop->have_posts()):
        while($loop->have_posts()): $loop->the_post(); ?><li><p> <?php the_content();?></p><h6> <?php the_title();?></h6><div class="img"> <?php the_post_thumbnail();?></div></li> <?php 
        endwhile;
        endif;
        wp_reset_query();?><i class="bottomcomma"></i></ul></div>




  </section>

  </section>






<?php
get_footer();
?>
