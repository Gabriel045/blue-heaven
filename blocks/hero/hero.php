<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'hero-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title           = get_field('title') ?: 'Your Title here...';
$text            = get_field('paragraph');
?>

<section class="bg-[#06385F] relative">
    <img class="absolute right-0 bottom-0" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon.svg" alt="">

    <div class="max-w-[1440px] pt-[330px] pb-[250px] px-[120px] text-left ">
        <h1 class="w-[70%]"><?php echo $title ?> </h1>
        <p class="text-[#ffffffcc]  mt-[30px] mb-[50px] w-[65%]"> <?php echo $text ?> </p>
        <div>
            <a href="#" class="py-[15px] px-[31px] rounded-[8px] mr-[18px] bg-white text-primary text-[18px] font-[500]">Credit Calculator</a>
            <a href="#" class="py-[15px] px-[31px] rounded-[8px] bg-[#3d6482] text-white text-[18px] font-[500] ">Contact Us</a>
        </div>
    </div>

    <img class="absolute top-0 left-0" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-2.svg" alt="">

</section>