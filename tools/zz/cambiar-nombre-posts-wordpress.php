<?php 
function change_post_menu_label() {
	global $menu;
	global $submenu;

	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'News';
	$submenu['edit.php'][10][0] = 'Add Article';
	$submenu['edit.php'][15][0] = 'News Categories'; // Change name for categories
	$submenu['edit.php'][16][0] = 'News Article Tags'; // Change name for tags
}

function change_post_object_label() {
	global $wp_post_types;

	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = 'Add Article';
	$labels->add_new_item = 'Add Article';
	$labels->edit_item = 'Edit Article';
	$labels->new_item = 'News Article';
	$labels->view_item = 'View Article';
	$labels->search_items = 'Search News';
	$labels->not_found = 'No Articles found';
	$labels->not_found_in_trash = 'No Articles found in Trash';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );




