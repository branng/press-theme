<?php
function post_cpt_portfolio() { 
    // creating (registering) the custom type 
    register_post_type( 'cpt_portfolio', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array( 'labels' => array(
                'name' => __( 'Proyectos' ), 
                /* This is the Title of the Group */
                'singular_name' => __( 'Proyecto' ), 
                /* This is the individual type */
                'all_items' => __( 'Todos los Proyectos' ), 
                /* the all items menu item */
                'add_new' => __( 'Añadir nuevo' ), 
                /* The add new menu item */
                'add_new_item' => __( 'Añadir nuevo Proyecto' ), 
                /* Añadir nuevo Display Title */
                'edit' => __( 'Editar' ), 
                /* Edit Dialog */
                'edit_item' => __( 'Editar Proyecto' ), 
                /* Edit Display Title */
                'new_item' => __( 'Nuevo/a Proyecto' ), 
                /* New Display Title */
                'view_item' => __( 'View Proyecto' ), 
                /* View Display Title */
                'search_items' => __( 'Buscar Proyecto' ), 
                /* Search Custom Type Title */ 
                'not_found' =>  __( 'No se han encontrado Proyectos en la base de datos.' ), 
                /* This displays if there are no entries yet */ 
                'not_found_in_trash' => __( 'No hay Proyectos en la papelera' ), 
                /* This displays if there is nothing in the trash */
                'parent_item_colon' => ''
            ),             
            'description'                	=> __( 'Esto es un ejemplo de Proyecto' ), /* Custom Type Description */
			'show_ui'             			=> true,
			'show_in_menu'        			=> true,
			'show_in_rest'        			=> true,	 // Habilitar gutenberg en custom post type
			'show_in_nav_menus'   			=> true,
			'show_in_admin_bar'   			=> true,
			'menu_position'       			=> 5,
			'can_export'          			=> true,
            'publicly_queryable'         	=> true,
            'exclude_from_search'         	=> true,
            'query_var'                 	=> true,
            'menu_icon'                 	=> 'dashicons-format-gallery',     /* the icon for the custom post type menu */
            'rewrite'						=> array( 'slug' => 'proyectos', 'with_front' => true ), /* you can specify its url slug */
			'has_archive' 					=> true, /* you can rename the slug here */
			'capability_type' 				=> 'post',
			'hierarchical' 					=> false,
			'public'              			=> true,
            'supports' => array(  'title', 'editor', 'thumbnail', 'slug', 'custom-fields', 'page-attributes' )
        )
    );
    flush_rewrite_rules();
}
add_action( 'init', 'post_cpt_portfolio');



/**
 * Con este snippet 
 */
// fuente https://wpdevdesign.com/how-to-change-posts-per-page-on-a-cpt-archive/

add_filter( 'pre_get_posts', 'custom_change_portfolio_posts_per_page' );
/**
 * Change Posts Per Page for Portfolio Archive.
 * 
 * @param object $query data
 *
 */
function custom_change_portfolio_posts_per_page( $query ) {

    if ( $query->is_post_type_archive( 'cpt_portfolio' ) && ! is_admin() && $query->is_main_query() ) {
          $query->set( 'posts_per_page', '3' );
    }
    return $query;
}



 
add_action( 'init', 'create_tax_category_portfolio', 0 );
 
//create a custom taxonomy name it Categoría de proyecto for your posts
function create_tax_category_portfolio() {
 
	// Add new taxonomy, make it hierarchical like categories
	//first do the translations part for GUI
	$labels = array(
	  'name' 				=> _x( 'Categoría de proyecto', 'taxonomy general name' ),
	  'singular_name' 		=> _x( 'Categoría de proyecto', 'taxonomy singular name' ),
	  'search_items' 		=>  __( 'Buscar Categoría de proyecto' ),
	  'all_items' 			=> __( 'Todas las Categoría de proyecto' ),
	  'parent_item' 		=> __( 'Categoría de proyecto padre' ),
	  'parent_item_colon' 	=> __( 'Categoría de proyecto padre:' ),
	  'edit_item' 			=> __( 'Editar Categoría de proyecto' ), 
	  'update_item' 		=> __( 'Subir Categoría de proyecto' ),
	  'add_new_item' 		=> __( 'Añadir nueva Categoría de proyecto' ),
	  'new_item_name' 		=> __( 'Nueva Categoría de proyecto' ),
	  'menu_name' 			=> __( 'Categoría de proyecto' ),
	);	
	
	// Now register the taxonomy
	register_taxonomy('category_portfolio',array('cpt_portfolio'), array(
		'hierarchical' 			=> true,
		'labels' 				=> $labels,
		'show_ui' 				=> true,
		'show_in_rest' 			=> true,
		'show_admin_column' 	=> true,
		'query_var' 			=> true,
        'rewrite' 				=> array( 'slug' => 'tipo' ),
		// 'rewrite' 				=> array( 'slug' => 'tipo' ),
	));
 
}

/*
/////////////////
/////////////////
// https://www.proydsl.com/eliminar-el-slug-de-la-url-de-un-custom-post-type/
/////////////////
/////////////////

  add_action( 'pre_get_posts', 'cyb_include_custom_post_type_in_query_portfolio' );
  function cyb_include_custom_post_type_in_query_portfolio( $query ) {
  
       // Si no es el query principal salir
       if ( ! $query->is_main_query() ) {
           return;
       }
  
       if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
           return;
       }
  
        // Incluir custom post type en el query
       if ( ! empty( $query->query['name'] ) ) {
            $post_types = array( 'post', 'page', 'cpt_portfolio' );
            $query->set( 'post_type', $post_types );
       }
   }
*/ 