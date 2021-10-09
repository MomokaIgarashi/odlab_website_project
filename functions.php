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
?>