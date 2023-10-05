<?php
get_header();

$args = array(
    'post_type' => 'industry',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
);

$query = new WP_Query($args);

the_content();
?>

<section class="relative">
    <div class="block_content relative text-center ">
        <div class="mt-[110px] flex gap-[6%] lg:gap-y-[90px] gap-y-[30px] flex-wrap">
            <?php foreach ($query->posts as $key => $post) :  ?>
                <div class="industry-card w-full lg:w-[47%] relative z-50">
                    <div class="thumbnail_industries">
                        <?php echo get_the_post_thumbnail($post->ID) ?>
                    </div>
                    <div class="text-start bg-[#F9FAFB] rounded-b-[16px] p-[50px] relative z-50">
                        <h2 class="relative z-50 text-[#101828] mb-[22px]"><?php echo $post->post_title ?> </h2>
                        <a class="relative z-50 learn_more flex gap-[8px] cursor-pointer text-[#06385F] text-[18px] font-[600]" href="<?php echo get_the_permalink($post->ID,) ?>">Learn More
                            <img class="mt-[3px]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right-arrow.svg">
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <img decoding="async" class="absolute lg:block right-0 top-[5%]" src=" <?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-6.svg">
</section>

<?php get_footer();
