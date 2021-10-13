<?php

function add_stylesheet() {
    wp_register_style(
        'reset',
        get_template_directory_uri().'/assets/styles/normalize.css',
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'home',
        get_template_directory_uri().'/assets/styles/top-index.css',
        array('reset'),
        '1.0'
    );
    wp_enqueue_style(
        'members',
        get_template_directory_uri().'/assets/styles/members.css',
        array('reset'),
        '1.0'
    );
    wp_enqueue_style(
        'hamburger',
        get_template_directory_uri().'/assets/styles/hamburger.css',
        array('reset'),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

    // function add_stylesheet() {
    //     wp_register_style(
    //         'reset',
    //         get_template_directory_uri().'/assets/styles/normalize.css',
    //         array(),
    //         '1.0',
    //         false
    //     );
    //     wp_enqueue_style(
    //         'home',
    //         get_template_directory_uri().'/assets/styles/top-index.css',
    //         array('reset'),
    //         '1.0',
    //         false
    //     );
    // }
    // add_action('wp_enqueue_scripts', 'add_stylesheet');


    // function add_script(){
    //     wp_enqueue_script(
    //         'last',
    //         get_template_directory_uri().'assets/js/picturefill.js',
    //         array(),
    //         '1.0',
    //         true
    //     );
    // }
    // add_action('wp_enqueue_scripts','add_script');
    
    function custom_print_scripts() {
        if (!is_admin()) {
          //デフォルトjquery削除
        wp_deregister_script('jquery');
        
          //GoogleCDNから読み込む
        // swp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
        }
    }
    add_action('wp_print_scripts', 'custom_print_scripts');
?>