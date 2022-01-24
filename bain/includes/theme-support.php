<?php

// Add Theme Support
function _themename_theme_support() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ] );
    add_theme_support( 'html5', [ 'search-form', 'comment-list', 'comment-form', 'gallary', 'caption' ] );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo', [ 'width' => 600, 'height' => 30, 'flex-width' => true, 'flex-height' => true ] );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'starter-content' );

    add_theme_support( 'align-wide' );  // For gutenberg editor
    add_image_size( '_themename-blog-image', 1280, 720 );
    
}
add_action( 'after_setup_theme', '_themename_theme_support' );