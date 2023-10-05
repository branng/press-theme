<?php 
	
function remove_acf_options_page() {
	remove_menu_page('acf-options');
}
add_action('admin_init', 'remove_acf_options_page', 99);

