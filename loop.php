<?php if (have_posts()): ?>
<div class="row row-cols-1 d-flex gy-5">
	<?php while (have_posts()) : the_post(); ?>
	<div class="col">
		<?php get_template_part('input-loop'); ?>
	</div>
	<?php endwhile; ?>
</div>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'branngwp' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
