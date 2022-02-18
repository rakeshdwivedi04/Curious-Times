<?php 
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area clearall">

	<?php if ( have_comments() ) : ?>
		<div class="comment-count">Comments: <?php printf(get_comments_number()); ?></div>

		<div class="comments-list-cont"><ol class="comment-list">
			<?php 
			$args=array(

				'walker' => null,
				'max_depth' => '',
				'style'  => 'ol',
				'callback' => null,
				'end_callback' =>null,
				'type' =>'all',
				'reply_text' => 'Reply',
				'page'=>'',
				'per_page' => '',
				'avatar_size'=> false

			);
wp_list_comments();
?>
		</ol>
	
</div>
		<?php if(!comments_open() && get_comments_number()):?>
    

    <p class="no-comments"><?php esc_html_e('Comment closed', 'curioustheme');?></p>
	<?php endif?>


<?php endif;

  comment_form();

?>
</div>