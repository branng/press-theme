<?php /* Template Name: Home
*/ get_header(); ?>

<div class="js-slideDemo m-slideDemo u-pB-m" style="overflow: hidden;" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
	<div class="container">
		<div class="__loop --dots-color-one u-pB-m">
			<div class="__item">
				<div class="total u-pTB-xl u-pRL-s u-bg-color-one u-color-white text-center u-border-radius-xxs">
					<p class="ht-body-l u-mB-0">Slider one</p>
					<p class="ht-one u-mB-s">Slider one</p>
				
					<a href="" class="button">Ir a la home</a>
				</div>
			</div>
			<div class="__item">
				<div class="total u-pTB-xl u-pRL-s u-bg-color-three u-color-white text-center u-border-radius-xxs">
					<p class="ht-body-l u-mB-0">Slider one</p>
					<p class="ht-one u-mB-s">Slider one</p>
					<a href="" class="button">Ir a la home</a>
				</div>
			</div>
			<div class="__item">
				<div class="total u-pTB-xl u-pRL-s u-bg-color-four u-color-three text-center u-border-radius-xxs">
					<p class="ht-body-l u-mB-0">Slider one</p>
					<p class="ht-one u-mB-s">Slider one</p>
					<a href="" class="button">Ir a la home</a>
				</div>
			</div>
			<div class="__item">
				<div class="total u-pTB-xl u-pRL-s u-bg-color-one u-color-white text-center u-border-radius-xxs">
					<p class="ht-body-l u-mB-0">Slider one</p>
					<p class="ht-one u-mB-s">Slider one</p>
					<a href="" class="button">Ir a la home</a>
				</div>
			</div>
		</div>
		<div class="__footer total u-color-three u-pB-s">
			<div class="__arrow-prev a-arrowCircle">
				<svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><g transform="translate(18227 2395)"><path d="M27,1A26.007,26.007,0,0,0,16.88,50.957,26.007,26.007,0,0,0,37.12,3.043,25.836,25.836,0,0,0,27,1m0-1A27,27,0,1,1,0,27,27,27,0,0,1,27,0Z" transform="translate(-18173 -2341) rotate(180)"/><path d="M24.1,13.244a.709.709,0,0,0-.06-.292.757.757,0,0,0-.177-.245L16.682,5.515a.972.972,0,0,0-.292-.217.71.71,0,0,0-.289-.062.684.684,0,0,0-.5.2.674.674,0,0,0-.2.5.852.852,0,0,0,.046.279.629.629,0,0,0,.144.235l3.232,3.258,3.666,3.408.168-.436-3.165-.151H4.863a.686.686,0,0,0-.51.2.766.766,0,0,0,0,1.03.686.686,0,0,0,.51.2H19.488l3.165-.151-.168-.428-3.666,3.4L15.587,20.04a.6.6,0,0,0-.143.232.855.855,0,0,0-.048.283.674.674,0,0,0,.2.5.684.684,0,0,0,.5.2.738.738,0,0,0,.526-.226l7.238-7.244a.885.885,0,0,0,.177-.256A.684.684,0,0,0,24.1,13.244Z" transform="translate(-18185 -2355) rotate(180)"/></g></svg>
			</div>
			<div class="__arrow-next a-arrowCircle">
				<svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54">
					<g transform="translate(17968 2395)">
						<path class="__circle" d="M27,1A26.007,26.007,0,0,0,16.88,50.957,26.007,26.007,0,0,0,37.12,3.043,25.836,25.836,0,0,0,27,1m0-1A27,27,0,1,1,0,27,27,27,0,0,1,27,0Z" transform="translate(-17968 -2395)"/>
						<path class="__arrow" d="M24.1,13.244a.709.709,0,0,0-.06-.292.757.757,0,0,0-.177-.245L16.682,5.515a.972.972,0,0,0-.292-.217.71.71,0,0,0-.289-.062.684.684,0,0,0-.5.2.674.674,0,0,0-.2.5.852.852,0,0,0,.046.279.629.629,0,0,0,.144.235l3.232,3.258,3.666,3.408.168-.436-3.165-.151H4.863a.686.686,0,0,0-.51.2.766.766,0,0,0,0,1.03.686.686,0,0,0,.51.2H19.488l3.165-.151-.168-.428-3.666,3.4L15.587,20.04a.6.6,0,0,0-.143.232.855.855,0,0,0-.048.283.674.674,0,0,0,.2.5.684.684,0,0,0,.5.2.738.738,0,0,0,.526-.226l7.238-7.244a.885.885,0,0,0,.177-.256A.684.684,0,0,0,24.1,13.244Z" transform="translate(-17956 -2381)"/>
					</g>
				</svg>	
			</div>
		</div>
	</div>
</div>


	<div class="total u-pTB-m">
		<div class="container">
			<button onClick="actionMenu()">Abrir modal</button>
		</div>
	</div>
	<main class="container" role="main">
		<?php echo breadcrumb(); ?>
		<!--button class="a-btnVimeo lets-play" data-video="https://vimeo.com/574758651">HOlaaaaa!</button-->
		<div id="video-wrap" class="m-modalVideo"></div>   
		<section>
			<h1><?php _e( 'Latest Posts', 'branngwp' ); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</main>
<?php // get_sidebar(); ?>

<?php get_footer(); ?>