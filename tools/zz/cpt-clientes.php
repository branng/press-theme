<?php
function post_cpt_clientes() { 
    // creating (registering) the custom type 
    register_post_type( 'cpt_clientes', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array( 'labels' => array(
                'name' => __( 'Clientes' ), 
                /* This is the Title of the Group */
                'singular_name' => __( 'Cliente' ), 
                /* This is the individual type */
                'all_items' => __( 'Todos los Clientes' ), 
                /* the all items menu item */
                'add_new' => __( 'Añadir nuevo' ), 
                /* The add new menu item */
                'add_new_item' => __( 'Añadir nuevo Cliente' ), 
                /* Añadir nuevo Display Title */
                'edit' => __( 'Editar' ), 
                /* Edit Dialog */
                'edit_item' => __( 'Editar Cliente' ), 
                /* Edit Display Title */
                'new_item' => __( 'Nuevo/a Cliente' ), 
                /* New Display Title */
                'view_item' => __( 'View Cliente' ), 
                /* View Display Title */
                'search_items' => __( 'Buscar Cliente' ), 
                /* Search Custom Type Title */ 
                'not_found' =>  __( 'No se han encontrado Clientes en la base de datos.' ), 
                /* This displays if there are no entries yet */ 
                'not_found_in_trash' => __( 'No hay Clientes en la papelera' ), 
                /* This displays if there is nothing in the trash */
                'parent_item_colon' => ''
            ),             
            'description'                	=> __( 'Esto es un ejemplo de Cliente' ), /* Custom Type Description */
			'show_ui'             			=> true,
			'show_in_menu'        			=> true,
			'show_in_rest'        			=> true,	 // Habilitar gutenberg en custom post type
			'show_in_nav_menus'   			=> true,
			'show_in_admin_bar'   			=> true,
			'menu_position'       			=> 5,
			'can_export'          			=> true,
			'capability_type'     			=> 'page',
            'publicly_queryable'         	=> false,
            'exclude_from_search'         	=> true,
            'query_var'                 	=> true,
            'menu_icon'                 	=> 'dashicons-heart',     /* the icon for the custom post type menu */
            'rewrite'						=> array( 'slug' => '', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' 					=> true, /* you can rename the slug here */
			'capability_type' 				=> 'post',
			'hierarchical' 					=> false,
			'public'              			=> false,
            'supports' 						=> array(  'title', 'editor', 'thumbnail', 'slug', 'custom-fields', 'page-attributes' )
        )
    );
    flush_rewrite_rules();
}
add_action( 'init', 'post_cpt_clientes');



/*
/////////////////
/////////////////
// https://www.proydsl.com/eliminar-el-slug-de-la-url-de-un-custom-post-type/
/////////////////
/////////////////

add_action( 'pre_get_posts', 'cyb_include_custom_post_type_in_query' );
function cyb_include_custom_post_type_in_query( $query ) {

     // Si no es el query principal salir
     if ( ! $query->is_main_query() ) {
         return;
     }

     if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
         return;
     }

      // Incluir custom post type en el query
     if ( ! empty( $query->query['name'] ) ) {
          $post_types = array( 'post', 'page', 'cpt_clientes' );
          $query->set( 'post_type', $post_types );
     }
 }
 */