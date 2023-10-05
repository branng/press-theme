<header class="o-header" role="banner">
	<div class="o-header__lay container">
		<div class="__bxCol">
			<div class="a-logo">
				<?php if(has_custom_logo('custom_logo')) : ?>
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_theme_mod('custom_logo'); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>">
				</a>
				<?php else : ?>
				<a href="<?php echo home_url(); ?>"><h2><?php bloginfo('name'); ?></h2></a>
				<?php endif; ?>
				
			</div>
		</div>
		<div class="__bxCol">
			<nav class="m-navHeader" role="navigation">


						
				<?php 
				if ( has_nav_menu( 'header-menu' ) ) {
					echo menu_principal(1); 
				}
				
				// echo menu_principal(1); ?>
			</nav>
			<button class="a-btnBrgr" onClick="actionMenu()">
				<svg xmlns="http://www.w3.org/2000/svg" width="37.261" height="14.5" viewBox="0 0 37.261 14.5">
					<g transform="translate(-1802.739 -45.75)">
						<path d="M-3361-5654.029h-37.261v-1.5H-3361Z" transform="translate(5201.003 5701.279)"></path>
						<path d="M-3371-5654.029h-27.264v-1.5H-3371Z" transform="translate(5211 5708.279)"></path>
						<path d="M-3378.476-5654.029h-19.788v-1.5h19.788Z" transform="translate(5218.476 5714.279)"></path>
					</g>
				</svg>
			</button>
		</div>
	</div>
</header>