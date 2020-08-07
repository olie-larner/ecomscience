<?php
/**
 * Ecommerce Science functions and definitions
 */

function my_acf_admin_head() {
    ?>
    <link rel="stylesheet" href="http://localhost:8888/ecommerce/src/styles/global.css">
    <link rel="stylesheet" href="http://localhost:8888/ecommerce/src/styles/tailwind.css">
    <style>
        .wp-block {
    max-width: 1200px!important;
            }
    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
        'page_title' => 'Site Settings',
        'menu_title' => 'Site Settings',
        'menu_slug' => 'site-settings',
        'show_in_graphql' => true
    ));
	
}

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
    acf_register_block_type(
        array(
            'name' => 'contact-us',
            'title' => __('Contact Us'),
            'description' => __('Contact section for the main page'),
            'render_template' =>
            'template-parts/blocks/home/contact-us.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('contact', 'home'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'pricing',
            'title' => __('Pricing'),
            'description' => __('Pricing section for the main page'),
            'render_template' =>
            'template-parts/blocks/home/pricing.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('pricing', 'home'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'large-quote',
            'title' => __('Large Quote'),
            'description' => __('Large Quote for the main page'),
            'render_template' =>
            'template-parts/blocks/home/large-quote.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('quote', 'home'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'logos',
            'title' => __('Logos'),
            'description' => __('Logos for the main page'),
            'render_template' =>
            'template-parts/blocks/home/logos.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('logos', 'home'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'whats-inside',
            'title' => __('Whats Inside'),
            'description' => __('Whats Inside section for the main page'),
            'render_template' =>
            'template-parts/blocks/home/whats-inside.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('whats-inside', 'home'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'video',
            'title' => __('Video Player'),
            'description' => __('Video for the main page'),
            'render_template' =>
            'template-parts/blocks/home/video.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('video', 'home'),
        )
    );

}