<?php

class books_cpt
{
    public static function init()
    {
        add_action("init", [__CLASS__, "register_books_cpt"]);
    }

    public static function register_books_cpt()
    {
        register_post_type("book", [
            "labels" => [
                "name" => "Books",
                "singular_name" => "Book",
                "add_new" => "Add new book",
                "add_new_item" => "Add new book",
                "edit_item" => "Edit book",
                "new_item" => "New book",
                "view_item" => "View book",
                "all_items" => "All books",
            ],
            "public" => true,
            "has_archive" => true,
            "rewrite" => ["slug" => "books"],
            "supports" => ["title", "editor", "thumbnail"],
        ]);
    }
}
