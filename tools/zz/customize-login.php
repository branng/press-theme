<?php 
function my_login_logo() { ?>
	<style type="text/css">
		#login h1 a, 
		.login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/site-login-logo.svg);
			height:65px;
			width:320px;
			background-size: auto 50px;
			background-repeat: no-repeat;
			background-position: center center;
			padding-bottom: 30px;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// Cambiarmos la url del logo
function my_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );



function my_login_logo_url_title() {
	return 'Brandcenter';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );



function my_login_stylesheet() {
	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/assets/css/login.css' );
	//wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . 'assets/js/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );