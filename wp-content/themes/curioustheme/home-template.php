<?php
/*
Template Name: Home Template
Template post Type: post, page, product*/
get_header();
?>
<!-- ------------------------------------Banner Panel ----------------------------------------------------------- -->

<div id="banner">
  <ul id="demo2">
    <?php if( get_field('banner1') ): ?>
    <li><a href="<?php echo get_field('banner1url')?>"><img src="<?php echo get_field('banner1')?>" /></a></li>
    <?php endif; ?>
    <?php if( get_field('banner2') ): ?>
    <li><a href="<?php echo get_field('banner2url')?>"><img src="<?php echo get_field('banner2')?>" /></a></li>
    <?php endif; ?>
    <?php if( get_field('banner3') ): ?>
    <li><a href="<?php echo get_field('banner3url')?>"><img src="<?php echo get_field('banner3')?>" /></a></li>
    <?php endif; ?>
    <?php if( get_field('banner4') ): ?>
    <li><a href="<?php echo get_field('banner4url')?>"><img src="<?php echo get_field('banner4')?>" /></a></li>
    <?php endif; ?>
  </ul>
</div>

<!-- ------------------------------------Pointer ----------------------------------------------------------------- -->

<section class="outer1">
  <section class="container">
    <ul class="pointer">
      <?php if( get_field('pointer') ): ?>
      <li><i><img src="<?php echo get_field('pointer1img')?>"/></i>
        <h6><?php echo get_field('pointer')?></h6>
      </li>
      <?php endif; ?>
      <?php if( get_field('pointer2') ): ?>
      <li><i><img src="<?php echo get_field('pointer2img')?>"/></i>
        <h6><?php echo get_field('pointer2')?></h6>
      </li>
      <?php endif; ?>
      <?php if( get_field('pointer3') ): ?>
      <li><i><img src="<?php echo get_field('pointer3img')?>"/></i>
        <h6><?php echo get_field('pointer3')?></h6>
      </li>
      <?php endif; ?>
    </ul>
  </section>
</section>

<!-- ------------------------------------News section ---------------------------------------------------------------- -->

<section class="container checkout">
  <h2><?php echo get_field('titlenew')?></h2>
  <p><?php echo get_field('contentpara')?></p>
  <div id="horizontalTab">
    <ul class="resp-tabs-list">
      <li>Grades 3 and Upwards</li>
      <li>Grades 5 and Upwards</li>
      <li>Grades 7 and Upwards</li>
    </ul>
    <div class="resp-tabs-container">
      <div>
        <?php	 $args= array('post_type' => 'news', 'category_name' =>'grades-3-upwards', 'posts_per_page' => 4);
        $loop= new WP_Query($args);
         if ($loop->have_posts()):
        while($loop->have_posts()): $loop->the_post(); ?>
        <div class="news-div">
          <?php the_post_thumbnail();?>
          <h6><a href="<?php the_permalink()?>">
            <?php the_title();	?>
            </a></h6>
          <div class="read-now"><a href="<?php the_permalink()?>">Read Now!</a></div>
        </div>
        <?php 
				endwhile;

				endif;
				wp_reset_query();?>
      </div>
      <div>
        <?php	 $args= array('post_type' => 'news', 'category_name' =>'grades-3-upwards, grades-5-upwards', 'posts_per_page' => 4);
        $loop= new WP_Query($args);
         if ($loop->have_posts()):
        while($loop->have_posts()): $loop->the_post(); ?>
        <div class="news-div">
          <?php the_post_thumbnail();?>
          <h6><a href="<?php the_permalink()?>">
            <?php the_title();	?>
            </a></h6>
          <div class="read-now"><a href="<?php the_permalink()?>">Read Now!</a></div>
        </div>
        <?php 
				endwhile;
				endif;
				wp_reset_query();?>
      </div>

      <div>
        <?php	 $args= array('post_type' => 'news', 'category_name' =>'grades-3-upwards, grades-5-upwards, grades-7-upwards', 'posts_per_page' => 4);
        $loop= new WP_Query($args);
         if ($loop->have_posts()):
        while($loop->have_posts()): $loop->the_post(); ?>
        <div class="news-div">
          <?php the_post_thumbnail();?>
          <h6><a href="<?php the_permalink()?>">
            <?php the_title();	?>
            </a></h6>
          <div class="read-now"><a href="<?php the_permalink()?>">Read Now!</a></div>
        </div>
        <?php 
				endwhile;
				endif;
				wp_reset_query();?>
      </div>
    </div>

   
  </div>
<div style="clear: both;"></div>
   <a href="<?php echo get_field('register_link')?>" class="registernow"><?php echo get_field('register_now')?></a>
</section>

<!-- ------------------------------------Why curious Times ---------------------------------------------------------------- -->

<section class="outer2"><section class="container">
  <h2><?php echo get_field('whycurioustitle')?></h2>
  <p><?php echo get_field('whycuriouspara')?></p>

<ul class="whycurious"><li><i><img src="<?php echo get_field('feature1img')?>"></i><p><?php echo get_field('feature1')?></p></li>
<li><i><img src="<?php echo get_field('feature2img')?>"></i><p><?php echo get_field('feature2')?></p></li>
<li><i><img src="<?php echo get_field('feature3img')?>"></i><p><?php echo get_field('feature3')?></p></li>
<li><i><img src="<?php echo get_field('feature4img')?>"></i><p><?php echo get_field('feature4')?></p></li>
<li><i><img src="<?php echo get_field('feature5img')?>"></i><p><?php echo get_field('feature5')?></p></li>
<li><i><img src="<?php echo get_field('feature6img')?>"></i><p><?php echo get_field('feature6')?></p></li></ul>

<div class="whycuriousright"><img src="<?php echo get_field('curiousrightimg')?>"></div>

</section></section>
<!-- ------------------------------------Empower Curios ----------------------------------------------------------------- -->

<section class=" container empower">
    <h2><?php echo get_field('empowertile')?></h2>

    <ul class="empowerlist">
      <li><a href="<?php echo get_field('empower1url')?>"><img src="<?php echo get_field('empower1img')?>"></a></li>
      <li><a href="<?php echo get_field('empower2url')?>"><img src="<?php echo get_field('empower2img')?>"></a></li>
    </ul>
 
</section>

<!-- ------------------------------------Quote ----------------------------------------------------------------- -->
<section class="outer3"><section class=" container"><h5><?php echo get_field('quote_line')?></h5></section></section>

<!-- ------------------------------------Testimonail ----------------------------------------------------------------- -->

<section class=" container empower">
    <h2 class="testimon"><span>Why do our users &nbsp;</span> <span><img src="http://localhost/curious-times/wp-content/uploads/2019/02/heart.jpg"></span> <span>&nbsp;us!</span></h2>
<div class="testimonial">
    <ul id="demo3" > <?php   $args= array('post_type' => 'testimonials', 'posts_per_page' => 5);
        $loop= new WP_Query($args);
         if ($loop->have_posts()):
        while($loop->have_posts()): $loop->the_post(); ?><li><p> <?php the_content();?></p><h6> <?php the_title();?></h6><div class="img"> <?php the_post_thumbnail();?></div></li> <?php 
        endwhile;
        endif;
        wp_reset_query();?><i class="bottomcomma"></i></ul></div>




  </section>
<!-- ------------------------------------About ----------------------------------------------------------------- -->
  <section class="outer4"><section class=" container"><h2><?php echo get_field('about_us_title')?></h2><p><?php echo get_field('about_content')?></p></section></section>





<?php
get_footer();
?>
