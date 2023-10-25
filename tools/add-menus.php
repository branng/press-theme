<?php 
// Register HTML5 Blank Navigation
function register_branng_menu()
{
	register_nav_menus(array( // Using array to specify more menus if needed
		'header-menu' 		=> __('Header Menu', 			'branng'), // Main Navigation
		'sidebar-menu' 		=> __('Sidebar Menu', 			'branng'), // Sidebar Navigation
		'idioma-menu' 		=> __('Idiomas Menu', 			'branng'), //
		'footer-menu' 		=> __('Footer Menu', 			'branng'), // 
		'idioma-menu-mob' 	=> __('Idiomas Menu móvil', 	'branng'), //
		'menu-blog' 		=> __('Menú para el blog', 		'branng') // 
	));
}

/* HTML5 Blank navigation */
function menu_principal($depth)
{
	wp_nav_menu(
	array(
		'theme_location'	=> 'header-menu',
		'menu'				=> '',
		'container'			=> 'ul',
		'container_class' 	=> '',
		'container_id'		=> '',
		'menu_class'		=> 'pedro',
		'menu_id'			=> '',
		'echo'				=> true,
		'fallback_cb'		=> '',
		'before'			=> '',
		'after'				=> '',
		'link_before'		=> '',
		'link_after'		=> '',
		'items_wrap'		=> '<ul>%3$s</ul>',
		'depth'				=> $depth,
		'walker'			=> ''
		)
	);
}

function menu_idiomas($depth){
	wp_nav_menu(
	array(
		'theme_location'	=> 'idioma-menu',
		'menu'				=> '',
		'container'			=> 'ul',
		'container_class' 	=> '',
		'container_id'		=> '',
		'menu_class'		=> '',
		'menu_id'			=> '',
		'echo'				=> true,
		'fallback_cb'		=> '',
		'before'			=> '',
		'after'				=> '',
		'link_before'		=> '',
		'link_after'		=> '',
		'items_wrap'		=> '<ul>%3$s</ul>',
		'depth'				=> $depth,
		'walker'			=> ''
		)
	);
}

function menu_idiomas_mob($depth){
	wp_nav_menu(
	array(
		'theme_location'	=> 'idioma-menu-mob',
		'menu'				=> '',
		'container'			=> 'ul',
		'container_class' 	=> '',
		'container_id'		=> '',
		'menu_class'		=> '',
		'menu_id'			=> '',
		'echo'				=> true,
		'fallback_cb'		=> '',
		'before'			=> '',
		'after'				=> '',
		'link_before'		=> '',
		'link_after'		=> '',
		'items_wrap'		=> '<ul>%3$s</ul>',
		'depth'				=> $depth,
		'walker'			=> ''
		)
	);
}



function menu_blog($depth){
	wp_nav_menu(
	array(
		'theme_location'	=> 'menu-blog',
		'menu'				=> '',
		'container'			=> 'ul',
		'container_class' 	=> '',
		'container_id'		=> '',
		'menu_class'		=> '',
		'menu_id'			=> '',
		'echo'				=> true,
		'fallback_cb'		=> '',
		'before'			=> '',
		'after'				=> '',
		'link_before'		=> '',
		'link_after'		=> '',
		'items_wrap'		=> '<ul>%3$s</ul>',
		'depth'				=> $depth,
		'walker'			=> ''
		)
	);
}