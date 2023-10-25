<?php /* Template Name: Pruebas text 
Template Post Type: cpt_dev
*/ get_header(); ?>

<div class="container">
		<div class="content-section">
			<?php echo breadcrumb(); ?>
		</div>
	</div>
	
	
	
	<?php 
	// Referencia de array multidimensional
	// https'=>'//www.guidacode.com/2017/php/arrays-php-array-multidimensional/
	
	$texto_corto = 'Press-theme type styles';
	$texto_largo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

	
	function repeaterType(){}

	$argsGeneralType = array(

	);
	
	$type = array(
		'ht-one 0' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_corto
		),
		'ht-one 1' => array(
			'color-bg' => 'u-bg-color-superficie-brand',
			'color-type' => 'u-type-color-base-text-white',
			'var-texto' => $texto_corto
		),
		'ht-one 2' => array(
			'color-bg' => 'u-bg-color-superficie-principal',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_corto
		),
		'ht-one 3' => array(
			'color-bg' => 'u-bg-color-superficie-secondary',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_corto
		),
		'ht-one 4' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-terciary',
			'var-texto' => $texto_corto
		),
		'ht-two 0' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_corto
		),
		'ht-two 1' => array(
			'color-bg' => 'u-bg-color-superficie-brand',
			'color-type' => 'u-type-color-base-text-white',
			'var-texto' => $texto_corto
		),
		'ht-two 2' => array(
			'color-bg' => 'u-bg-color-superficie-principal',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_corto
		),
		'ht-two 3' => array(
			'color-bg' => 'u-bg-color-superficie-secondary',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_corto
		),
		'ht-two 4' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-terciary',
			'var-texto' => $texto_corto
		),
		'ht-three 0' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_corto
		),
		'ht-three 1' => array(
			'color-bg' => 'u-bg-color-superficie-brand',
			'color-type' => 'u-type-color-base-text-white',
			'var-texto' => $texto_corto
		),
		'ht-three 2' => array(
			'color-bg' => 'u-bg-color-superficie-principal',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_corto
		),
		'ht-three 3' => array(
			'color-bg' => 'u-bg-color-superficie-secondary',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_corto
		),
		'ht-three 4' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-terciary',
			'var-texto' => $texto_corto
		),
		'ht-body 0' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_largo
		),
		'ht-body 1' => array(
			'color-bg' => 'u-bg-color-superficie-brand',
			'color-type' => 'u-type-color-base-text-white',
			'var-texto' => $texto_largo
		),
		'ht-body 2' => array(
			'color-bg' => 'u-bg-color-superficie-principal',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_largo
		),
		'ht-body 3' => array(
			'color-bg' => 'u-bg-color-superficie-secondary',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_largo
		),
		'ht-body 4' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-terciary',
			'var-texto' => $texto_largo
		),
		'ht-body-s 0' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_largo
		),
		'ht-body-s 1' => array(
			'color-bg' => 'u-bg-color-superficie-brand',
			'color-type' => 'u-type-color-base-text-white',
			'var-texto' => $texto_largo
		),
		'ht-body-s 2' => array(
			'color-bg' => 'u-bg-color-superficie-principal',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_largo
		),
		'ht-body-s 3' => array(
			'color-bg' => 'u-bg-color-superficie-secondary',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_largo
		),
		'ht-body-s 4' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-terciary',
			'var-texto' => $texto_largo
		),
		'ht-body-xs 0' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_largo
		),
		'ht-body-xs 1' => array(
			'color-bg' => 'u-bg-color-superficie-brand',
			'color-type' => 'u-type-color-base-text-white',
			'var-texto' => $texto_largo
		),
		'ht-body-xs 2' => array(
			'color-bg' => 'u-bg-color-superficie-principal',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_largo
		),
		'ht-body-xs 3' => array(
			'color-bg' => 'u-bg-color-superficie-secondary',
			'color-type' => 'u-type-color-base-text-principal',
			'var-texto' => $texto_largo
		),
		'ht-body-xs 4' => array(
			'color-bg' => 'u-bg-color-superficie-white',
			'color-type' => 'u-type-color-base-text-terciary',
			'var-texto' => $texto_largo
		),
	);
	
	foreach($type as $typeNameClass => $typeArgs) : ?>
	<div class="total <?php echo $typeArgs["color-type"] . ' ' . $typeArgs["color-bg"]; ?> u-pTB-l">
		<div class="container">
			<p class="<?php echo $typeNameClass; ?>"><?php echo $typeArgs["var-texto"]; ?></p>
			<p class="<?php echo $typeNameClass; ?> u-medium"><?php echo $typeArgs["var-texto"]; ?></p>
			<p class="ht-body-xs"><?php echo '.' . $typeNameClass . " ." . $typeArgs["color-type"]; ?></p>
			<!--pre><code class="language-css">.<?php echo $typeNameClass; ?> or  @include <?php echo $typeNameClass; ?>();</code></pre-->
		</div>
	</div>
	<?php endforeach; ?>
	
	
	
	

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
