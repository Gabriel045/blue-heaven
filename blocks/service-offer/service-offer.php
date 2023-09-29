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
$class_name = 'service-offer-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

$cards = get_field('cards');
// Load values and assign defaults.

?>

<section class="relative">
    <div class="block_content relative text-center ">
        <div class="relative z-50 inline-block before:content-[''] before:absolute before:w-[300px] before:h-[80px] before:bg-[#B5D3EA] before:blur-[40px] before:z-40 before:left-0">
            <h2 class="relative z-50">Services We Offer</h2>
        </div>
        <div class="mt-[110px] flex gap-[6%] lg:gap-y-[90px] gap-y-[30px] flex-wrap">
            <?php foreach ($cards as $key => $card) :  ?>
                <div class="w-full lg:w-[47%] relatize z-50">
                    <div>
                        <img class="rounded-t-[10px] w-full" src="<?php echo $card["image"] ?> " alt="">
                    </div>
                    <div class="h-[130px] flex items-center justify-center bg-[#F9FAFB] rounded-b-[10px]">
                        <span class="text-[22px] font-[600] text-[#101828] leading-[27px]"><?php echo $card["title"] ?> </span>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <img class="absolute lg:hidden w-[300px] h-[800px] left-0 top-[20%] rotate-180" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-3.svg" alt="">
</section>