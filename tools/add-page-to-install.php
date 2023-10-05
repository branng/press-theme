<?php 
/**
 * Fuente https://www.isitwp.com/create-page-on-theme-activation/
 * Con este snippet creamos las páginas 
 * que nos interesan desde la instalación
 */

if (isset($_GET['activated']) && is_admin()){
  
	$args = array(
		"home" => array(
			"page-title" => "Home",
			"page-content" => 'Esta es la página de inicio',
			"page-template" => 'templates/template-home.php',
			'post_type' => 'page',
		),
		"cookies" => array(
			"page-title" => "Política de cookies",
			"page-content" => 'Cookies',
			"page-template" => 'templates/template-legal.php',
			'post_type' => 'page',
		),
		"avisolegal" => array(
			"page-title" => "Aviso legal",
			"page-content" => 'Aviso legal',
			"page-template" => 'templates/template-legal.php',
			'post_type' => 'page',
		),
		"buttons" => array(
			"page-title" 		=> 	"DEV Buttons",
			"page-content" 		=> 	'DEV Buttons',
			"page-template" 	=> 	'templates/template-z-DEV-buttons.php',
			'post_type' 		=> 	'cpt_dev',
		),
		"colors" => array(
			"page-title" 		=> "DEV Colors",
			"page-content" 		=> 'DEV Colors',
			"page-template" 	=> 'templates/template-z-DEV-color.php',
			'post_type' 		=> 'cpt_dev',
		),
		"form" => array(
			"page-title" 		=> "DEV form",
			"page-content" 		=> 'DEV form',
			"page-template" 	=> 'templates/template-z-DEV-form.php',
			'post_type' 		=> 'cpt_dev',
		),
		"grid" => array(
			"page-title" 		=> "DEV grid",
			"page-content" 		=> 'DEV grid',
			"page-template" 	=> 'templates/template-z-DEV-grid.php',
			'post_type' 		=> 'cpt_dev',
		),
		"containers" => array(
			"page-title" 		=> "DEV containers",
			"page-content" 		=> 'DEV containers',
			"page-template" 	=> 'templates/template-z-DEV-containers.php',
			'post_type' 		=> 'cpt_dev',
		),
		"sizes" => array(
			"page-title" 		=> "DEV spaces",
			"page-content" 		=> 'DEV spaces',
			"page-template" 	=> 'templates/template-z-DEV-spaces.php',
			'post_type' 		=> 'cpt_dev',
		),
		"text" => array(
			"page-title" 		=> "DEV Type",
			"page-content" 		=> 'DEV Type',
			"page-template" 	=> 'templates/template-z-DEV-type.php',
			'post_type' 		=> 'cpt_dev',
		)
	);

	$pages_to_create = $args;

	
	foreach($pages_to_create as $page => $pageType){
		
		// echo $pageType["page-title"];
		// echo $pageType["page-content"];
		// echo $pageType["page-template"];
		// echo $pageType["post_type"];

		$new_page_title = $pageType["page-title"];
		$new_page_content = $pageType["page-content"];
		$new_page_template = $pageType["page-template"]; //ex. template-custom.php. Leave blank if you don't want a custom page template.
	
		//don't change the code bellow, unless you know what you're doing
	
		$page_check = get_page_by_title($new_page_title);
		$new_page = array(
			'post_type' => $pageType["post_type"],
			'post_title' => $new_page_title,
			'post_content' => $new_page_content,
			'post_status' => 'publish',
			'post_author' => 1,
		);

		if(!isset($page_check->ID)){
			$new_page_id = wp_insert_post($new_page);
			if(!empty($new_page_template)){
				update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
			}
		}
	}


	/*
    $new_page_title = 'Home';
    $new_page_content = 'Esta es la página de inicio';
    $new_page_template = 'template-home.php'; //ex. template-custom.php. Leave blank if you don't want a custom page template.
  
    //don't change the code bellow, unless you know what you're doing
  
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
        'post_content' => $new_page_content,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
	*/ 

  
}