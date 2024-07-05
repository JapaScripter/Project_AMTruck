<?php



require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';



// Carregando nossos scripts e folhas de estilo

function load_scripts(){

    

    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true);


    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3',

    'all' );

    wp_enqueue_style( 'icon-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"', array(), '4.7.0', 'all' );



    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0',

        'all' );

}

add_action( 'wp_enqueue_scripts', 'load_scripts' );



// Função de configuração para o Tema

function geral_config(){

    // Registrando Menus

    register_nav_menus(

        array(

            'my_main_menu' => 'Main Menu',

            'my_footer_menu' => 'Footer Menu'

        )

    );

    /*$args = array(

        'height' => 225,

        'width'  => 1920

    );

    add_theme_support( 'custom-header', $args );

    */



    // Criando Widgets

    register_sidebar(

        array(

            'name' => 'Home - Topo',

            'id'   => 'sidebar-1',

            'description' => 'Coloque aqui o texto que irá aparecer ao lado do formulário na página home.',

            'before_widget' => '<div class="widget-wrapper">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="widget-tittle">',

            'after_title' => '</h3>'

        )

    );

    add_theme_support('title-tag');

    register_sidebar(

        array(

            'name' => 'MEI - Topo',

            'id'   => 'sidebar-2',

            'description' => 'Coloque aqui o texto que irá aparecer ao lado do formulário na página MEI.',

            'before_widget' => '<div class="widget-wrapper">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="widget-tittle">',

            'after_title' => '</h3>'

        )

    );

    register_sidebar(

        array(

            'name' => 'PME - Topo',

            'id'   => 'sidebar-3',

            'description' => 'Coloque aqui o texto que irá aparecer ao lado do formulário na página PME.',

            'before_widget' => '<div class="widget-wrapper">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="widget-tittle">',

            'after_title' => '</h3>'

        )

    );

    register_sidebar(

        array(

            'name' => 'Grandes Empresas - Topo',

            'id'   => 'sidebar-4',

            'description' => 'Coloque aqui o texto que irá aparecer ao lado do formulário na página grandes empresas.',

            'before_widget' => '<div class="widget-wrapper">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="widget-tittle">',

            'after_title' => '</h3>'

        )

    );

    register_sidebar(

        array(

            'name' => 'Home - Serviços MEI',

            'id'   => 'services-1',

            'description' => 'Coloque aqui a imagem e o texto de serviços MEI',

            'before_widget' => '<div class="widget-wrapper">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="widget-tittle">',

            'after_title' => '</h3>'

        )

    );



    register_sidebar(

        array(

            'name' => 'Home - Serviços PME',

            'id'   => 'services-2',

            'description' => 'Coloque aqui a imagem e o texto de serviços PME',

            'before_widget' => '<div class="widget-wrapper">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="widget-tittle">',

            'after_title' => '</h3>'

        )

    );

    

    register_sidebar(

        array(

            'name' => 'Home - Serviços EMPRESARIAL',

            'id'   => 'services-3',

            'description' => 'Coloque aqui a imagem e o texto de serviços EMPRESARIAL',

            'before_widget' => '<div class="widget-wrapper">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="widget-tittle">',

            'after_title' => '</h3>'

        )

    );
}

add_action('after_setup_theme', 'geral_config', 0);