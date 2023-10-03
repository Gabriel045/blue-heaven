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
$class_name = 'tax-credit-home-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title');
$cta   = get_field('cta');
$items   = get_field('items');

?>

<section class="bg-[#F9FAFB] relative">
    <img class="absolute lg:hidden w-[300px] h-[800px] right-0 top-[-50%]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-3.svg" alt="">
    <div class="block_content">
        <div class="flex lg:flex-nowrap flex-wrap">
            <div class="w-full lg:text-start text-center lg:w-1/2 relative mb-[60px] lg:mb-0 blur_custom">
                <h2 class="mb-[46px] z-50 relative"><?php echo $title ?></h2>
                <?php echo (!empty($cta["url"])) ? '<a target="_blank" href="' . $cta["url"] . '" class="button_hover hidden lg:inline-block  button_custom  relative z-50">' . $cta['text'] . '</a>' : '' ?>
            </div>
            <div class="lg:w-1/2 relative before:content-[''] before:w-[2px] <?php echo (count($items)<= 3)? 'before:h-[60%]' : 'before:h-[75%]' ?> before:z-40 before:top-[30px] before:bg-[#06385fb5] before:block before:absolute before:left-[24px]
             after:content-['']  after:w-[73px] after:h-[70%] after:bg-[#B5D3EA] after:block after:absolute after:top-[10%] after:left-[-10px] after:z-30 after:blur-[40px]">

                <?php foreach ($items as $key => $item) : ?>
                    <div class="flex  items-start mb-[60px]">
                        <div class="w-[20%]">
                            <img class="w-[48px] h-[48px] relative z-50" src="<?php echo $item['icon'] ?>" alt="">
                        </div>
                        <div class="flex flex-col w-[80%]">
                            <span class="relative z-[50] text-[18px] font-[600] text-[#101828] mb-[5px]"><?php echo $item['title'] ?></span>
                            <span class="relative z-[50] "> <?php echo  $item['paragraph'] ?> </span>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</section>