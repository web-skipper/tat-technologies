<?php /*Template Name: Company Page */
get_header();
$pid = $post->ID; ?>

<?php $banner = get_field('banner', $pid); ?>
<div class="inner_main company_main" id="skypcon">
    <div class="companyban">
        <div class="breadcrumbs"><a href="<?php bloginfo('url'); ?>">Home</a><?php if (function_exists('bcn_display')) {
              bcn_display();
          } ?></div>
        <div class="combanimg"><img alt="" src="<?php bloginfo('template_directory'); ?>/images/comban.jpg" /></div>

        <div class="combanlayer"><img alt="layer"
                src="<?php bloginfo('template_directory'); ?>/images/companybanlayer.svg" /></div>

        <div class="companybantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>

            <?php if ($banner['title_left_two'] != ""): ?>
                <h2><?= $banner['title_left_two']; ?></h2>
            <?php endif; ?>
        </div>
    </div>

    <div class="companymenu">
        <ul>
            <li><a href="#companyone">Overview</a></li>
            <li><a href="#companytwo">History</a></li>
            <li><a href="#companythree">Leadership</a></li>
            <li><a href="#companyfour">Locations</a></li>
            <li><a href="#companyfive">Customers</a></li>
        </ul>
    </div>

    <?php $overview = get_field('overview', $pid); ?>
    <div id="companyone" class="companyone">
        <?php if ($overview['section_title'] != ""): ?>
            <div class="comsubtitle"><?= $overview['section_title']; ?></div>
        <?php endif; ?>

        <?php if ($overview['left_title'] != ""): ?>
            <div class="comoneleft"><?= $overview['left_title']; ?></div>
        <?php endif; ?>

        <?php if ($overview['right_text'] != ""): ?>
            <div class="comoneright">
                <?= $overview['right_text']; ?>
            </div>
        <?php endif; ?>
        <div class="clr"></div>
    </div>

    <?php $our_history = get_field('our_history', $pid); ?>
    <div id="companytwo" class="companytwo">
        <div class="companytwoin">
            <div class="comtworslider owl-carousel">
                <?php if ($our_history['our_history_images']): ?>
                    <?php foreach ($our_history['our_history_images'] as $history): ?>
                        <div>
                            <div class="comtwoleft">
                                <?php if ($our_history['section_title'] != ""): ?>
                                    <div class="comtwosubtle"><?= $our_history['section_title']; ?></div>
                                <?php endif; ?>
                                <div class="comtwolftbot">
                                    <?php if ($history['left_title_one'] != ""): ?>
                                        <h3><?= $history['left_title_one']; ?></h3>
                                    <?php endif; ?>
                                    <?php if ($history['left_tite_two'] != ""): ?>
                                        <p><?= $history['left_tite_two']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="comtworight">
                                <div class="comtworsld">
                                    <?php if (isset($history['image']) && !empty($history['image']['ID'])): ?>
                                        <img alt="<?= $history['image']['alt']; ?>" src="<?= $history['image']['url']; ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="comtworsbot">
                <div id="counter"></div>
                <div class="sldprogrss"></div>
                <div class="comtworstotcoutn">
                    <?php if ($our_history['our_history_images'] && is_array($our_history['our_history_images'])):
                        echo count($our_history['our_history_images']);
                    else:
                        echo 0;
                    endif; ?>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>

    <?php $our_values = get_field('our_values', $pid); ?>
    <div id="companythree" class="companythree">
        <?php if ($our_values['section_title'] != ""): ?>
            <div class="comthretitle"><?= $our_values['section_title']; ?></div>
        <?php endif; ?>

        <?php if ($our_values['left_title'] != ""): ?>
            <div class="compthreleft">
                <?= $our_values['left_title']; ?>
            </div>
        <?php endif; ?>
        <div class="comthreright">
            <ul>
                <?php if ($our_values['right_image_text_content']): ?>
                    <?php foreach ($our_values['right_image_text_content'] as $image_and_text): ?>
                        <li>
                            <div class="comthrerli">
                                <div class="comthrrimg">
                                    <?php if (isset($image_and_text['image']) && !empty($image_and_text['image']['ID'])): ?>
                                        <img alt="<?= $image_and_text['image']['alt']; ?>"
                                            src="<?= $image_and_text['image']['url']; ?>" />
                                    <?php endif; ?>
                                    <?php if ($image_and_text['title'] != ""): ?>
                                        <p><?= $image_and_text['title']; ?></p>
                                    <?php endif; ?>
                                </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

            </ul>
        </div>
        <div class="clr"></div>
    </div>

    <?php $leadership_one = get_field('leadership_one', $pid); ?>
    <div id="companyfour" class="companyfour">
        <div class="comfourwrap">
            <div class="cmfourdiv odd">
                <div class="comfourimg">
                    <?php if (isset($leadership_one['left_image']) && !empty($leadership_one['left_image']['ID'])): ?>
                        <img alt="<?= $leadership_one['left_image']['alt']; ?>"
                            src="<?= $leadership_one['left_image']['url']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="comfourtxt">
                    <?php if ($leadership_one['section_title'] != ""): ?>
                        <div class="comfourtitle"><?= $leadership_one['section_title']; ?></div>
                    <?php endif; ?>

                    <?php if ($leadership_one['right_title'] != ""): ?>
                        <h4><?= $leadership_one['right_title']; ?></h4>
                    <?php endif; ?>

                    <?php if ($leadership_one['right_text'] != ""): ?>
                        <?= $leadership_one['right_text']; ?>
                    <?php endif; ?>

                    <?php if ($leadership_one['button_link'] != ""): ?>
                        <div class="comfourbut"><a
                                href="<?= $leadership_one['button_link']; ?>"><?= $leadership_one['button_text']; ?>
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 10.6621H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 5.65869L15 10.6587L10 15.6587" stroke="#2E313F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a></div>
                    <?php endif; ?>
                </div>
                <div class="clr"></div>
            </div>

            <?php $leadership_two = get_field('leadership_two', $pid); ?>
            <div class="cmfourdiv even">
                <div class="comfourimg">
                    <?php if (isset($leadership_two['right_image']) && !empty($leadership_two['right_image']['ID'])): ?>
                        <img alt="<?= $leadership_two['right_image']['alt']; ?>"
                            src="<?= $leadership_two['right_image']['url']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="comfourtxt">
                    <?php if ($leadership_two['section_title'] != ""): ?>
                        <div class="comfourtitle"><?= $leadership_two['section_title']; ?></div>
                    <?php endif; ?>

                    <?php if ($leadership_two['left_title'] != ""): ?>
                        <h4><?= $leadership_two['left_title']; ?></h4>
                    <?php endif; ?>

                    <?php if ($leadership_two['left_text'] != ""): ?>
                        <?= $leadership_two['left_text']; ?>
                    <?php endif; ?>
                    <?php if ($leadership_two['button_link'] != ""): ?>
                        <div class="comfourbut">
                            <a href="<?= $leadership_two['button_link']; ?>"><?= $leadership_two['button_text']; ?>
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 10.6621H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 5.65869L15 10.6587L10 15.6587" stroke="#2E313F" stroke-width="1.5"
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

    <?php $our_customers_and_partners = get_field('our_customers_and_partners', $pid); ?>
    <div id="companyfive" class="companyfive">
        <?php if ($our_customers_and_partners['section_title'] != ""): ?>
            <div class="comfivetitle"><?= $our_customers_and_partners['section_title']; ?></div>
        <?php endif; ?>

        <div class="comfivemid">
            <?php if ($our_customers_and_partners['left_title'] != ""): ?>
                <div class="comfiveleft"><?= $our_customers_and_partners['left_title']; ?></div>
            <?php endif; ?>
            <?php if ($our_customers_and_partners['right_text'] != ""): ?>
                <div class="comfiveright">
                    <p><?= $our_customers_and_partners['right_text']; ?></p>
                </div>
            <?php endif; ?>
            <div class="clr"></div>
        </div>
        <?php $logo_list = get_field('logo_list', 'option'); ?>
        <?php if (!empty($logo_list)): ?>
            <div class="comfivelogos">
                <div class="hsixslider owl-carousel">
                    <?php foreach ($logo_list as $key => $logoimage): ?>
                        <?php if ($logoimage != "") { ?>
                            <div>
                                <img alt="<?php echo $logoimage['logoimage']['alt']; ?>"
                                    src="<?php echo $logoimage['logoimage']['url']; ?>" />
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>

<style>
    .sldprogrss {
        position: relative;
    }

    .sldprogrss::before {
        content: '';
        position: absolute;
        height: 4px;
        width: var(--progress, 0%);
        background: rgb(255, 255, 255);
        transition: width 0.5s ease;
    }

    .owl-nav.disabled {
        display: none;
    }
</style>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var hss = $('.hsixslider').owlCarousel({
            nav: false,
            loop: true,
            autoplay: true,
            dots: true,
            slideSpeed: 1000,
            smartSpeed: 1000,
            items: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 5
                },
                1000: {
                    items: 10
                }
            }

        });

        var coms = $('.comtworslider').owlCarousel({
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
            navText: [$(''), $('')],
            dotsContainer: '#custom-owl-dots',
            animateOut: 'fadeOut',
            responsiveClass: true,
            onInitialized: counter,
            onTranslate: counter
        });
        $('.customnavcom .owl-dot').on('click', function (e) {
            coms.trigger('to.owl.carousel', [$(this).index(), 300]);
        });
        function counter(event) {
            var element = event.target;
            var items = event.item.count;
            var item = event.item.index + 1;

            if (item > items) {
                item = item - items
            }
            $('#counter').html(item);
            var progressPercentage = (item / items) * 100;
            $('.sldprogrss').css('--progress', progressPercentage + '%');
        }

    });

</script>