<?php 
/* Template Name: DEV color
Template Post Type: cpt_dev
*/ get_header(); ?>
<div class="content-section">
	<div class="container">
		<div class="content-section">
			<?php echo breadcrumb(); ?>
		</div>
	</div>
	<?php 
	// Referencia de array multidimensional
	// https'=>'//www.guidacode.com/2017/php/arrays-php-array-multidimensional/
	$colores = array(	
		'Background Colors' => array(
			"u-bg-color-superficie-brand",
			"u-bg-color-superficie-brand-black",
			"u-bg-color-superficie-principal",
			"u-bg-color-superficie-principal-light",
			"u-bg-color-superficie-secondary",
			"u-bg-color-superficie-secondary-dark",
			"u-bg-color-superficie-secondary-light"
		)

	);
	?>
	<?php foreach($colores as $tipo => $colores){ ?>
	<div class="div total u-pTB-l">
		<div class="container">
			<div class="l-loopColors a-marginBottom-100">
				<div class="head">
					<h2><?php echo $tipo; ?></h2>
				</div>
				<div class="loop">
					<?php foreach( $colores as $valorColor){ ?>
						<div class="m-cardColor">
							<div class="m-cardColor__bxColor <?php echo $valorColor; ?>"></div>
							<div class="m-cardColor__bxTxt">
								<p class="ht-body-xs">
									<strong></strong> <span>.<?php echo $valorColor; ?></span>
								</p>				
							</div>
						</div>
					<?php } ?>
					
				</div>
			</div>
		</div>
	</div>
	<?php } ?>




	<?php 
	// Referencia de array multidimensional
	// https'=>'//www.guidacode.com/2017/php/arrays-php-array-multidimensional/
	$coloresType = array(	
		'Type Colors' => array(
			"u-type-color-base-text-principal",
			"u-type-color-base-text-secondary",
			"u-type-color-base-text-terciary",
			"u-type-color-base-text-white"
		)
	);
	?>
	<?php foreach($coloresType as $tipo => $valorColorType){ ?>
	<div class="div total u-pTB-l">
		<div class="container">
			<div class="l-loopColors a-marginBottom-100">
				<div class="head">
					<h2><?php echo $tipo; ?></h2>
				</div>
				<div class="loop">
					<?php foreach( $valorColorType as $valorColor){ 
						
						if(strpos($valorColor, 'white') !== false){
							echo '<div class="m-cardType u-p-m text-center u-nmB-lastchild" style="background-color: black;">';
						} else {
							echo '<div class="m-cardType u-p-m text-center u-nmB-lastchild" style="background-color: #f0f0f0;">';
						}
						?>
							<p class="ht-one u-mB-0 <?php echo $valorColor; ?>">Abcdef</p>		
							<p class="<?php echo $valorColor; ?>"><small>.<?php echo $valorColor; ?></small></p>
						</div>
						
					<?php } ?>
					
				</div>
			</div>
		</div>
	</div>
	<?php } ?>




	<?php 
	// Referencia de array multidimensional
	// https'=>'//www.guidacode.com/2017/php/arrays-php-array-multidimensional/


	$coloresType = array(	
		'Buttons Colors' => array(
			'var(--souds-button-color-white)',
			'var(--souds-button-color-principal-500)',
			'var(--souds-button-color-principal-700)',
			'var(--souds-button-color-principal-300)',
			'var(--souds-button-color-principal-100)',
			'var(--souds-button-color-secondary-500)',
			'var(--souds-button-color-secondary-700)',
			'var(--souds-button-color-secondary-300)',
			'var(--souds-button-color-secondary-100)'
		)
	);
	?>
	<?php foreach($coloresType as $tipoButton => $valorColorButtonType){ ?>
	<div class="div total u-pTB-l">
		<div class="container">
			<div class="l-loopColors a-marginBottom-100">
				<div class="head">
					<h2><?php echo $tipoButton; ?></h2>
				</div>
				<div class="loop">
					<?php foreach( $valorColorButtonType as $valorColorButton){ ?>
						<div class="m-cardColor">
							<div class="m-cardColor__bxColor" style="background-color: <?php echo $valorColorButton; ?>;"></div>
							<div class="m-cardColor__bxTxt">
								<p class="ht-body-xs">
									<strong></strong> <span><?php echo $valorColorButton; ?></span>
								</p>				
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
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
