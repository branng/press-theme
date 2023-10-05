<?php 
// fuente https://ayudawp.com/activar-desactivar-pantalla-completa-editor/
function ayudawp_desactivar_pantalla_completa_editor_bloques() {
    $script = "window.onload = function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } }";
    wp_add_inline_script( 'wp-blocks', $script );
}
add_action( 'enqueue_block_editor_assets', 'ayudawp_desactivar_pantalla_completa_editor_bloques' );