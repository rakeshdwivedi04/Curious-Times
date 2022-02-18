<?php

get_header();
?>

<!-- ------------------------------------Founding-partner-------------------------------------------------------------- -->
<div class="container single innerpg">	
	 <?php	
        
         if (have_posts()):
        while(have_posts()): the_post(); ?>
<h2><?php the_title();	?></h2>
        	 <?php 
				endwhile;

				endif;
				?>

	<div class="accordion_example1">

		 <?php	$ourCurrentpage= get_query_var('paged'); $args= array('post_type' => 'faqadd', 'order' => 'DESC', 'posts_per_page' => 10, 'paged'=> $ourCurrentpage);
        $loop= new WP_Query($args);
         if ($loop->have_posts()):
        while($loop->have_posts()): $loop->the_post(); ?>
		<div class="accordion_in">
			<div class="acc_head"> <?php the_title();	?></div>
			<div class="acc_content clearall"> <?php the_content();	?></div>
		</div>

		 <?php 
				endwhile;?>

				<div class="pagnation">
 <?php   echo paginate_links(array(
			'total' => $loop->max_num_pages ));?>
	</div><?php

				endif;
				wp_reset_query();?>
			


			</div>
  

</div>

<?php
get_footer();
?>