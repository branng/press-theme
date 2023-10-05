<?php /*
https://rudrastyh.com/gutenberg/remove-default-blocks.html
*/	



/**
 * Sets up theme defaults and registers support for various WordPress features.
 * https://richtabor.com/add-wordpress-theme-styles-to-gutenberg/
 */

function tabor_setup() {
	  // Add support for editor styles.
	  add_theme_support( 'editor-styles' );
  
	// Enqueue editor styles.
	add_editor_style( 'assets/scss/editor-style.css' );
}
add_action( 'after_setup_theme', 'tabor_setup' );








add_filter( 'allowed_block_types', 'tt_block_types' );
 
function tt_block_types( $allowed_blocks ) {
 
	return array(
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list',
		// 1.Common blocks category
		'core/paragraph',
		'core/image',
		'core/heading',
		//'core/gallery',
		'core/list',
		'core/quote',
		//'core/audio',
		'core/cover ',
		'core/cover-image',
		//'core/file',
		//'core/video',
		// 2.Formatting category
		// 'core/table',
		// 'core/verse',
		// 'core/code',
		// 'core/freeform',
		'core/html',
		// 'core/preformatted',
		// 'core/pullquote',
		// // 3.Layout Elements category
		'core/button',
		''
		// 'core/text-columns',
		// 'core/media-text',
		// 'core/more',
		// 'core/nextpage',
		// 'core/separator',
		// 'core/spacer',
		// // 4.Widgets category
		//'core/shortcode'
		// 'core/archives',
		// 'core/categories',
		// 'core/latest-comments',
		// 'core/latest-posts',
		// 'core/calendar',
		// 'core/rss',
		// 'core/search',
		// 'core/tag-cloud',
		// // 5.Embeds category
		// 'core/embed',
		// 'core-embed/twitter',
		// 'core-embed/youtube',
		// 'core-embed/facebook',
		// 'core-embed/instagram',
		// 'core-embed/wordpress',
		// 'core-embed/soundcloud',
		// 'core-embed/spotify',
		// 'core-embed/flickr',
		// 'core-embed/vimeo',
		// 'core-embed/animoto',
		// 'core-embed/cloudup',
		// 'core-embed/collegehumor',
		// 'core-embed/dailymotion',
		// 'core-embed/funnyordie',
		// 'core-embed/hulu',
		// 'core-embed/imgur',
		// 'core-embed/issuu',
		// 'core-embed/kickstarter',
		// 'core-embed/meetup-com',
		// 'core-embed/mixcloud',
		// 'core-embed/photobucket',
		// 'core-embed/polldaddy',
		// 'core-embed/reddit',
		// 'core-embed/reverbnation',
		// 'core-embed/screencast',
		// 'core-embed/scribd',
		// 'core-embed/slideshare',
		// 'core-embed/smugmug',
		// 'core-embed/speaker',
		// 'core-embed/ted',
		// 'core-embed/tumblr',
		// 'core-embed/videopress',
		// 'core-embed/wordpress-tv'
	);
	
	
	// Para habilitar bloques en ciertas páginas
	
	// 	if( $post->post_type === 'post' ) {
	// 		$allowed_blocks[] = 'core/shortcode';
	// 	}
	
	return $allowed_blocks;
}

