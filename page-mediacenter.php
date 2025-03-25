<?php /*Template Name: Media Center Page */
get_header();
$pid = $post->ID; ?>

<div class="inner_main medcent_main" id="skypcon">
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

    <?php $media_center_tabs = get_field('media_center_tabs', $pid); ?>
    <?php ?>
    <div class="medcenmid">
        <div class="medcentop">
            <div class="medcentopleft">
                <?php if (!empty($media_center_tabs['tabs'])): ?>
                    <ul class="tabmenu">
                        <li><a href="#taball" data-tab-index="all">All</a></li>
                        <?php $loopIndex = 1; ?>
                        <?php foreach ($media_center_tabs['tabs'] as $key => $media_center_tab): ?>
                            <li>
                                <a href="#tab-<?= $loopIndex; ?>"
                                    data-tab-index="<?php echo $key; ?>"><?= $media_center_tab['tiitle']; ?>
                                </a>
                            </li>
                            <?php $loopIndex++; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="medcentopright">
                <div class="medcentoprfrm">
                    <input class="one" id="searchInput" name="" type="text" placeholder="Free Search" />
                    <input class="two" id="searchButton" name="" type="submit" />
                </div>
            </div>
            <div class="clr"></div>
        </div>
        <div class="medcenbot">
            <div class="medcenbotdiv tabs" id="taball">
                <ul>
                    <?php if (!empty($media_center_tabs['tabs'])): ?>
                        <?php $loopIndex = 1; ?>
                        <?php foreach ($media_center_tabs['tabs'] as $media_center_tab): ?>
                            <?php if (!empty($media_center_tab['media_center_tabs'])): ?>
                                <?php foreach ($media_center_tab['media_center_tabs'] as $certification): ?>
                                    <li class="<?php echo $loopIndex > 6 ? 'hidden' : ''; ?>">
                                        <?php
                                        $downl_url = !empty($certification['file']) ? $certification['file']['url'] : $certification['image']['url'];
                                        ?>
                                        <a download href="<?php $downl_url; ?>">
                                            <div class="medcenliimg">
                                                <img alt="<?= $certification['image']['alt']; ?>"
                                                    src="<?= $certification['image']['url']; ?>" loading="lazy" />
                                            </div>
                                            <div class="medcenlitxt">
                                                <h4>
                                                    <?php echo $certification['title']; ?>
                                                </h4>
                                                <div class="pdficon">
                                                    <img alt="pdf"
                                                        src="<?php bloginfo('template_directory'); ?>/images/pdfdownload.svg" />
                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <?php $loopIndex++; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <div class="medcenbut">
                    <a href="#" data-linked-tab="taball">Show more
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.527 4.16675L10.5117 15.8334" stroke="#2E313F" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4.66797 10H16.3346" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <?php echo '<pre>';
            // print_r($media_center_tabs['tabs']);
            echo '</pre>';
            ?>
            <?php if (!empty($media_center_tabs['tabs'])): ?>
                <?php $loopIndex = 1; ?>
                <?php foreach ($media_center_tabs['tabs'] as $media_center_tab): ?>
                    <div class="medcenbotdiv tabs" id="tab-<?= $loopIndex; ?>">
                        <ul>
                            <?php if (!empty($media_center_tab['media_center_tabs'])): ?>
                                <?php foreach ($media_center_tab['media_center_tabs'] as $certification): ?>
                                    <li class="<?php echo $loopIndex > 6 ? 'hidden' : ''; ?>">
                                        <?php
                                        $downl_url = !empty($certification['file']) ? $certification['file']['url'] : $certification['image']['url'];
                                        ?>
                                        <a download href="<?php $downl_url; ?>">
                                            <div class="medcenliimg">
                                                <img alt="<?= $certification['image']['alt']; ?>"
                                                    src="<?= $certification['image']['url']; ?>" />
                                            </div>
                                            <div class="medcenlitxt">
                                                <h4>
                                                    <?php echo $certification['title']; ?>
                                                </h4>
                                                <div class="pdficon">
                                                    <img alt="pdf" src="<?php bloginfo('template_directory'); ?>/images/pdfdownload.svg"
                                                        loading="lazy" />
                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        <div class="medcenbut">
                            <a href="#" data-linked-tab="tab-<?= $loopIndex; ?>">Show more
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.527 4.16675L10.5117 15.8334" stroke="#2E313F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.66797 10H16.3346" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php $loopIndex++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<style>
    .hidden {
        display: none !important;
    }

    .medcenliimg {
        height: 235px;
        position: relative;
    }

    .medcenliimg img {
        position: absolute;
        height: 100%;
        object-fit: cover;
    }

    .loader {
        text-align: center;
        font-size: 16px;
        color: #333;
        padding: 20px;
    }
