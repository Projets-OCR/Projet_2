<?php
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles', 11 );
function wpm_enqueue_styles(){
    wp_enqueue_style( 'wpm-style', get_template_directory_uri() . '-child/style.css');
}