<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <title><?php /*?><?php wp_title('&laquo;', true, 'right'); ?><?php */ ?> <?php bloginfo('name'); ?></title>

    <!-- Social Meta tags -->
    <?php /*?><?php $share_image = get_field('share_image','option');?>
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
<meta property="og:description" content="<?php bloginfo( 'name' ); ?>" />
<meta property="og:url" content="<?php bloginfo( 'url' ); ?>" />
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>" />
<meta property="og:image" itemprop="image" content="<?php if($share_image!=""){echo $share_image['url'];}else{echo get_template_directory_uri().'/screenshot.png'; }?>"><?php */ ?>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed"
        href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

    <?php $websitelogo = get_field('websitelogo', 'option'); ?>

    <div class="main_container" id="wrapper">
        <div class="header">
            <?php if ($websitelogo != "") { ?>
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>">
                        <img alt="<?php bloginfo('name'); ?>" src="<?php echo $websitelogo['url']; ?>" />
                    </a>
                </div>
            <?php } ?>
            <div class="hright">
                <div class="hrightin">
                    <div class="menutoggle"><a href="Javascript:void(0);"><img alt="layer"
                                src="<?php bloginfo('template_directory'); ?>/images/menuvector.svg" /></a></div>
                    <div class="hmenu">
                        <div class="menutoglclose"><a href="Javascript:void(0);"><img alt="layer"
                                    src="<?php bloginfo('template_directory'); ?>/images/menutoglclose.svg" /></a></div>
                        <div class="hmenuone">
                            <?php wp_nav_menu(array('theme_location' => 'header-menu-one', 'depth' => '4')); ?>
                        </div>
                        <div class="hmenutwo">
                            <?php wp_nav_menu(array('theme_location' => 'header-menu-two', 'depth' => '4')); ?>
                        </div>
                    </div>
                    <div class="hsearch">
                        <a class="search-form-link" href="Javascript:void(0);">
                            <span class="one">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                                    fill="none">
                                    <path
                                        d="M8.375 14.75C11.8958 14.75 14.75 11.8958 14.75 8.375C14.75 4.8542 11.8958 2 8.375 2C4.8542 2 2 4.8542 2 8.375C2 11.8958 4.8542 14.75 8.375 14.75Z"
                                        stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                                    <path d="M12.958 12.9581L16.14 16.1401" stroke="white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="two">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.75 5.75L13.25 13.25" stroke="#A8D8FF" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.75 13.25L13.25 5.75" stroke="#A8D8FF" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>