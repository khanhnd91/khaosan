<?php
function khaocan_scripts() {
        wp_enqueue_style( 'flickslider', get_template_directory_uri() . '/css/flickslider.css', array(), null );
        wp_enqueue_style( 'jquery.mmenu.all', get_template_directory_uri() . '/css/jquery.mmenu.all.css', array(), null );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), null );
//	wp_enqueue_script( 'accordion', get_template_directory_uri() . '/js/accordion.js', array(), null);
//        wp_enqueue_script( 'flickslider', get_template_directory_uri() . '/js/flickslider.js', array(), null);
//        wp_enqueue_script( 'googlemaps3', get_template_directory_uri() . '/js/googlemaps3.js', array(), null);
//        wp_enqueue_script( 'jquery-1.9.1.min', get_template_directory_uri() . '/js/jquery-1.9.1.min.js', array(), null);
//        wp_enqueue_script( 'jquery.equalheight.min', get_template_directory_uri() . '/js/jquery.equalheight.min.js', array(), null);
//        wp_enqueue_script( 'jquery.mmenu.min.all', get_template_directory_uri() . '/js/jquery.mmenu.min.all.js', array(), null);
//        wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.js', array(), null);
//        wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null);
//        wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array(), null);
}
add_action( 'wp_enqueue_scripts', 'khaocan_scripts' );
?>