<?php
/**
 * Funções e definições do tema.
 */

function dev_theme_enqueue_styles() {
    // Carrega o arquivo style.css principal
    wp_enqueue_style('dev-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'dev_theme_enqueue_styles');

// Suporte a recursos básicos do tema
function dev_theme_setup() {
    // Habilita suporte a título dinâmico na aba do navegador
    add_theme_support('title-tag');
    
    // Habilita suporte a imagens destacadas (Thumbnails)
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'dev_theme_setup');