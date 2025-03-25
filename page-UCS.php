<?php /*Template Name: UCS Page */
get_header();
$pid = $post->ID; ?>

<div class="inner_main ucs_main" id="skypcon">
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
            <?php else: ?>
                <img alt="" src="<?php bloginfo('template_directory'); ?>/images/medcenterban.jpg" />
            <?php endif; ?>
        </div>

        <?php if (isset($banner['header_curved_lines_image']) && !empty($banner['header_curved_lines_image']['ID'])): ?>
            <div class="inbanlayer">
                <img alt="<?php echo $banner['header_curved_lines_image']['alt']; ?>"
                    src="<?php echo $banner['header_curved_lines_image']['url']; ?>" />
            </div>
        <?php endif; ?>

        <div class="hybantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>
            <h2><?php if ($banner['title_left_two'] != ""): ?>
                    <?= $banner['title_left_two']; ?>
                <?php endif; ?> <span><?php if ($banner['title_left_three'] != ""): ?>
                        <?= $banner['title_left_three']; ?>
                    <?php endif; ?></span>
            </h2>
        </div>
    </div>

    <?php $overview = get_field('overview', $pid); ?>
    <div class="ucs_one">
        <?php if ($overview['section_title'] != ""): ?>
            <div class="ucsonetitle"><?= $overview['section_title']; ?></div>
        <?php endif; ?>
        <?php if ($overview['left_title'] != ""): ?>
            <div class="ucsoneleft"><?= $overview['left_title']; ?></div>
        <?php endif; ?>

        <div class="ucsoneright">
            <?php if ($overview['right_text'] != ""): ?>
                <?= $overview['right_text']; ?>
            <?php endif; ?>
        </div>
        <div class="clr"></div>
    </div>

    <?php $universal_cooling_system_ucs = get_field('universal_cooling_system_ucs', $pid); ?>

    <div class="ucs_two">
        <?php if ($universal_cooling_system_ucs['title'] != ""): ?>
            <div class="ucstitle"><?= $universal_cooling_system_ucs['title']; ?></div>
        <?php endif; ?>
        <div class="ucs_twoin">
            <div class="ucs_twoleft">
                <div class="comtworsbotn">
                    <div id="countertwo"></div>
                    <div class="sldprogrssdv"></div>
                    <div class="comtworstotcoutndv">
                        <?php echo is_array($universal_cooling_system_ucs['universal_cooling_system_images']) && count($universal_cooling_system_ucs['universal_cooling_system_images']) > 0 ? count($universal_cooling_system_ucs['universal_cooling_system_images']) : 0; ?>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="ucs_tworight">
                <div class="ucstwoslider owl-carousel">
                    <?php if ($universal_cooling_system_ucs['universal_cooling_system_images']): ?>
                        <?php foreach ($universal_cooling_system_ucs['universal_cooling_system_images'] as $ucs_image): ?>
                            <div class="ucstwosld">
                                <?php if (isset($ucs_image['image']) && !empty($ucs_image['image']['ID'])): ?>
                                    <div class="ucstwosldimg">
                                        <img alt="<?= $ucs_image['image']['alt']; ?>" src="<?= $ucs_image['image']['url']; ?>"
                                            loading="lazy" />
                                    </div>
                                <?php endif; ?>
                                <div class="ucstwosldtitle"><?= $ucs_image['title']; ?></div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="hsnavigation" style="display:none;">
                    <a class="ts-next" href="Javascript:void(0);">
                        <img alt="arrow" src="<?php bloginfo('template_directory'); ?>/images/sldarow1.svg" />
                    </a>
                    <a class="ts-prev" href="Javascript:void(0);">
                        <img alt="arrow" src="<?php bloginfo('template_directory'); ?>/images/sldarow2.svg" />
                    </a>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>

    <?php $ucs_ideal_cooling_system = get_field('ucs_ideal_cooling_system', $pid); ?>

    <div class="ucs_three">
        <?php if ($ucs_ideal_cooling_system['left_title'] != ""): ?>
            <div class="ucsthreleft"><?= $ucs_ideal_cooling_system['left_title']; ?></div>
        <?php endif; ?>
        <div class="ucsthreright">
            <div class="ucsthrertitle"><?= $ucs_ideal_cooling_system['right_title']; ?></div>
            <div class="ucsthrelist">
                <?php if ($ucs_ideal_cooling_system['right_contents']): ?>
                    <?php foreach ($ucs_ideal_cooling_system['right_contents'] as $right_content): ?>
                        <div class="ucsthrelistdiv">
                            <?php if ($right_content['title'] != ""): ?>
                                <div class="ucsthrelleft"><?= $right_content['title']; ?></div>
                            <?php endif; ?>
                            <?php if ($right_content['text'] != ""): ?>
                                <div class="ucsthrelright"><?= $right_content['text']; ?></div>
                            <?php endif; ?>
                            <div class="clr"></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="clr"></div>
    </div>

    <?php $applications = get_field('applications', $pid); ?>

    <div class="ucs_four">
        <?php if ($applications['left_title'] != ""): ?>
            <div class="ucsfourleft"><?= $applications['left_title']; ?></div>
        <?php endif; ?>


        <?php if ($applications['applications']): ?>
            <div class="ucsfourright">
                <?php foreach ($applications['applications'] as $application): ?>
                    <div class="ucsfourdiv">
                        <div class="ucsfourdivleft">
                            <?php if (isset($application['image']) && !empty($application['image']['ID'])): ?>
                                <div class="ucsfourdivimg">
                                    <img alt="<?= $application['image']['alt']; ?>" src="<?= $application['image']['url']; ?>"
                                        loading="lazy" />
                                </div>
                            <?php endif; ?>

                            <?php if ($application['title'] != ""): ?>
                                <div class="ucsfourdivtxt"><?= $application['title']; ?></div>
                            <?php endif; ?>
                            <div class="clr"></div>
                        </div>
                        <?php if ($application['text'] != ""): ?>
                            <div class="ucsfourdivright"><?= $application['text']; ?></div>
                        <?php endif; ?>
                        <div class="clr"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="clr"></div>
    </div>

    <?php $components_talk_about_do_160_compliance = get_field('components_talk_about_do_160_compliance', $pid); ?>

    <div class="ucs_five">
        <?php if ($components_talk_about_do_160_compliance['left_title'] != ""): ?>
            <div class="ucsfiveleft"><?= $components_talk_about_do_160_compliance['left_title']; ?></div>
        <?php endif; ?>

        <?php if ($components_talk_about_do_160_compliance['compliances']): ?>
            <div class="ucsfourright">
                <?php foreach ($components_talk_about_do_160_compliance['compliances'] as $compliance): ?>
                    <div class="ucsfivediv">
                        <div class="ucsfivedlft">
                            <?php if ($application['title'] != ""): ?>
                                <h4><?= $application['title']; ?></h4>
                            <?php endif; ?>

                            <?php if ($application['text'] != ""): ?>
                                <?= $application['text']; ?>
                            <?php endif; ?>

                            <div class="ucsfivbut">
                                <a href="<?= $application['button_link']; ?>">
                                    <?= $application['button_text']; ?>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.027 4.16602L10.0117 15.8327" stroke="#2E313F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4.16797 10H15.8346" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="ucsfivedrgt"></div>
                        <div class="clr"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="clr"></div>
    </div>

</div>

<?php get_footer(); ?>
<style>
    .sldprogrssdv {
        position: relative;
    }

    .sldprogrssdv::before {
        content: '';
        position: absolute;
        height: 4px;
        width: var(--progress, 0%);
        background: #2E313F;
        transition: width 0.5s ease;
    }
</style>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var ucss = $('.ucstwoslider').owlCarousel({
            nav: true,
            loop: false,
            autoplay: false,
            dots: true,
            margin: 0,
            singleItem: true,
            slideSpeed: 1000,
            smartSpeed: 1000,
            items: 1,
            //rtl: true,
            navText: [$('.ts-prev'), $('.ts-next')],
            //dotsContainer: '#custom-owl-dots',
            animateOut: 'fadeOut',
            responsiveClass: true,
            onInitialized: counter,
            onTranslate: counter
        });
        function counter(event) {
            var element = event.target;
            var items = event.item.count;
            var item = event.item.index + 1;

            if (item > items) {
                item = item - items
            }
            $('#countertwo').html(item);
            var progressPercentage = (item / items) * 100;
            $('.sldprogrssdv').css('--progress', progressPercentage + '%');
        }
    });
</script>