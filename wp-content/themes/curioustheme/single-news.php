<?php

get_header();


?>



<section class="container single">  
  <div class="newpg_left">
    <?php  if (have_posts('$post->ID')) :
      while (have_posts('$post->ID')) :  the_post('$post->ID');?>

       <div class="main_img"> <?php the_post_thumbnail('banner-image');?><h6> <?php get_template_part( 'categoryname' );?> </h6></div>
       <div class="news_det">
        <h2><?php the_title();  ?> </h2>
        <p class="datetop">
          Date : <?php the_time('M j , Y');?> </p>

          <?php

          
if (is_user_logged_in()) {

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

                 if(($classno=='Grade 7 and upwards') && (in_category( array('grades-3-upwards', 'grades-5-upwards', 'grades-7-upwards')))){

                  the_content(); ?></div>
                   <?php get_template_part( 'quiz' );?> 
              <?php }
                elseif (($classno=='Grade 5 and upwards') && (in_category( array('grades-3-upwards', 'grades-5-upwards')))) {
                  the_content();?></div>
                   <?php get_template_part( 'quiz' );?> 
              <?php  }
               
                elseif (($classno=='Grade 3 and upwards') && (in_category('grades-3-upwards'))) {
                  the_content(); 
                  ?></div>
                   <?php get_template_part( 'quiz' );?> 
              <?php 
                   }
                else
                {
                  echo "This News item is not for your Grade";?>

</div>

            <?php    }

}}}

$user = $wpdb->get_results( "SELECT * FROM wp_usermeta where user_id = '$userid' and meta_key= 'grade'" );
              foreach ($user as $row){ 

                $classno = $row->meta_value ;

if(($classno=='Grade 7 and upwards') && (in_category( array('grades-3-upwards', 'grades-5-upwards', 'grades-7-upwards')))){

                  the_content(); ?></div>
                   <?php get_template_part( 'quiz' );?> 
              <?php }
                elseif (($classno=='Grade 5 and upwards') && (in_category( array('grades-3-upwards', 'grades-5-upwards')))) {
                  the_content();?></div>
                   <?php get_template_part( 'quiz' );?> 
              <?php  }
               
                elseif (($classno=='Grade 3 and upwards') && (in_category('grades-3-upwards'))) {
                  the_content(); 
                  ?></div>
                   <?php get_template_part( 'quiz' );?> 
              <?php 
                   }
                else
                {
                  echo "This News item is not for your Grade";?>

</div>

            <?php    }



              }




}

else{
  the_excerpt();
  ?>


  

 </div>
 <?php get_template_part( 'loginsection' );?>
<?php }





             ?>





        <?php 
      endwhile;

    endif;
     wp_reset_query();?>






  </div>

  <div class="newpg_right">
  	<?php if( get_field('did_you_know') ): ?>
  <div class="didknow"><h4>DID YOU KNOW?</h4><p><?php echo get_field('did_you_know');?></p></div>
   <?php  endif; ?>
   
   <div class="quoteday"><?php dynamic_sidebar('sidebar1');?>
  </div> 
 </div>

</section>






<?php
get_footer();
?>
