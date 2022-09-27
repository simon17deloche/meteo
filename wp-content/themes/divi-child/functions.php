<?php
/**
** activation theme
**/

require_once 'widgets/CNAlpsWeather.php';

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
register_widget(CNAlpsWeather::class);
function theme_enqueue_styles() {
    register_widget(CNAlpsWeather::class);
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
