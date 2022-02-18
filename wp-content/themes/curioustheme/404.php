<?php get_header(); ?>

<?php 
$the_page    = null;
$errorpageid = get_option( '404pageid', 0 ); 
if ($errorpageid !== 0) {
    // Typecast to an integer
    $errorpageid = (int) $errorpageid;
    // Get our page
    $the_page = get_page($errorpageid);
}
?>

<section class="container single">  
<div id="four-oh-four">
    <?php if ($the_page == NULL || isset($the_page->post_content) && trim($the_page->post_content == '')): ?>
        <h1>There is an error! Not Able to find page you requested.</h1>
    <?php else: ?>
	<?php echo apply_filters( 'the_content', $the_page->post_content ); ?>
    <?php endif; ?>
</div>
</section>
<?php get_footer(); ?>