<?php
/*
* Template Name: Best ECU
* Updated on 11/08/2020 by Eric Lee (hello@1wayto.com)
*/
get_header();
$pid = $post->ID;
$becu_image_left = get_field('becu_image_left', $pid);
$becu_image_right = get_field('becu_image_right', $pid);
$becu_juxtapose_slider_text_area = get_field('becu_juxtapose_slider_text_area', $pid);
$becu_juxtapose_slider_button_label_left = get_field('becu_juxtapose_slider_button_label_left', $pid);
$becu_juxtapose_slider_button_label_right = get_field('becu_juxtapose_slider_button_label_right', $pid);
$becu_juxtapose_slider_button_link = get_field('becu_juxtapose_slider_button_link', $pid);
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$becu_points_with_images = get_field('becu_points_with_images', $pid);
$becu_four_points_textarea = get_field('becu_four_points_textarea', $pid);
$becu_products_textarea_top = get_field('becu_products_textarea_top', $pid);
$becu_products_textarea_middle = get_field('becu_products_textarea_middle', $pid);
$becu_products_textarea_bottom = get_field('becu_products_textarea_bottom', $pid);
$four_products = get_field('four_products', $pid);
$certificaitons_and_our_customers = get_field('certificaitons_and_our_customers', $pid);
$contact_form = get_field('contact_form', $pid);
$main_color = get_field('main_color', $pid);
$background_video = get_field('background_video', $pid);
$contact_form = get_field('contact_form', $pid);
$contact_email = get_field('contact_email', $pid);
?>
<style>
    .circle,
    .circle:before {
        background-color: <?php echo $main_color; ?>;
        border: 1px solid <?php echo $main_color; ?>;
    }

    .tool-tip-content-opened {
        border: 3px solid <?php echo $main_color; ?>;

    }

    .hr-small {
        background-color: <?php echo $main_color; ?>;
        width: 9%;
        display: block;
        height: 5px;
        margin: 0 0 30px 0;
    }

    .products_textarea_bottom a {
        color: <?php echo $main_color; ?>;
    }

    .mr_botsub input {
        background-color: <?php echo $main_color; ?>;

    }

    .email-mailto-icon {
        background-color: <?php echo $main_color; ?>;
    }

    .products_textarea_bottom svg {
        fill: <?php echo $main_color; ?>;
    }
</style>
<script src="<?php echo get_template_directory_uri(); ?>/public/js/app.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/css/app.css">
<?php echo get_template_part('template-parts/temp-top'); ?>
<a class="email-mailto-icon" href="mailto:<?php echo $contact_email; ?>" target="_blank">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
        <g>
            <g>
                <path d="M496.327,127.091l-15.673,9.613L281.83,258.623c-7.983,4.859-16.917,7.293-25.84,7.293s-17.826-2.424-25.778-7.262    l-0.136-0.084L31.347,134.771l-15.673-9.759L0,115.242v302.717h512V117.488L496.327,127.091z" />
            </g>
        </g>
        <g>
            <g>
                <path d="M25.245,94.041l25.161,15.673l25.161,15.673l171.008,106.527c5.841,3.521,13.082,3.511,18.913-0.042l173.652-106.486    l25.558-15.673l25.558-15.673H25.245z" />
            </g>
        </g>
    </svg>
</a>
<div id="ecu-container">
    <div class="juxtapose-container">

        <div class="juxtapose-text-container inner_wrap mobile">
            <?php echo apply_filters('the_content', $becu_juxtapose_slider_text_area); ?>
        </div>
        <div class="juxtapose" data-startingposition="35%" data-showlabels="false" data-showcredits="false">
            <?php
            if (!empty($becu_image_left)) : ?>
                <img src="<?php echo esc_url($becu_image_left['url']); ?>" alt="<?php echo esc_attr($becu_image_left['alt']); ?>" />
            <?php endif; ?>
            <?php
            if (!empty($becu_image_right)) : ?>
                <img src="<?php echo esc_url($becu_image_right['url']); ?>" alt="<?php echo esc_attr($becu_image_right['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="juxtapose-text-container inner_wrap desktop">
            <?php echo apply_filters('the_content', $becu_juxtapose_slider_text_area); ?>
            <a href="<?php echo $becu_juxtapose_slider_button_link; ?>" class="juxtapose-button"><span><?php echo $becu_juxtapose_slider_button_label_left; ?></span><span class="juxtapose_slider_button_right"><?php echo $becu_juxtapose_slider_button_label_right; ?> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                        <path fill="#ffffff" id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001  c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213  C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606  C255,161.018,253.42,157.202,250.606,154.389z" />
                    </svg></span></a><span class="warranty-logo"><?php echo get_template_part('template-parts/warranty'); ?></span>
        </div>
        <div class="juxtapose-text-container inner_wrap mobile">
            <a href="<?php echo $becu_juxtapose_slider_button_link; ?>" class="juxtapose-button"><span><?php echo $becu_juxtapose_slider_button_label_left; ?></span><span class="juxtapose_slider_button_right"><?php echo $becu_juxtapose_slider_button_label_right; ?> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
                        <path fill="#ffffff" id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001  c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213  C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606  C255,161.018,253.42,157.202,250.606,154.389z" />
                    </svg></span></a><span class="warranty-logo"><?php echo get_template_part('template-parts/warranty'); ?></span>
        </div>
    </div>
</div>
<div id="four-products-panel">
    <div class="inner_wrap">

        <div class="column-left">
            <table class="four-points-grid" data-aos="zoom-out-up" cellspacing="0">
                <tr>
                    <td style="border-right:1px solid lightgrey;border-bottom:1px solid lightgrey;" data-aos="zoom-out-up" data-aos-delay="0">
                        <img src="<?php echo $becu_points_with_images[0] ? $becu_points_with_images[0]['image'] : ''; ?>" />
                        <br />
                        <p><?php echo $becu_points_with_images[0] ? $becu_points_with_images[0]['label'] : ''; ?></p>
                    </td>
                    <td style="border-bottom:1px solid lightgrey" data-aos="zoom-out-up" data-aos-delay="200">
                        <img src="<?php echo $becu_points_with_images[1] ? $becu_points_with_images[1]['image'] : ''; ?>" />
                        <br />
                        <p><?php echo $becu_points_with_images[1] ? $becu_points_with_images[1]['label'] : ''; ?></p>
                    </td>
                </tr>
                <tr>
                    <td style="border-right:1px solid lightgrey;" data-aos="zoom-out-up" data-aos-delay="400">

                        <img src="<?php echo $becu_points_with_images[2] ? $becu_points_with_images[2]['image'] : ''; ?>" />
                        <br />
                        <p><?php echo $becu_points_with_images[2] ? $becu_points_with_images[2]['label'] : ''; ?></p>
                    </td>
                    <td data-aos="zoom-out-up" data-aos-delay="800">
                        <img src="<?php echo $becu_points_with_images[3] ? $becu_points_with_images[3]['image'] : ''; ?>" />
                        <br />
                        <p><?php echo $becu_points_with_images[3] ? $becu_points_with_images[3]['label'] : ''; ?></p>
                    </td>
                </tr>
            </table>

        </div>
        <div class="column-right " data-aos="fade-up-left">
            <?php echo apply_filters('the_content', $becu_four_points_textarea); ?>
        </div>
    </div>
