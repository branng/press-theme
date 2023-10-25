<?php get_header(); ?>
	<main role="main" class="small-container">
	<?php echo breadcrumb(); ?>
	<section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('full', array('class' => 'responsive-image')); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'branngwp' ); ?> <?php the_author_posts_link(); ?></span>
			<?php /*
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'branngwp' ), __( '1 Comment', 'branngwp' ), __( '% Comments', 'branngwp' )); ?></span>
			*/ ?>			
			<?php the_content(); // Dynamic Content ?>
			
			
			<?php 
			// Obtenemos los tags y las categorías del post actual
			$tags = get_the_tags();
			$categories = get_the_category();
			// Mostramos los tags y las categorías
			display_terms($tags, 'Tags');
			display_terms($categories, 'Categorías');
			?>
			
			<p><?php _e( 'This post was written by ', 'branngwp' ); the_author(); ?></p>
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			<?php // comments_template(); ?>


			<?php /*
			<a href="https://www.facebook.com/sharer/sharer.php?u=https://comuniza.com/">Share</a>
			<a href="https://twitter.com/intent/tweet?url=https://comuniza.com/&text=Texto%20a%20compartir">Share</a>
			<a href="https://www.linkedin.com/shareArticle?mini=true&url=https://comuniza.com/">Share</a>
			<a href="mailto:info@example.com?&subject=&cc=&bcc=&body=https://comuniza.com/%0ATexto%20a%20compartir">Share</a>
			*/ 
			$var_url = urlencode(get_the_permalink());
			$var_text_share = urldecode(get_the_title());
			?>
			<p class="u-mB-xs u-pB-xs ht-body-s">Opciones para compartir</p>
			<ul class="reset-list d-flex flex-row u-g-xs u-color-one">							
				<li>
					<a href="mailto:?subject=Te comparto este post de <?php bloginfo('name'); ?> &amp;body= <?php echo get_the_permalink(); ?>" title="Compártelo por mail" target="_blank">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0ZM9.6 19.75C9.6 20.164 9.9592 20.5 10.4 20.5H21.6C22.0408 20.5 22.4 20.164 22.4 19.75V12.4375L16.48 16.6C16.3376 16.7005 16.1688 16.75 16 16.75C15.8312 16.75 15.6624 16.7005 15.52 16.6L9.6 12.4375V19.75ZM16 15.0625L21.0664 11.5H10.9336L16 15.0625ZM10.4 10H21.6C22.9232 10 24 11.0095 24 12.25V19.75C24 20.9905 22.9232 22 21.6 22H10.4C9.0768 22 8 20.9905 8 19.75V12.25C8 11.0095 9.0768 10 10.4 10Z" fill="currentColor"/>
						</svg>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/share?url=<?php echo $var_url; ?>" target="_blank" rel="noreferrer noopener" title="Compártelo en twitter" target="_blank">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM22.1 11.5C22.8 11.4 23.4 11.3 24 11C23.6 11.7 23 12.3 22.3 12.7C22.5 17.4 19.1 22.5 13 22.5C11.2 22.5 9.5 21.9 8 21C9.7 21.2 11.5 20.7 12.7 19.8C11.2 19.8 10 18.8 9.6 17.5C10.1 17.6 10.6 17.5 11.1 17.4C9.6 17 8.5 15.6 8.5 14.1C9 14.3 9.5 14.5 10 14.5C8.6 13.5 8.1 11.6 9 10.1C10.7 12.1 13.1 13.4 15.8 13.5C15.3 11.5 16.9 9.5 19 9.5C19.9 9.5 20.8 9.9 21.4 10.5C22.2 10.3 22.9 10.1 23.5 9.7C23.3 10.5 22.8 11.1 22.1 11.5Z" fill="currentColor"/>
						</svg>
					</a>
				</li>
				<!--li>
					<a href="">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 18.8C14.5 18.8 13.2 17.6 13.2 16C13.2 14.5 14.4 13.2 16 13.2C17.5 13.2 18.8 14.4 18.8 16C18.8 17.5 17.5 18.8 16 18.8Z" fill="currentColor"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M19.4 9.2H12.6C11.8 9.3 11.4 9.4 11.1 9.5C10.7 9.6 10.4 9.8 10.1 10.1C9.86261 10.3374 9.75045 10.5748 9.61489 10.8617C9.57916 10.9373 9.5417 11.0166 9.5 11.1C9.48453 11.1464 9.46667 11.1952 9.44752 11.2475C9.34291 11.5333 9.2 11.9238 9.2 12.6V19.4C9.3 20.2 9.4 20.6 9.5 20.9C9.6 21.3 9.8 21.6 10.1 21.9C10.3374 22.1374 10.5748 22.2495 10.8617 22.3851C10.9374 22.4209 11.0165 22.4583 11.1 22.5C11.1464 22.5155 11.1952 22.5333 11.2475 22.5525C11.5333 22.6571 11.9238 22.8 12.6 22.8H19.4C20.2 22.7 20.6 22.6 20.9 22.5C21.3 22.4 21.6 22.2 21.9 21.9C22.1374 21.6626 22.2495 21.4252 22.3851 21.1383C22.4209 21.0626 22.4583 20.9835 22.5 20.9C22.5155 20.8536 22.5333 20.8048 22.5525 20.7525C22.6571 20.4667 22.8 20.0762 22.8 19.4V12.6C22.7 11.8 22.6 11.4 22.5 11.1C22.4 10.7 22.2 10.4 21.9 10.1C21.6626 9.86261 21.4252 9.75045 21.1383 9.61488C21.0627 9.57918 20.9833 9.54167 20.9 9.5C20.8536 9.48453 20.8048 9.46666 20.7525 9.44752C20.4667 9.3429 20.0762 9.2 19.4 9.2ZM16 11.7C13.6 11.7 11.7 13.6 11.7 16C11.7 18.4 13.6 20.3 16 20.3C18.4 20.3 20.3 18.4 20.3 16C20.3 13.6 18.4 11.7 16 11.7ZM21.4 11.6C21.4 12.1523 20.9523 12.6 20.4 12.6C19.8477 12.6 19.4 12.1523 19.4 11.6C19.4 11.0477 19.8477 10.6 20.4 10.6C20.9523 10.6 21.4 11.0477 21.4 11.6Z" fill="currentColor"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM12.6 7.7H19.4C20.3 7.8 20.9 7.9 21.4 8.1C22 8.4 22.4 8.6 22.9 9.1C23.4 9.6 23.7 10.1 23.9 10.6C24.1 11.1 24.3 11.7 24.3 12.6V19.4C24.2 20.3 24.1 20.9 23.9 21.4C23.6 22 23.4 22.4 22.9 22.9C22.4 23.4 21.9 23.7 21.4 23.9C20.9 24.1 20.3 24.3 19.4 24.3H12.6C11.7 24.2 11.1 24.1 10.6 23.9C10 23.6 9.6 23.4 9.1 22.9C8.6 22.4 8.3 21.9 8.1 21.4C7.9 20.9 7.7 20.3 7.7 19.4V12.6C7.8 11.7 7.9 11.1 8.1 10.6C8.4 10 8.6 9.6 9.1 9.1C9.6 8.6 10.1 8.3 10.6 8.1C11.1 7.9 11.7 7.7 12.6 7.7Z" fill="currentColor"/>
						</svg>
					</a>
				</li-->
				<li>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $var_url; ?>" target="_blank" rel="noreferrer noopener" title="Compártelo en facebook">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM16 8C20.4 8 24 11.6 24 16C24 20 21.1 23.4 17.1 24V18.3H19L19.4 16H17.2V14.5C17.2 13.9 17.5 13.3 18.5 13.3H19.5V11.3C19.5 11.3 18.6 11.1 17.7 11.1C15.9 11.1 14.7 12.2 14.7 14.2V16H12.7V18.3H14.7V23.9C10.9 23.3 8 20 8 16C8 11.6 11.6 8 16 8Z" fill="currentColor"/>
						</svg>
					</a>
				</li>
				<li>
				<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $var_url; ?>" title="Compártelo en Linkedin" target="_blank">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM8.2 13.3V24H11.6V13.3H8.2ZM8 9.9C8 11 8.8 11.8 9.9 11.8C11 11.8 11.8 11 11.8 9.9C11.8 8.8 11 8 9.9 8C8.9 8 8 8.8 8 9.9ZM20.6 24H23.8V17.4C23.8 14.1 21.8 13 19.9 13C18.2 13 17 14.1 16.7 14.8V13.3H13.5V24H16.9V18.3C16.9 16.8 17.9 16 18.9 16C19.9 16 20.6 16.5 20.6 18.2V24Z" fill="currentColor"/>
						</svg>
					</a>
				</li>
			</ul>






		</article>
	<?php endwhile; ?>
	<?php else: ?>
		<article>
			<h1><?php _e( 'Sorry, nothing to display.', 'branngwp' ); ?></h1>
		</article>
	<?php endif; ?>
	</section>
	<!-- /section -->
	</main>




	<?php 
	/**
	 * Añadir paginación entre posts
	 */
	get_template_part('/parts/post', 'navigation'); 
	/**
	 * Añadir paginación entre posts
	 */
	?>





	<div class="content-section">
		<div class="small-container">
			<h1>Posts relacionados</h1>
			<?php
			$related_query = new WP_Query(array(
				'post_type' => 'post',
				'category__in' => wp_get_post_categories(get_the_ID()),
				'post__not_in' => array(get_the_ID()),
				'posts_per_page' => 3,
				'orderby' => 'date',
			));
			?>
			<?php if ($related_query->have_posts()) { ?>
			
				<div class="related-posts-grid">
			
					<?php while ($related_query->have_posts()) { ?>
			
						<?php $related_query->the_post(); 
							
							get_template_part('input-loop'); 
							
						?>
				<?php } ?>
			
				</div>
			
				<?php wp_reset_postdata(); ?>
			
			<?php } ?>
		</div>
	</div>
	<div class="content-section">
		<div class="container">
		<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>
