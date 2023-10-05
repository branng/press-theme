<?php 
// https://wordpress.stackexchange.com/questions/76642/remove-admin-bar-new-post-link-media-sub-menu	
function remove_wp_nodes() {
	global $wp_admin_bar;   
	$wp_admin_bar->remove_node( 'new-post' );
	$wp_admin_bar->remove_node( 'new-link' );
	$wp_admin_bar->remove_node( 'new-media' );
}
add_action( 'admin_bar_menu', 'remove_wp_nodes', 999 );
