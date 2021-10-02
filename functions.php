<?php
add_action('wp_enqueue_scripts', 'k_telecom_scripts');

function k_telecom_scripts()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/vendor/normalize.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/vendor/fonts.css');
    wp_enqueue_style('global-style', get_stylesheet_uri());
    wp_enqueue_style('header-style', get_template_directory_uri() . '/styles/header.css');
    wp_enqueue_style('form-style', get_template_directory_uri() . '/styles/form.css');
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/styles/footer.css');
}

?>