<?php 
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
	'height'      => 75,
	'width'       => 150,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
	add_theme_support('post-formats',  array('aside','link','gallery'));
	add_theme_support('html5',array('search-form'));


}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

add_action('init', 'start_session', 1);
add_filter('show_admin_bar', '__return_false');
function start_session() {
    if(!session_id()) {
        session_start();
    }

    add_action('wp_logout', 'end_session');
    add_action('wp_login', 'end_session');
    add_action('end_session_action', 'end_session');

    
}

function destroy_sessions() {
	$sessions->destroy_all();//destroys all sessions
   wp_clear_auth_cookie();
   
	$session->unset_userdata( 'classno' );

}
add_action('wp_logout', 'destroy_sessions');
register_nav_menus (array(
	"head"=>__('My Head Menu'),
 	
 	"foot1"=>__('My Foot Menu'),
 	"foot2"=>__('My Foot Menu2'),
 	"foot3"=>__('My Foot Menu3')
	)
);

function connectstylesheet()
{
 wp_enqueue_style('style', get_stylesheet_uri());
 wp_enqueue_script('customjs1', get_template_directory_uri().'/js/jquery-1.8.3.min.js');
 wp_enqueue_script('customjs3', get_template_directory_uri().'/js/jquery.fancybox-1.3.4.pack.js');
 wp_enqueue_script('customjs4', get_template_directory_uri().'/js/skdslider.min.js');
 wp_enqueue_script('customjs5', get_template_directory_uri().'/js/easy-responsive-tabs.js');
 wp_enqueue_script('customjs6', get_template_directory_uri().'/js/smk-accordion.js');
wp_enqueue_script('customjs2', get_template_directory_uri().'/js/demo.js');

}

add_action('wp_enqueue_scripts', 'connectstylesheet');

// Ensures this function is only called after the theme is setup
// You could bind to the "init" event if "after_setup_theme" doesn't work well for you.
add_action('after_setup_theme', 'create_404_page');

// Insert a privately published page we can query for our 404 page
function create_404_page() {

  // Check if the 404 page exists
	$page_exists = get_page_by_title( '404' );

	if (!isset($page_exists->ID)) {

		// Page array
		$page = array(
			'post_author' => 1,
			'post_content' => '',
			'post_name' =>  '404',
			'post_status' => 'private',
			'post_title' => '404',
			'post_type' => 'page',
			'post_parent' => 0,
			'menu_order' => 0,
			'to_ping' =>  '',
			'pinged' => '',
		);

		$insert = wp_insert_post($page);

		// The insert was successful
		if ($insert) {
			// Store the value of our 404 page
			update_option( '404pageid', (int) $insert );
		}
	}

}

function ourwidgets(){

 register_sidebar(array('name' => 'Quote Section', 
 	'id'=> 'sidebar1',
 	'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
         'before_textwidget' => '<p><span></span>',
        'after_textwidget' => '</p>'
 ));

 register_sidebar(array('name' => 'Key Elements', 
 	'id'=> 'sidebar2'
 ));
 
 


}
add_action('widgets_init', 'ourwidgets');


 function custom_excerpt_length(){

 	return 25;
 }
 add_action('excerpt_length', 'custom_excerpt_length');


 function banner_img(){

 	add_theme_support('post-thumbnails');
 	add_image_size('banner-image',1098,400, true);

 }
 add_action('after_setup_theme','banner_img');



 function news_custom_post_type(){
 	$labels=array(
 		'name' => 'News',
 		'singular_name' => 'news',
 		'add_new' => 'Add News',
 		'all_items' => 'All News',
 		'add_new_item' => 'Add News',
 		'edit_item' => 'Edit News',
 		'new_item' => 'New News',
 		'view_item' => 'View News',
 		'search_item' => 'Search News',
 		'not_found' => 'No News Found',
 		'not_found_in_trash' => 'No News found in trash',
 		'parent_item_colon' => 'Parent News'
 		 );
 	$args= array(
 		'labels' => $labels,
 		'public' => true,
 		'has_archive' =>  true,
 		'publicly_queryable' =>  true,
 		'query_var' =>  true,
 		'rewrite' => true,
 		'capability_type' => 'post',
 		'hierarchical' => false,
 		'supports' => array(
 			'title',
 			'editor',
 			'excerpt',
 			'comments',
 			'thumbnail',
 			'revisions',
 			 ),
 		'taxonomies' =>  array('category' , 'post_tag' ),
 		'menu_position' => 5,
 		'exclude_from_search' => true

 	);

 	register_post_type('news',$args);
}

