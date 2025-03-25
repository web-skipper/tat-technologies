<?php /*Template Name: Stock Information Page */
get_header();
$pid = $post->ID; ?>

<?php $banner = get_field('banner', $pid); ?>

<div class="inner_main stockinformation_main" id="skypcon">
    <div class="stockinfoban">
        <div class="breadcrumbs"><a href="<?php bloginfo('url'); ?>">Home</a><?php if (function_exists('bcn_display')) {
              bcn_display();
          } ?></div>
        <div class="stockinforbantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>
            <?php if ($banner['title_left_two'] != ""): ?>
                <h2><?= $banner['title_left_two']; ?></h2>
            <?php endif; ?>
        </div>
    </div>

    <?php $stock_information = get_field('stock_information', $pid); ?>
    <div class="stockinformmid">
        <div class="stockwrap">
            <div class="stockinfoimg">
                <?php echo do_shortcode($stock_information['widget_shortcode_one']); ?>
            </div>
            <div class="stockinfoimg" style="margin-top:50px;">
                <?php echo do_shortcode($stock_information['widget_shortcode_two']); ?>
            </div>
            <div class="stockinfoimg" style="margin-top:50px;">
                <!-- <img alt="" src="<?php bloginfo('template_directory'); ?>/images/infostock.png" /> -->
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