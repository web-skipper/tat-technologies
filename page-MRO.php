<?php /*Template Name: MRO Page */
get_header();
$pid = $post->ID; ?>

<div class="inner_main mro_main" id="skypcon">
    <?php $banner = get_field('banner', $pid); ?>
    <div class="mroban">
        <div class="breadcrumbs"><a href="#">Home</a><?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?></div>

        <div class="mrobanimg">

            <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
                <div class="inbanimg"><img alt="<?php echo $banner['image']['url']; ?>"
                        src="<?php echo $banner['image']['url']; ?>" /></div>
            <?php endif; ?>

        </div>

        <div class="mrobanlayer">
            <?php if (isset($banner['header_curved_lines_image']) && !empty($banner['header_curved_lines_image']['ID'])): ?>
                <img alt="<?php echo $banner['header_curved_lines_image']['url']; ?>"
                    src="<?php echo $banner['header_curved_lines_image']['url']; ?>" />
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
                                    <li>
                                        <a href="<?= $mro_service['button_link']; ?>">
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