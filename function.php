<?php
// Подключение стилей
function mytheme_enqueue_styles() {
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );

// Регистрация меню
function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
        )
    );
}
add_action( 'after_setup_theme', 'mytheme_register_menus' );
