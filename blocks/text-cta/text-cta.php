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
$title              = get_field('title');
$paragraph          = get_field('paragraph');
$get_started_url    = get_field('learn_more_url');

?>

<section class="bg-[#F9FAFB]">
    <div class="block_content">
        <div class="mb-[100px] last:mb-0 direction flex flex-col items-center relative z-[50]
        before:content-[''] before:absolute before:w-[300px] before:h-[80px] before:bg-[#B5D3EA] before:blur-[40px] before:z-40">
            <h2 class="relative z-50"> <?php echo $title ?> </h2>
            <p class="text-[#475467] my-[20px] relative z-50 text-center lg:w-[70%]"><?php echo $paragraph ?> </p>
            <a href="<?php echo $get_started_url ?> " class="button_hover button_custom relative z-50">Get Started</a>
        </div>
    </div>
</section>


