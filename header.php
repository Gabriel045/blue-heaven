<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Blue Haven</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open();
  $primaryNav = wp_get_nav_menu_items(3);
  ?>

  <header id="header_menu " class="hidden lg:flex justify-center relative ">
    <div class="block_content max-w-[1440px] w-full items-center flex absolute z-[999]" style="padding-top:40px; padding-bottom:40px">
      <div class="w-[15%]">
       <a href="/home"> <img class="w-[180px]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Logo.svg" alt=""><a>
      </div>
      <div class="w-[65%] flex justify-end">
        <?php echo wp_nav_menu("3"); ?>
      </div>
      <div class="w-[20%] text-end">
        <a href="<?php esc_url(the_field('header', 'option'))  ?>" target="_blank" class="bg-white text-[#06385F] text-[18px] font-[500] rounded-[10px] inline-block px-[20px] py-[10px]">Get Started</a>
      </div>
    </div>
  </header>


  <script>
    //let items = document.querySelectorAll(".menu-item-has-children a")
    //items.forEach((a) => {
    //  a.parentElement.addEventListener("click", (event) => {
    //    let parent = a.parentElement;
    //    parent.querySelector("ul").classList.toggle("show");
    //    parent.classList.toggle("rotate");
    //  })

    //})

    //// disable Herf to some items in the menu
    //let menuItems = document.querySelectorAll(".menu-item-has-children a")
    //let result = menuItems.forEach((item) => {
    //  item.removeAttribute("href")

    //})
  </script>