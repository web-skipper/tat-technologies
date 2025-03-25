<?php /*Template Name: Company Leadership Page */
get_header();
$pid = $post->ID;
?>

<?php $header_bg_color = get_field('header_bg_color', $pid);
$header_bg_overlay_image = get_field('header_bg_overlay_image', $pid);
$header_top_text = get_field('header_top_text', $pid);
$header_bottom_text = get_field('header_bottom_text', $pid); ?>

<div class="inner_main company_leader" id="skypcon">
    <div class="companyban_leader" <?php if ($header_bg_color != "") { ?>
            style="background:<?php echo $header_bg_color; ?>" <?php } ?>>
        <div class="breadcrumbs"><a href="<?php bloginfo('url'); ?>">Home</a><?php if (function_exists('bcn_display')) {
              bcn_display();
          } ?>
        </div>

        <div class="combanlayer_leader">
            <?php if ($header_bg_overlay_image != "") { ?>
                <img alt="<?php echo $header_bg_overlay_image['alt']; ?>"
                    src="<?php echo $header_bg_overlay_image['url']; ?>" />
            <?php } else { ?>
                <img alt="layer" src="<?php bloginfo('template_directory'); ?>/images/leader_curvedlines.png" />
            <?php } ?>
        </div>

        <div class="companybantxt_leader">
            <?php if ($header_top_text != "") { ?>
                <h2><?php echo $header_top_text; ?></h2><?php } ?>
            <h1><?php if ($header_bottom_text != "") {
                echo $header_bottom_text;
            } else {
                the_title();
            } ?></h1>
        </div>
    </div>


    <?php if (have_rows('leader_lists', $pid)): ?>
        <div class="leader_ship_list">
            <div class="leader_ship_list_inner">
                <ul>
                    <?php while (have_rows('leader_lists', $pid)):
                        the_row();
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                        $position = get_sub_field('position');
                        $short_text = get_sub_field('short_text');
                        $more_text = get_sub_field('more_text');
                        $linkedin_link = get_sub_field('linkedin_link');
                        $twitter_link = get_sub_field('twitter_link');
                        $contact_email = get_sub_field('contact_email');
                        $contact_phone = get_sub_field('contact_phone'); ?>
                        <li class="cf">
                            <div class="leadership-cf-wrapper"
                                style="padding-bottom:20px;padding-top:20px;border-bottom: 1px solid #e5e5e5;">
                                <div class="leader_name">
                                    <h4><?php echo $name; ?></h4>
                                    <?php if ($position != "") { ?><span><?php echo $position; ?></span><?php } ?>
                                </div>
                                <div class="leader_details">
                                    <?php echo $short_text; ?>
                                    <?php if ($more_text != "") { ?>
                                        <div class="leader_more_txt"><?php echo $more_text; ?></div>
                                        <div class="leader_readmore">
                                            <a class="leader_readmore_but" href="Javascript:void(0);">
                                                <span class="readmo">Read More <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.027 4.16675L10.0117 15.8334" stroke="#2E313F"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M4.16797 10H15.8346" stroke="#2E313F" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg></span>
                                                <span class="readle">Read Less <svg width="21" height="20" viewBox="0 0 21 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.66797 10H16.3346" stroke="#2E313F" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg></span>
                                            </a>

                                        </div>
                                    <?php } ?>

                                    <?php if ($linkedin_link != "" || $twitter_link != "" || $contact_email != "" || $contact_phone != "") { ?>
                                        <div class="contact_but">
                                            <a class="leader_contact_but" href="Javascript:void(0);">
                                                <span class="readmo">Contact <svg width="21" height="20" viewBox="0 0 21 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.16797 13.3333L14.2513 6.25" stroke="#2E313F" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M6.75 6.25H14.25V13.75" stroke="#2E313F" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg></span> </a>
                                            <div class="contact_lead_popup">
                                                <div class="leader_close"><a href="Javascript:void(0);"><svg width="25" height="24"
                                                            viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M16.1094 15.9375L8.23438 8.0625" stroke="#2E313F"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M16.1094 8.0625L8.23438 15.9375" stroke="#2E313F"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg></a></div>
                                                <?php if ($contact_phone != "") { ?>
                                                    <div class="leader_contact_info"><span>M.</span> <a
                                                            href="tel:<?php echo $contact_phone; ?>"
                                                            target="_blank"><?php echo $contact_phone; ?></a></div><?php } ?>
                                                <?php if ($contact_email != "") { ?>
                                                    <div class="leader_contact_info"><span>E.</span> <a
                                                            href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
                                                    </div><?php } ?>
                                                <?php /*?><ul class="contact_lead_social">
                                                                                       <?php if ($linkedin_link != "") { ?>
                                                                                           <li><a href="<?php echo $linkedin_link; ?>" target="_blank"><svg width="20"
                                                                                                       height="20" viewBox="0 0 20 20" fill="none"
                                                                                                       xmlns="http://www.w3.org/2000/svg">
                                                                                                       <path
                                                                                                           d="M18.5195 0H1.47656C0.660156 0 0 0.644531 0 1.44141V18.5547C0 19.3516 0.660156 20 1.47656 20H18.5195C19.3359 20 20 19.3516 20 18.5586V1.44141C20 0.644531 19.3359 0 18.5195 0ZM5.93359 17.043H2.96484V7.49609H5.93359V17.043ZM4.44922 6.19531C3.49609 6.19531 2.72656 5.42578 2.72656 4.47656C2.72656 3.52734 3.49609 2.75781 4.44922 2.75781C5.39844 2.75781 6.16797 3.52734 6.16797 4.47656C6.16797 5.42188 5.39844 6.19531 4.44922 6.19531ZM17.043 17.043H14.0781V12.4023C14.0781 11.2969 14.0586 9.87109 12.5352 9.87109C10.9922 9.87109 10.7578 11.0781 10.7578 12.3242V17.043H7.79688V7.49609H10.6406V8.80078H10.6797C11.0742 8.05078 12.043 7.25781 13.4844 7.25781C16.4883 7.25781 17.043 9.23438 17.043 11.8047V17.043Z"
                                                                                                           fill="#2E313F" />
                                                                                                   </svg></a></li><?php } ?>
                                                                                       <?php if ($twitter_link != "") { ?>
                                                                                           <li><a href="<?php echo $twitter_link; ?>" target="_blank"><svg width="20"
                                                                                                       height="18" viewBox="0 0 20 18" fill="none"
                                                                                                       xmlns="http://www.w3.org/2000/svg">
                                                                                                       <path
                                                                                                           d="M15.2706 0.586426H18.0818L11.9401 7.606L19.1654 17.1581H13.5081L9.07706 11.3648L4.00699 17.1581H1.19406L7.76323 9.64984L0.832031 0.586426H6.63296L10.6382 5.8817L15.2706 0.586426ZM14.284 15.4754H15.8417L5.78653 2.1807H4.11492L14.284 15.4754Z"
                                                                                                           fill="#2E313F" />
                                                                                                   </svg></a></li><?php } ?>
                                                                                   </ul><?php */ ?>
                                            </div>
                                        </div>

                                    <?php } ?>

                                </div>
                                <div class="leader_img">
                                    <?php if ($image != "") { ?><img alt="layer" src="<?php echo $image['url']; ?>"
                                            alt="<?php echo $name; ?>" /><?php } ?>
                                </div>
                            </div>

                        </li>
                    <?php endwhile; ?>

                </ul>
            </div>
        </div>
    <?php endif; ?>

</div>


<?php get_footer(); ?>


<style>
    .leader_ship_list ul li {
        padding: 0px 0px !important;
    }
</style>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        jQuery(".leader_readmore .leader_readmore_but").on("click", function () {
            $(this).parent().parent().find('.leader_more_txt').slideToggle(300);
            $(this).toggleClass('active');
        });
        jQuery(".leader_contact_but").on("click", function () {
            //$(this).next('.contact_lead_popup').slideToggle(300);
			$(this).next('.contact_lead_popup').toggleClass('active');
            //$(this).toggleClass('active');
        });
        jQuery(".leader_close a").on("click", function () {
           // $(this).parent().parent('.contact_lead_popup').slideUp(300);
		   $(this).parent().parent('.contact_lead_popup').removeClass('active');
            //$(this).toggleClass('active');
        });

    });
    jQuery(window).on('load', function () {

    });
    jQuery(window).resize(function () {

    });

</script>