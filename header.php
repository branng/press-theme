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

