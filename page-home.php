<?php /*Template Name: Home Page */
get_header();
$pid = $post->ID; ?>
<?php ?>
<!-- <script data-cookieconsent="ignore" src="<?php bloginfo('template_directory'); ?>/js/testscrolling.js"></script> -->
<?php /**/ ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
<style type="text/css">
    html,
    body {
        overflow-x: hidden;
        height: auto;
    }

    .header {
        height: auto !important;
    }

    .home_mian_vslide {
        position: relative;
    }

    .hometwo {
        position: relative;
    }

    html.has-scroll-smooth {
        overflow: hidden;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }

    html.has-scroll-dragging {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .has-scroll-smooth body {
        overflow: hidden;
    }

    .c-scrollbar {
        position: absolute;
        right: 0;
        top: 0;
        width: 11px;
        transform-origin: center right;
        transition: transform 0.3s, opacity 0.3s;
        opacity: 0;
    }

    .c-scrollbar:hover {
        transform: scaleX(1.45);
    }

    .c-scrollbar:hover,
    .has-scroll-scrolling .c-scrollbar,
    .has-scroll-dragging .c-scrollbar {
        opacity: 1;
    }

    .c-scrollbar_thumb {
        position: absolute;
        top: 0;
        right: 0;
        background-color: black;
        opacity: 0.5;
        width: 7px;
        border-radius: 10px;
        margin: 2px;
        cursor: -webkit-grab;
        cursor: grab;
    }

    .has-scroll-dragging .c-scrollbar_thumb {
        cursor: -webkit-grabbing;
        cursor: grabbing;
    }

    .homescroll {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        opacity: 1;
        transition: opacity 0.3s ease-in-out;
    }

    .homescroll.hidden {
        position: relative;
        opacity: 0;
        pointer-events: none;
    }
	.fade-effect {
    opacity: 0;
    transform: translateY(60px);
	}
	.effect-show, #hometwo1 .fade-effect {
		opacity: 1;
		transform: translateY(0);
		transition: opacity 1s, transform 1s;
	}
</style>

