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

$title             = get_field('title');
$paragraph         = get_field('paragraph');


$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
);

$query = new WP_Query($args);




?>

<section class="">
    <div class="block_content flex flex-col lg:items-center">
        <h2 class=""> <?php echo $title ?> </h2>
        <p class="mt-[20px] mb-[90px] text-[#475467] lg:text-center lg:w-[70%]"> <?php echo $paragraph ?> </p>
        <div class="flex justify-center flex-wrap gap-[2%]">
            <?php foreach ($query->posts as $key => $post) :
                $user = get_user_by('id', $post->post_author)->user_login;
                $date = $post->post_date;
                $newDate = date("d M Y", strtotime($date)); ?>
                <div class="w-[32%]">
                    <div>
                        <?php echo get_the_post_thumbnail($post->ID) ?>
                    </div>
                    <h3 class="text-[24px] font-[600] my-[24px] text-[#101828]"><?php echo $post->post_title ?></h3>
                    <div class="text-[14px] font-[600] text-[#06385F] flex ">
                        <span> <?php echo $user ?> </span>
                        <span class="text-[25px] h-[2px] mt-[-13px] mx-[4px]">.</span>
                        <span><?php echo $newDate  ?></span>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    </div>
    <!--<?php echo (($learn_more == "Yes")) ? '<img class="absolute top-[-24%] right-[0] lg:h-[50vw] h-[500px] lg:w-auto" src=" ' . get_stylesheet_directory_uri() . '/assets/images/hexagon-3.svg">' : '' ?>-->
</section>