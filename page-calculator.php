<?php

get_header();

?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content() ?>
    <section id="calculator-page">
        <div class="block_content flex justify-center">
            <?php echo do_shortcode('[gravityform id="2" title="false" ajax="false"]') ?>
        </div>
    </section>
</main>

<?php
get_footer();

?>

<script>
    function dots() {
        let next = document.querySelector("#gform_next_button_2_1")
        let items = document.querySelectorAll(".w65")


        items.forEach(item => {
            item.innerHTML += ` <span class="bullet" style=""></span> `
            let BIRTHNUMBER_ALLOWED_CHARS_REGEXP = /[0-9\\/]+/;
            let input = item.querySelector("input")

            input.addEventListener("keypress", e => {
                if (!BIRTHNUMBER_ALLOWED_CHARS_REGEXP.test(e.key)) {
                    e.preventDefault();
                }
            });


            input.addEventListener("input", (e) => {
                data = (input.value.includes("$")) ? parseInt(input.value.replace("$", "")) : (input.value);
                checked = (data >= 1) ? item.querySelector(".bullet").classList.add("checked") : item.querySelector(".bullet").classList.remove("checked")
                if (parseInt(input.value.replace("$", ""))) item.querySelector(".bullet").classList.add("checked")

                //Enable/Disable next buttom for the fist step
                let f = []
                document.querySelectorAll(".w65 input").forEach(input => {
                    data = (input.value.includes("$")) ? parseInt(input.value.replace("$", "")) : input.value;
                    q = (data >= 1) ? q = 1 : q = 0
                    f.push(q)
                })

                remove = (f.includes(1)) ? next.removeAttribute("disabled") : next.setAttribute("disabled", true)

            })

        })
    }
    dots()

    jQuery(document).on('gform_post_render', function(event, form_id, current_page) {
        if (current_page == 1) {
            dots()
        }
    });


    setTimeout(() => {
        document.querySelector("#gform_next_button_2_1").disabled = true;
    }, 200);


    //formating Industry step
             let choises = document.querySelectorAll(".industry-step .gchoice input")
    choises.forEach(choise =>     {
          choise.addEventListener("change", () => {
            choises.forEach(element => {
                let checked = (element.checked) ? element.parentNode.classList.add("selected") : element.parentNode.classList.remove("selected")
            })
                 })   
    });
</script>             