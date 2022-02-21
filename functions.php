<?php
if (!function_exists('sample_setup_logo')) {
    function sample_setup_logo()
    {
        add_theme_support(
            'custom-logo',
            array(
                'height' => 300,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
                'unlink-homepage-logo' => true,
            )
        );
    }
    add_action('after_setup_theme', 'sample_setup_logo');
}

if (!function_exists('sample_setup_title')) {
    function sample_setup_title()
    {
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'sample_setup_title');
}

if (!function_exists('sample_setup_menu')) {
    function sample_setup_menu()
    {
        register_nav_menus(
            array(
                'main-menu' => esc_html__('Main Menu', 'sample'),
                'bottom-social-menu' => esc_html__('Bottom Social Menu', 'sample'),
            )
        );
    }
    add_action('after_setup_theme', 'sample_setup_menu');
}

if (!function_exists('sample_enqueue_dashicons')) {
    function sample_enqueue_dashicons()
    {
        wp_enqueue_style('dashicons');
    }
    add_action('wp_enqueue_scripts', 'sample_enqueue_dashicons');
}

if (!function_exists('sample_enqueue_style')) {
    function sample_enqueue_style()
    {
        wp_enqueue_style('sample-style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'sample_enqueue_style');
}
if (!function_exists('sample_enqueue_script')) {
    function sample_enqueue_script()
    {
        wp_enqueue_script('sample-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts', 'sample_enqueue_script');
}
