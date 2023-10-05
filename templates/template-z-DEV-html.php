<?php /* Template Name: DEV Módulos
Template Post Type: cpt_dev
*/ get_header(); ?>

	<div class="container">
		<div class="content-section">
			<?php echo breadcrumb(); ?>
		</div>
	</div>
	

	
	<?php for($i=0;$i<3;$i++): ?>

	<div class="container">
		<div class="l-randLay">
			<div class="l-randLay__head">
				<h1 class="uppercase ht-three a-color__primaryTwo a-weightSemibold a-marginTop-10 a-marginBottom-10">HISTORY</h1>
			</div>
			<section class="l-randLay__txt" role="article">	
				<div class="m-genContent">
					<p>Our company started in 1966 as a sales office and quickly expanded with a technical office and a local production network. The German founders decided to establish their headquarters in the energetic city of Barcelona, aiming to combine German thoroughness with inspirational entrepreneurship. Today, after more than 50 years of experience and innovation, we have grown into a highly expert and flexible engineering company, with a dedicated focus on your specific drying or cooling process.</p>
				</div>
			</section>
			<div class="l-randLay__img a-bxImgRadius">
				<?php if ( has_post_thumbnail()) : the_post_thumbnail('600x390');  endif; ?>
			</div>
		</div>
	</div>
	<?php endfor; ?>
	
	<div class="total">
		<div class="m-sliderHome owl-carousel">
			
			
			<?php for($i=0;$i<3;$i++): ?>
			<div class="m-sliderHome__input" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-slider.png)">
				<div class="container">
					<div class="m-sliderHome__bx">
						<div class="m-sliderHome__txt">
							<p class="ht-one a-color__white">50 years of perfecting your dryers and coolers. Anywhere in the world.</p>
							<p class="ht-two a-color__white">Knowledgeable answers to all your drying and cooling questions. That’s what we’re good at and what you can trust us for.</p>
							<a href="" class="a-btnSecondary"> Contact </a> <a href="" class="a-btnBorderWhite">Know More</a>
						</div>
					</div>	
				</div>
			
				<svg width="1901" height="547" viewBox="0 0 1901 547" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 520.877L1659.39 546.489C1668.09 546.884 1676.54 543.473 1682.52 537.142L1875.95 332.478C1899.12 307.955 1906.61 272.517 1895.33 240.717L1809.93 0.000183105L0 0V520.877Z" fill="#0037D3"/>
</svg>


				
			</div>
			<?php endfor; ?>
			
		</div>
	
	
	
	</div>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/prism.css?v=<?php echo hash_file('md5', get_template_directory_uri() . '/assets/css/main.css'); ?>" media="all" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/prism.js" id="jquery-core-js"></script>
	

	
	<?php 
	// Referencia de array multidimensional
	// https'=>'//www.guidacode.com/2017/php/arrays-php-array-multidimensional/
	
	$texto_corto = 'Gracias por elegirnos';
	$texto_largo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
	
	
	$type = array(
		'ht-one' 				=> $texto_corto,
		'ht-two' 				=> $texto_corto,
		'ht-three'				=> $texto_corto,
		'ht-four' 				=> $texto_corto,
		'ht-body' 				=> $texto_largo,
		'ht-body-l' 			=> $texto_largo,
		'ht-body-m' 			=> $texto_largo,
		'ht-body-s' 			=> $texto_largo,
		'ht-body-xs' 			=> $texto_largo,
		'ht-one-bold' 			=> $texto_corto,
		'ht-two-bold' 				=> $texto_corto,
		'ht-three-bold'				=> $texto_corto,
		'ht-four-bold' 				=> $texto_corto,
		'ht-body-bold' 				=> $texto_largo,
		'ht-body-l-bold' 			=> $texto_largo,
		'ht-body-m-bold' 			=> $texto_largo,
		'ht-body-s-bold' 			=> $texto_largo,
		'ht-body-xs-bold' 			=> $texto_largo,
	);
	?>
	<div class="small-container">
	<?php foreach($type as $claseType => $textoType){ ?>
		<p class="<?php echo $claseType; ?>"><?php echo $textoType; ?></p>
		<pre><code class="language-css">.<?php echo $claseType; ?> </code></pre>
		<pre><code class="language-scss">@include <?php echo $claseType; ?>($color) </code></pre>
		<br>
		<br>
	<?php } ?>
	</div>
	
	
	
		
	<?php 
	$buttonsArra = array(
		'a-btnPrimary' => 'Ver más', 
		'a-btnSecondary' => 'Contact',
		'a-btnBorderPrimary' => 'Download',
		'button' => 'Descarga',
		'a-btnFilter' => 'Saber más'
	);
	?>
	<div class="small-container" style="padding: 40px;">
	<?php foreach($buttonsArra as $button => $textButton){ ?>
		<a href="" class="<?php echo $button; ?>"> <?php echo $textButton; ?></a>
		<button class="<?php echo $button; ?>"> <?php echo $textButton; ?></button>
		<a href="" class="<?php echo $button; ?> disabled"> <?php echo $textButton; ?></a>
		<br>
	<?php } ?>
	</div>
	
	
	
	<div class="small-container" style="background-color: #dddddd; padding: 40px;">
		<a href="" class="a-btnBorderWhite">Button</a>
		<button class="a-btnBorderWhite">Button</button>
		<button class="a-btnBorderWhite disabled">Button</button>
		<br>
	</div>

	
	
	<div class="total">
		<div class="content-section">
			<div class="m-bxHd text-center">
				<p class="ht-one a-color__primary">Social Proof</p>
				<p class="ht-three">Trusted by</p>
			</div>
			<div class="m-bxHd text-center">
				<p class="ht-one a-color__primary">Why choose Ingetecsa</p>
			</div>
			<div class="m-bxHd text-center max-620">
				<p class="ht-one a-color__primary">Welcome to our company</p>
				<p class="ht-two">Ingetecsa is an engineering company with its headquarters in Barcelona, acting worldwide. 
