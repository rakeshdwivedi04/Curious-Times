<div class="readmore_con clearall"><div class="readmore_conleft">To read more...</div><div class="readmore_conright"><a href="javascript:void(0)" class="loginic">Login</a><a href="javascript:void(0)" class="signup">Sign Up</a></div></div>


<div class="logindiv clearall">    <?php echo do_shortcode( '[RM_Login]' ); ?></div>

<?php if (isset($_POST['rm_sb_btn'])) {?>
<div class="signupdiv clearall"  style="display:block;">    <?php echo do_shortcode( "[RM_Form id='1']" ); ?></div>
<?php }else{?>
<div class="signupdiv clearall" >    <?php echo do_shortcode( "[RM_Form id='1']" ); ?></div>
<?php }?>