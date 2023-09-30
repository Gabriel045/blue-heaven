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

$image_position    = get_field('image_position');
$image             = get_field('image');
$title             = get_field('title');
$paragraph         = get_field('paragraph');
$learn_more        = get_field('learn_more_cta');
$learn_more_url    = get_field('learn_more_url');
?>

<section class="<?php echo ($learn_more == 'Yes') ? 'bg-[#F9FAFB]' : '' ?> relative">
    <div class="block_content">
        <div class="direction flex flex-wrap lg:flex-nowrap gap-[40px] lg:gap-[80px] lg:flex-<?php echo $image_position ?> flex-col-reverse">
            <?php if (!empty($image)) : ?>
                <div class="w-full lg:w-[45%]">
                    <img class="lg:w-[547px] lg:h-[447px] m-auto lg:m-0 rounded-[10px] relative z-50" src="<?php echo $image ?>" alt="">
                </div>
            <?php endif ?>

            <div class="<?php echo !empty($image) ? ' w-full lg:w-[50%]' : 'full' ?> relative lg:flex lg:flex-col lg:justify-center blur_custom-2">
                <h2 class="relative z-50"> <?php echo $title ?> </h2>
                <p class="text-[#475467] my-[20px] relative z-50"><?php echo $paragraph ?> </p>
                <?php echo ($learn_more == "Yes") ? '<a href="' . $learn_more_url . '" class="button_hover hidden  button_custom lg:inline-block relative z-50">Learn More</a>' : '' ?>
            </div>
        </div>
    </div>
    <?php echo (($learn_more == "Yes")) ? '<img class="absolute top-[-24%] right-[0] lg:h-[50vw] h-[500px] lg:w-auto" src=" ' . get_stylesheet_directory_uri() . '/assets/images/hexagon-3.svg">' : '' ?>
</section>

