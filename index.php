<?php get_header(); ?>
	<div class="total u-pTB-m">
		<div class="container">
			<button onClick="actionMenu()">Abrir modal</button>
		</div>
	</div>
	<main class="container" role="main">
		<?php echo breadcrumb(); ?>
		<section>
			<h1><?php _e( 'Latest Posts', 'branngwp' ); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</main>
<?php // get_sidebar(); ?>

<?php get_footer(); ?>
