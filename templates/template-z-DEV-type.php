<?php /* Template Name: Pruebas text 
Template Post Type: cpt_dev
*/ get_header(); ?>

	<div class="container">
		<div class="content-section">
			<?php echo breadcrumb(); ?>
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
		'ht-one' 			=> $texto_corto,
		'ht-two-l' 			=> $texto_corto,
		'ht-two' 			=> $texto_corto,
		'ht-two-m' 			=> $texto_corto,
		'ht-three' 			=> $texto_corto,
		'ht-body-l' 		=> $texto_corto,
		'ht-body' 			=> $texto_corto,
		'ht-body-m' 		=> $texto_corto,
		'ht-body-s' 		=> $texto_corto,
	);
	?>
	<div class="container">
	<?php foreach($type as $claseType => $textoType){ ?>
		<p class="<?php echo $claseType; ?>"><?php echo $textoType; ?></p>
		<p class="<?php echo $claseType; ?> a-amarillo"><?php echo $textoType; ?></p>
		<p class="<?php echo $claseType; ?> a-gris"><?php echo $textoType; ?></p>
		<p class="<?php echo $claseType; ?> a-slab"><?php echo $textoType; ?></p>
		<p class="<?php echo $claseType; ?> a-slab a-amarillo"><?php echo $textoType; ?></p>
		<p class="<?php echo $claseType; ?> a-slab a-gris"><?php echo $textoType; ?></p>
		<pre><code class="language-css">.<?php echo $claseType; ?> or  @include <?php echo $claseType; ?>();</code></pre>
		<br>
		<br>
	<?php } ?>
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
