<?php /*
https://richtabor.com/disable-gutenberg-colors/
*/	
/**
 * Disable all colors within Gutenberg.
 */
function tt_gutenberg_disable_all_colors() {
    add_theme_support( 'editor-color-palette' );
	add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'tt_gutenberg_disable_all_colors' );

