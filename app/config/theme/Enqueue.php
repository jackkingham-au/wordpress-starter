<?php

namespace App\Config\Theme;

class Enqueue {
    function __construct() {
        add_action('wp_enqueue_scripts', function() {
            $this->css();
            $this->js(); 
        });
    }

    function css() {
        // Custom CSS
        wp_register_style('main-css', get_template_directory_uri() . '/dist/style.css');
        wp_enqueue_style('main-css');

        // Materialize CSS
        wp_register_style('materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
        wp_enqueue_style('materialize-css');

        // Material Design Icons
        wp_register_style('google-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
        wp_enqueue_style('google-icons');
    }

    function js() {
        // Materialize JS
        wp_register_script('materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(), false, true);
        wp_enqueue_script('materialize-js');

        // Custom JS 
        wp_register_script('bundled.min-js', get_template_directory_uri() . '/dist/bundled.min.js', array('acf-input'), false, true); 
        wp_enqueue_script('bundled.min-js');
    }
}