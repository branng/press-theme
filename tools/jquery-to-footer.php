<?php 
/*
* Enviar jquery de WordPress al footer
* fuente: https://desarrollowp.com/blog/tutoriales/mover-los-scripts-al-footer-wordpress/
* 2019
*/
function force_jquery_to_footer() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'force_jquery_to_footer' );
// Remove jQuery from old wp_print_scripts
//function remove_jquery_from_wp_print_scripts() {
//    wp_deregister_script( 'jquery' );
//}
//add_action( 'wp_print_scripts', 'remove_jquery_from_wp_print_scripts' );