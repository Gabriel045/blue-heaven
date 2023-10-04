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
$class_name = 'three-columns-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$background   = get_field('background');
$title        = get_field('title');
$cards        = get_field('card');

?>

<section id="three-columns" class=" <?php echo ($background == 'Gray') ? 'bg-[#F9FAFB]' :  'bg-[#fff]' ?>">
    <div class="block_content">
        <div class="mb-[60px] lg:mb-[100px] last:mb-0 direction flex flex-col items-center relative z-[50]
        before:content-[''] before:absolute before:w-[300px] before:h-[80px] before:bg-[#B5D3EA] before:blur-[40px] before:z-40">
            <h2 class="relative z-50 " style="margin-top:0px"> <?php echo $title ?> </h2>
            <?php echo (!empty($cta['url'])) ? '<a href="' . $cta['url'] . ' " class="button_hover button_custom relative z-50">' . $cta['text'] . '</a>' : '' ?>
        </div>
        <div class="flex flex-row flex-wrap">
            <?php foreach ($cards as $key => $card) : ?>
                <div class="w-full lg:w-[33.3%] lg:px-[25px] mb-[80px] last:mb-0 lg:mb-0 relative z-50">
                    <div class="<?php echo ($background == 'White') ? 'bg-[#F9FAFB]' :  'bg-[#fff]' ?> rounded-[10px] p-[25px] h-[270px] relative z-50">
                        <img class="relative z-50 w-[48px] h-[48px]" src="<?php echo $card['icon'] ?>" alt="">
                        <p class="relative z-50 text-[18px] font-[600] text-[#101828] mt-[16px]"><?php echo $card['text'] ?></p>
                        <p class="relative z-50 text-[16px] text-[#475467] "><?php echo $card['paragraph'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>