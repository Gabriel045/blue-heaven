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

  <header id="header_menu " class="flex justify-center relative bg-primary overflow-x-clip">
    <div class="block_content max-w-[1440px] w-full items-center flex absolute z-[999]" style="padding-top:40px; padding-bottom:40px">
      <div class="w-[50%] lg:w-[15%]">
        <a href="/home"> <img class="w-[140px] lg:w-[180px]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Logo.svg" alt=""></a>
      </div>
      <div class="hidden lg:flex w-[65%]  justify-end">
        <?php echo wp_nav_menu("3"); ?>
      </div>
      <div class="w-[50%] lg:w-[20%] text-end flex justify-end items-center">
        <span class="inline-block cursor-pointer menu-mobile">
          <div class="block lg:hidden" id="nav-icon4">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </span>
        <a href="<?php esc_url(the_field('header', 'option'))  ?>" target="_blank" class="button_hover hidden lg:inline-block bg-white text-[#06385F] text-[18px] font-[500] rounded-[10px]  px-[20px] py-[10px]">Get Started</a>
      </div>
    </div>

    <div class="bg-primary absolute z-[60] h-[80vh] w-full menu-mobile-container bloch lg:hidden">
      <div class="div px-[40px] pb-[70px]">
        <?php echo wp_nav_menu("3"); ?>
        <div class="pt-[50px]">
          <a href="<?php echo get_field('cta_url_header', 'option')['cta_url_header'] ?> " class="py-[10px] px-[20px] rounded-[8px] mr-[18px] mt-[50px] bg-white text-primary text-[18px] font-[500] relative z-50">Get Started</a>
        </div>
      </div>
    </div>

  </header>


  <script>
    let mobile = document.querySelector(".menu-mobile")

    mobile.addEventListener('click', () => {
      document.querySelector(".menu-mobile-container").classList.toggle('active')
      document.querySelector("#nav-icon4").classList.toggle('open')
    })


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