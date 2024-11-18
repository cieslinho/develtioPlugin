<?php

class books_assets {
    public static function init(){
        add_action('wp_enqueue_scripts', [__CLASS__, 'enqueue_assets']);
    }

    public static function enqueue_assets(){
        if ( is_singular('book') || is_post_type_archive('book')) {
            wp_enqueue_style('css-styles', plugin_dir_url(__FILE__) . '../assets/css/styles.css', [], '1.0');
            wp_enqueue_script('js-scripts', plugin_dir_url(__FILE__) . '../assets/js/script-min.js', [], '1.0', true);
        }
    }
}