</div>
<!-- Four Product -->
<div id="four-products">
    <div class="inner_wrap">
        <div class="column">
            <div class="hr-small"></div>
            <?php echo apply_filters('the_content', $becu_products_textarea_top); ?>
        </div>
        <div class="column" style="position: relative; z-index: 10;">
            <?php if ($four_products[0]) { ?>
                <div class="product-1 " data-aos="fade-up">
                    <a href="#" class="reveal-product-spec circle tool-tip" data-index="product-1">
                        1
                    </a>
                    <?php if ($four_products[1]) { ?>
                        <a href="#" class="reveal-product-spec circle tool-tip" data-index="product-2">
                            2
                        </a>
                    <?php } ?>
                    <div class="panel-container">
                        <?php if ($four_products[0]) { ?>
                            <div class="product-1-content-container product-content-container tool-tip-content product-1-content">
                                <div class="hr-small"></div>
                                <?php echo apply_filters('the_content', $four_products[0]['textarea']); ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="panel-container">
                        <?php if ($four_products[1]) { ?>
                            <div class="product-2-content-container product-content-container tool-tip-content product-2-content">
                                <div class="hr-small"></div>
                                <?php echo apply_filters('the_content', $four_products[1]['textarea']); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                    $image = $four_products[0]['image'];
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" data-aos="fade-up" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            <?php } ?>


        </div>
        <div class="column" style="width: 100%;">
            <?php if ($four_products[2]) { ?>
                <div class="product-3" data-aos="fade-up" data-aos-offset="-100">

                    <div class="tool-tip-content-opened tool-tip-content-opened-desktop">
                        <div class="hr-small"></div>
                        <?php echo apply_filters('the_content', $becu_products_textarea_middle); ?>
                    </div>
                    <a href="#" class="reveal-product-spec circle" data-index="product-3" data-aos-offset="500">
                        3
                    </a>
                    <div class="panel-container">
                        <?php if ($four_products[2]) { ?>
                            <div class="product-3-content-container product-content-container tool-tip-content product-3-content">
                                <div class="hr-small"></div>
                                <?php echo apply_filters('the_content', $four_products[2]['textarea']); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                    $image = $four_products[2]['image'];
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" data-aos="fade-up" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>


                </div>

            <?php } ?>
        </div>
        <?php if ($four_products[3]) { ?>
            <div class="product-4" data-aos="fade-up" data-aos-offset="-100">
                <a href="#" class="reveal-product-spec circle tool-tip" data-index="product-4">
                    4
                </a>
                <div class="panel-container">
                    <?php if ($four_products[3]) { ?>
                        <div class="product-4-content-container product-content-container tool-tip-content product-4-content">
                            <div class="hr-small"></div>
                            <?php echo apply_filters('the_content', $four_products[3]['textarea']); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <div class="tool-tip-content-opened tool-tip-content-opened-mobile">
            <?php echo apply_filters('the_content', $becu_products_textarea_middle); ?>
        </div>


    </div>
    <div class="inner_wrap products_textarea_bottom" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div>
            <?php echo apply_filters('the_content', $becu_products_textarea_bottom); ?>

            <a class="wobble" href="#contact-form-bottom"><?php _e('Contact us now to order from our Off-the-Shelf Units', 'tat'); ?>&nbsp;<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path d="M143 256.3L7 120.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0L313 86.3c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.4 9.5-24.6 9.5-34 .1zm34 192l136-136c9.4-9.4 9.4-24.6 0-33.9l-22.6-22.6c-9.4-9.4-24.6-9.4-33.9 0L160 352.1l-96.4-96.4c-9.4-9.4-24.6-9.4-33.9 0L7 278.3c-9.4 9.4-9.4 24.6 0 33.9l136 136c9.4 9.5 24.6 9.5 34 .1z" />
                </svg></a>
        </div>
    </div>
</div>
</div>
<!-- end of four products -->
<div id="certs-and-customers">
    <div class="inner_wrap">
        <?php echo apply_filters('the_content', $certificaitons_and_our_customers); ?>
    </div>
</div>
<div id="contact-form-bottom">
    <!-- background video -->
    <div class="video-container">
        <video autoplay muted loop id="bgvideo">
            <source src="<?php echo $background_video; ?>" type="video/mp4">
        </video>
    </div>
    <div class="inner_wrap">
        <div class="contact-form-bottom-container">
            <?php echo apply_filters('the_content', $contact_form); ?>
        </div>
        <p style="text-align:center"><small><?php _e('The presented Shelters are produced by Ramim Engineering Works', 'tat'); ?></p>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/juxtapose.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($){	
$('a.wobble, a.juxtapose-button').click(function() {
 $('html,body').animate({scrollTop: $(this.hash).offset().top-$('.header').outerHeight()}, 1000, 'swing');
});
});	
</script>
<?php get_footer(); ?>