<?php
/*
Template Name: News Template
Template post Type: post, page, product*/
get_header();

?>


<section class="container checkout">

  <?php if (is_user_logged_in()) {

           $userid = get_current_user_id();
           global  $wpdb;

           $user = $wpdb->get_results( "SELECT * FROM wp_users where ID = '$userid'" );
           foreach ($user as $row){ 

            $email= $row->user_email ;


            $user = $wpdb->get_results( "SELECT * FROM wp_rm_submissions where user_email = '$email'" );
            foreach ($user as $row){ 

              $submission_id = $row->submission_id ;


              $user = $wpdb->get_results( "SELECT * FROM wp_rm_submission_fields where submission_id = '$submission_id' and field_id= '4'" );
              foreach ($user as $row){ 

                $classno = $row->value ;


                $ourCurrentpage= get_query_var('paged');
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
            <?php the_title();	?>
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
 
        endif;


      }}}



 $user = $wpdb->get_results( "SELECT * FROM wp_usermeta where user_id = '$userid' and meta_key= 'grade'" );
              foreach ($user as $row){ 

                $classno = $row->meta_value ;


                $ourCurrentpage= get_query_var('paged');
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
            <?php the_title();	?>
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
 
        endif;



}


  }

      else{

                $ourCurrentpage= get_query_var('paged');
               
                $args= array('post_type' => 'news', 'posts_per_page' => 12, 'paged'=> $ourCurrentpage);
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
 
        endif;

      }


        wp_reset_query();?>
     
</section>






<?php
get_footer();
?>
