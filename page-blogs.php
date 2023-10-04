<?php
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 9,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish'
);
$wp_query = new WP_Query($args);

$total_pages = $wp_query->max_num_pages;

function pagainate_link_function()
{
    global $wp_query;
    echo paginate_links(array(
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
    ));
}

//echo"<pre>";
//    var_dump($post);
//echo"</pre>";

?>
<main id="post-<?php the_ID(); ?>" class=" <?php post_class(); ?>">
    <section class="bg-[#06385F] relative">
        <img class="hidden lg:block absolute z-10 right-0 lg:right-0 bottom-0 " src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon.svg" alt="">
        <img class="lg:hidden block absolute z-10 right-0 lg:right-0 h-[540px] bottom-[-10px]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-5.svg" alt="">
        <div class="hero block_content max-w-[1440px] text-left">
            <h1 class="lg:w-[70%]">Blogs</h1>
        </div>
    </section>
    <section>
        <div class="max-w-[1440px] w-full px-[40px] lg:px-[120px] pt-[80px] lg:pt-[196px] pb-[60px] lg:pb-[110px]">
            <div class="flex flex-row flex-wrap mb-0 lg:mb-[85px]">
                <?php foreach ($wp_query->posts as $key => $post) :
                    $user = get_user_by('id', $post->post_author)->user_login;
                    $date = $post->post_date;
                    $newDate = date("d M Y", strtotime($date)); ?>
                    <div class="blog-card w-full lg:w-[33.3%] px-[20px] mb-[80px] relative">
                        <div class="thumbnail ">
                            <a class=" cursor-pointer" href="<?php echo get_the_permalink($post->ID,) ?>">
                                <?php echo get_the_post_thumbnail($post->ID) ?>
                            </a>
                        </div>
                        <a class=" cursor-pointer" href="<?php echo get_the_permalink($post->ID,) ?>">
                            <h3 class="relative z-50 text-[24px] font-[600] text-[#101828] leading-[30px] py-[24px]"><?php echo  $post->post_title ?> </h3>
                            <div class="text-[14px] font-[600] text-[#06385F] flex lg:pb-0">
                                <span class="relative z-50"> <?php echo $user ?> </span>
                                <span class="relative z-50 text-[25px] h-[2px] mt-[-13px] mx-[4px]">.</span>
                                <span class="relative z-50"><?php echo $newDate  ?></span>
                            </div>
                        </a>
                    </div>

                <?php endforeach ?>
            </div>
            <div class="pagination text-center text-[20px] text-[#101828]">
                <?php pagainate_link_function()
                ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer();
