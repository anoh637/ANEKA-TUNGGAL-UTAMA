<?php

// adding the CSS and JS files

function anoh_setup(){
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
    wp_enqueue_style('fontawesome', 'https://kit.fontawesome.com/543aaabc1b.js');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'anoh_setup');

// Adding Theme Support

function anoh_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html', 
        array('comment-list', 'comment-form', 'search-form')
);
}

add_action('after_setup_theme', 'anoh_init');