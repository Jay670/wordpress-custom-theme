<?php

    add_action('after_setup_theme', 'blog_register_theme_support');

    function blog_add_excerpt_support_for_pages() {
        add_post_type_support( 'page', 'excerpt' );
    }
    add_action( 'init', 'blog_add_excerpt_support_for_pages' );
    
    function blog_register_theme_support() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }

    function blog_menus() {
        $locations = array(
            'primary' => "Desktop Primary Top navbar",
            'footer' => "Footer Menu Items"
        );

        register_nav_menus($locations);
    }

    add_action('init', 'blog_menus');
    


    function blog_register_styles() {
        wp_enqueue_style("blog-custom-style", get_template_directory_uri() . "/style.css", array('blog-bootstrap-style'), "1.0", "all");
        wp_enqueue_style("blog-bootstrap-style", get_template_directory_uri() . "/bootstrap.min.css", "1.0", "all");
        wp_enqueue_style("blog-font1-style", 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic', "all");
        wp_enqueue_style("blog-font2-style", 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', "all");
        wp_enqueue_style("blog-fontawesome-style", 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', "5.1.15", "all");
    }

    add_action('wp_enqueue_scripts', 'blog_register_styles');

    function blog_register_scripts() {
        wp_enqueue_script("blog-custom-js", get_template_directory_uri() . '/bootstrap.bundle.js', array('blog-jquery-js', 'blog-bootstrap-js'), "all");
        wp_enqueue_script("blog-jquery-js", 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', "3.5.1", "all");
        wp_enqueue_script("blog-bootstrap-js", get_template_directory_uri() . '/bootstrap.bundle.js', "all");
    }

    add_action('wp_enqueue_scripts', 'blog_register_scripts');

?>