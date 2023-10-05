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
$class_name = 'team-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title              = get_field('title');
$paragraph          = get_field('paragraph');
$team_members       = get_field('team_members');

?>

<section class="bg-[#F9FAFB] relative">
    <div class="block_content">
        <div class="mb-[100px] last:mb-0 direction flex flex-col items-center relative z-[50]
        before:content-[''] before:absolute before:w-[300px] before:h-[80px] before:bg-[#B5D3EA] before:blur-[40px] before:z-40">
            <h2 class="relative z-50"> <?php echo $title ?> </h2>
            <p class="text-[#475467] my-[20px] relative z-50 text-center lg:w-[70%]"><?php echo $paragraph ?> </p>
        </div>
        <div class="flex flex-wrap w-full">
            <?php foreach ($team_members as $key => $team_member) : ?>
                <div class="team-card w-full lg:w-[25%] pb-[45px] last:pb-0 relative">
                    <div class="px-[10px]">
                        <img class="relative z-50 rounded-[10px] w-full" src="<?php echo $team_member["image"] ?>" alt="">
                        <div>
                            <p class="relative z-50 text-[#101828] mt-[20px] mb-[5px] font-[600] lg:text-[22px]"> <?php echo $team_member["full_name"] ?> </p>
                            <p class="relative z-50 text-[#475467] text-[16px] font-[400]"> <?php echo $team_member["designation"] ?> </p>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>
    </div>
    <img decoding="async" class="absolute top-[30%] right-[0] h-[800px] w-[200px] lg:w-[300px]" src="https://blueheaven.local/wp-content/themes/blue-heaven/assets/images/hexagon-3.svg">
    <img decoding="async" class="lg:hidden block rotate-180 absolute bottom-[30%] left-0 w-[200px] " src="https://blueheaven.local/wp-content/themes/blue-heaven/assets/images/hexagon-3.svg">
</section>