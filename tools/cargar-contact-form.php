<?php 
/*
* Carga contact form solo si 
* la página tiene un formulario
* fuente: https://dannyvankooten.com/only-load-contact-form-7-scripts-when-needed/
* 	
*/
function load_scripts_cf7() {

    $load_scripts = false;

    if( is_singular() ) {
	    
    	$post = get_post();

    	if( has_shortcode($post->post_content, 'contact-form-7') ) {
        	$load_scripts = true;
    	}

    }

    if( ! $load_scripts ) {
        wp_dequeue_script( 'contact-form-7' );
        wp_dequeue_style( 'contact-form-7' );
    }

}

add_action( 'wp_enqueue_scripts', 'load_scripts_cf7', 99 );