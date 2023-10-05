<?php 

// NEED INSTALLED ACF
if(class_exists('acf')){
	$nombre = get_bloginfo( 'name' );
	// CUSTOM OPTIONS THEME
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' 	=> $nombre,
			'menu_title'	=> $nombre,
			'menu_slug' 	=> $nombre . '-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> true
		));
	

		acf_add_options_sub_page(array(
			'page_title' 	=> 'General Settings',
			'menu_title'	=> 'General',
			'parent_slug'	=> $nombre . '-settings',
		));
		

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Contact Settings',
			'menu_title'	=> 'Contacto',
			'parent_slug'	=> $nombre . '-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> $nombre . '-settings',
		));
	
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> $nombre . '-settings',
		));
	
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Social Settings',
			'menu_title'	=> 'Social',
			'parent_slug'	=> $nombre . '-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme rgpd Settings',
			'menu_title'	=> 'RGPD Modal Text',
			'parent_slug'	=> $nombre . '-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Blog Settings',
			'menu_title'	=> 'Blog',
			'parent_slug'	=> $nombre . '-settings',
		));
	
		// acf_add_options_sub_page(array(
		// 	'page_title' 	=> 'Theme Email Settings',
		// 	'menu_title'	=> 'Email',
		// 	'parent_slug'	=> 'theme-settings',
		// ));
		
	}
	
}