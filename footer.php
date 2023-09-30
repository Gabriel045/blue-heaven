<footer>
    <section class=" bg-[#06385F] relative">
        <div class="block_content py-[30px] px-[30px] lg:px-[150px]" style="padding-top:100px; padding-bottom:25px">
            <div class="lg:mt-[100px] flex flex-wrap lg:flex-nowrap">
                <div class="mb-[90px] lg:mb-0 w-full lg:w-[30%] text-center lg:text-start">
                    <a href="/home"> <img class="w-[150px]" src="<?php echo  get_stylesheet_directory_uri() ?>/assets/images/Logo.svg" alt=""> </a>
                    <p class="text-[#ffffffad] my-[35px] font-[400] lg:w-[90%] text-start"><?php the_field('footer_paragraph', 'option'); ?></p>
                    <div class="flex gap-[40px] justify-start">
                        <a target="_blank" href="<?php echo get_field('social_media', 'option')['facebook'];  ?>"> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/facebook.svg" alt=""></a>
                        <a target="_blank" href="<?php echo get_field('social_media', 'option')['instagram'];  ?>"> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/instagram.svg" alt=""></a>
                        <a target="_blank" href="<?php echo get_field('social_media', 'option')['linkedin'];  ?>"> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/linkedin.svg" alt=""></a>
                        <a target="_blank" href="<?php echo get_field('social_media', 'option')['x'];  ?>"> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twitter.svg" alt=""></a>
                    </div>
                </div>
                <div class="w-full lg:w-[70%] flex lg:gap-[30px] lg:justify-end flex-wrap lg:flex-nowrap">
                    <div class="w-1/2 lg:w-[25%] lg:text-start">
                        <a href="#">
                            <p class="text-[16px] font-[400] text-[#ffffffad] mb-[30px]">Apply Now</p>
                        </a>
                        <a href="#">
                            <p class="text-[16px] font-[400] text-[#ffffffad] mb-[30px]">About Us</p>
                        </a>
                        <a href="#">
                            <p class="text-[16px] font-[400] text-[#ffffffad]">R&D Tax Credits</p>
                        </a>
                    </div>
                    <div class="w-1/2 lg:w-[25%] lg:text-start">
                        <a href="#">
                            <p class="text-[16px] font-[400] text-[#ffffffad] mb-[30px] ml-[20px] lg:ml-0">Partners</p>
                        </a>
                        <a href="#">
                            <p class="text-[16px] font-[400] text-[#ffffffad] ml-[20px] lg:ml-0">Contact Us</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex w-full pt-[27px] mt-[100px] flex-wrap">
                <div class="w-full lg:w-[50%]">
                    <p class="text-[#ffffffad] text-[16px] font-[400]">©2023 BlueHaven. All rights reserved.</p>
                </div>
                <div class="w-full lg:w-[50%] flex justify-between mt-[20px] lg:mt-0 lg:justify-end gap-[50px]">
                    <a class="text-[#ffffffad] text-[16px] font-[400]">Terms and Conditions</a>
                    <a class="text-[#ffffffad] text-[16px] font-[400]">Privacy Policy</a>
                </div>
            </div>
        </div>
        <img class=" absolute bottom-0 lg:w-[50%]" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hexagon-footer-mobile.svg" alt="">
    </section>

</footer>

<?php wp_footer(); ?>
</body>

</html>