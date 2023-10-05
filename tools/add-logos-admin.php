<?php 
add_action( 'customize_register', 'themename_customize_register' );
function themename_customize_register($wp_customize) {



    $wp_customize->add_section( 'ignite_custom_logo', array(
        'title'          => 'Logotipos',
        'description'    => 'Logotipos del sitio',
        'priority'       => 25,
    ) );


    $wp_customize->add_setting( 'custom_logo', array(
        'default'        => '',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo', array(
        'label'   => 'Logotipo del header',
        'section' => 'ignite_custom_logo',
        'settings'   => 'custom_logo',
    ) ) );

    
    
    
    $wp_customize->add_setting( 'custom_logo_footer', array(
        'default'        => '',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo_footer', array(
        'label'   => 'Logotipo del footer',
        'section' => 'ignite_custom_logo',
        'settings'   => 'custom_logo_footer',
    ) ) );


}





/**
 * 
 * FUENTE: https://gist.github.com/eyecandy91/904776096b569d004d01e5d9defa5172
 * Documentación wp https://developer.wordpress.org/reference/classes/wp_customize_image_control/
 * add logo footer version
 *
 *  function logo_footer_customize_register( $wp_customize ) {
 *      $wp_customize->add_setting( 'logo_footer' ); // Add setting for logo uploader
 *          
 *      // Add control for logo uploader (actual uploader)
 *      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_footer', array(
 *          'label'    => __( 'Logo footer', 'holgado-theme' ),
 *          'section'  => 'footer',
 *          'settings' => 'logo_footer',
 *          'context'    => 'logo_footer'
 *      ) ) );
 *  }
 *  add_action( 'customize_register', 'logo_footer_customize_register' );
 *  // get_theme_mod( 'my_site_logo_id' );
 */