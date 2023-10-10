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
$class_name = 'text-image-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.

$title       = get_field('title');
$image       = get_field('image');
$list        = get_field('items');
$cta         = get_field("cta");   ?>


<section class="">
    <div class="block_content flex flex-row flex-wrap">
        <div class="w-full lg:w-[45%]">
            <h2 class="relative z-50 text-center lg:text-start"> <?php echo $title ?> </h2>
            <ul class="my-[64px]">
                <?php foreach ($list as $key => $item) : ?>
                    <div class="flex gap-[10px] mb-[22px] justify-center lg:justify-start">
                        <span>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/check.svg" alt="">
                        </span>
                        <p class="text-[#475467] text-[18px]"><?php echo $item['text'] ?></p>
                    </div>
                <?php endforeach ?>
            </ul>
            <div class="text-center lg:text-start relative blur_custom">
                <?php echo (!empty($cta["text"])) ? '<a target="_blank" href=" ' . $cta["url"] . ' " class="button_hover button_custom  relative z-50"> ' . $cta["text"] . ' </a>' : '' ?>
            </div>
        </div>
        <div class="w-full lg:w-[50%]">
            <img class="w-[350px]  h-[286px]  lg:w-[547px] lg:h-[534px] mt-[60px] lg:mt-0 mx-auto lg:mx-0 rounded-[10px] relative z-50 object-cover" src="<?php echo $image ?>" alt="">
        </div>
    </div>
</section>