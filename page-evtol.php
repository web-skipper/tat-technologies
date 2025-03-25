<?php /*Template Name: Evtol Page */
get_header();
$pid = $post->ID; ?>
<?php $banner = get_field('banner', $pid); ?>
<div class="inner_main evtol_main" id="skypcon">
    <div class="inner_banner">
        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
        <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
            <div class="inbanimg">
                <img alt="<?php echo $banner['image']['url']; ?>" src="<?php echo $banner['image']['url']; ?>" />
            </div>
        <?php endif; ?>
        <?php if (isset($banner['header_curved_lines_image']) && !empty($banner['header_curved_lines_image']['ID'])): ?>
            <div class="inbanlayer">
                <img alt="<?php echo $banner['header_curved_lines_image']['url']; ?>"
                    src="<?php echo $banner['header_curved_lines_image']['url']; ?>" />
            </div>
        <?php endif; ?>
        <div class="evbantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?php echo $banner['title_left_one']; ?></h1>
            <?php endif; ?>
            <?php if ($banner['title_left_two'] != ""): ?>
                <h2><?php echo $banner['title_left_two']; ?></h2>
            <?php endif; ?>
        </div>
    </div>

    <?php $overview = get_field('overview', $pid); ?>
    <div class="evtol_one">
        <?php if ($overview['section_title'] != ""): ?>
            <div class="evtolonetitle"><?php echo $overview['section_title']; ?></div>
        <?php endif; ?>
        <div class="evtolonein">
            <?php if ($overview['left_title'] != ""): ?>
                <div class="evtoloneleft"><?php echo $overview['left_title']; ?></div>
            <?php endif; ?>
            <?php if ($overview['right_text'] != ""): ?>
                <div class="evtoloneright">
                    <?php echo $overview['right_text']; ?>
                </div>
            <?php endif; ?>
            <div class="clr"></div>
        </div>
    </div>
    <?php $thermal_management_system = get_field('thermal_management_system', $pid); ?>
    <div class="evtol_two">
        <?php if ($thermal_management_system['section_title'] != ""): ?>
            <h3><?php echo $thermal_management_system['section_title']; ?></h3>
        <?php endif; ?>
        <div class="evtoltwoin">
            <div class="evtoltwocolor">
                <?php if ($thermal_management_system['iframe'] != ""): ?>
                    <?= $thermal_management_system['iframe']; ?>
                <?php endif; ?>
            </div>
            <div class="evtoltwoctle"><?php echo $thermal_management_system['picture_title']; ?></div>
            <div class="clr"></div>
        </div>
    </div>

    <?php $applications = get_field('applications', $pid); ?>
    <div class="evtol_three">
        <?php if ($applications['title'] != ""): ?>
            <div class="evtolthreleft"><?= $applications['title']; ?></div>
        <?php endif; ?>
        <div class="evtolthreright">
            <ul>
                <?php if ($applications['applications']): ?>
                    <?php foreach ($applications['applications'] as $appl): ?>
                        <li>
                            <div class="evtolstleft">
                                <div class="evolstimg">
                                    <?php if (isset($appl['image']) && !empty($appl['image']['ID'])): ?>
                                        <img alt="<?= $appl['image']['alt']; ?>" src="<?= $appl['image']['url']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <?php if ($appl['ttitle'] != ""): ?>
                                    <div class="envollisttle"><?php echo $appl['ttitle']; ?></div>
                                <?php endif; ?>
                                <div class="clr"></div>
                            </div>
                            <div class="evtolstright">
                                <?php if ($appl['text'] != ""): ?>
                                    <?= $appl['text']; ?>
                                <?php endif; ?>
                            </div>
                            <div class="clr"></div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="clr"></div>
    </div>

    <?php $thermal_management_system_images = get_field('thermal_management_system_images', $pid); ?>
    <div class="evtol_four">
        <?php if ($thermal_management_system_images['section_title'] != ""): ?>
            <h4><?= $thermal_management_system_images['section_title']; ?></h4>
        <?php endif; ?>
        <div class="evtolfourin">
            <?php if ($thermal_management_system_images['thermal_management_system_images']): ?>
                <?php foreach ($thermal_management_system_images['thermal_management_system_images'] as $tms_image): ?>
                    <div class="evtolfourdiv evtolfourlefft">
                        <div class="evtolfourbox">
                            <?php if (isset($tms_image['image']) && !empty($tms_image['image']['ID'])): ?>
                                <div class="evlfourbimg"><img alt="<?php echo $tms_image['image']['url']; ?>"
                                        src="<?php echo $tms_image['image']['url']; ?>" /></div>
                            <?php endif; ?>
                            <?php if ($tms_image['picture_title'] != ""): ?>
                                <div class="evlfourbtitle"><?php echo $tms_image['picture_title']; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="clr"></div>
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