<?php
/**
 * Ecommerce Science functions and definitions
 */

function my_acf_admin_head() {
    ?>
    <link rel="stylesheet" href="http://localhost:8888/ecommerce/src/styles/global.css">
    <link rel="stylesheet" href="http://localhost:8888/ecommerce/src/styles/tailwind.css">
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

 //Register Custom Post Type - Courses

add_action('init', function () {
    register_post_type('courses', [
        'public' => true,
        'label' => 'Courses',
        'show_in_graphql' => true,
        'graphql_single_name' => 'Course',
        'graphql_plural_name' => 'Courses',
    ]);
});

if (function_exists('acf_register_block_type')){
    add_action('acf/init', 'register_acf_block_types');
}

add_filter('block_editor_settings', function ($editor_settings) {
    unset($editor_settings['styles'][0]);

    return $editor_settings;
}
);

// Register Blocks from ACF

function register_acf_block_types(){
    acf_register_block_type(
        array(
            'name' => 'hero',
            'title' => __('Hero'),
            'description' => __('Hero for the main page'),
            'render_template' =>
            'template-parts/blocks/home/hero.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('hero', 'home'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'header',
            'title' => __('Header'),
            'description' => __('Header for the main page'),
            'render_template' =>
            'template-parts/blocks/home/header.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('header', 'home'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'author',
            'title' => __('Author'),
            'description' => __('Author for the main page'),
            'render_template' =>
            'template-parts/blocks/home/author.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('author', 'home'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'customer-quote',
            'title' => __('Customer Quotes'),
            'description' => __('Customer Quotes for the main page'),
            'render_template' =>
            'template-parts/blocks/home/customer-quotes.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('quotes', 'home'),
        )
    );
}