<?php 

// Add Thumbnail Theme Support
add_theme_support('post-thumbnails');
add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('450x450', 450, 450, array('center','center'), true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
add_image_size('900x900', 900, 900, array('center','center'), true);
add_image_size('1920x1080', 1920, 1080, array('center','center'), true);
add_image_size('800x450', 800, 450, array('center','center'), true);
add_image_size('360x740', 360, 740, array('center','center'), true);


add_filter( 'image_size_names_choose', 'child_custom_sizes' );

	function child_custom_sizes( $sizes ) {
	
	return array_merge( $sizes, array(
		'1920x1080' => 			__( '1920 x 1080' ),
		'800x450' => 			__( '850 x 450' )
		//'archive-card' => 			__( 'Archive Card (soft crop)' ),
	) );

}