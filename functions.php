<?php

function comedy_preconnect_links() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action('wp_head', 'comedy_preconnect_links', 1);

function comedy_files() {
    wp_enqueue_style('comedy_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('comedy_fira_sans', 'https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false);
    wp_enqueue_style('comedy_nunito_sans', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400&display=swap', false);
    wp_enqueue_style('comedy_josefin_sans', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet', false);
}

add_action('wp_enqueue_scripts','comedy_files');

function comedy_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'comedy_features');