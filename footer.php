			<?php
			/*
			*
			tt_footer_before_hook	
			*
			*/	
			do_action('tt_footer_before_hook'); 
			/*
			*
			end tt_footer_before_hook		
			*
			*/
			
			/* footer */ ?>
			<footer class="o-footer u-pTB-m" role="contentinfo">
				<div class="container">
					<div class="o-footer__bxCol">
						<div class="flex-large">

							<?php if(has_custom_logo('custom_logo_footer')) : ?>
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_theme_mod('custom_logo_footer'); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>">
							</a>
							<?php else : ?>
							<a href="<?php echo home_url(); ?>"><h2><?php bloginfo('name'); ?></h2></a>
							<?php endif; ?>
							<p class="copyright"> &copy; <?php echo do_shortcode('[year]'); ?> Copyright <?php bloginfo('name'); ?>.</p>
						</div>
						<div class="o-footer__bxCol">
							<button data-target="modalRGPD" data-toggle="js-modal" class="btn btn-default"> Open modal </button>
						</div>
					</div>
				</div>
			</footer>
			<?php
			// footer  
			/*
			*
			tt_footer_after_hook	
			*
			*/	
			do_action('tt_footer_after_hook'); 
			/*
			*
			end tt_footer_after_hook		
			*
			*/
			?>
			
	
		
		
			<?php 
			if( class_exists('ACF') ) :
				if(get_field('rgpd_text', 'option')){ ?>
				<div id="modalRGPD" class="js-modal o-modal">
					<div class="o-modal__modal-window">
						<div class="o-modal__modal-content">
							<span class="a-closeModal" data-dismiss="js-modal">&times;</span>
							<div class="__bxCnt total u-p-m">
								<?php echo get_field('rgpd_text','option'); ?>		
								<button data-dismiss="js-modal">Cerrar</button>						
							</div>
						</div>
					</div>
				</div>
				<?php } 
			endif;
			?>
		
		
		
		<?php wp_footer(); ?>
		

		
		
	</body>
</html>
