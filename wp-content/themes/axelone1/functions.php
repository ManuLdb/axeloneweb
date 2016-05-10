<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
/* Disable the Admin Bar. */
remove_action( 'init', 'wp_admin_bar_init' );
// Ajouter Image à la Une sur les articles
add_theme_support('post-thumbnails');

// Ajouter un menu
register_nav_menu('principal', 'Menu principal');
register_nav_menu('footer', 'Menu du bas');

/*Vire la barre blanche*/
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
