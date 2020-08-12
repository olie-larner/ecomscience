<?php
/**
 * Olie Larner
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

// Add Site Settings

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
        'page_title' => 'Site Settings',
        'menu_title' => 'Site Settings',
        'menu_slug' => 'site-settings',
        'show_in_graphql' => true
    ));
	
}

// Remove square brackets from excerpt

function sydney_child_elipsis($content) {
	return str_replace('[&hellip;]', '...', $content);
}
add_filter('the_excerpt', 'sydney_child_elipsis');

// Limit word count in excerpt

function tn_custom_excerpt_length( $length ) {
    return 35;
    }
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

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

// Remove default styles in editor

if (function_exists('acf_register_block_type')){
    add_action('acf/init', 'register_acf_block_types');
}

add_filter('block_editor_settings', function ($editor_settings) {
    unset($editor_settings['styles'][0]);

    return $editor_settings;
}
);

// Featured Image

add_theme_support( 'post-thumbnails' );

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

    acf_register_block_type(
        array(
            'name' => 'post-hero',
            'title' => __('Post Hero'),
            'description' => __('Hero section for posts'),
            'render_template' =>
            'template-parts/blocks/home/post-hero.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('hero', 'post'),
        )
    );

    acf_register_block_type(
        array(
            'name' => 'slide-hero',
            'title' => __('Slide Hero'),
            'description' => __('Slide Hero section for blog landing page'),
            'render_template' =>
            'template-parts/blocks/home/slide-hero.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('hero', 'post'),
        )
    );

}