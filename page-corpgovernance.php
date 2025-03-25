<?php /*Template Name: Corporate Governance Page */
get_header();
$pid = $post->ID; ?>


<div class="inner_main corgov_main" id="skypcon">
    <?php $banner = get_field('banner', $pid); ?>

    <div class="inner_banner">
        <div class="breadcrumbs"><a href="<?php bloginfo('url'); ?>">Home</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
        <div class="inbanimg">
            <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
                <img alt="<?php echo $banner['image']['alt']; ?>" src="<?php echo $banner['image']['url']; ?>" />
            </div>
        <?php endif; ?>
        <div class="inbanlayer">
            <?php if (isset($banner['header_curved_lines_image']) && !empty($banner['header_curved_lines_image']['ID'])): ?>
                <img alt="<?php echo $banner['header_curved_lines_image']['alt']; ?>"
                    src="<?php echo $banner['header_curved_lines_image']['url']; ?>" />
            <?php endif; ?>
        </div>
        <div class="locbantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>

            <?php if ($banner['title_left_two'] != ""): ?>
                <h2><?= $banner['title_left_two']; ?></h2>
            <?php endif; ?>
        </div>
    </div>

    <?php $corporate_governance_lists = get_field('corporate_governance_lists', $pid); ?>
    <div class="corgovlist">
        <?php if ($corporate_governance_lists['corporate_governance_lists']): ?>
            <?php $loopIndex = 1; ?>
            <?php foreach ($corporate_governance_lists['corporate_governance_lists'] as $list): ?>
                <div class="corgovldiv <?= $loopIndex % 2 == 0 ? 'even' : 'odd'; ?>">
                    <div class="corgovltitle"><?= $list['section_title']; ?></div>
                    <div class="corgovleft"><?= $list['left_title']; ?></div>
                    <div class="corgovright">
                        <?= $list['right_text']; ?>
                        <div class="corgovbut"><a href="<?= $list['button_link']; ?>"><?= $list['button_text']; ?>
                                <svg width=" 20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 10.0032H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 5L15 10L10 15" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a></div>
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