<div id="main" data-scroll-container>
    <div class="home_main" id="skypcon">
        <?php
        /*** 
        if (have_rows('slider_area', $pid)): ?>
        <div class="homesldtop">
        <div class="homeslide owl-carousel">
        <?php while (have_rows('slider_area', $pid)):
        the_row();
        $sldimage = get_sub_field('sldimage');
        $title_one = get_sub_field('title_one');
        $title_two = get_sub_field('title_two');
        $sldtext = get_sub_field('sldtext');
        $sldbutton_link = get_sub_field('sldbutton_link'); ?>
        <?php if ($sldimage != "") { ?>
        <div class="homesldiv">
        <div class="hsimg"><img alt="<?php echo $sldimage['alt']; ?>" src="<?php echo $sldimage['url']; ?>" />
        </div>
        <div class="hsldtxt">
        <h1><?php echo $title_one; ?> <span><?php echo $title_two; ?></span></h1>
        <?php echo $sldtext; ?>
        <?php if ($sldbutton_link != "") { ?>
        <a href="<?php echo $sldbutton_link; ?>">Learn More <svg xmlns="http://www.w3.org/2000/svg"
        width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path d="M15 10.0032H5" stroke="white" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
        <path d="M10 5L15 10L10 15" stroke="white" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
        </svg></a>
        <?php } ?>
        </div>
        </div>
        <?php } ?>
        <?php endwhile; ?>
        </div>
        <div class="customnav" id="custom-owl-dots">
        <?php while (have_rows('slider_area', $pid)):
        the_row();
        $sldimage = get_sub_field('sldimage'); ?>
        <?php if ($sldimage != "") { ?>
        <a class="owl-dot" href="Javascript:void(0);"></a>
        <?php } ?>
        <?php endwhile; ?>
        </div>
        <div class="homescroll">
        <a href="#homethrediv">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
        <path d="M7.5 8.75L15 16.25L22.5 8.75" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
        <path d="M22.5 21.25H7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        </a>
        </div>
        </div>
        <?php endif; 
        **/ ?>
        <div class="home_mian_vslide">
            <?php if (have_rows('mid_boxes_detail', $pid)): ?>
                <?php $flag = 1;
                $flag_new = 2;
                while (have_rows('mid_boxes_detail', $pid)):
                    the_row();
                    $midimage = get_sub_field('midimage');
					$midimage_mob = get_sub_field('midimage_mob');
					$midimage_mobtwo = get_sub_field('midimage_mobtwo');
                    $midtitleone = get_sub_field('midtitleone');
                    $midtitle_two = get_sub_field('midtitle_two');
                    $midtext = get_sub_field('midtext');
                    $midlink = get_sub_field('midlink'); ?>
                    <?php if ($midimage != "") { ?>
                        <div class="hometwo" id="hometwo<?php echo $flag; ?>">
                            <div class="hometwodiv section-2x-height-text">
                                <div class="htwoimg" data-scroll data-scroll-speed="-3">
                                	<img class="one" alt="<?php echo $midimage['alt']; ?>" src="<?php echo $midimage['url']; ?>" />
                                    <img class="two" alt="<?php echo $midimage_mob['alt']; ?>" src="<?php if ($midimage_mob != "") { ?><?php echo $midimage_mob['url']; ?><?php } else { ?><?php echo $midimage['url']; ?><?php } ?>" />
                                    <img class="three" alt="<?php echo $midimage_mobtwo['alt']; ?>" src="<?php if ($midimage_mobtwo != "") { ?><?php echo $midimage_mobtwo['url']; ?><?php } else { ?><?php echo $midimage_mob['url']; ?><?php } ?>" />
                                </div>
                                <div class="htwotxt fade-effect" >
                                    <h3><?php echo $midtitleone; ?> <span><?php echo $midtitle_two; ?></span></h3>
                                    <?php echo $midtext; ?>
                                    <?php if ($midlink != "") { ?>
                                        <a href="<?php echo $midlink; ?>">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M15 10.0032H5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M10 5L15 10L10 15" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></a>
                                    <?php } ?>
                                </div>
                            </div>

                            <!-- <div class="homescroll lastchild">
                                <a href="#homethrediv">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M7.5 8.75L15 16.25L22.5 8.75" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M22.5 21.25H7.5" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div> -->
                        </div>
                        <?php $flag++;
                        $flag_new++;
                    }
                endwhile; ?>

            <?php endif; ?>


        </div>


        <?php $company_title = get_field('company_title', $pid);
        $comleft_title = get_field('comleft_title', $pid);
        $comright_text = get_field('comright_text', $pid);
        $combutton_link = get_field('combutton_link', $pid); ?>
        <div class="homethree" id="homethrediv">
            <?php if ($company_title != "") { ?>
                <h4><?php echo $company_title; ?></h4><?php } ?>
            <?php if ($comleft_title != "") { ?>
                <div class="hthreleft"><?php echo $comleft_title; ?></div><?php } ?>
            <div class="hthreright">
                <?php echo $comright_text; ?>
                <?php if ($combutton_link != "") { ?>
                    <a href="<?php echo $combutton_link; ?>">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15 10.0034H5" stroke="#2C2C54" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 5L15 10L10 15" stroke="#2C2C54" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg></a>
                <?php } ?>
            </div>
            <div class="clr"></div>
        </div>

        <?php $newtitle = get_field('newtitle', $pid);
        $newlefttitle = get_field('newlefttitle', $pid);
        $news_room_button_link = get_field('news_room_button_link', $pid); ?>
        <div class="homefour">
            <?php if ($newtitle != "") { ?>
                <h4><?php echo $newtitle; ?></h4><?php } ?>
            <div class="hfourleft">
                <?php if ($newlefttitle != "") { ?>
                    <h5><?php echo $newlefttitle; ?></h5><?php } ?>
                <?php if ($news_room_button_link != "") { ?>
                    <a href="<?php echo $news_room_button_link; ?>">Visit Newsroom <svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15 10.0034H5" stroke="#2C2C54" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 5L15 10L10 15" stroke="#2C2C54" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg></a>
                <?php } ?>
                <div class="clr"></div>
            </div>
            <div class="hfourright">
                <ul>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="hfighttxt">
                                        <p>
                                            <?php the_title(); ?>
                                        </p>
                                        <div class="hfrigtxtbot">
                                            <?php
                                            $terms = get_the_terms(get_the_ID(), 'category');
                                            if ($terms && !is_wp_error($terms)) {
                                                usort($terms, function ($a, $b) {
                                                    return strcmp($a->name, $b->name);
                                                });
                                                foreach ($terms as $term) {
                                                    ?>
                                                    <span>
                                                        <?php echo esc_html($term->name); ?>
                                                    </span>
                                                <?php } ?>
                                            <?php } ?>
                                            <span><?php echo get_the_date('F j, Y'); ?></span>
                                        </div>
                                    </div>
                                    <div class="hfigticon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none">
                                            <path d="M7.91699 5L12.917 10L7.91699 15" stroke="#2C2C54" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
            <div class="clr"></div>
        </div>

        <?php if (have_rows('genslider', $pid)): ?>
            <div class="homefive">
                <div class="hfivein">
                    <div class="hfiveimg owl-carousel">
                        <?php while (have_rows('genslider', $pid)):
                            the_row();
                            $image = get_sub_field('image');
							$Image_Mob = get_sub_field('Image_Mob');
                            $right_top_text = get_sub_field('right_top_text');
                            $right_top_button_link = get_sub_field('right_top_button_link');
                            $bottom_title_one = get_sub_field('bottom_title_one');
                            $bottom_title_one = get_sub_field('bottom_title_one');
                            $bottom_title_two = get_sub_field('bottom_title_two');
                            $botomtext = get_sub_field('botomtext'); ?>
                            <?php if ($image != "") { ?>
                                <div class="hfiveimgsldd">
                                    <div class="hfimg">
                                        <img class="one" alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>" />
                                        <img class="two" alt="<?php echo $Image_Mob['alt']; ?>" src="<?php if ($image != "") { ?><?php echo $Image_Mob['url']; ?><?php } else { ?><?php echo $image['url']; ?><?php } ?>" />
                                    </div>
                                    <div class="hfiveright">
                                        <p><?php echo $right_top_text; ?></p>
                                        <a href="<?php echo $right_top_button_link; ?>">Learn More <svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none">
                                                <path d="M15 10.0034H5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M10 5L15 10L10 15" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></a>
                                    </div>
                                    <div class="hfivebot">
                                        <h4><?php echo $bottom_title_one; ?> <span><?php echo $bottom_title_two; ?></span></h4>
                                        <p><?php echo $botomtext; ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="customnavtwo" id="custom-owl-dots2">
                        <a class="owl-dot" href="Javascript:void(0);"></a>
                        <a class="owl-dot" href="Javascript:void(0);"></a>
                        <a class="owl-dot" href="Javascript:void(0);"></a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php $custsub_title = get_field('custsub_title', 'option');
        $custmain_title = get_field('custmain_title', 'option'); ?>
        <div class="homesix">
            <?php if ($custsub_title != "") { ?>
                <h4><?php echo $custsub_title; ?></h4><?php } ?>
            <?php if ($custmain_title != "") { ?>
                <div class="homesixtop"><?php echo $custmain_title; ?></div>
            <?php } ?>
            <?php if (have_rows('logo_list', 'option')): ?>
                <div class="hsixlogos">
                    <ul class="hsixslider owl-carousel">
                        <?php while (have_rows('logo_list', 'option')):
                            the_row();
                            $logoimage = get_sub_field('logoimage'); ?>
                            <?php if ($logoimage != "") { ?>
                                <li>
                                    <img alt="<?php echo $logoimage['alt']; ?>" src="<?php echo $logoimage['url']; ?>" />
                                </li>
                            <?php } ?>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>

        <?php $botbackground_image = get_field('botbackground_image', $pid);
		$botbackground_image_mob = get_field('botbackground_image_mob', $pid);
        $botright_top_text = get_field('botright_top_text', $pid);
        $botbutton_link_top = get_field('botbutton_link_top', $pid);
        $botbottom_title_one = get_field('botbottom_title_one', $pid);
        $botbottom_title_two = get_field('botbottom_title_two', $pid);
        $botbottom_text = get_field('botbottom_text', $pid); ?>
        <div class="homeseven">
            <div class="homesevnin">
                <div class="hsevenimg">
                	<img class="one" alt="<?php echo $botbackground_image['alt']; ?>" src="<?php echo $botbackground_image['url']; ?>" />
                    <img class="two" alt="<?php echo $botbackground_image['alt']; ?>" src="<?php if ($botbackground_image_mob != "") { ?><?php echo $botbackground_image_mob['url']; ?><?php } else { ?><?php echo $botbackground_image['url']; ?><?php } ?>" />
                </div>
                <div class="hsevntop">
                    <p><?php echo $botright_top_text; ?></p>
                    <?php if ($botbutton_link_top != "") { ?>
                        <a href="<?php echo $botbutton_link_top; ?>">Join us! <img alt=""
                                src="<?php bloginfo('template_directory'); ?>/images/whiterarow.svg" /></a>
                    <?php } ?>
                </div>
                <div class="hsevnbot">
                    <h3><?php echo $botbottom_title_one; ?></h3>
                    <h4><?php echo $botbottom_title_two; ?></h4>
                    <p><?php echo $botbottom_text; ?></p>
                </div>
            </div>
        </div>



    </div>


    <?php get_footer(); ?>
    <div class="homescroll">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <path d="M7.5 8.75L15 16.25L22.5 8.75" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M22.5 21.25H7.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</div>
<?php /*?><div class="customnav_new">
<?php $flag_nav = 1;
while (have_rows('mid_boxes_detail', $pid)):
the_row();
if ($midimage != "") { ?>
<a class="navhome" href="#" data-scroll="hometwo<?php echo $flag_nav; ?>"></a>
<a class="navhome" data-scroll data-scroll-sticky data-scroll-target="#hometwo<?php echo $flag_nav; ?>"></a>
<?php $flag_nav++; }  endwhile; ?>
</div><?php */ ?>