<?php
/*
 * WordPress TOOLS
 * author: JSG
 * version: 2019.10.08
 * license: 
*/
include('acf-options-page.php');
include('add-page-to-install.php');
include('add-logos-admin.php');
include('remove-comments.php');
include('acf-restrict-content.php');
include('breadcrumb.php');
include('cargar-contact-form.php');
include('disable-emoji.php');
include('eliminar-fullscreen-gutenberg.php');
include('eliminar-jquery-migrate.php');
include('jquery-to-footer.php');
if( !current_user_can('administrator') ) {
    // include('html-minify.php');
}

include('remove-sitemaps-wp.php');
include('sanitize-filename.php');
//include('add-class-body.php');
include('add-menus.php');
include('cpt-dev.php');
include('remove-autop-cf7.php'); 
include('add-shortcodes.php');

// 
include('get-primary-taxonomy-term.php');


/**
 * Aladir display terms
 */
include('add-function-display-terms.php');

/*
Rutinas Ale
class Branng {

    public static function saveLog($aLog, $sErrorLog) {
        // echo "\r\n" . json_encode($aLog);
        error_log("\r\n" . json_encode($aLog), 3, $sErrorLog);
    }

    public static function var_dump_ret($mixed = null) {
        ob_start();
        var_dump($mixed);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public static function depurando($algo) {
        // if ($_SERVER["REMOTE_ADDR"] == ___IP_CREATIVAT___) {
        if (1) {
            // error_log("\r\n" . date("Y-m-d H:i:s") . "\t" . __FUNCTION__ . "\t DUMP_product: " . AcelStore::var_dump_ret($_product), 3, __DIR__ . "/kb3617-" . date("Ymd") . ".log");
            Branng::saveLog($algo, __DIR__ . "/depurando-" . date("Ymd") . ".log");
        }
    }

    public static function getIP() {
        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
            $ip = getenv("HTTP_CLIENT_IP");
        else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
            $ip = getenv("REMOTE_ADDR");
        else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
            $ip = $_SERVER['REMOTE_ADDR'];
        else
            $ip = "unknown";
        return($ip);
    }


}

Branng::getIP();

*/ 




function post_cpt_proyecto() { 
    // creating (registering) the custom type 
    register_post_type( 'cpt_proyecto', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
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
            'description'               => __( 'Esto es un ejemplo de Proyecto' ), /* Custom Type Description */
			'show_ui'             	=> true,
			'show_in_menu'        	=> true,
			'show_in_rest'        	=> true,	 // Habilitar gutenberg en custom post type
			'show_in_nav_menus'   	=> true,
			'show_in_admin_bar'   	=> true,
			'menu_position'       	=> 5,
			'can_export'          	=> true,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'query_var'             => true,
            'menu_icon'             => 'dashicons-heart',     /* the icon for the custom post type menu */
            'rewrite'				=> array( 'slug' => 'proyectos', 'with_front' => true ), /* you can specify its url slug */
			'has_archive' 			=> true, /* you can rename the slug here */
			'capability_type' 		=> 'post',
			'hierarchical' 			=> true,
			'public'              	=> true,
            'can_export'            => true, // Allows export in Tools > Export
            'taxonomies'            => array( 'cpt_proyecto'),
            //'_builtin'              => true,
            'supports' 				=> array(  'title', 'editor', 'thumbnail', 'slug', 'trackbacks', 'custom-fields', 'page-attributes' )
        )
    );
    flush_rewrite_rules();
}
add_action( 'init', 'post_cpt_proyecto');



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
          $post_types = array( 'post', 'page', 'cpt_proyecto' );
          $query->set( 'post_type', $post_types );
     }
 }
 */




add_action( 'init', 'create_tax_cat_proyecto', 0 );
//create a custom taxonomy name it Categoría de proyecto for your posts
function create_tax_cat_proyecto() {
	// Add new taxonomy, make it hierarchical like categories
	//first do the translations part for GUI
	$labels = array(
	  'name' 				=> _x( 'Categoría de proyecto', 'taxonomy general name' ),
	  'singular_name' 		=> _x( 'Categoría de proyecto', 'taxonomy singular name' ),
	  'search_items' 		=> __( 'Buscar Categoría de proyecto' ),
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
	register_taxonomy('cat_proyecto', array('cpt_proyecto'), array(
		'hierarchical' 			=> true,
		'labels' 				=> $labels,
		'show_ui' 				=> true,
		'show_in_rest' 			=> true,
		'show_admin_column' 	=> true,
		'query_var' 			=> true,
        'rewrite' 				=> array( 'slug' => 'proyectos/categoria' ),
		'public'				=> true
		// 'rewrite' 				=> array( 'slug' => 'tipo' ),
	));
}
