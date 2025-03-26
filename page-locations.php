<?php /*Template Name: Locations Page */
get_header();
$pid = $post->ID; ?>


<div class="inner_main location_main" id="skypcon">

    <?php $banner = get_field('banner', $pid); ?>

    <div class="inner_banner">
        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a> <?php if (function_exists('bcn_display')) {
                  bcn_display();
              } ?>
        </div>

        <div class="inbanimg">
            <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
                <img alt="<?php echo $banner['image']['alt']; ?>" src="<?php echo $banner['image']['url']; ?>" />
            <?php endif; ?>
        </div>

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
    <?php $our_grope = get_field('our_grope', $pid); ?>
    <div class="location_one">
        <?php if ($our_grope['section_title'] != ""): ?>
            <div class="loconeltitle"><?= $our_grope['section_title']; ?></div>
        <?php endif; ?>

        <?php if ($our_grope['left_title'] != ""): ?>
            <div class="loconeleft"><?= $our_grope['left_title']; ?></div>
        <?php endif; ?>

        <?php if ($our_grope['right_text'] != ""): ?>
            <div class="loconeright"><?= $our_grope['right_text']; ?></div>
        <?php endif; ?>

        <div class="clr"></div>
    </div>

    <?php $locations = get_field('locations', $pid); ?>
    <div class="location_two">
        <?php if (!empty($locations['locations'])): ?>
            <?php foreach ($locations['locations'] as $location): ?>
                <div class="loctwodiv">
                    <div class="locdivleft">
                        <div class="locdivlfimg">
                            <?php if (isset($location['left_image']) && !empty($location['left_image']['ID'])): ?>
                                <img alt="<?php echo $location['left_image']['alt']; ?>"
                                    src="<?php echo $location['left_image']['url']; ?>" />
                            <?php endif; ?>
                            <div class="map-container">
                                <?php
                                $iframe = $location['left_map'];
                                // $iframe = preg_replace('/(src="[^"]*)/', '$1&zoom=21"', $iframe, 1);
                                $iframe = adjust_google_maps_zoom($iframe, 411);
                                ?>
                                <?= $iframe; ?>
                                <!-- <img src="https://wordpress-733529-5298257.cloudwaysapps.com/wp-content/uploads/2025/03/pin-tat.png"
                                    alt="Custom Pin" class="custom-pin"> -->
                                <!-- <div class="map-overlay"></div> -->
                            </div>
                        </div>
                        <div class="locdivlftxt">
                            <?php if ($location['center_title_one'] != ""): ?>
                                <h3><?= $location['center_title_one']; ?></h3>
                            <?php endif; ?>

                            <?php if ($location['center_title_two'] != ""): ?>
                                <span><?= $location['center_title_two']; ?></span>
                            <?php endif; ?>

                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="locdivright">
                        <div class="locdivrghtxt">
                            <?php if ($location['right_text'] != ""): ?>
                                <?= $location['right_text']; ?>
                            <?php endif; ?>
                        </div>
                        <div class="locdivrdiv locdivrdiv1">
                            <h5>Main Expertise</h5>
                            <?php if (!empty($location['main_expertise'])): ?>
                                <?php foreach ($location['main_expertise'] as $key => $main_expertise): ?>
                                    <?php if (!empty($main_expertise)): ?>
                                        <?php foreach ($main_expertise as $inner_expertise): ?>
                                            <a href="#"><?= esc_html($inner_expertise['expertese']); ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="locdivrdiv locdivrdiv2">
                            <h5>Address</h5>
                            <?php if (!empty($location['address'])): ?>
                                <p><?= $location['address']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>

</div>

<?php
function adjust_google_maps_zoom($iframe, $zoom_level = 10) {
    // Ensure the iframe contains a Google Maps embed link
    if (strpos($iframe, 'www.google.com/maps/embed?pb=') !== false) {
        // Adjust the zoom by replacing the appropriate number in pb parameter
        $iframe = preg_replace('/(\!1d)(\d+\.\d+)/', '!1d' . ($zoom_level * 1000), $iframe, 1);
        $iframe = preg_replace('/(src="[^"]*)/', '$1&maptype=roadmap"', $iframe, 1);
    }
    return $iframe;
}
?>
<?php get_footer(); ?>

<style>
    .map-container {
        border-radius: 40px;
        overflow: hidden;
        width: 313px;
        height: 293px;
        position: relative;
    }

    .map-container iframe {
        display: block;
        width: 100%;
        height: 100%;
    }

    .map-container .custom-pin {
        position: absolute;
        top: 50%;
        /* Adjust to position the pin vertically */
        left: 50%;
        /* Adjust to position the pin horizontally */
        transform: translate(-50%, -100%);
        /* Center the pin */
        width: 40px;
        /* Adjust pin size */
        height: auto;
        pointer-events: none;
        z-index: 9;
        /* Ensure the pin doesn't interfere with map interactions */
    }

    .map-container .map-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: transparent;
        /* Transparent overlay */
        z-index: 10;
        /* Ensure it's on top of the iframe */
    }
</style>

<script type="text/javascript">
    jQuery(document).ready(function ($) {


    });
    jQuery(window).on('load', function () {

    });
    jQuery(window).resize(function () {

    });

</script>