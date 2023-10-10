<?php
define('theme_version', time());

// Adding theme styles and scripts
add_action('wp_enqueue_scripts', 'af_add_theme_scripts');

function af_add_theme_scripts()
{

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

        $year2023 = ($lead['3']);
        $year2022 = ($lead['4']);
        $year2021 = ($lead['5']);
        $year2020 = ($lead['6']);
        $year2019 = ($lead['7']);

        $sum_total = $year2023 + $year2022 + $year2021 + $year2020 + $year2019;
        $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);

        $low = $formatter->formatCurrency($sum_total * 0.09, 'USD');      
        $high = $formatter->formatCurrency($sum_total * 0.15, 'USD');

        $confirmation = "
        <div class='w-[350px] lg:w-[604px] bg-primary rounded-[18px] min-h-[500px] px-[30px] lg:px-[60px] lg:py-[80px] py-[40px]'> 
            <div class='calculator-header'>
                <a href='/calculator' class='text flex'><img class='mr-[15px]' src='". get_stylesheet_directory_uri() ."/assets/images/left-arrow.svg'> Restart Calculator</a>
                <p class='logo'>blue<span class='span'>haven</span></p>
             </div>   
            <div class='mt-[70px] rounded-[12px] bg-[#124168] p-[30px] lg:p-[40px]'>
                <p class='text-center text-[20px] font-[400] text-white'> We’ve emailed your estimate! </p> 
                <p class='mb-[40px] text-center text-[12px] font-[400] text-[#ffffff99]'> Lorem ipsum dolor sit amet consectetur. In ornare egestas dictum vel. Vulputate quam. </p> 
                <p class='mb-[15px] text-center text-[20px] font-[400] text-[#ffffff99]'> Your estimated reward: </p> 
                <div class='text-[20px] text-white font-[400] text-center'>
                    <span>" . $low . "</span>
                    <span> To </span>
                    <span>" . $high . "</span>
                </div>
            </div>
            <div id='phone_numner' class='mt-[64px]'> 
                <p class='mb-[26px] text-center text-[20px] font-[400] text-white'> Speak With Us To Claim Your Credit </p> 
                    " .  do_shortcode('[gravityform id="3" title="false"]')  . "
            </div>
        </div>";
    }
    return $confirmation;
}
