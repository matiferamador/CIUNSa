<?php

require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';


function ciunsa_setup() {
    // Imagenes Destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'ciunsa_setup');
function ciunsa_menus() {
    register_nav_menus(array(
        'menu-principal' => __("Menu Principal", 'ciunsa')
    ));

}
add_action('init', 'ciunsa_menus');

function ciunsa_scripts_styles () {
    // archivo css
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/latest/normalize.css', array(),'8.0.1');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), '11.0.6');
    wp_enqueue_style('style', get_stylesheet_uri(),array('normalize'), '1.0.0' );

    // archivos js 
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '11.0.6', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('swiper-js'), '1.0.0', true);

}
add_action ('wp_enqueue_scripts', 'ciunsa_scripts_styles');

function ciunsa_widgets() {
    register_sidebar (array (
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class=" text-center text-primario">',
        'after_title' => '</h3>'
    ));
    register_sidebar (array (
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class=" text-center text-primario">',
        'after_title' => '</h3>'
    ));
    register_sidebar (array (
        'name' => 'Sidebar 3',
        'id' => 'sidebar_3',
        'description'   => 'Widget para filtrar por Categorias las Novedades.',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-primario">',
        'after_title' => '</h4>'
    ));
    register_sidebar (array (
        'name' => 'Sidebar 4',
        'id' => 'sidebar_4',
        'description'   => 'Widget para colocar iconos de Redes Sociales',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-primario">',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name'          => 'Barra Enlaces Recomendados',
        'id'            => 'mi_area_de_widgets',
        'description'   => 'Esta es una descripción opcional de la nueva área de widgets.',
        'before_widget' => '<div class="widget-personalizado">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-titulo">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'ciunsa_widgets');

// Registrar Custom Post Type 'novedades_destacadas'
function registrar_novedades_destacadas() {
    $labels = array(
        'name'               => 'Novedades Destacadas',
        'singular_name'      => 'Novedad Destacada',
        'menu_name'          => 'Novedades Destacadas',
        'add_new'            => 'Agregar Nueva',
        'add_new_item'       => 'Agregar Nueva Novedad Destacada',
        'edit_item'          => 'Editar Novedad Destacada',
        'new_item'           => 'Nueva Novedad Destacada',
        'view_item'          => 'Ver Novedad Destacada',
        'search_items'       => 'Buscar Novedad Destacada',
        'not_found'          => 'No se encontraron Novedades Destacadas',
        'not_found_in_trash' => 'No se encontraron Novedades Destacadas en la papelera',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite'             => array( 'slug' => 'novedades_destacadas' ),
        'taxonomies'          => array( 'category' ), // Agregar soporte para categorías
        'menu_icon'           => 'dashicons-megaphone', // Cambiar el icono a un megáfono
    );

    register_post_type( 'novedades_destacadas', $args );
}

add_action( 'init', 'registrar_novedades_destacadas' );
 
// Registra un tipo de contenido personalizado para ciunsa_revista
function registrar_ciunsa_revista() {
    $labels = array(
        'name'               => 'Revistas Ciunsa',
        'singular_name'      => 'Revista Ciunsa',
        'add_new'            => 'Añadir Nueva Revista Ciunsa',
        'add_new_item'       => 'Añadir Nueva Revista Ciunsa',
        'edit_item'          => 'Editar Revista Ciunsa',
        'new_item'           => 'Nueva Revista Ciunsa',
        'all_items'          => 'Todas las Revistas Ciunsa',
        'view_item'          => 'Ver Revista Ciunsa',
        'search_items'       => 'Buscar Revistas Ciunsa',
        'not_found'          => 'No se encontraron Revistas Ciunsa',
        'not_found_in_trash' => 'No se encontraron Revistas Ciunsa en la papelera',
        'parent_item_colon'  => '',
        'menu_name'          => 'Revistas Ciunsa'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'ciunsa_revista' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'menu_icon'          => 'dashicons-book-alt', // Cambiar a un icono de revista (Dashicons)
    );

    register_post_type( 'ciunsa_revista', $args );
}
add_action( 'init', 'registrar_ciunsa_revista' );

// Mejorar el linkbox

// Shortcode pdf
function linkbox_shortcode($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'href' => '',
            'icono' => 'pdf',
        ),
        $atts,
        'linkbox'
    );

    // Ruta del ícono
    $icon_url = get_template_directory_uri() . '/img/icono-pdf.svg';

    // Construir el HTML del enlace con los atributos proporcionados
    $output = '<a href="' . esc_url($atts['href']) . '" class="box-link">';
    $output .= '<img src="' . esc_url($icon_url) . '" alt="Icono PDF" class="w-[40px] h-[40px]">';
    $output .= '<span>' . esc_html($content) . '</span>';
    $output .= '</a>';

    return $output;
}
add_shortcode('linkbox', 'linkbox_shortcode');
// shortcode-word
function linkbox_word_shortcode($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'href' => '',
            'icono' => 'word',
        ),
        $atts,
        'linkbox_word'
    );

    // Ruta del ícono
    $icon_url = get_template_directory_uri() . '/img/icon-word.svg';

    // Construir el HTML del enlace con los atributos proporcionados
    $output = '<a href="' . esc_url($atts['href']) . '" class="box-link">';
    $output .= '<img src="' . esc_url($icon_url) . '" alt="Icono Word" class="w-[40px] h-[40px]">';
    $output .= '<span>' . esc_html($content) . '</span>';
    $output .= '</a>';  

    return $output;
}
add_shortcode('linkbox_word', 'linkbox_word_shortcode');

