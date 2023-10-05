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
$title          = get_field('title') ?: 'Your Title here...';
$form           = get_field('contact_form');
$text           = get_field('paragraph');
$home_hero      = get_field('home_hero');
$first_button   = get_field('first_button');
$second_button  = get_field('second_button');

?>

<section class="bg-[#06385F] relative">
    <img class="hidden lg:block absolute z-10 right-0 lg:right-0 bottom-0 " src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon.svg" alt="">
    <img class="lg:hidden block absolute z-10 right-0 lg:right-0 h-[540px] bottom-[-10px]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-5.svg" alt="">
    <div class="<?php echo ($home_hero == "Yes") ? "home-hero" : "hero" ?>  block_content max-w-[1440px] text-left <?php echo ($form == "Yes") ? 'flex flex-wrap' : '' ?> ">
        <div class="<?php echo ($form == "Yes") ? 'lg:w-1/2 w-full' : '' ?> ">
            <h1 class="<?php echo ($form == "Yes") ? '' : 'lg:w-[60%]' ?> "><?php echo  $title  ?> </h1>
            <?php echo (!empty($text)) ? '<p class="text-[#ffffffcc]  mt-[30px] mb-[50px] lg:w-[50%]"> ' . $text . ' </p>' : '' ?>
            <div class="flex flex-wrap gap-y-[30px] ">
                <?php echo (!empty($first_button["url"])) ? '<a target="_blank" href="' . $first_button["url"] . '" class="button_hover py-[10px] lg:py-[15px] px-[20px] lg:px-[31px] rounded-[8px] mr-[18px] bg-white text-primary text-[16px] lg:text-[18px] font-[500] relative z-50">' . $first_button['text'] . '</a>' : '' ?>
                <?php echo (!empty($second_button["url"])) ? '<a target="_blank" href="' . $second_button["url"] . '" class="button_hover py-[10px] lg:py-[15px] px-[20px] lg:px-[31px] rounded-[8px] bg-[#3d6482] text-white text-[16px] lg:text-[18px] font-[500]  relative z-50">' . $second_button['text'] . '</a>' : '' ?>
            </div>
        </div>
        <?php if ($form == "Yes") : ?>
            <div class="w-full lg:w-1/2 hero-form flex lg:justify-end">
                <?php echo do_shortcode('[gravityform id="1" title="false"]') ?>
            </div>
        <?php endif ?>
    </div>

    <?php echo ($home_hero == "Yes") ? '<img class="hidden lg:block absolute top-0 left-0" src="' . get_stylesheet_directory_uri() . '/assets/images/hexagon-2.svg" alt="">' : '' ?>
</section>