<?php 
if( has_action( 'init' , 'wp_sitemaps_get_server' )){
	remove_action( 'init' , 'wp_sitemaps_get_server' );
}