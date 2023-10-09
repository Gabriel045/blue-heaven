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

$sections            = get_field('section');
$title_section       = get_field('title');
$paragraph           = get_field('paragraph'); ?>


<section class="<?php echo (!empty($sections[0]['cta_url'])) ? 'bg-[#F9FAFB]' : '' ?> relative">
    <div class="block_content">
        <?php if (!empty($title_section)) : ?>
            <div class="mb-[60px] lg:mb-[100px] last:mb-0 direction flex flex-col items-center relative z-[50]
            before:content-[''] before:absolute before:w-[300px] before:h-[80px] before:bg-[#B5D3EA] before:blur-[40px] before:z-40">
                <h2 class="relative z-50 " style="margin-top:0px"> <?php echo $title_section ?> </h2>
                <p class="text-[#475467] my-[40px] relative z-50 text-center lg:w-[70%]"><?php echo $paragraph ?> </p>
            </div>
        <?php
        endif;
        foreach ($sections as $key => $section) :
            $image_position    = $section['image_position'];
            $image             = $section['image'];
            $title             = $section['title'];
            $title_shadow      = $section['title_shadow'];
            $paragraph         = $section['paragraph'];
            $cta_text          = $section['cta_text'];
            $cta_url           = $section['cta_url']; ?>

            <div class="mb-[100px] last:mb-0 direction flex flex-wrap lg:flex-nowrap gap-[40px] lg:gap-[80px] lg:flex-<?php echo $image_position ?> flex-col-reverse">
                <?php if (!empty($image)) : ?>
                    <div class="w-full lg:w-[45%]">
                        <img class="w-[350px] h-[286px] lg:w-[547px] lg:h-full lg:min-h-[425px]  rounded-[10px] relative z-50 object-cover" src="<?php echo $image ?>" alt="">
                    </div>
                <?php endif ?>

                <div class="<?php echo !empty($image) ? ' w-full lg:w-[50%]' : 'full' ?> relative lg:flex lg:flex-col lg:justify-center ">
                    <div class="relative <?php echo ($title_shadow == "Yes") ? 'blur_custom' : '' ?>  ">
                        <h2 class="relative z-50 "> <?php echo $title ?> </h2>
                        <p class="text-[#475467] my-[20px] relative z-50"><?php echo $paragraph ?> </p>
                        <?php echo (!empty($cta_url)) ? '<a target="_blank" href="' . $cta_url . '" class="button_hover hidden  button_custom lg:inline-block relative z-50">' . $cta_text . '</a>' : '' ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <?php echo (!empty($cta_url)) ? '<img class="absolute top-[-24%] right-0 lg:h-[50vw] h-[500px]" src=" ' . get_stylesheet_directory_uri() . '/assets/images/hexagon-3.svg">' : '' ?>
    <?php echo (!empty($title_section)) ?  '<img class="absolute rotate-180 top-[30%] left-0 h-[500px] lg:h-auto" src=" ' . get_stylesheet_directory_uri() . '/assets/images/hexagon-3.svg">' : '' ?>
    <?php echo (count($sections) >= 2)  ?  '<img class="absolute lg:hidden w-[300px] h-[800px] right-0 top-[20%]" src=" ' . get_stylesheet_directory_uri() . '/assets/images/hexagon-3.svg">' : '' ?>
    <?php echo (count($sections) >= 3)  ?  '<img class="absolute rotate-180 lg:hidden w-[300px] h-[800px] left-0 bottom-0" src=" ' . get_stylesheet_directory_uri() . '/assets/images/hexagon-3.svg">' : '' ?>
</section>