<main id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
     <?php the_content(); ?>
</main>

<script>
    let firstChill = document.querySelectorAll("#three-columns")

    firstChill[0].innerHTML += `<img class="absolute w-[300px] h-[800px] right-0 top-[30%]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-3.svg" alt="">`
    firstChill[0].style.position = "relative"

    padding = (firstChill.length > 1) ? firstChill[0].querySelector(".block_content").classList.add("three-columns-custom") : ''
</script>