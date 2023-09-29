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

?>

<section class="bg-[#F9FAFB] relative">
    <div class="block_content">
        <div class="flex ">
            <div class="w-1/2 relative blur_custom">
                <h2 class="mb-[46px] z-50 relative">Our Process</h2>
                <a href="#" class="button_custom z-50 relative">Join Program</a>
            </div>
            <div class="w-1/2 relative before:content-[''] before:w-[2px] before:h-[80%] before:z-40 before:top-[5%] before:bg-[#06385fb5] before:block before:absolute before:left-[24px]
             after:content-['']  after:w-[73px] after:h-[70%] after:bg-[#B5D3EA] after:block after:absolute after:top-[10%] after:left-[-10px] after:z-30 after:blur-[40px]">
                <div class="flex  items-start">
                    <div class="w-[20%]">
                        <img class="w-[48px] h-[48px] relative z-[50]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-4.svg" alt="">
                    </div>
                    <div class="flex flex-col w-[80%]">
                        <span class="text-[18px] font-[600] text-[#101828] mb-[5px]">Assessment</span>
                        <span class="">We delve deep into understanding your R&D projects and activities.</span>
                    </div>
                </div>
                <div class="flex  items-start my-[70px]">
                    <div class="w-[20%]">
                        <img class="w-[48px] h-[48px] relative z-[50]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-5.svg" alt="">
                    </div>
                    <div class="flex flex-col w-[80%]">
                        <span class="text-[18px] font-[600] text-[#101828] mb-[5px]">Eligibility</span>
                        <span class="">Using our "Four-Part Test," we identify potential qualifying activities.</span>
                    </div>
                </div>
                <div class="flex  items-start">
                    <div class="w-[20%]">
                        <img class="w-[48px] h-[48px] relative z-[50]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-6.svg" alt="">
                    </div>
                    <div class="flex flex-col w-[80%]">
                        <span class="text-[18px] font-[600] text-[#101828] mb-[5px]">Documentation</span>
                        <span class="">We guide you in meticulous record-keeping, ensuring every claim stands robust.</span>
                    </div>
                </div>
                <div class="flex  items-start mt-[70px]">
                    <div class="w-[20%]">
                        <img class="w-[48px] h-[48px] relative z-[50]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-7.svg" alt="">
                    </div>
                    <div class="flex flex-col w-[80%]">
                        <span class="text-[18px] font-[600] text-[#101828] mb-[5px]">Claiming</span>
                        <span class="">Navigate both federal and state tax credits seamlessly, with our team by your side.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="absolute top-[-24%] left-[0] rotate-180" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-3.svg">
</section>