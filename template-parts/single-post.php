<main id="post-<?php the_ID(); ?>" class=" <?php post_class(); ?>">

    <section class="bg-[#06385F] relative">
        <img class="hidden lg:block absolute z-10 right-0 lg:right-0 bottom-0 " src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon.svg" alt="">
        <img class="lg:hidden block absolute z-10 right-0 lg:right-0 h-[540px] bottom-[-10px]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-5.svg" alt="">
        <div class="hero block_content max-w-[1440px] text-left">
            <h1 class="lg:w-[70%]"><?php echo  get_the_title()  ?> </h1>
            <div class="text-[20px] font-[400] text-[#ffffffcc] flex  mt-[30px]">
                <span> <?php echo get_the_author() ?> </span>
                <span class="text-[30px] h-[2px] mt-[-13px] mx-[4px]">.</span>
                <span><?php echo get_the_date("d M Y")  ?></span>
            </div>
        </div>
    </section>


    <section id="blog_content" class="relative">
        <img class="absolute w-[200px] lg:w-[300px] h-[800px] right-0 top-[30%] " src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-3.svg" alt="">
        <div class="cont w-full flex flex-col items-center">
            <?php the_content(); ?>

        </div>
    </section>

</main>

<script>
    document.querySelector("#blog_content h2").classList.add("blur_custom")
</script>