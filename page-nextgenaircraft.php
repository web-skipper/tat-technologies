<?php /*Template Name: NextGen Aircraft Page */
get_header();
$pid = $post->ID; ?>
<?php $banner = get_field('banner', $pid); ?>
<div class="inner_main naircraft_main" id="skypcon">
    <div class="inner_banner">
        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a><span class="breadarow"></span>
            <a href="#">Innovative Systems</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>

        <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
            <div class="inbanimg">
                <img alt="<?php echo $banner['image']['alt']; ?>" src="<?php echo $banner['image']['url']; ?>" />
            </div>
        <?php endif; ?>
        <div class="inbanlayer">
            <?php if (isset($banner['header_curved_lines_image']) && !empty($banner['header_curved_lines_image']['ID'])): ?>
                <img alt="<?php echo $banner['header_curved_lines_image']['alt']; ?>"
                    src="<?php echo $banner['header_curved_lines_image']['url']; ?>" />
            <?php endif; ?>
        </div>
        <div class="inbantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>
            <?php if ($banner['title_left_two'] != ""): ?>
                <h2><?= $banner['title_left_two']; ?></h2>
            <?php endif; ?>
        </div>
    </div>

    <?php $overview = get_field('overview', $pid); ?>
    <div class="nextgen_one">
        <?php if ($overview['section_title'] != ""): ?>
            <div class="nextgetonetitle"><?= $overview['section_title']; ?></div>
        <?php endif; ?>
        <?php if ($overview['left_title'] != ""): ?>
            <div class="nextgoneleft"><?= $overview['left_title']; ?></div>
        <?php endif; ?>
        <div class="nextgoneright">
            <?php if ($overview['right_text'] != ""): ?>
                <?= $overview['right_text']; ?>
            <?php endif; ?>
        </div>
        <div class="clr"></div>
    </div>
    <?php $evtol = get_field('evtol', $pid); ?>
    <div class="nextgen_two">
        <div class="nextgen_twoin">
            <div class="nextgentwodiv odd">
                <div class="nextgtwolft">
                    <?php if (isset($evtol['left_image']) && !empty($evtol['left_image']['ID'])): ?>
                        <img alt="<?php echo $evtol['left_image']['alt']; ?>"
                            src="<?php echo $evtol['left_image']['url']; ?>" />

                    <?php endif; ?>

                </div>
                <div class="nextgtworgt">
                    <?php if ($evtol['right_title'] != ""): ?>
                        <h4><?= $evtol['right_title']; ?></h4>
                    <?php endif; ?>
                    <?php if ($evtol['right_text'] != ""): ?>
                        <?= $evtol['right_text']; ?>
                    <?php endif; ?>
                    <div class="netwobut"><a href="<?= $evtol['button_link']; ?>"><?= $evtol['button_text']; ?>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 10.8828H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10 5.87891L15 10.8789L10 15.8789" stroke="#2E313F" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a></div>
                </div>
                <div class="clr"></div>
            </div>

            <?php $hybrid_electric_aircraft = get_field('hybrid_electric_aircraft', $pid); ?>
            <div class="nextgentwodiv even">
                <div class="nextgtwolft">
                    <?php if (isset($hybrid_electric_aircraft['right_image']) && !empty($hybrid_electric_aircraft['right_image']['ID'])): ?>
                        <img alt="<?= $hybrid_electric_aircraft['right_image']['alt']; ?>"
                            src="<?= $hybrid_electric_aircraft['right_image']['url']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="nextgtworgt">
                    <?php if ($hybrid_electric_aircraft['left_title'] != ""): ?>
                        <h4><?= $hybrid_electric_aircraft['left_title']; ?></h4>
                    <?php endif; ?>
                    <?php if ($hybrid_electric_aircraft['left_text'] != ""): ?>
                        <?= $hybrid_electric_aircraft['left_text']; ?>
                    <?php endif; ?>

                    <?php if ($hybrid_electric_aircraft['button_link'] != ""): ?>
                        <div class="netwobut">
                            <a href="<?= $hybrid_electric_aircraft['button_link']; ?>"><?= $hybrid_electric_aircraft['button_text']; ?>
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 10.8828H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 5.87891L15 10.8789L10 15.8789" stroke="#2E313F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="clr"></div>
            </div>

            <?php $universal_cooling_systems = get_field('universal_cooling_systems', $pid); ?>
            <div class="nextgentwodiv odd">
                <div class="nextgtwolft">
                    <?php if (isset($universal_cooling_systems['left_image']) && !empty($universal_cooling_systems['left_image']['ID'])): ?>
                        <img alt="<?= $universal_cooling_systems['left_image']['alt']; ?>"
                            src="<?= $universal_cooling_systems['left_image']['url']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="nextgtworgt">
                    <?php if ($universal_cooling_systems['right_title'] != ""): ?>
                        <h4><?= $universal_cooling_systems['right_title']; ?></h4>
                    <?php endif; ?>
                    <?php if ($universal_cooling_systems['right_text'] != ""): ?>
                        <?= $universal_cooling_systems['right_text']; ?>
                    <?php endif; ?>
                    <?php if ($universal_cooling_systems['button_link'] != ""): ?>
                        <div class="netwobut">
                            <a href="<?= $universal_cooling_systems['button_link']; ?>"><?= $universal_cooling_systems['button_text']; ?>
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 10.8828H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 5.87891L15 10.8789L10 15.8789" stroke="#2E313F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="clr"></div>
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