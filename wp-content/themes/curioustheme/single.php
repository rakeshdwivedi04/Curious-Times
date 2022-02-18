<?php
get_header();
?>

<section class="container checkout">

  <div class="left">
  3
  
        <?php  if (have_posts('$post->ID')) :
        while (have_posts('$post->ID')) :  the_post('$post->ID');?>
       
          <?php the_post_thumbnail();?>
          <h6><a href="<?php the_permalink()?>">
            <?php the_title();  ?>
            </a></h6>
         

        <?php 
        endwhile;

        endif;
       ?>
      </div>
 </section>

<?php
get_footer();

?>