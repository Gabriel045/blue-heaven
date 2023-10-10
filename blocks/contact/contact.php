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


// Load values and assign defaults.
$title      = get_field('title');
$paragraph  = get_field('paragraph');
$email      = get_field('email');
$phone      = get_field('phone');
$address    = get_field('address');

?>

<section class="relative">
    <img  class="lg:hidden block absolute top-[200px] right-[0] w-[250px] lg:w-auto" src="https://blueheaven.local/wp-content/themes/blue-heaven/assets/images/hexagon-3.svg">
    <div class="block_content relative text-center before:content-[''] before:absolute before:w-[300px] before:h-[80px]
     before:bg-[#B5D3EA] before:blur-[40px] before:z-40  before:left-[-50px]">
        <div class="flex gap-[6%] flex-wrap">
            <div class="w-full lg:w-[47%] mb-[60px] lg:mb-0">
                <h2 class="relative z-50  text-start"><?php echo $title ?></h2>
                <p class="relative z-50 mt-[20px] mb-[60px] text-start"> <?php echo $paragraph ?> </p>
                <div class="w-[80%] lg:w-[55%]">
                    <div class="flex">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/letter.svg" alt="">
                        <p class="ml-[25px] text-[16px] text-start"> <?php echo $email ?> </p>
                    </div>
                    <div class="my-[35px] flex">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/phone.svg" alt="">
                        <p class="ml-[25px] text-[16px] text-start"> <?php echo $phone ?> </p>
                    </div>
                    <div class="flex">
                        <?php if(!empty($address)) :?>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/location.svg" alt="">
                            <p class="ml-[25px] text-[16px] text-start"> <?php echo $address ?> </p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-[47%]">
                <div class="relative before:content-[''] before:absolute before:w-[300px] before:h-[80px]
                     before:bg-[#B5D3EA] before:blur-[40px] before:z-40  before:bottom-[-10px] before:right-0">
                    <?php echo do_shortcode('[gravityform id="1" title="false"]') ?>
                </div>
            </div>
        </div>
</section>