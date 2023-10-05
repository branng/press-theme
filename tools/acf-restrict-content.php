<?php 
add_filter('acf/settings/show_admin', 'my_acf_show_admin');
function my_acf_show_admin($show) {
	// provide a list of usernames who can edit custom field definitions here
	$admins = array( 
		'webmaster.branng'
	);

	// get the current user
	$current_user = wp_get_current_user();
	return (in_array($current_user->user_login, $admins));
}


function my_acf_settings_capability( $path ) {
    return 'administrator';
}
add_filter('acf/settings/capability', 'my_acf_settings_capability');