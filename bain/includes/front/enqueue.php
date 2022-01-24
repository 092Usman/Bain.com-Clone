<?php

function bain_enqueue() {

    $uri = get_theme_file_uri();

    wp_register_style('bian_style', $uri . '/css/style.css');
    wp_enqueue_style('bian_style');


    wp_register_style('bian_fonts_Graphik-Medium-Web', $uri . '/fonts/Graphik-Medium-Web.woff2');
    wp_register_style('bian_fonts_Graphik-Regular-Web', $uri . '/fonts/Graphik-Regular-Web.woff2');
    wp_register_style('bian_fonts_Graphik-Semibold-Web.woff2', $uri . '/fonts/Graphik-Semibold-Web.woff2');
    wp_register_style('bian_fonts_TiemposTextWeb-Regular.woff2', $uri . '/fonts/TiemposTextWeb-Regular.woff2');

    wp_enqueue_style('bian_fonts_Graphik-Medium-Web');
    wp_enqueue_style('bian_fonts_Graphik-Regular-Web');
    wp_enqueue_style('bian_fonts_Graphik-Semibold-Web.woff2');
    wp_enqueue_style('bian_fonts_TiemposTextWeb-Regular.woff2');

    wp_register_script('bian_js-bottom', $uri . '/js/js-bottom.js', [], false, true);
    wp_register_script('bian_js-top', $uri . '/js/js-top.js', [], false, true);
    wp_register_script('bian_fingerprint', $uri . '//js/fingerprint.min.js', [], false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('bian_js-top');
    wp_enqueue_script('bian_fingerprint');
    wp_enqueue_script('bian_js-bottom');

}