From the	 very beginning, we have specialized in industrial drying and cooling for the food, feed, chemical, and mineral industries.</p>
			</div>
		</div>
	</div>
	
	
	<div class="small-container">
		<?php echo do_shortcode('[contact-form-7 id="24" title="Contact form 1"]'); ?>
	</div>
	
	
	
	
	
	
	<div class="total">
		<div class="m-cntrCTA">
			<div class="container">
				<div class="bx">
					<p class="tit">Ingetecsa has a team of experts available to guide you through the complexity of your daily operations.</p>
					<p class="subtit">Together with you, we strive to optimize the quality of your end product and to reduce the total cost of ownership of your equipment.</p>
					<a href="" class="btn a-btnBorderPrimary" title="Meet the team">Meet the team</a>
				</div>
			</div>
			<svg width="371" height="270" viewBox="0 0 371 270" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M0 270H10.4462L36.3977 183.729C43.7618 159.252 61.5316 139.58 85.1537 129.756L371 10.8641V0.0375573L81.3076 120.529C54.9059 131.511 35.0449 153.498 26.8164 180.854L0 270Z" fill="#4471FA"/>
			</svg>
		</div>
	</div>
	
	
	<div class="total">
		<div class="content-section">
			<div class="m-bxHd text-center">
				<p class="ht-one a-color__primary no-margin-bottom">Social Proof</p>
				<p class="ht-three">Trusted by</p>
			</div>
			
			<div class="container">
				<div class="m-bxLoopLogos">
					<div class="m-bxLoopLogos__head total">
						<p class="uppercase ht-four a-color__primaryTwo a-weightSemibold">CHEMICAL / METAL</p>
					</div>
					<div class="loop">
						<?php for($i=0;$i<8;$i++): ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-loop.png" title="" alt="">
						<?php endfor; ?>
					</div>
				</div>
				<div class="m-bxLoopLogos">
					<div class="m-bxLoopLogos__head total">
						<p class="uppercase ht-four a-color__primaryTwo a-weightSemibold">Food</p>
					</div>
					<div class="loop">
						<?php for($i=0;$i<8;$i++): ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-loop-1.png" title="" alt="">
						<?php endfor; ?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	
	<div class="total a-bgcolor__gray-white">
		<div class="content-section">
			<div class="container">
				<div class="m-bxTxtImg">
					
					<div class="bxTxt">
						<p class="ht-four uppercase a-color__primaryTwo a-weightSemibold">CONTACT US</p>
						
						<p class="ht-body">Within the wide concept of thermal processes, Ingetecsa is specialized in the design, production and implementation of highly innovative dryers and coolers.</p>
						<p class="ht-three"><a href="/contact" class="a-color__primary-dark linkCorp" title="">Don’t hesitate to contact us for advice.</a></p>
						
						<p class="ht-body">We look forward to your challenging questions.</p>
						
					</div>
					
					<div class="bxImg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-contact-us.png" title="" alt="">
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="total">
		<div class="content-section">
			<div class="m-bxHd text-center">
				<p class="ht-one a-color__primary no-margin-bottom">Why choose Ingetecsa</p>
			</div>
			
			<div class="container">
				
				
				<div class="l-loopCards">
					<?php for($i=0;$i<4;$i++): ?>
					<div class="m-card m-card--primary m-card--download">
						<div class="m-card__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/download-example-image.png" title="" alt="">
						</div>
						<div class="m-card__txt link">
							<p> 
								<span class="tit">Helix Dryer</span> 
								<svg class="icon" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 10.875V18.875H21V10.875" stroke="#001E5F" stroke-width="1.5" stroke-linejoin="round"/>
									<path d="M6 7.875L11.1267 12.875L16 7.875" stroke="#001E5F" stroke-width="1.5"/>
									<path d="M11 0.875V12.875" stroke="#001E5F" stroke-width="1.5"/>
								</svg>
							</p>
						</div>
						<a href="/home" aria-label="hoME" title="home" class="m-card__link"></a>
					</div>
					<?php endfor; ?>
					<?php for($i=0;$i<4;$i++): ?>
					<div class="m-card m-card--primary-dark m-card--download">
						<div class="m-card__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/download-example-image.png" title="" alt="">
						</div>
						<div class="m-card__txt link">
							<p> 
								<span class="tit">Helix Dryer</span> 
								<svg class="icon" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 10.875V18.875H21V10.875" stroke="#001E5F" stroke-width="1.5" stroke-linejoin="round"/>
									<path d="M6 7.875L11.1267 12.875L16 7.875" stroke="#001E5F" stroke-width="1.5"/>
									<path d="M11 0.875V12.875" stroke="#001E5F" stroke-width="1.5"/>
								</svg>
							</p>
						</div>
						<a href="/home" aria-label="hoME" title="home" class="m-card__link"></a>
					</div>
					<?php endfor; ?>
				</div>
				<div class="l-loopCards">
					<?php for($i=0;$i<4;$i++): ?>
					<div class="m-card m-card--primary-dark">
						<div class="m-card__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/download-example-image.png" title="" alt="">
						</div>
						<div class="m-card__txt link">
							<p> 
								<span>Helix Dryer</span> 
							</p>
						</div>
						<a href="/home" aria-label="hoME" title="home" class="m-card__link"></a>
					</div>
					<?php endfor; ?>
					<?php for($i=0;$i<4;$i++): ?>
					<div class="m-card m-card--primary">
						<div class="m-card__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/download-example-image.png" title="" alt="">
						</div>
						<div class="m-card__txt link">
							<p> 
								<span>Helix Dryer</span> 
							</p>
						</div>
						<a href="/home" aria-label="hoME" title="home" class="m-card__link"></a>
					</div>
					<?php endfor; ?>
				</div>
				
				

				
				
				<div class="l-loopCards">
					<?php for($i=0;$i<4;$i++): ?>
					<div class="m-card m-card--more">
						<div class="m-card__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/download-example-image.png" title="" alt="">
						</div>
						<div class="m-card__txt link">
							<p><span class="tit">Dryers and coolers that fit <u>your</u> <u>needs</u> </span> </p>
							<p>Learn more about</p>
						</div>
						<a href="/home" aria-label="hoME" title="home" class="m-card__link"></a>
					</div>
					<div class="m-card m-card--more">
						<div class="m-card__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/download-example-image.png" title="" alt="">
						</div>
						<div class="m-card__txt link">
							<p><span class="tit"><u>Dryers</u> <u>and</u> <u>coolers</u> that fit your needs </span> </p>
							<p>Learn more about</p>
						</div>
						<a href="/home" aria-label="hoME" title="home" class="m-card__link"></a>
					</div>
					<?php endfor; ?>
				</div>
				
				
			</div>
			
		</div>
	</div>
	
	
	<?php /*
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

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

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar();  */ ?>
<?php get_footer(); ?>
