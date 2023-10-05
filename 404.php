<?php get_header(); ?>
<div class="container">
	<div class="total u-pTB-xl">
		<h1 class="ht-one"><?php _e( 'Error 404', 'branng' ); ?></h1>
		<h2 class="ht-four"><?php _e( 'La página que estás buscando ya no existe.', 'branng' ); ?></h2>
		<p><?php _e( 'Quizás pueda volver a la página de inicio del sitio y ver si puede encontrar lo que está buscando.', 'branng' ); ?></p>
		<br>
		<a href="<?php echo home_url(); ?>" class=""><?php _e( 'Volver a la home', 'branng' ); ?></a>
	</div>
</div>
<?php // get_sidebar(); ?>

<?php get_footer(); ?>
