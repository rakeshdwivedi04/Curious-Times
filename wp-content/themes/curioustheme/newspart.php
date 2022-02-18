<?php  $ourCurrentpage= get_query_var('paged');
                if($classno=='Grade 7 and upwards'){
                $args= array('post_type' => 'news', 'posts_per_page' => 12, 'paged'=> $ourCurrentpage);
                }

                 elseif($classno=='Grade 5 and upwards'){
                  $args= array('post_type' => 'news', 'cat' => '6,7', 'posts_per_page' => 12, 'paged'=> $ourCurrentpage);
                    }
  
                else{
                $args= array('post_type' => 'news', 'cat' => '6', 'posts_per_page' => 12, 'paged'=> $ourCurrentpage);
                   }
  
        $loop= new WP_Query($args);
         if ($loop->have_posts()):
        while($loop->have_posts()): $loop->the_post(); ?>
        <div class="news-div">
          <?php the_post_thumbnail();?>
          <h6><a href="<?php the_permalink()?>">
            <?php the_title();  ?>
            </a></h6>
            <p class="datetop">
          Date : <?php the_time('M j , Y');?> <br> <span><?php get_template_part( 'categoryname' );?></span> </p>
          <div class="read-now"><a href="<?php the_permalink()?>">Read Now!</a></div>
        </div>
        <?php 
        endwhile;
        ?>

        <div class="pagnation">
 <?php   echo paginate_links(array(
      'total' => $loop->max_num_pages ));?>
  </div><?php
 
        endif;?>