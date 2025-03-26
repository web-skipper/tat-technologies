<?php /*Template Name: MRO Certifications Page */
get_header();
$pid = $post->ID; ?>

<div class="inner_main mro_main_certification" id="skypcon">

    <?php $banner = get_field('banner', $pid); ?>
    <div class="mroban">

        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>

        <div class="mrobanimg">
            <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
                <img alt="<?php echo $banner['image']['alt']; ?>" src="<?php echo $banner['image']['url']; ?>" />
            <?php endif; ?>

            <div class="overlwy-detail">
                <?php if (isset($banner['header_curved_lines_image']) && !empty($banner['header_curved_lines_image']['ID'])): ?>
                    <img alt="<?php echo $banner['header_curved_lines_image']['alt']; ?>"
                        src="<?php echo $banner['header_curved_lines_image']['url']; ?>" />
                <?php endif; ?>
            </div>
        </div>

        <div class="mrobantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>
        </div>
    </div>

    <?php $our_company = get_field('our_company', $pid); ?>
    <div class="mro_certificate">
        <?php if ($our_company['section_title'] != ""): ?>
            <div class="seconetitle_cer"><?= $our_company['section_title']; ?></div>
        <?php endif; ?>
        <?php if ($our_company['left_title'] != ""): ?>
            <div class="mroneleft_cer"><?= $our_company['left_title']; ?></div>
        <?php endif; ?>

        <div class="mroneright_cer">
            <?php if ($our_company['right_text'] != ""): ?>
                <?= $our_company['right_text']; ?>
            <?php endif; ?>

            <?php if ($our_company['button_link'] != ""): ?>
                <div class="rightcapbut"><a href="<?= $our_company['button_link']; ?>"><?= $our_company['button_text']; ?>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.66602 13.3333L13.7493 6.25" stroke="#2E313F" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.25 6.25H13.75V13.75" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a></div>
            <?php endif; ?>
        </div>

        <div class="clr"></div>
    </div>

    <?php $certification_tabs = get_field('certification_tabs', $pid); ?>

    <div class="certifcation_tabs">
        <ul class="cet_tabmenu cf">
            <li class="cf"><a class="active" href="#certall">All</a></li>
            <?php if (!empty($certification_tabs['certification_tabs'])): ?>
                <?php $loopIndex = 1; ?>
                <?php foreach ($certification_tabs['certification_tabs'] as $certification_tab): ?>
                    <li class="cf"><a href="#cert<?= $loopIndex; ?>"><?= esc_html($certification_tab['title']); ?></a></li>
                    <?php $loopIndex++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>

        <div class="cert_content">
            <!-- All Certifications Tab -->
            <div class="certtabs" id="certall">
                <ul>
                    <?php if (!empty($certification_tabs['certification_tabs'])): ?>
                        <?php foreach ($certification_tabs['certification_tabs'] as $certification_tab): ?>
                            <?php if (!empty($certification_tab['certifications'])): ?>
                                <?php foreach ($certification_tab['certifications'] as $certification): ?>
                                    <li>
                                        <a href="<?= esc_url($certification['file']['url']); ?>" target="_blank">
                                            <div class="certifcation_img"><img
                                                    src="<?php bloginfo('template_directory'); ?>/images/iso_image.png" alt="" /></div>
                                            <div class="certifcation_name">
                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0039 14.6248V3" stroke="#2E313F" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M15 9.66602L10 14.666L5 9.66602" stroke="#2E313F" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M15 18H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span><?= esc_html($certification['title'] ?? 'Certification'); ?></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <?php if (!empty($certification_tabs['certification_tabs'])): ?>
                <?php $loopIndex = 1; ?>
                <?php foreach ($certification_tabs['certification_tabs'] as $certification_tab): ?>
                    <div class="certtabs" id="cert<?= $loopIndex; ?>">
                        <ul>
                            <?php if (!empty($certification_tab['certifications'])): ?>
                                <?php foreach ($certification_tab['certifications'] as $certification): ?>
                                    <li>
                                        <a href="<?= esc_url($certification['file']['url']); ?>" download target="_blank">
                                            <div class="certifcation_img">
                                                <?php if (isset($certification['image']) && !empty($certification['image']['ID'])): ?>
                                                    <img alt="<?php echo $certification['image']['alt']; ?>"
                                                        src="<?php echo $certification['image']['url']; ?>" />
                                                <?php endif; ?>
                                                <div class="certifcation_name">
                                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.0039 14.6248V3" stroke="#2E313F" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M15 9.66602L10 14.666L5 9.66602" stroke="#2E313F" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M15 18H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <?php if ($certification['title'] != ""): ?>
                                                        <span><?= $certification['title']; ?></span>
                                                    <?php endif; ?>
                                                </div>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li>No certifications available.</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php $loopIndex++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".certtabs").hide();
        $(".cet_tabmenu li:first a").addClass('active'); // Activate first tab
        $(".certtabs:first").fadeIn(100); // Show first tab content		
        $(".cet_tabmenu a").click(function (e) {
            e.preventDefault();
            $('.certtabs').hide();
            $('.cet_tabmenu a').removeClass('active');
            $(this.hash).fadeIn(100);
            $(this).addClass('active');
        });
    });
    jQuery(window).on('load', function () {


    });
    jQuery(window).resize(function () {

    });

</script>