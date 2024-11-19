<?php

class BooksPlugin {
    public function __construct() {
        add_action("template_include", [$this, "loadCustomTemplates"]);
    }

    public function loadCustomTemplates($template) {
        if (is_post_type_archive("book")) {
            $custom_template = plugin_dir_path(__FILE__) . "../templates/archive-book.php";
            return file_exists($custom_template) ? $custom_template : $template;
        }

        if (is_singular("book")) {
            $custom_template = plugin_dir_path(__FILE__) . "../templates/single-book.php";
            return file_exists($custom_template) ? $custom_template : $template;
        }

        return $template;
    }
}
