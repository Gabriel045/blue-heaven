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
$class_name = 'list-item-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title           = get_field('title');
$paragraph       = get_field('paragraph');
$subtitle        = get_field('subtitle');
$list            = get_field('list'); ?>




<section class="relative">
    <img class="absolute lg:block right-0 top-[5%]" src=" <?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-6.svg">
    <div class="block_content flex items-center flex-col" style="padding-bottom:0px">
        <div class="mb-[100px] last:mb-0 direction flex flex-col items-center relative z-[50]
        before:content-[''] before:absolute before:w-[300px] before:h-[80px] before:bg-[#B5D3EA] before:blur-[40px] before:z-40">
            <h2 class="relative z-50 " style="margin-top:0px"> <?php echo $title ?> </h2>
            <p class="text-[#475467] my-[40px] relative z-50 text-center lg:w-[70%]"><?php echo $paragraph ?> </p>
        </div>

        <?php foreach ($list as $key => $item) : ?>
            <div class="lg:w-1/2">
               <h5 class="text-center text-[#101828] text-[22px] font-[600]"> <?php echo $item['title'] ?></h5>
               <?php foreach ($item['states'] as $key => $state) : ?>
                   <div class="flex  items-start mt-[60px] last:mb-[60px]">
                       <div class="w-[20%]">
                           <img class="w-[52px] h-[52px] relative z-50" src="<?php echo $state['icon'] ?>" alt="">
                       </div>
                       <div class="flex flex-col w-[80%]">
                           <span class="relative z-[50] text-[18px] font-[600] text-[#101828] mb-[5px]"><?php echo $state['title'] ?></span>
                           <span class="relative z-[50] "> <?php echo  $state['paragraph'] ?> </span>
                       </div>
                   </div>
               <?php endforeach ?>
           </div>
        <?php endforeach ?>

    </div>
</section>