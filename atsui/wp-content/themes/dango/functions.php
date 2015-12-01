<?php

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 ); 
remove_action( 'wp_head', 'rsd_link' ); 
remove_action( 'wp_head', 'wlwmanifest_link' ); 
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action( 'wp_head', 'wp_generator' );

register_nav_menus(array(
	'primary' => 'Top Navigation'
));
register_sidebar();

function add_portfolio() {
	register_post_type('portfolio', array(
		'labels' => array(
			'name' => _x('Portfolio', 'post type general name'),
			'singular_name' => _x('Portfolio', 'post type singular name'),
			'add_new' => _x('Add Piece', 'portfolio'),
			'add_new_item' => __('Add New Portfolio'),
			'edit_item' => __('Edit Portfolio Piece'),
			'new_item' => __('New Portfolio'),
			'all_items' => __('All Portfolio'),
			'view_item' => __('View Portfolio Piece'),
			'search_items' => __('Search Portfolio'),
			'not_found' =>  __('No portfolio found'),
			'not_found_in_trash' => __('No portfolio found in Trash')
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail')
	));
}
add_action( 'init', 'add_portfolio' );

function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', array('post', 'portfolio'));
	}
	return $query;
}

add_filter('pre_get_posts','SearchFilter');

function script_check() {
	wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, null);
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'script_check');


//////////////////////////////////////// FUNCTIONS /////////////////////////////////////////////

function is_selected($handle) {
	global $post;
	$selected = ' selected';
	switch($handle) {
		case 'portfolio' :
			if(is_page(2) || is_front_page() || 'portfolio' === get_post_type()) echo $selected;
			break;

		case 'blog' :
			if(strpos($_SERVER['REQUEST_URI'], '/blog/') !== false || 'post' === get_post_type()) echo $selected;
			break;
	
		case 'contact' :
			if(strpos($_SERVER['REQUEST_URI'], '/contact/') !== false) echo $selected;
			break;
	}
}

?>