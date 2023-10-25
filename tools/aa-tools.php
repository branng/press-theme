<?php
/*
 * WordPress TOOLS
 * author: JSG
 * version: 2019.10.08
 * license: 
*/
include('acf-options-page.php');
include('add-page-to-install.php');
include('add-logos-admin.php');
include('remove-comments.php');
include('acf-restrict-content.php');
include('breadcrumb.php');
include('cargar-contact-form.php');
include('disable-emoji.php');
include('eliminar-fullscreen-gutenberg.php');
include('eliminar-jquery-migrate.php');
include('jquery-to-footer.php');
if( !current_user_can('administrator') ) {
    include('html-minify.php');
}
// include('remove-sitemaps-wp.php');
include('sanitize-filename.php');
//include('add-class-body.php');
include('add-menus.php');
include('cpt-dev.php');
include('remove-autop-cf7.php'); 
include('add-shortcodes.php');
include('get-primary-taxonomy-term.php');
/**
 * Aladir display terms
 */
include('add-function-display-terms.php');