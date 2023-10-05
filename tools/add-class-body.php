<?php 
add_filter( 'body_class', function( $classes ) {


	if ( is_front_page() or is_home()) {
		$classes[] = 'p-singInf';
	}
	// 	if ( is_singular( 'cpt_p' ) ) {
	// 		$classes[] = 'p-singPren';
	// 	}
	return array_merge( $classes, array( 'custom' ) );
}
);