<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name');?></title>
	<meta name="viewport" content="width=device-width">
	<meta charset="<?php bloginfo('charset');?>">
	<?php wp_head(); ?>
</head>
<body>
<header>
	<section class="container">
	<div id="logo">	<?php if(function_exists('the_custom_logo')){
			the_custom_logo();
		}
		?></div>

		<div class="headerright"><?php get_search_form();?></div>


	</section>

	<section class="outer"><div class="container">	
       <?php $mainmenu= array("theme_location" =>'head');
			wp_nav_menu ($mainmenu);?>

		<?php if (is_user_logged_in()) { $current_user = wp_get_current_user();?>
 <a href="<?php echo wp_logout_url(); ?>" class="signiiout"> Logout </a>
			<a href="Javascript:void(0)" class="signiiout"> Hi <?php  echo  $current_user->user_nicename ;?> !</a>




		<?php } else {?>

			<a href="http://localhost/curious-times/login/" class="signiinn">Sign In</a><a href="http://localhost/curious-times/register/" class="signiinn">Register</a>




		<?php  }?>
   
	</div></section>



</header>	
