<?php

/* REGISTER ACTIONS FUNCTIONS */

function register_menus() {

	register_nav_menus(array('navigation' => __('Site Navigation'))); 
}

add_action('after_setup_theme', 'register_menus'); 

/* FILTER FUNCTIONS */

function new_excerpt_more($more) {
    
    global $post;
	return '<a href="'. get_permalink($post->ID) . '" class="readmore">Read more</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');


/* FALLBACK CALLBACK FUNCTIONS */

function navigation_fallback() {

	echo '<ul id="navigation-bar">';
	
	wp_list_pages(array('hierarchical' => 1, 
						'sort_column' => 'menu_order',
						'title_li' => ''));
	
	echo '<ul>';
}

?>