<?php 
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