add_action('init','news_custom_post_type');
 



 function testimonial_custom_post_type(){
 	$labels1=array(
 		'name' => 'Testimonials',
 		'singular_name' => 'Testimonial',
 		'add_new' => 'Add Testimonial',
 		'all_items' => 'All Testimonial',
 		'add_new_item' => 'Add Testimonial',
 		'edit_item' => 'Edit Testimonial',
 		'new_item' => 'New Testimonial',
 		'view_item' => 'View Testimonial',
 		'search_item' => 'Search Testimonial',
 		'not_found' => 'No Testimonial Found',
 		'not_found_in_trash' => 'No Testimonial found in trash',
 		'parent_item_colon' => 'Parent Testimonial'
 		 );
 	$args1= array(
 		'labels' => $labels1,
 		'public' => true,
 		'has_archive' =>  true,
 		'publicly_queryable' =>  true,
 		'query_var' =>  true,
 		'rewrite' => true,
 		'capability_type' => 'post',
 		'hierarchical' => false,
 		'supports' => array(
 			'title',
 			'editor',
 			'excerpt',
 			'thumbnail',
 			'revisions',
 			 ),
 		'taxonomies' =>  array('category' , 'post_tag' ),
 		'menu_position' => 6,
 		'exclude_from_search' => true

 	);

 	register_post_type('testimonials',$args1);
}

add_action('init','testimonial_custom_post_type');



function faq_custom_post_type(){
 	$labels2=array(
 		'name' => 'FAQ',
 		'singular_name' => 'FAQ',
 		'add_new' => 'Add FAQ',
 		'all_items' => 'All FAQ',
 		'add_new_item' => 'Add FAQ',
 		'edit_item' => 'Edit FAQ',
 		'new_item' => 'New FAQ',
 		'view_item' => 'View FAQ',
 		'search_item' => 'Search FAQ',
 		'not_found' => 'No FAQ Found',
 		'not_found_in_trash' => 'No FAQ found in trash',
 		'parent_item_colon' => 'Parent FAQ'
 		 );
 	$args2= array(
 		'labels' => $labels2,
 		'public' => true,
 		'has_archive' =>  true,
 		'publicly_queryable' =>  true,
 		'query_var' =>  true,
 		'rewrite' => true,
 		'capability_type' => 'post',
 		'hierarchical' => false,
 		'supports' => array(
 			'title',
 			'editor',
 			'excerpt',
 			'thumbnail',
 			'revisions',
 			 ),
 		'taxonomies' =>  array('category' , 'post_tag' ),
 		'menu_position' => 7,
 		'exclude_from_search' => true

 	);

 	register_post_type('faqadd',$args2);
}

add_action('init','faq_custom_post_type');

/*
function ilss_partner_custom_post_type(){
 	$labels3=array(
 		'name' => 'Partner',
 		'singular_name' => 'Partner',
 		'add_new' => 'Add Partner',
 		'all_items' => 'All Partner',
 		'add_new_item' => 'Add Partner',
 		'edit_item' => 'Edit Partner',
 		'new_item' => 'New Partner',
 		'view_item' => 'View Partner',
 		'search_item' => 'Search Partner',
 		'not_found' => 'No Partner Found',
 		'not_found_in_trash' => 'No Partner found in trash',
 		'parent_item_colon' => 'Parent Partner'
 		 );
 	$args3= array(
 		'labels' => $labels3,
 		'public' => true,
 		'has_archive' =>  true,
 		'publicly_queryable' =>  true,
 		'query_var' =>  true,
 		'rewrite' => true,
 		'capability_type' => 'post',
 		'hierarchical' => false,
 		'supports' => array(
 			'title',
 			'editor',
 			'excerpt',
 			'thumbnail',
 			'revisions',
 			 ),
 		'taxonomies' =>  array('category' , 'post_tag' ),
 		'menu_position' => 7,
 		'exclude_from_search' => true

 	);

 	register_post_type('partner_details',$args3);
}

add_action('init','ilss_partner_custom_post_type');*/
?>