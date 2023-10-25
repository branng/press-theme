<?php
function post_cpt_dev() { 
    // creating (registering) the custom type 
    register_post_type( 'cpt_dev', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array( 'labels' => array(
                'name' => __( 'Recursos DEV' ), 
                /* This is the Title of the Group */
                'singular_name' => __( 'Recurso DEV' ), 
                /* This is the individual type */
                'all_items' => __( 'Todos los Recursos DEV' ), 
                /* the all items menu item */
                'add_new' => __( 'Añadir nuevo' ), 
                /* The add new menu item */
                'add_new_item' => __( 'Añadir nuevo' ), 
                /* Añadir nuevo Display Title */
                'edit' => __( 'Editar' ), 
                /* Edit Dialog */
                'edit_item' => __( 'Editar Recurso DEV' ), 
                /* Edit Display Title */
                'new_item' => __( 'Nuevo/a Recurso DEV' ), 
                /* New Display Title */
                'view_item' => __( 'View Recurso DEV' ), 
                /* View Display Title */
                'search_items' => __( 'Buscar Recurso DEV' ), 
                /* Search Custom Type Title */ 
                'not_found' =>  __( 'No se han encontrado Recursos DEV en la base de datos.' ), 
                /* This displays if there are no entries yet */ 
                'not_found_in_trash' => __( 'No hay Recursos DEV en la papelera' ), 
                /* This displays if there is nothing in the trash */
                'parent_item_colon' => ''
            ),             
            'description'                	=> __( 'Esto es un ejemplo de Recursos DEV' ), /* Custom Type Description */
			'show_ui'             			=> true,
			'show_in_menu'        			=> true,
			'show_in_rest'        			=> true,	 // Habilitar gutenberg en custom post type
			'show_in_nav_menus'   			=> true,
			'show_in_admin_bar'   			=> true,
			'menu_position'       			=> 5,
			'can_export'          			=> true,
			'capability_type'     			=> 'page',
            'publicly_queryable'         	=> true,
            'exclude_from_search'         	=> true,
            'query_var'                 	=> true,
            'menu_icon'                 	=> 'dashicons-shortcode',     /* the icon for the custom post type menu */
            'rewrite'						=> array( 'slug' => 'dev', 'with_front' => true ), /* you can specify its url slug */
			'has_archive' 					=> true, /* you can rename the slug here */
			'hierarchical' 					=> true,
			'public'              			=> true,
            'supports' 						=> array(  'title', 'editor', 'thumbnail', 'slug', 'custom-fields', 'page-attributes' )
        )
    );
    flush_rewrite_rules();
}

$admins = array( 
    'webmaster.branng'
);

// get the current user
$current_user = wp_get_current_user();
if (in_array($current_user->user_login, $admins)){
    add_action( 'init', 'post_cpt_dev');
}



/**
 * 
 * Añadir post per page a un post type archive.
 * 
 */
function set_posts_per_page_for_cpt_dev( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'cpt_dev' ) ) {
      $query->set( 'posts_per_page', '9999' );
    }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_cpt_dev' );