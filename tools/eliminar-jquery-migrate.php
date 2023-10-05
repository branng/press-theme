<?php 
/*
* Eliminar jquery migrate
* https://especialistawp.com/quitar-la-llamada-a-jquery-migrate-js/
* 
*/
function remove_jquery_migrate( $scripts ) {
    if (isset( $scripts->registered['jquery'] ) ) {
        if ( $scripts->registered['jquery']->deps ) $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
    }
}
if(!is_admin()) add_action( 'wp_default_scripts', 'remove_jquery_migrate' );