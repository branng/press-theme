<div class="total u-pTB-m">
		<div class="container">
			<div class="row row-cols-2">
				
				<div class="col">
				<?php 
				$prevPost = get_next_post();
				if ( ! empty( $prevPost ) ) : 
					if ( has_post_thumbnail()) : 
					echo get_the_post_thumbnail( $prevPost->ID, "full", array('class' => 'total-image') ); 
					endif;
					?>
					<p class="uppercase __tit u-mB-0"><a href="<?php echo get_permalink( $prevPost->ID ); ?>" title="<?php echo get_the_title($prevPost->ID); ?>" class="__link">Anterior</a></p>
				<?php /*else : 
					$related_query = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'order' => 'DESC',
					));
					
					if ($related_query->have_posts()) :
					while ($related_query->have_posts()) : 
					$related_query->the_post(); 
						global $post;
					
						if ( has_post_thumbnail()) : 
						echo get_the_post_thumbnail( $post->ID, "full",  array('class' => 'total-image') ); 
						endif;
						?>
						<p class="uppercase __tit u-mB-0"><a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title($post->ID); ?>" class="__link">Anterior</a></p>		
					<?php endwhile;
					wp_reset_postdata(); 
					endif; */	
				endif; ?>
				</div>
				<div class="col">
		
				<?php 
				$nextPost = get_previous_post();
				if ( ! empty( $nextPost ) ): 
					if ( has_post_thumbnail()) :
						echo get_the_post_thumbnail( $nextPost->ID, "full", array('class' => 'total-image') ); 
					endif;
					?>
					<p class="uppercase __tit u-mB-0"><a href="<?php echo get_permalink( $nextPost->ID ); ?>" title="<?php echo get_the_title($nextPost->ID); ?>" class="__link">Siguiente</a></p>
					<?php 
				/*
				else : 
					$related_query = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'order' => 'ASC',
					));
					if ($related_query->have_posts()) :
					while ($related_query->have_posts()) : 
					$related_query->the_post(); 
						global $post;

						if ( has_post_thumbnail()) :
							echo get_the_post_thumbnail($post->ID, "full", array('class' => 'total-image') ); 
						endif;
						?>
						<p class="uppercase __tit u-mB-0"><a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title($post->ID); ?>" class="__link">Siguiente</a></p>
					<?php 
					endwhile;
					wp_reset_postdata(); 
					endif; 	*/ 
				endif; 
				?>

				</div>
			</div>
		</div>
	</div>