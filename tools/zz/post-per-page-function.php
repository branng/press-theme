<?php


/**
 * Con este snippet 
 */
// fuente https://wpdevdesign.com/how-to-change-posts-per-page-on-a-cpt-archive/

add_filter( 'pre_get_posts', 'custom_change_portfolio_posts_per_page' );
/**
 * Change Posts Per Page for Portfolio Archive.
 * 
 * @param object $query data
 *
 */
function custom_change_portfolio_posts_per_page( $query ) {

    if ( $query->is_post_type_archive( 'cpt_portfolio' ) && ! is_admin() && $query->is_main_query() ) {
          $query->set( 'posts_per_page', '3' );
    }
    return $query;
}


