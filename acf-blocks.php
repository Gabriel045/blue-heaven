<?php

//ACF Blocks
add_action('init', 'register_acf_blocks');

function register_acf_blocks()
{
    register_block_type(__DIR__ . '/blocks/hero');
    register_block_type(__DIR__ . '/blocks/text-image');
    register_block_type(__DIR__ . '/blocks/tax-credit-home');
    register_block_type(__DIR__ . '/blocks/service-offer');
    register_block_type(__DIR__ . '/blocks/testimonials');
    register_block_type(__DIR__ . '/blocks/our-process');
    register_block_type(__DIR__ . '/blocks/contact');
    register_block_type(__DIR__ . '/blocks/latest-blog');
    register_block_type(__DIR__ . '/blocks/text-cta');
    register_block_type(__DIR__ . '/blocks/team');
}
