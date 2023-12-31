<?php /* Template Name: Template Legal */ 
get_header(); ?>
<div class="total u-pTB-l">
	<main role="main" class="small-container">
		<h1><?php the_title(); ?></h1>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
				<br class="clear">
				<?php edit_post_link(); ?>
			</article>
			<?php endwhile; ?>
		<?php else: ?>
			<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'branngwp' ); ?></h2>
			</article>
			<?php endif; ?>
	</main>
</div>
<?php get_footer(); ?>
