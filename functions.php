<?php 
define('theme_version', time());

// Adding theme styles and scripts
add_action('wp_enqueue_scripts', 'af_add_theme_scripts');

function af_add_theme_scripts() {

    wp_enqueue_script(
        'theme-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        theme_version,
        true
    );

    // Tailwind
    wp_enqueue_style(
        'tailwind',
        get_template_directory_uri() . '/dist/output.css',
    );
    
    // slick
    wp_enqueue_style(
        'slick-css',
        get_template_directory_uri() . '/assets/slick/slick.css',
    );
    wp_enqueue_style(
        'slick-theme',
        get_template_directory_uri() . '/assets/slick/slick-theme.css',
    );


    wp_enqueue_script(
        'slick-js',
        get_template_directory_uri() . '/assets/slick/slick.min.js',
        ['jquery'],
        theme_version,
        true
    );
}
add_theme_support('post-thumbnails');

function menu()
{
    register_nav_menus(array(
        'primary' => 'Primary Navigation'
    ));
}

add_action('after_setup_theme', 'menu');

if (function_exists('acf_add_options_page')) {

    if (function_exists('acf_add_options_page')) {

        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'position' => '3.5',
            'redirect'      => false
        ));
    }

    //acf_add_options_sub_page(array(
    //    'page_title'    => 'Theme Header Settings',
    //    'menu_title'    => 'Header',
    //    'parent_slug'   => 'theme-general-settings',
    //));

}


//Register ACF blocks
include_once('acf-blocks.php');


add_filter('gform_confirmation', 'custom_confirmation', 10, 4);
function custom_confirmation($confirmation, $form, $lead, $ajax)
{
    if ($form['id'] == '2') {

        $year2023 = is_numeric($lead['3']);
        $year2022 = is_numeric($lead['4']);
        $year2021 = is_numeric($lead['5']);
        $year2020 = is_numeric($lead['6']);
        $year2019 = is_numeric($lead['7']);

        $sum_total = $year2023 + $year2022 + $year2021 + $year2020 + $year2019;

        //echo "<pre>";
        var_dump($year2023);
        var_dump($year2019);
        //echo "</pre>";

    }
    return $confirmation;
}