</style>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        // Initialize tabs
        $(".tabs").hide();
        $(".tabmenu li:first a").addClass('active');
        $(".tabs:first").fadeIn(100);

        // Tab switching
        $(".tabmenu a").click(function (e) {
            e.preventDefault();
            $('.tabs').hide();
            $('.tabmenu a').removeClass('active');
            $(this.hash).fadeIn(100);
            $(this).addClass('active');
        });

        // AJAX Search functionality
        function performSearch() {
            var searchQuery = $('#searchInput').val().toLowerCase().trim();
            var $activeTab = $('.tabs:visible');
            var tabId = $activeTab.data('tab-index');
            $('.tabmenu a').removeClass('active');
            $(".tabmenu li:first a").addClass('active');
            var postId = '<?php echo get_the_ID(); ?>';

            if ($activeTab.length) {
                // Show loader
                $activeTab.find('ul').html('<div class="loader">Loading...</div>');

                // Send AJAX request
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'GET',
                    data: {
                        action: 'media_center_search',
                        query: searchQuery,
                        tab_id: tabId,
                        post_id: postId,
                    },
                    success: function (response) {
                        var $ul = $activeTab.find('ul');
                        $ul.empty();

                        if (response.length > 0) {
                            response.forEach(function (item, index) {
                                var hiddenClass = index >= 6 ? 'hidden' : '';
                                $ul.append(
                                    '<li class="' + hiddenClass + '">' +
                                    '<a download href="' + item.file_url + '">' +
                                    '<div class="medcenliimg">' +
                                    '<img alt="' + item.image_alt + '" src="' + item.image_url + '" />' +
                                    '</div>' +
                                    '<div class="medcenlitxt">' +
                                    '<h4>' + item.title + '</h4>' +
                                    '<div class="pdficon">' +
                                    '<img alt="pdf" src="<?php echo get_template_directory_uri(); ?>/images/pdfdownload.svg" loading="lazy" />' +
                                    '</div>' +
                                    '<div class="clr"></div>' +
                                    '</div>' +
                                    '</a>' +
                                    '</li>'
                                );
                            });
                        } else {
                            $ul.append('<li class="no-results">No results found.</li>');
                        }
                    },
                    error: function () {
                        $activeTab.find('ul').html('<li class="no-results">An error occurred while searching.</li>');
                    }
                });
            }
        }

        // Trigger search on button click
        $('#searchButton').on('click', function () {
            performSearch();
        });

        // Trigger search on Enter key press
        $('#searchInput').on('keyup', function (e) {
            if (e.keyCode === 13) { // Enter key
                performSearch();
            }
        });

        // Load more functionality
        $('.medcenbut a').on('click', function (e) {
            e.preventDefault();
            var linkedTab = $(this).data('linked-tab');
            var $tab = $('#' + linkedTab);
            var $items = $tab.find('ul li.hidden'); // Select only hidden items
            $items.slice(0, 12).removeClass('hidden').fadeIn(100); // Show the next 3 hidden items

            // Hide the button if no more hidden items
            if ($items.length <= 3) {
                $(this).hide();
            }
        });
    });
</script>