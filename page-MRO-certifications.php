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
            <li class="cf"><a class="active" data-tab-title="All" href="#certall">All</a></li>
            <?php if (!empty($certification_tabs['certification_lists'])): ?>
                    <?php foreach ($certification_tabs['certification_lists'] as $index => $certification_tab): ?>
                            <li class="cf"><a href="#cert<?= $index + 1 ?>"
                                    data-tab-title="<?= esc_html($certification_tab['title']); ?>"><?= esc_html($certification_tab['title']); ?></a>
                            </li>
                    <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        
        <div class="certification-system">
            <div class="certification-tabs-wrapper">
                <!-- All Certifications Tab -->
                <div class="certtabs active" id="certall">
                    <?php if (!empty($certification_tabs['certifications'])): ?>
                            <ul class="certification-list">
                                <?php foreach ($certification_tabs['certifications'] as $certification): ?>
                                        <?php
                                        // Convert certification types to array if it's a string
                                        $cert_types = $certification['certification_type'];
                                        if (!is_array($cert_types) && !empty($cert_types)) {
                                            $cert_types = array($cert_types);
                                        }
                                        ?>
                                        <li class="certification-item" 
                                            data-types="<?= esc_attr(json_encode($cert_types ?? [])) ?>"
                                            data-title="<?= esc_attr($certification['title'] ?? '') ?>">
                                            <a href="<?= esc_url($certification['file']['url']); ?>" download target="_blank">
                                                <div class="certifcation_img">
                                                    <?php if (isset($certification['iso_image']) && !empty($certification['iso_image']['ID'])): ?>
                                                            <img alt="<?php echo $certification['iso_image']['alt']; ?>"
                                                                src="<?php echo $certification['iso_image']['url']; ?>" />
                                                    <?php endif; ?>
                                                    <div class="certifcation_name">
                                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.0039 14.6248V3" stroke="#2E313F" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M15 9.66602L10 14.666L5 9.66602" stroke="#2E313F"
                                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M15 18H5" stroke="#2E313F" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <?php if ($certification['title'] != ""): ?>
                                                                <span><?= $certification['title']; ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                <?php endforeach; ?>
                            </ul>
                    <?php else: ?>
                            <p class="no-certifications">No certifications available.</p>
                    <?php endif; ?>
                </div>
                
                <!-- Individual Certification List Tabs -->
                <?php if (!empty($certification_tabs['certification_lists'])): ?>
                        <?php foreach ($certification_tabs['certification_lists'] as $index => $certification_tab): ?>
                                <div class="certtabs" id="cert<?= $index + 1 ?>">
                                    <?php
                                    // Filter certifications for this tab
                                    $filtered_certs = array_filter($certification_tabs['certifications'], function ($cert) use ($certification_tab) {
                                        $cert_types = $cert['certification_type'];
                                        if (!is_array($cert_types) && !empty($cert_types)) {
                                            $cert_types = array($cert_types);
                                        }
                                        return in_array($certification_tab['title'], $cert_types ?? []);
                                    });
                                    ?>
                            
                                    <?php if (!empty($filtered_certs)): ?>
                                            <ul class="certification-list">
                                                <?php foreach ($filtered_certs as $certification): ?>
                                                        <li class="certification-item">
                                                            <a href="<?= esc_url($certification['file']['url']); ?>" download target="_blank">
                                                                <div class="certifcation_img">
                                                                    <?php if (isset($certification['iso_image']) && !empty($certification['iso_image']['ID'])): ?>
                                                                            <img alt="<?php echo $certification['iso_image']['alt']; ?>"
                                                                                src="<?php echo $certification['iso_image']['url']; ?>" />
                                                                    <?php endif; ?>
                                                                    <div class="certifcation_name">
                                                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.0039 14.6248V3" stroke="#2E313F" stroke-width="1.5"
                                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M15 9.66602L10 14.666L5 9.66602" stroke="#2E313F"
                                                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M15 18H5" stroke="#2E313F" stroke-width="1.5"
                                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                        <?php if ($certification['title'] != ""): ?>
                                                                                <span><?= $certification['title']; ?></span>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                <?php endforeach; ?>
                                            </ul>
                                    <?php else: ?>
                                            <p class="no-certifications">No certifications available for <?= esc_html($certification_tab['title']); ?>.</p>
                                    <?php endif; ?>
                                </div>
                        <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>
jQuery(document).ready(function($) {
    // Initialize tabs - hide all except first
    $(".certtabs").not(".active").hide();
    
    // Tab switching
    $(".cet_tabmenu a").click(function(e) {
        e.preventDefault();
        var tabId = $(this).attr('href');
        var tabTitle = $(this).data('tab-title');
        
        // Update active tab
        $('.cet_tabmenu a').removeClass('active');
        $(this).addClass('active');
        
        // Show selected tab content
        $(".certtabs").hide();
        $(tabId).show();
        
        // If switching to "All" tab, show all items
        if (tabTitle === "All") {
            $('.certification-item').show();
        }
        
        // No need to filter here - each tab has its own pre-filtered content
    });

    // Enhanced filter function for multiple types
    function filterCertificationsByType(tabTitle) {
        console.log('Filtering by:', tabTitle);
        
        if (tabTitle === "All") {
            $('.certification-item').show();
            return;
        }
        
        $('.certification-item').each(function() {
            var types = $(this).data('types');
            try {
                types = typeof types === 'string' ? JSON.parse(types) : types;
            } catch (e) {
                types = [];
            }
            
            var shouldShow = types.includes(tabTitle);
            $(this).toggle(shouldShow);
        });
    }
});
</script>