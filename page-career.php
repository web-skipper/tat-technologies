<?php /*Template Name: Career Page */
get_header();
$pid = $post->ID; ?>

<?php $banner = get_field('banner', $pid);
// echo '<pre>';
// print_r($banner);
// '</pre>';
?>

<div class="inner_main career_main" id="skypcon">
    <div class="inner_banner">
        <div class="breadcrumbs"><a href="<?php bloginfo('url'); ?>">Home</a><?php if (function_exists('bcn_display')) {
              bcn_display();
          } ?></div>

        <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
            <div class="carbanimg">
                <img alt="<?php echo $banner['image']['alt']; ?>" src="<?php echo $banner['image']['url']; ?>" />
            </div>
            <div class="carbanlayer"><img alt="layer"
                    src="<?php bloginfo('template_directory'); ?>/images/carbanlayer.svg" /></div>
        <?php endif; ?>
        <div class="carbantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>
            <?php if ($banner['title_left_two'] != ""): ?>
                <h2><?= $banner['title_left_two']; ?></h2>
            <?php endif; ?>
        </div>
        <div class="carbantxt2">
            <?php if ($banner['title_right_one'] != ""): ?>
                <p><?= $banner['title_right_one']; ?></p>
            <?php endif; ?>
            <?php if ($banner['button_link'] != ""): ?>
                <a href="<?= $banner['button_link']; ?>"><?= $banner['button_text']; ?>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 10.0033H5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M10 5L15 10L10 15" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <?php $oppertunities = get_field('oppertunities', $pid); ?>
    <div class="car_one">
        <?php if ($oppertunities['section_title'] != ""): ?>
            <div class="caronetitle"><?= $oppertunities['section_title']; ?></div>
        <?php endif; ?>
        <div class="caronein">
            <?php if ($oppertunities['left_title'] != ""): ?>
                <div class="caroneleft">
                    <?= $oppertunities['left_title']; ?>
                </div>
            <?php endif; ?>

            <div class="caroneright">
                <?php if ($oppertunities['right_text'] != ""): ?>
                    <?= $oppertunities['right_text']; ?>
                <?php endif; ?>
                <div class="caronebut">
                    <?php if ($banner['button_link'] != ""): ?>
                        <a href="<?= $banner['button_link']; ?>">
                            <?= $banner['button_text']; ?>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 10.594H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M10 5.59082L15 10.5908L10 15.5908" stroke="#2E313F" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php $what_drives_us = get_field('what_drives_us', $pid); ?>
    <div class="car_two">
        <?php if ($what_drives_us['section_title'] != ""): ?>
            <div class="cartwotitle">What Drives Us</div>
        <?php endif; ?>
        <div class="cartwoleft">
            <?php if ($what_drives_us['left_title'] != ""): ?>
                <h3><?= $what_drives_us['left_title']; ?></h3>
            <?php endif; ?>
            <?php if ($what_drives_us['left_text'] != ""): ?>
                <p><?= $what_drives_us['left_text']; ?></p>
            <?php endif; ?>
        </div>
        <div class="cartworight">
            <ul>
                <?php if ($what_drives_us['right_image_text_content']): ?>
                    <?php foreach ($what_drives_us['right_image_text_content'] as $key => $item): ?>
                        <li>
                            <div class="cartwordiv">
                                <div class="cartworimg">
                                    <?php if ($item['image']): ?>
                                        <img alt="<?= $item['image']['alt']; ?>" src="<?php echo $item['image']['url']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <p><?= $item['title']; ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="clr"></div>
    </div>
    <?php $why_work_with_us = get_field('why_work_with_us', $pid); ?>
    <div class="car_three">
        <div class="catthrein">
            <div class="carthrediv odd">
                <div class="carthreleft">
                    <?php if ($why_work_with_us['right_image']): ?>
                        <img alt="<?= $why_work_with_us['right_image']['alt']; ?>"
                            src="<?= $why_work_with_us['right_image']['url']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="carthreright">
                    <?php if ($why_work_with_us['section_title'] != ""): ?>
                        <div class="carthretitle"><?= $why_work_with_us['section_title']; ?></div>
                    <?php endif; ?>
                    <?php if ($why_work_with_us['right_title'] != ""): ?>
                        <h4><?= $why_work_with_us['right_title']; ?></h4>
                    <?php endif; ?>
                    <?php if ($why_work_with_us['right_text'] != ""): ?>
                        <p><?= $why_work_with_us['right_text']; ?></p>
                    <?php endif; ?>
                    <div class="carthrebut">
                        <a href="<?= $why_work_with_us['button_link']; ?>"><?= $why_work_with_us['button_text']; ?>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 10.594H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10 5.59082L15 10.5908L10 15.5908" stroke="#2E313F" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
            <?php $training_collabs = get_field('training_collabs', $pid); ?>
            <div class="carthrediv even">
                <div class="carthreleft">
                    <img alt="<?= $training_collabs['right_image']['alt']; ?>"
                        src="<?= $training_collabs['right_image']['url']; ?>" />
                </div>
                <div class="carthreright">
                    <?php if ($training_collabs['section_title'] != ""): ?>
                        <div class="carthretitle"><?= $training_collabs['section_title']; ?></div>
                    <?php endif; ?>
                    <?php if ($training_collabs['left_title'] != ""): ?>
                        <h4><?= $training_collabs['left_title']; ?></h4>
                    <?php endif; ?>
                    <?php if ($training_collabs['left_text'] != ""): ?>
                        <p><?= $training_collabs['left_text']; ?></p>
                    <?php endif; ?>
                    <div class="carthrebut">
                        <a href="<?= $training_collabs['button_link']; ?>"><?= $training_collabs['button_text']; ?>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 10.594H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10 5.59082L15 10.5908L10 15.5908" stroke="#2E313F" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
    <?php $meet_the_team = get_field('meet_the_team', $pid); ?>
    <div class="car_four">
        <?php if ($meet_the_team['section_title'] != ""): ?>
            <div class="carfourtitle"><?= $meet_the_team['section_title']; ?></div>
        <?php endif; ?>
        <div class="carfourtop">
            <?php if ($meet_the_team['title'] != ""): ?>
                <h3><?= $meet_the_team['title']; ?></h3>
            <?php endif; ?>
        </div>
        <div class="carfourlist">
            <ul>
                <?php if ($meet_the_team['meet_the_team']): ?>
                    <?php foreach ($meet_the_team['meet_the_team'] as $key => $item): ?>
                        <li>
                            <a href="#">
                                <div class="catfourimg"><img alt="<?= $item['image']['alt']; ?>"
                                        src="<?= $item['image']['url']; ?>" /></div>
                                <div class="catfourtext">
                                    <div class="csmltxt"><?= $item['title']; ?> <span class="dot"></span>
                                        <?= $item['position']; ?></div>
                                    <p><img alt="" src="<?php bloginfo('template_directory'); ?>/images/coloncor.svg" />
                                        <?= $item['text']; ?>”</p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <?php $equal_opportunity = get_field('equal_opportunity', $pid); ?>
    <div class="car_five">
        <div class="car_fivein">
            <div class="carfiveleft">
                <?php if ($equal_opportunity['section_title'] != ""): ?>
                    <div class="carfivestle"><?= $equal_opportunity['section_title']; ?></div>
                <?php endif; ?>
                <?php if ($equal_opportunity['left_title'] != ""): ?>
                    <h4><?= $equal_opportunity['left_title']; ?></h4>
                <?php endif; ?>
                <?php if ($equal_opportunity['left_text'] != ""): ?>
                    <p><?= $equal_opportunity['left_text']; ?></p>
                <?php endif; ?>
                <div class="carfivebut"><a href="<?= $equal_opportunity['button_link']; ?>">
                        <?= $equal_opportunity['button_title']; ?>
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.8301H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 5.82666L15 10.8267L10 15.8267" stroke="#2E313F" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a></div>
            </div>
            <div class="carfiveright">
                <img alt="<?= $equal_opportunity['right_image']['alt']; ?>"
                    src="<?= $equal_opportunity['right_image']['url']; ?>" />
            </div>
            <div class=" clr">
            </div>
        </div>
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