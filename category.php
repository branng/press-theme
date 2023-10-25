<?php get_header(); ?>
<div class="total">
	<main class="container" role="main">
		<!-- section -->
		<section>
			<h1><?php _e( 'Categories for ', 'branngwp' ); single_cat_title(); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
		<!-- /section -->
	</main>
</div>
<?php //  get_sidebar(); ?>
<?php get_footer(); ?>
