<?php get_header(); ?>
	<main role="main" class="container">
		<!-- section -->
		<?php echo breadcrumb(); ?>
		<h1 class="ht-one"> Recursos </h1>
		<div class="total u-pTB-l">
			<section class="row row-cols-2 g-4 u-mB-l">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class('col u-nmB-lastchild'); ?>>
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
					<p class="ht-three">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> ↗ </a>
					</p>
				</article>
				<!-- /article -->
				<?php endwhile; ?>
				<?php else: ?>
				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'branngwp' ); ?></h2>
				</article>
				<!-- /article -->
				<?php endif; ?>
				<?php get_template_part('pagination'); ?>
			</section>
			<!-- /section -->
		</div>
	</main>
<div class="container">
	<?php // get_sidebar(); ?>
</div>
<?php get_footer(); ?>
