<footer>
	<section class="container"><div class="footerleft"> <?php $footermenu1= array("theme_location" =>'foot1');
			wp_nav_menu ($footermenu1);?>

			<?php $footermenu3 = array("theme_location" =>'foot3');
			wp_nav_menu ($footermenu3);?></div>
				
			<div class="footerleft">	<?php $footermenu2 = array("theme_location" =>'foot2');
			wp_nav_menu ($footermenu2);?>
			
			</div>


<div class="footerright"><h5>Contact Us</h5><p><strong>Email:</strong>  hello@curioustimes.in</p>
<h5>Subscribe to our Newsletter</h5><p class="margin-bottom">To get latest updates and exclusive offers from us subscribe to our newsletter</p>
<form><input type="text" name="name"  class="subscribe"><input type="" name="submit"  class="submit" value="SUBSCRIBE"></form>
<h5>We Are Social Too!!</h5><div class="follow">
	<a href="" target="_blank" class="social"><img src="http://localhost/curious-times/wp-content/uploads/2019/02/instagram.jpg"></a>
	<a href="" target="_blank" class="social"><img src="http://localhost/curious-times/wp-content/uploads/2019/02/fb.jpg"></a>
	<a href="" target="_blank" class="social"><img src="http://localhost/curious-times/wp-content/uploads/2019/02/tw.jpg"></a>
	<a href="" target="_blank" class="social"><img src="http://localhost/curious-times/wp-content/uploads/2019/02/youtube.jpg"></a>
	<a href="" target="_blank" class="social"><img src="http://localhost/curious-times/wp-content/uploads/2019/02/linkedin.jpg"></a></div></div>



		</section>

</footer>







<?php
wp_footer();


?>




</body>
</html>