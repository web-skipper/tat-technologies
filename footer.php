<?php $footer_update_title = get_field('footer_update_title', 'option');
//$footer_form_title = get_field('footer_form_title','option');
$select_form = get_field('select_form', 'option');
$footerlogo = get_field('footerlogo', 'option');
$footer_menu_one_title = get_field('footer_menu_one_title', 'option');
$footer_menu_two_title = get_field('footer_menu_two_title', 'option');
$footer_social_title = get_field('footer_social_title', 'option');
$twitter_link = get_field('twitter_link', 'option');
$linkedin_link = get_field('linkedin_link', 'option');
$facebook_link = get_field('facebook_link', 'option'); ?>

<div class="footer">
    <div class="footertop">
        <div class="footertopone">
            <?php if ($footer_update_title != "") { ?>
                <div class="footerleft">
                    <h5><?php echo $footer_update_title; ?></h5>
                </div>
            <?php } ?>
            <div class="footerright">
                <div class="footerform">
                    <div class="footerformin">
                        <?php echo $select_form; ?>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
        <div class="footertoptwo">
            <?php if ($footerlogo != "") { ?>
                <div class="footerlogo">
                    <a href="<?php bloginfo('url'); ?>">
                        <img alt="<?php bloginfo('name'); ?>" src="<?php echo $footerlogo['url']; ?>" />
                    </a>
                </div>
            <?php } ?>
            <div class="footertworight">
                <div class="footermenu footermenu1">
                    <?php if ($footer_menu_one_title != "") { ?>
                        <h4><?php echo $footer_menu_one_title; ?></h4><?php } ?>
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu-one', 'depth' => '4')); ?>
                </div>
                <div class="footermenu footermenu2">
                    <?php if ($footer_menu_two_title != "") { ?>
                        <h4><?php echo $footer_menu_two_title; ?></h4><?php } ?>
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu-two', 'depth' => '4')); ?>
                </div>
                <div class="footersocial">
                    <?php if ($footer_social_title != "") { ?>
                        <h4><?php echo $footer_social_title; ?></h4><?php } ?>
                    <ul>
                        <?php if ($twitter_link != "") { ?>
                            <li><a href="<?php echo $twitter_link; ?>" target="_blank"><img alt="twiiter"
                                        src="<?php bloginfo('template_directory'); ?>/images/twitter.svg" /></a></li>
                        <?php } ?>
                        <?php if ($linkedin_link != "") { ?>
                            <li><a href="<?php echo $linkedin_link; ?>" target="_blank"><img alt="linkedin"
                                        src="<?php bloginfo('template_directory'); ?>/images/linkedin.svg" /></a></li>
                        <?php } ?>
                        <?php if ($facebook_link != "") { ?>
                            <li><a href="<?php echo $facebook_link; ?>" target="_blank"><img alt="facebook"
                                        src="<?php bloginfo('template_directory'); ?>/images/facebook.svg" /></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="footerbot" style="<?= is_front_page() || is_home() ? 'min-height:70px;' : ''; ?>">
        <div class="footbotleft">Copyright © 2025 TAT Technologies Ltd. All rights reserved.</div>
        <div class="footbotright">Created by <a href="https://www.sinapistech.com/" target="_blank">Sinapis
                Technologies</a>, <a href="https://www.yoti.co.il/" target="_blank">Go Create</a>, <a
                href="https://web-skipper.co.il/" target="_blank">Web Skipper</a></div>
        <div class="clr"></div>
    </div>
</div>

</div><!-- .main_container #wrapper" -->

<?php wp_footer(); ?>

</body>

</html>