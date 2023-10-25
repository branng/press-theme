<?php get_header(); ?>
	<?php /*
	<div class="total u-pTB-m">
		<div class="small-container">
			<button onClick="actionMenu()">Abrir modal</button>
		</div>
	</div>
	*/ ?>
	<div class="total u-pTB-l">
	<main class="small-container" role="main">
		<?php echo breadcrumb(); ?>
		<section>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</main>
	</div>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
