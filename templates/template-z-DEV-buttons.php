<?php /* Template Name: DEV Buttons 
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
	$buttonsArra = array(
		'a-btn-solid' => '¿Comenzamos?', 
		'a-btn-border' => '¿Comenzamos?', 
		'a-btn-out' => '¿Comenzamos?', 
	);
	?>
	<div class="container" style="padding: 40px 20px; margin-bottom: 40px;">
	<?php foreach($buttonsArra as $button => $textButton){ ?>
	
	
		<a href="" class="<?php echo $button; ?>"> <?php echo $textButton; ?></a>
		<a href="" class="<?php echo $button; ?> --btn-arrow">
			<?php echo $textButton; ?>
			<svg xmlns="http://www.w3.org/2000/svg" width="19.949" height="16.285" viewBox="0 0 19.949 16.285"><path d="M24.1,13.244a.948.948,0,0,0-.081-.387,1.016,1.016,0,0,0-.242-.333l-7.122-7.1a1.121,1.121,0,0,0-.349-.247.939.939,0,0,0-.371-.075.914.914,0,0,0-.666.263A.887.887,0,0,0,15,6.025a1.076,1.076,0,0,0,.064.371.826.826,0,0,0,.193.306l2.406,2.449,4.265,3.889.215-.537-3.459-.215H5.1a.913.913,0,0,0-.682.269,1.03,1.03,0,0,0,0,1.375A.913.913,0,0,0,5.1,14.2H18.689l3.459-.215-.215-.526-4.265,3.878-2.406,2.449a.826.826,0,0,0-.193.306,1.076,1.076,0,0,0-.064.371.887.887,0,0,0,.269.661.914.914,0,0,0,.666.263.982.982,0,0,0,.7-.3l7.144-7.122a1.137,1.137,0,0,0,.242-.344A.922.922,0,0,0,24.1,13.244Z" transform="translate(-4.154 -5.102)"/></svg>
		</a>
		<button class="<?php echo $button; ?>"> <?php echo $textButton; ?></button>
		<a href="" class="<?php echo $button; ?> is-disabled"> <?php echo $textButton; ?></a>
		<br><br>
		<a href="" class="<?php echo $button; ?> --btn-min"> <?php echo $textButton; ?></a>
		<a href="" class="<?php echo $button; ?> --btn-arrow --btn-min"> 
			<?php echo $textButton; ?>
			<svg xmlns="http://www.w3.org/2000/svg" width="19.949" height="16.285" viewBox="0 0 19.949 16.285"><path d="M24.1,13.244a.948.948,0,0,0-.081-.387,1.016,1.016,0,0,0-.242-.333l-7.122-7.1a1.121,1.121,0,0,0-.349-.247.939.939,0,0,0-.371-.075.914.914,0,0,0-.666.263A.887.887,0,0,0,15,6.025a1.076,1.076,0,0,0,.064.371.826.826,0,0,0,.193.306l2.406,2.449,4.265,3.889.215-.537-3.459-.215H5.1a.913.913,0,0,0-.682.269,1.03,1.03,0,0,0,0,1.375A.913.913,0,0,0,5.1,14.2H18.689l3.459-.215-.215-.526-4.265,3.878-2.406,2.449a.826.826,0,0,0-.193.306,1.076,1.076,0,0,0-.064.371.887.887,0,0,0,.269.661.914.914,0,0,0,.666.263.982.982,0,0,0,.7-.3l7.144-7.122a1.137,1.137,0,0,0,.242-.344A.922.922,0,0,0,24.1,13.244Z" transform="translate(-4.154 -5.102)"/></svg>
		</a>
		<button class="<?php echo $button; ?> --btn-min"> <?php echo $textButton; ?></button>
		<a href="" class="<?php echo $button; ?> is-disabled --btn-min"> <?php echo $textButton; ?></a>
		
		<br><br><br><br>
		
	<?php } ?>
	</div>
	
	
	
	
	
		<?php 
		$buttonsArraTwo = array(
		'a-btn-solid' => 'VER MÁS',
		'a-btn-border' => 'VER MÁS',
		'a-btn-out' => 'VER MÁS',
		'a-btn-inverse' => 'VER MÁS',
	);
	?>

	<?php foreach($buttonsArraTwo as $button => $textButton){ ?>
	
	<div class="container u-bg-color-three" style="padding: 40px;">
	<a href="" class="<?php echo $button; ?>"> <?php echo $textButton; ?></a>
		<a href="" class="<?php echo $button; ?> --btn-arrow">
			<?php echo $textButton; ?>
			<svg xmlns="http://www.w3.org/2000/svg" width="19.949" height="16.285" viewBox="0 0 19.949 16.285"><path d="M24.1,13.244a.948.948,0,0,0-.081-.387,1.016,1.016,0,0,0-.242-.333l-7.122-7.1a1.121,1.121,0,0,0-.349-.247.939.939,0,0,0-.371-.075.914.914,0,0,0-.666.263A.887.887,0,0,0,15,6.025a1.076,1.076,0,0,0,.064.371.826.826,0,0,0,.193.306l2.406,2.449,4.265,3.889.215-.537-3.459-.215H5.1a.913.913,0,0,0-.682.269,1.03,1.03,0,0,0,0,1.375A.913.913,0,0,0,5.1,14.2H18.689l3.459-.215-.215-.526-4.265,3.878-2.406,2.449a.826.826,0,0,0-.193.306,1.076,1.076,0,0,0-.064.371.887.887,0,0,0,.269.661.914.914,0,0,0,.666.263.982.982,0,0,0,.7-.3l7.144-7.122a1.137,1.137,0,0,0,.242-.344A.922.922,0,0,0,24.1,13.244Z" transform="translate(-4.154 -5.102)"/></svg>
		</a>
		<button class="<?php echo $button; ?>"> <?php echo $textButton; ?></button>
		<a href="" class="<?php echo $button; ?> is-disabled"> <?php echo $textButton; ?></a>
		<br><br>
		<a href="" class="<?php echo $button; ?> --btn-min"> <?php echo $textButton; ?></a>
		<a href="" class="<?php echo $button; ?> --btn-arrow --btn-min"> 
			<?php echo $textButton; ?>
			<svg xmlns="http://www.w3.org/2000/svg" width="19.949" height="16.285" viewBox="0 0 19.949 16.285"><path d="M24.1,13.244a.948.948,0,0,0-.081-.387,1.016,1.016,0,0,0-.242-.333l-7.122-7.1a1.121,1.121,0,0,0-.349-.247.939.939,0,0,0-.371-.075.914.914,0,0,0-.666.263A.887.887,0,0,0,15,6.025a1.076,1.076,0,0,0,.064.371.826.826,0,0,0,.193.306l2.406,2.449,4.265,3.889.215-.537-3.459-.215H5.1a.913.913,0,0,0-.682.269,1.03,1.03,0,0,0,0,1.375A.913.913,0,0,0,5.1,14.2H18.689l3.459-.215-.215-.526-4.265,3.878-2.406,2.449a.826.826,0,0,0-.193.306,1.076,1.076,0,0,0-.064.371.887.887,0,0,0,.269.661.914.914,0,0,0,.666.263.982.982,0,0,0,.7-.3l7.144-7.122a1.137,1.137,0,0,0,.242-.344A.922.922,0,0,0,24.1,13.244Z" transform="translate(-4.154 -5.102)"/></svg>
		</a>
		<button class="<?php echo $button; ?> --btn-min"> <?php echo $textButton; ?></button>
		<a href="" class="<?php echo $button; ?> is-disabled --btn-min"> <?php echo $textButton; ?></a>
		
		<br><br><br><br>
	</div>
	<?php } ?>

	
	<br>	<br><br>	<br>
	
	
<?php get_footer(); ?>
