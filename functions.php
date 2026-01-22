<?php
function busca_salud_scripts()
{
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

    // Enqueue Theme Styles
    // Enqueue Theme Styles
    // Use filemtime to ensure version updates when file changes (cache busting)
    $version = file_exists(get_stylesheet_directory() . '/assets/css/style.css') ? filemtime(get_stylesheet_directory() . '/assets/css/style.css') : '1.0.0';
    wp_enqueue_style('busca-salud-style', get_stylesheet_uri(), array(), $version);

    // Also explicitly enqueue the assets/css/style.css if it's separate from style.css (which seems to be the case based on layout)
    wp_enqueue_style('busca-salud-main-css', get_template_directory_uri() . '/assets/css/style.css', array(), $version);

    // Enqueue Main CSS from assets if needed specifically, but style.css imports it usually. 
    // However, it's better to enqueue properly.
    // wp_enqueue_style( 'busca-salud-main-css', get_template_directory_uri() . '/assets/css/style.css' );
}
add_action('wp_enqueue_scripts', 'busca_salud_scripts');

function busca_salud_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'busca_salud_setup');
?>