<?php
/*
Template Name: Login Template
Template post Type: post, page, product*/
get_header();
?>

<div class="login_container clearall">	


  
   <?php  if (have_posts('$post->ID')) :
        while (have_posts('$post->ID')) :  the_post('$post->ID');?>

<?php if (!is_user_logged_in()) {?>
   <h2><?php the_title();  ?></h2>
<?php }else{?> <h2></h2><?php }?>
       
        
  
        
<?php the_content();?>

        

    <?php 
        endwhile;

        endif;?>
   <div style="clear: both;"></div>
  </div>
 





<?php
get_footer();
?>