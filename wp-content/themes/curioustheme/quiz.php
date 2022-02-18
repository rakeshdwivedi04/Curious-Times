<?php if( get_field('author_name') ): ?><div class="author_con clearall"><div class="author_conleft">Author</div><div class="author_conright"><h6><?php echo get_field('author_name');?></h6><p><?php echo get_field('auther_bio');?></p></div></div>
 <?php  endif; ?>






 <?php if( get_field('question') ): ?>
  <div class="quiz_cont">
                  <h3>Quiz</h3>
                   <div class="quest_cont clearall">
                  <p class="ques"><span>Q.</span> <?php echo get_field('question');?></p>
                  <form method="post">
                    <ul class="quizopt">
                      <li>
                  <input type="radio" name="quiz" value="<?php echo get_field('option1');?>"><?php echo get_field('option1');?>
                </li>
                 <li>
                  <input type="radio" name="quiz" value="<?php echo get_field('option2');?>"><?php echo get_field('option2');?>
                   </li>
                   <?php if( get_field('option3') ): ?>
                     <li>
                  <input type="radio" name="quiz" value="<?php echo get_field('option3');?>"><?php echo get_field('option3');?>
                   </li>
                   <?php   endif; ?>
                   <?php if( get_field('option4') ): ?>
                    <li>
                  <input type="radio" name="quiz" value="<?php echo get_field('option4');?>"><?php echo get_field('option4');?>
                   </li>
                   <?php   endif; ?>
                  <input type="text" name="answer" hidden value="<?php echo get_field('right_answer');?>">
                  <input type="submit" name="submit" class="submitbtn" value="submit">
                  </ul>
                </form>
              </div>
</div>
  <?php if (isset($_POST['submit'])) {

         
    
    $rightanswer=$_POST['answer'];
     $answer=$_POST['quiz'];

    if ($answer== $rightanswer) {?>
      

 <script>
    alert("Well Done! Your answer is Right");
    location="<?php the_permalink();?>";
  </script>

  <?php  }
    else{?>

       <script>
    alert("Your answer is Wrong.  Right Answer is <?php echo get_field('right_answer');?>");
    location="<?php the_permalink();?>";
  </script>
   <?php }

}?>
    

 <?php   endif; ?>

 <?php if(comments_open()):
  comments_template();
  endif;?>

<div class="morenewscont">

  <h2>More News</h2>

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


               
                if($classno=='Grade 7 and upwards'){
                $args= array('post_type' => 'news', 'posts_per_page' => 3);
                }

                 elseif($classno=='Grade 5 and upwards'){
                  $args= array('post_type' => 'news', 'cat' => '6,7', 'posts_per_page' => 3);
                    }
  
                else{
                $args= array('post_type' => 'news', 'cat' => '6', 'posts_per_page' => 3);
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
          Date : <?php the_time('M j , Y');?><br> <span><?php get_template_part( 'categoryname' );?></span> </p>
          <div class="read-now"><a href="<?php the_permalink()?>">Read Now!</a></div>
        </div>
        <?php 
        endwhile;

 
        endif;


      }}}


$user = $wpdb->get_results( "SELECT * FROM wp_usermeta where user_id = '$userid' and meta_key= 'grade'" );
              foreach ($user as $row){ 

                $classno = $row->meta_value ;


                if($classno=='Grade 7 and upwards'){
                $args= array('post_type' => 'news', 'posts_per_page' => 3);
                }

                 elseif($classno=='Grade 5 and upwards'){
                  $args= array('post_type' => 'news', 'cat' => '6,7', 'posts_per_page' => 3);
                    }
  
                else{
                $args= array('post_type' => 'news', 'cat' => '6', 'posts_per_page' => 3);
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
          Date : <?php the_time('M j , Y');?><br> <span><?php get_template_part( 'categoryname' );?></span> </p>
          <div class="read-now"><a href="<?php the_permalink()?>">Read Now!</a></div>
        </div>
        <?php 
        endwhile;

 
        endif;


}


  }?>
    </div>