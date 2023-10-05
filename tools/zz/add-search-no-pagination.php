<?php
// fuente
// https://wordpress.stackexchange.com/questions/30757/change-posts-per-page-count
add_action( 'pre_get_posts',  'set_posts_per_page'  );
function set_posts_per_page( $query ) {
  if (  $query->is_search() ) {
    $query->set( 'posts_per_page', 99999 );
  }

}