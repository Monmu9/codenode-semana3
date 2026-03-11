
<?php

function codenode_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'codenode'),
        'footer' => __('Menú Footer', 'codenode'),
    ));
}
add_action('after_setup_theme', 'codenode_setup');



function codenode_style() {
    wp_enqueue_style('codenode-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'codenode_style');
