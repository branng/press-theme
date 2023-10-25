<?php get_header(); ?>
<div class="total">
	<main class="container" role="main">
		<?php echo breadcrumb(); ?>
		<section>
			<h1><?php _e( 'Archives', 'branngwp' ); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</main>
</div>
<?php //  get_sidebar(); ?>
<?php get_footer(); ?>
