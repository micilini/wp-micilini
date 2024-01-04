<?php

require get_template_directory().'/inc/micilini-customizer.php';

//Carrega os Scripts de CSS
function wpmicilini_load_scripts(){
    //Style CSS (V. 1.0)
    wp_enqueue_style('wpmicilini-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    //Bootstrap CSS/JS (V. 5.0.2)
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap-5.0.2-dist/css/bootstrap.min.css', array(), '5.0.2');
    wp_enqueue_style('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap-5.0.2-dist/js/bootstrap.min.js', array(), '5.0.2');
}

add_action('wp_enqueue_scripts', 'wpmicilini_load_scripts');

//Configurações do Tema
function wpmicilini_config(){

    //Registro dos Menus
    register_nav_menus(
        array(
            'wp_micilini_header_menu' => 'Menu do Cabeçalho',
            'wp_micilini_footer_menu' => 'Menu do Rodapé'
        )
    );

    add_theme_support('post-thumbnails');

    add_theme_support('page-templates');

}

add_action('after_setup_theme', 'wpmicilini_config', 0);

//Configurações de Estilos CSS que são adicionados a página
function wpmicilini_styles() {
    $paginationBackgroundColor = get_theme_mod('setting_custompagbackgroundcolor');
    $paginationColorText = get_theme_mod('setting_custompagcolor');
    $paginationBackgroundColorSelected = get_theme_mod('setting_custompagbackgroundcolorselected');

    $custom_css = "
    .pagination span, .pagination a{
        background-color: ".$paginationBackgroundColor." !important;
        color: ".$paginationColorText." !important;
    }
    .pagination .current{
        background-color: ".$paginationBackgroundColorSelected." !important;
        color: ".$paginationColorText." !important;
    }
    ";

    wp_add_inline_style('wpmicilini-style', $custom_css); 
}

add_action('wp_enqueue_scripts', 'wpmicilini_styles');