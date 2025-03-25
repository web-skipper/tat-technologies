<?php /** Template Name: OEM Page */
get_header();
$pid = $post->ID; ?>
<?php $introduction = get_field('introduction', $pid); ?>
<?php $commercials = get_field('commercials', $pid); ?>

<div class="inner_main mro_main" id="skypcon">
    <div class="sticky-banner">
        <?php if ($introduction['section_title'] != ""): ?>
            <a href="#<?= sanitize_title($introduction['section_title']); ?>">
                <?php echo __('Overview', 'tat-technology'); ?>
            </a>
        <?php endif; ?>
        <?php if ($commercials['commercials']): ?>
            <?php foreach ($commercials['commercials'] as $commercial): ?>
                <?php if ($commercial['mro_services']): ?>
                    <?php foreach ($commercial['mro_services'] as $mro_service): ?>
                        <a href="#<?php echo sanitize_title($mro_service['title']); ?>">
                            <?php if ($mro_service['title'] != ""): ?>
                                <h4><?php echo $mro_service['title']; ?></h4>
                            <?php endif; ?>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?php $banner = get_field('banner', $pid); ?>
    <div class="mroban">
        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>

        <div class="mrobanimg" style="background:#AEAEAE;min-height:550px;">
            <div class="inbanimg">
                <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
                    <img alt="<?php echo $banner['image']['url']; ?>" src="<?php echo $banner['image']['url']; ?>" />
                <?php endif; ?>
            </div>
        </div>

        <div class="mrobanlayer">
            <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
                <img alt="<?php echo $banner['image']['url']; ?>" src="<?php echo $banner['image']['url']; ?>" />
            <?php endif; ?>
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


    <div class="mroone" id="<?= sanitize_title($introduction['section_title']); ?>">

        <?php if ($introduction['section_title'] != ""): ?>
            <div class="seconetitle"><?= $introduction['section_title']; ?></div>
        <?php endif; ?>

        <?php if ($introduction['left_title'] != ""): ?>
            <div class="mroneleft"><?= $introduction['left_title']; ?></div>
        <?php endif; ?>

        <?php if ($introduction['right_text'] != ""): ?>
            <div class="mroneright"><?= $introduction['right_text']; ?></div>
        <?php endif; ?>

        <div class="clr"></div>
    </div>

    <div class="mrotwo">
        <?php if ($commercials['commercials']):
            $loopIndex = 0; ?>
            <?php foreach ($commercials['commercials'] as $commercial): ?>
                <div class="mrtwoldiv">
                    <div class="mrtwoltitle">
                        <div class="mrcat"><?php echo $commercial['section_title']; ?></div>
                        <h3><?php echo $commercial['title']; ?></h3>
                    </div>
                    <div class="mrtwollist">
                        <ul>
                            <?php if ($commercial['mro_services']): ?>
                                <?php foreach ($commercial['mro_services'] as $mro_service): ?>
                                    <li id="<?php echo sanitize_title($mro_service['title']); ?>">
                                        <a href="#">
                                            <div class="mrlistleft">
                                                <?php if (isset($mro_service['image']) && !empty($banner['image']['ID'])): ?>
                                                    <div class="mrlistimg">
                                                        <img alt="<?php echo $mro_service['image']['alt']; ?>"
                                                            src="<?php echo $mro_service['image']['url']; ?>" />
                                                    </div>
                                                <?php endif; ?>

                                                <?php if ($mro_service['title'] != ""): ?>
                                                    <h4><?php echo $mro_service['title']; ?></h4>
                                                <?php endif; ?>
                                                <Div class="clr"></Div>
                                            </div>
                                            <div class="mrlistright">
                                                <?php if ($mro_service['text'] != ""): ?>
                                                    <?php echo $mro_service['text']; ?>
                                                <?php endif; ?>

                                                <?php if ($mro_service['button_link'] != ""): ?>
                                                    <span><?= $mro_service['button_text']; ?>
                                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M15 10.5039H5" stroke="#2E313F" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10 5.5L15 10.5L10 15.5" stroke="#2E313F" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                <? endif; ?>
                                            </div>
                                            <div class="clr"></div>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="clr"></div>
                </div>
                <?php $loopIndex++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>



<script type="text/javascript">
    jQuery(document).ready(function ($) {

    });
    jQuery(window).on('load', function () {

    });
    jQuery(window).resize(function () {

    });

</script>