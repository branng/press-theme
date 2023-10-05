<?php /* Template Name: DEV color
Template Post Type: cpt_dev
*/ get_header(); ?>
<div class="content-section">
	<div class="container">
		<div class="content-section">
			<?php echo breadcrumb(); ?>
		</div>
	</div>






	<div class="container">
		<div class="content-section">
	<?php 
	$args = array(
		"home" => array(
			"page-title" => "Home",
			"page-content" => 'Esta es la página de inicio',
			"page-template" => 'template-home.php',
			'post_type' => 'page',
		),
		"buttons" => array(
			"page-title" => "Template Buttons",
			"page-content" => 'Template Buttons',
			"page-template" => 'template-pruebas-buttons.php',
			'post_type' => 'cpt_dev',
		)
	);

	$pages_to_create = $args;

	foreach($pages_to_create as $page => $pageType){
		echo $pageType["page-title"];
		echo $pageType["page-content"];
		echo $pageType["page-template"];
		echo $pageType["post_type"];
	}


	?>
			</div>
	</div>


	<?php 
	// Referencia de array multidimensional
	// https'=>'//www.guidacode.com/2017/php/arrays-php-array-multidimensional/
	$colores = array(	
		'Colores Coporativos' => array(
			"u-bg-black" => 		'$black',
			"u-bg-black-100" => 	'$black-100',
			"u-bg-violet" =>		'$violet',
			"u-bg-gray" =>			'$gray',
			"u-bg-gray-100" => 		'$gray-100',
			"u-bg-gray-white" =>	'$gray-white',
			"u-bg-blue" => 			'$blue',
			"u-bg-blue-100" => 		'$blue-100',
			"u-bg-blue-200" => 		'$blue-200',
			"u-bg-green" => 		'$green',
			"u-bg-green-100" => 	'$green-100',
			"u-bg-green-200" => 	'$green-200',
			"u-bg-white" => 		'$white'
		)
	);
	?>

	<div class="container">
		<div class="l-loopColors a-marginBottom-100">
			<div class="head">
				<h5><?php echo $tipo; ?></h5>
			</div>
			<div class="loop">
				<?php foreach($colores as $tipo => $colores){ ?>
				
				<?php foreach( $colores as $nombreColor => $valorColor){ ?>
					<div class="m-cardColor">
						<div class="m-cardColor__bxColor <?php echo $nombreColor; ?>"></div>
						<div class="m-cardColor__bxTxt">
							<p>
								<strong></strong> <span>.<?php echo $nombreColor; ?></span>
								<br>
								<strong></strong> <span><?php echo $valorColor; ?></span>
							</p>				
						</div>
					</div>
				<?php } ?>
				<?php } ?>
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
