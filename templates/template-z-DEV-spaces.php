<?php /* Template Name: DEV Spaces
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
	$sizes = array(
		// 'xxl' => 280,
		'xl'=> 160,
		'l'=> 80,
		'm'=> 40,
		's'=> 20,
		'xs'=> 12
	);
	?>

	
	<div class="container">
	<?php foreach($sizes as $sizeName => $sizeValue){ ?>
		<div class="u-mB-m total" style="width: 100%; display:table;">
			<div class="u-pT-<?php echo $sizeName; ?> u-mB-s total u-bg-color-one u-border-radius-xxs" style="width: 100%; display:table;">
			</div>	 
			<p class="ht-four">Size - <?php echo $sizeName; ?> = <?php echo $sizeValue; ?>px</p>
		</div>
	<?php } ?>
	</div>

	<div class="container">
		<div class="u-mB-m total" style="width: 100%; display:table;">
			<div class="u-p-xl u-md-p-xs u-sm-p-m u-mB-s total u-bg-color-one u-border-radius-xxs" style="width: 100%; display:table;">
			</div>	 
			<p class="ht-four"><pre>.u-p-xl .u-md-p-xs .u-sm-p-m </pre></p>
		</div>
	</div>


<?php get_footer(); ?>
