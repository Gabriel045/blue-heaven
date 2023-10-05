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
$class_name = 'list-item-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$background      = get_field('background');
$title           = get_field('title');
$cta             = get_field('cta');
$items           = get_field('items');

?>

<section class="<?php echo ($background == 'Gray') ? 'bg-[#F9FAFB]' :  'bg-[#fff]' ?> relative">
    <img class="absolute w-[300px] h-[800px] rotate-180 left-0 top-[10%]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-3.svg" alt="">
    <div class="block_content">
        <div class="flex lg:flex-nowrap flex-wrap">
            <div class="w-full lg:text-start text-center lg:w-1/2 relative mb-[60px] lg:mb-0 blur_custom">
                <h2 class="mb-[46px] z-50 relative"><?php echo $title ?></h2>
                <?php echo (!empty($cta["url"])) ? '<a target="_blank" href="' . $cta["url"] . '" class="button_hover hidden lg:inline-block  button_custom  relative z-50">' . $cta['text'] . '</a>' : '' ?>
            </div>
            <div class="bf lg:w-1/2 relative before:content-[''] before:w-[2px] before:z-40 before:top-[5px] before:bg-[#06385fb5] before:block before:absolute before:left-[26px]
             after:content-['']  after:w-[73px] after:h-[70%] after:bg-[#B5D3EA] after:block after:absolute after:top-[10%] after:left-[-10px] after:z-30 after:blur-[40px]">

                <?php foreach ($items as $key => $item) : ?>
                    <div class="item-content flex  items-start mb-[60px]">
                        <div class="w-[20%]">
                            <img class="w-[52px] h-[52px] relative z-50" src="<?php echo $item['icon'] ?>" alt="">
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
    <div id="style"></div>
</section>

<script>
    function line(height) {
        document.querySelector("#style").innerHTML =
            `<style> .bf::before { height: calc(100% - ${height}px)} </style>`
    }

    window.addEventListener("load", (event) => {
        let nodes = document.querySelectorAll(".item-content")
        let lasIttem = nodes[nodes.length - 1]
        let height = lasIttem.offsetHeight + 30

        line(height)

        window.addEventListener("resize", () => {
            let height = lasIttem.offsetHeight + 30 
            line(height)
            console.log(height);
        });
    })
</script>