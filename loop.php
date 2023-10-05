<?php if (have_posts()): while (have_posts()) : the_post(); 

	get_template_part('input-loop'); 

endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'branngwp' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
