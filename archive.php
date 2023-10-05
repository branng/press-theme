<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		
		<?php echo breadcrumb(); ?>
		
		<section>

			<h1><?php _e( 'Archives', 'branngwp' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
