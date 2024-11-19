<?php
/**
 * Plugin Name: Books Plugin
 * Description: Books Plugin, CPT, ACF, Recruitment Task - Develtio Company
 * Version: 1.0
 * Author: Cieśla Szymon
 */


 if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

// load required files - mu files

require_once plugin_dir_path(__FILE__) . 'includes/books-assets.php';
require_once plugin_dir_path(__FILE__) . 'includes/books-cpt.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-books-plugin.php';

// components

books_assets::init();
books_cpt::init();


if ( class_exists( 'books_plugin' ) ) {
    $books_plugin = new books_plugin();
}

