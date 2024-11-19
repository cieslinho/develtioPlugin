<?php

class books_plugin {

    
    public function __construct() {
        add_action( 'template_include', array( $this, 'load_custom_templates' ) );
    }

   
    public function load_custom_templates( $template ) {
        if ( is_post_type_archive( 'book' ) ) {
            $custom_template = plugin_dir_path( __FILE__ ) . '../templates/archive-book.php';
            if ( file_exists( $custom_template ) ) {
                return $custom_template;
            }
        } elseif ( is_singular( 'book' ) ) {
            $custom_template = plugin_dir_path( __FILE__ ) . '../templates/single-book.php';
            if ( file_exists( $custom_template ) ) {
                return $custom_template;
            }
        }
        return $template; // Domyślny szablon, jeśli żaden nie pasuje
    }
}

