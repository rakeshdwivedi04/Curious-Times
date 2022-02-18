<?php

get_header();
?>

<div class="container single innerpg">	



   <?php  if (have_posts('$post->ID')) :
        while (have_posts('$post->ID')) :  the_post('$post->ID');?>


        <h2><?php the_title();  ?></h2>
        
      <div class="col_left">
        
<p><?php the_content();?></p>

        
 </div>
  
    <?php 
        endwhile;

        endif;?>
   
 
  <div class="col_right"> 
   <?php the_post_thumbnail();?>
  </div>
</div>





<?php
get_footer();
?>