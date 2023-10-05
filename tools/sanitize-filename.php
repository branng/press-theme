<?php 
/**
 * WordPress allows UTF8 characters such as copyright symbol in filenames but these break in Safari
 *
 * @see https://wordpress.org/support/topic/uploaded-image-with-accents-in-name-image-dont-show-in-safari-6 for original function
 * @see https://core.trac.wordpress.org/ticket/22363 for progress on fixing this bug
 *
 * #wordpress
 */
function sanitize_filename_on_upload($filename) {
	$ext = explode('.', $filename);
	$ext = end($ext);
	$sanitized = preg_replace('/[^a-zA-Z0-9-_.]/','', substr($filename, 0, -(strlen($ext)+1)));
	$sanitized = str_replace('.','-', $sanitized);
	return strtolower($sanitized.'.'.$ext);
}
add_filter('sanitize_file_name', 'sanitize_filename_on_upload', 10);