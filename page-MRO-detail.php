<?php /*Template Name: MRO Detail Page */
get_header();
$pid = $post->ID; ?>
<?php
$parent_id = wp_get_post_parent_id($pid);
$parent_link = '#';
if ($parent_id) {
    //  $parent_link = get_permalink($parent_id);
}
?>
<div class="inner_main mro_main_detail" id="skypcon">
    <?php $banner = get_field('banner', $pid); ?>
    <div class="mroban">
        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a><span class="breadarow"></span>
            <a href="<?= $parent_link; ?>">Commercial</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
        <div class="mrobanimg">

            <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
                <div class="inbanimg">
                    <img alt="<?php echo $banner['image']['alt']; ?>" src="<?php echo $banner['image']['url']; ?>" />
                </div>
            <?php endif; ?>

            <div class="overlwy-detail">
                <img alt="" src="<?php bloginfo('template_directory'); ?>/images/mro_detail_overlay.png" />
            </div>
        </div>
        <div class="mrobantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <div class="mrobansub"><?= $banner['title_left_one']; ?></div>
            <?php endif; ?>

            <?php if ($banner['title_left_two'] != ""): ?>
                <h1><?= $banner['title_left_two']; ?></h1>
            <?php endif; ?>

            <?php if ($banner['title_left_three'] != ""): ?>
                <h2><?= $banner['title_left_three']; ?></h2>
            <?php endif; ?>

        </div>
    </div>

    <?php $overview = get_field('overview', $pid); ?>
    <div class="mroone">
        <?php if ($overview['section_title'] != ""): ?>
            <div class="seconetitle"><?= $overview['section_title']; ?></div>
        <?php endif; ?>

        <?php if ($overview['left_title'] != ""): ?>
            <div class="mroneleft"><?= $overview['left_title']; ?></div>
        <?php endif; ?>
        <?php if ($overview['right_text'] != ""): ?>
            <div class="mroneright"><?= $overview['right_text']; ?></div>
        <?php endif; ?>

        <div class="clr"></div>
    </div>

    <?php $commercials = get_field('commercials', $pid); ?>

    <div class="mrotwo_detail">
        <div class="mrtwoldiv_detail">
            <?php if ($commercials['commercials']):
                $loopIndex = 0; ?>
                <?php foreach ($commercials['commercials'] as $commercial): ?>
                    <div class="mrtwoltitle_detail">

                        <div class="mrcat_detail"><?php echo $commercial['section_title']; ?></div>
                        <h3><?php echo $commercial['title']; ?></h3>
                    </div>
                    <div class="mrtwollist_detail">
                        <ul>

                            <?php if ($commercial['mro_services']): ?>
                                <?php foreach ($commercial['mro_services'] as $mro_service): ?>
                                    <li>
                                        <a href="<?= $mro_service['button_link']; ?>">
                                            <div class="mrlistleft_text">
                                                <?php if ($mro_service['title'] != ""): ?>
                                                    <h3><?php echo $mro_service['title']; ?></h3>
                                                <?php endif; ?>
                                                <?php if ($mro_service['text'] != ""): ?>
                                                    <?php echo $mro_service['text']; ?>
                                                <?php endif; ?>

                                                <?php if ($mro_service['more_text'] != ""): ?>
                                                    <div class="more_text" style="display:none">
                                                        <?= $mro_service['more_text']; ?>
                                                    </div>

                                                    <div class="readmore_detail">
                                                        <span>

                                                            Read More <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.025 4.16602L10.0098 15.8327" stroke="#2E313F"
                                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M4.16602 10H15.8327" stroke="#2E313F" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>

                                                        </span>
                                                    </div>

                                                <?php endif; ?>
                                            </div>

                                            <?php if (isset($mro_service['image']) && !empty($mro_service['image']['ID'])): ?>
                                                <div class="mrlistright_img">
                                                    <img alt="<?php echo $mro_service['image']['alt']; ?>"
                                                        src="<?php echo $mro_service['image']['url']; ?>" />
                                                </div>
                                            <?php endif; ?>

                                            <div class="clr"></div>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <?php $loopIndex++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="clr"></div>
        </div>

        <?php $navigation = get_field('navigation', $pid); ?>
        <div class="mrotwo_bot_buttons">
            <ul>
                <li class="backbut_mro">
                    <?php
                    $parent_id = wp_get_post_parent_id($pid);
                    $current_id = get_the_ID();
                    if ($parent_id) {
                        $parent_link = get_permalink($parent_id);
                        $parent_title = get_the_title($parent_id);
                        ?>
                        <a href="<?= $parent_link; ?>"><svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.33398 9.99609H18.0007" stroke="#2E313F" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.334 15L6.33398 10L11.334 5" stroke="#2E313F" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2.58398 15V5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg> Back to Services</a>
                        <?php
                    }
                    ?>
                </li>
                <?php if ($navigation['navigation']): ?>
                    <?php foreach ($navigation['navigation'] as $navigation): ?>
                        <li>
                            <?php
                            $post_object = $navigation['link'];
                            if ($post_object):
                                $post = $post_object;
                                setup_postdata($post);
                                ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 10.5039H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M10 5.5L15 10.5L10 15.5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <?php
                                wp_reset_postdata();
                            endif;
                            ?>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php /***  if ($parent_id):
$child_pages = get_children([
'post_parent' => $parent_id,
'post_type' => 'page',
'post_status' => 'publish',
'orderby' => 'menu_order',
'order' => 'ASC',
]);

if ($child_pages): ?>
<?php foreach ($child_pages as $child):
if ($child->ID == $current_id)
continue;
?>
<li>
<a href="<?php echo get_permalink($child->ID); ?>">
<?php echo get_the_title($child->ID); ?>
<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15 10.5039H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round"></path>
<path d="M10 5.5L15 10.5L10 15.5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round"></path>
</svg>
</a>
</li>
<?php endforeach; ?>
<?php endif; ?>
<?php endif; ?>
**/ ?>
            </ul>
        </div>
    </div>

    <?php
    $more_from_our_commercial_services = get_field('more_from_our_commercial_services', $pid); // Single value from ACF option field in current page
    ?>
    <div class="mro_bottom_slider">
        <div class="bottom_slider_heading cf">
            <?php if ($more_from_our_commercial_services['more_from_our_commercial_services_title']): ?>
                <h3><?= $more_from_our_commercial_services['more_from_our_commercial_services_title']; ?></h3>
            <?php endif; ?>

            <?php if ($more_from_our_commercial_services['mro_services']): ?>
                <div class="mro_slider_cat owl-carousel">
                    <?php $services_loop = get_field($more_from_our_commercial_services['mro_services'], 'option'); // ACF repeater from options ?>
                    <?php if (is_array($services_loop) && !empty($services_loop)): ?>
                        <?php foreach ($services_loop as $service): ?>
                            <?php if ($service['inner_services'] && !empty($service['inner_services'])): ?>
                                <?php foreach ($service['inner_services'] as $inner): ?>
                                    <div class="mro_item">
                                        <a href="<?= $inner['link']; ?>">
                                            <div class="mro_sli_img" style="min-height:150px;background:gray;width:200px;">
                                                <?php if (isset($inner['image']) && !empty($inner['image']['ID'])): ?>
                                                    <img alt="<?php echo $inner['image']['alt']; ?>"
                                                        src="<?php echo $inner['image']['url']; ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="mro-sli_txt">
                                                <h5><?= $service['service_title']; ?></h5>
                                                <h4><?= $inner['title_one']; ?></h4>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="mronavigation" style="display:none;">
                <a class="mro-next" href="Javascript:void(0);">
                    <img alt="arrow" src="<?php bloginfo('template_directory'); ?>/images/slider_right_arrow.svg" />
                </a>
                <a class="mro-prev" href="Javascript:void(0);">
                    <img alt="arrow" src="<?php bloginfo('template_directory'); ?>/images/slider_left_arrow.svg" />
                </a>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>



    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('.mro_slider_cat').owlCarousel({
                loop: true,
                margin: 55,
                nav: true,
                navText: [$('.mro-prev'), $('.mro-next')],
                responsive: {
                    0: {
                        items: 2.2,
                        margin: 20,
                    },
                    600: {
                        items: 4.2,
                        margin: 20,
                    },
                    1280: {
                        items: 6.3,
                        margin: 20,
                    },
                    1441: {
                        items: 7.3,
                        margin: 55,
                    }
                }
            });
            equalheight('.mro_sli_img img');

            //ReadMore
            $('.readmore_detail').on('click', function (e) {
                e.preventDefault();
                var link = $(this).closest('a').attr('href');
                $(this).parent().find('.more_text').slideToggle();
            });
        });
        jQuery(window).on('load', function () {
            equalheight('.mro_sli_img img');

        });
        jQuery(window).resize(function () {
            equalheight('.mro_sli_img img');

        });

    </script>