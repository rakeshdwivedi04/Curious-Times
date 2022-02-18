<?php

get_header();
?>
<!-- ------------------------------------Feature image----------------------------------------------------------------- -->





<!-- ------------------------------------Founding-partner----------------------------------------------------------------- -->
<section class="container single"> 
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php if(isset($_GET['post_type'])) {
                $type = $_GET['post_type'];
                if($type == 'news') {?>

                    <div class="news-div">
                      <?php the_post_thumbnail();?>
                      <h6><a href="<?php the_permalink()?>">
                        <?php the_title();  ?>
                    </a></h6>
                     <p class="datetop">
          Date : <?php the_time('M j , Y');?><br> <span><?php get_template_part( 'categoryname' );?></span> </p>
                    <div class="read-now"><a href="<?php the_permalink()?>">Read Now!</a></div>
                </div>

            <?php } 
        } 
    endwhile;
    else : ?>
        <div class="noitem">
  <?php echo "There is no news";?>

  <?php
endif;?>



</section>
<?php
get_footer();
?>