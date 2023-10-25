<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('m-cardPost u-type-color-base-text-principal'); ?>>
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<div class="__bxImg">	
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(300,300)); // Declare pixel size you need inside the array ?>
			</a>
		</div>
		<?php endif; ?>
		<div class="__bxCnt">
			<h2 class="ht-four">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<span class="date"><?php the_time('j.m.Y'); ?> <?php //  the_time('g:i a'); ?></span>
			<span class="author"><?php the_author_posts_link(); ?></span>
			<?php //  html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			<?php // edit_post_link(); ?>
		</div>
	</article>
	<!-- /article -->