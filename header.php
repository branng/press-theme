<?php 
header("X-Frame-Options: DENY");                 // Security
header("X-Content-Type-Options: nosniff");       // Security
header("X-XSS-Protection: 1; mode=block");       // Security
header("Strict-Transport-Security: max-age=31536000 ; includeSubDomains; preload "); 

include_once(locate_template('/tools/Mobile_Detect.php'));
//include_once("tools/Mobile_Detect.php");
$detectCompani = new Mobile_Detect;
$devTypeCompani = ($detectCompani->isMobile() ? ($detectCompani->isTablet() ? 'tablet' : 'phone') : 'computer');
/* $aConstantes["body_class"]=($devTypeCompani!="computer")?"body__touch":"";   // @todo que sea solo cuando es mobile. */
if($devTypeCompani == 'tablet'){
	$varTypeDisp = 'Tablet';
} else if($devTypeCompani == 'phone'){
	$varTypeDisp = 'Phone';
} else{
	// Is computer
	$varTypeDisp = 'Computer';
}
?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
        
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css?v=<?php echo hash_file('md5', get_template_directory_uri() . '/assets/css/main.css'); ?>" media="all" />




	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500&display=swap" rel="stylesheet">
	
	
	<?php 
	$colors = array(
		'--press-color-base-black' 					=> 'press_color_base_black',
		'--press-color-base-white' 					=> 'press_color_base_white',
		'--press-color-base-text-principal' 		=> 'press_color_base_text_principal',
		'--press-color-base-text-secondary' 		=> 'press_color_base_text_secondary',
		'--press-color-base-text-terciary' 			=> 'press_color_base_text_terciary',
		'--press-color-base-text-white' 			=> 'press_color_base_text_white',
		'--press-color-superficie-brand' 			=> 'press_color_superficie_brand',
		'--press-color-superficie-brand-black' 		=> 'press_color_superficie_brand_black',
		'--press-color-superficie-principal' 		=> 'press_color_superficie_principal', 
		'--press-color-superficie-principal-dark'	=> 'press_color_superficie_principal_dark',
		'--press-color-superficie-principal-light'	=> 'press_color_superficie_principal_light',
		'--press-color-superficie-secondary' 		=> 'press_color_superficie_secondary',
		'--press-color-superficie-secondary-dark' 	=> 'press_color_superficie_secondary_dark',
		'--press-color-superficie-secondary-light' 	=> 'press_color_superficie_secondary_light',
		'--press-button-color-principal-500' 		=> 'press_button_color_principal_500',
		'--press-button-color-principal-500' 		=> 'press_button_color_principal_500',
		'--press-button-color-principal-700' 		=> 'press_button_color_principal_700',
		'--press-button-color-principal-300'		=> 'press_button_color_principal_300',
		'--press-button-color-principal-100'		=> 'press_button_color_principal_100',
		'--press-button-color-secondary-500'		=> 'press_button_color_secondary_500',
		'--press-button-color-secondary-700'		=> 'press_button_color_secondary_700',
		'--press-button-color-secondary-300'		=> 'press_button_color_secondary_300',
		'--press-button-color-secondary-100'		=> 'press_button_color_secondary_100',
		'--press-button-color-white' 				=> 'press_button_color_white',
	);
	?>
	<style>
	:root {
		
	<?php 
	foreach($colors as $varCSS3 => $varACF){
		echo $varCSS3 . ' : ' . get_field($varACF, 'option') . '; ' ; 
	} 
	?>
	}
	</style>


	</head>
	<body <?php body_class(); ?>>
		
		
		<?php
		/*
		*
		tt_header_before_hook	
		*
		*/	
		do_action('tt_header_before_hook'); 
		/*
		*
		end tt_header_before_hook		
		*
		*/



		/**
		 * Extraemos el menu mobile
		 */
		get_template_part('/parts/menu-header', 'desk');



		/**
		 * Extraemos el menu mobile
		 */
		get_template_part('/parts/menu', 'mobile');
		
		
		
		
		
		/*
		*
		tt_header_after_hook	
		*
		*/	
		do_action('tt_header_after_hook'); 
		/*
		*
		end tt_header_after_hook		
		*
		*/
		
		// $current_user = wp_get_current_user();
		// var_dump($current_user);
		
		?>

