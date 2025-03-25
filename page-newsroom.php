<?php /*Template Name: Newsroom Page */
get_header();
$pid = $post->ID; ?>


<div class="inner_main newsrom_main" id="skypcon">
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
        <div class="newsbantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>
        </div>
    </div>

    <?php
    $news_spotlight = get_field('news_spotlight', $pid);
    if ($news_spotlight):
        ?>
        <div class="news_one">
            <div class="newsonewrap">
                <?php if ($news_spotlight['title_left_one'] != ""): ?>
                    <div class="newsonetitle"><?= $news_spotlight['title_left_one']; ?></div>
                <?php endif; ?>
                <div class="newsonelftslider owl-carousel">
                    <?php foreach ($news_spotlight['news_spotlight'] as $spotlight):
                        $post_object = $spotlight['highlight']; // Get the post object
                        if ($post_object):
                            $post_id = $post_object->ID;
                            $post_title = $post_object->post_title;
                            $post_content = $post_object->post_content;
                            $post_date = get_the_date('F j, Y', $post_id);
                            $post_permalink = get_the_permalink($post_id);
                            $post_categories = get_the_category($post_id);
                            ?>
                            <div>
                                <div class="newsoneleft">
                                    <?php if (has_post_thumbnail($post_id)): ?>
                                        <div class="newsonesld">
                                            <img alt="<?= esc_attr(get_the_post_thumbnail_caption($post_id)); ?>"
                                                src="<?= esc_url(get_the_post_thumbnail_url($post_id, 'full')); ?>" loading="lazy" />
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="newsoneright">
                                    <div class="newsonertp">
                                        <?php if (!empty($post_categories)): ?>
                                            <?php foreach ($post_categories as $category): ?>
                                                <?php echo esc_html($category->name) . '<span></span> '; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <?php echo esc_html($post_date); ?>
                                    </div>
                                    <h4><?php echo esc_html($post_title); ?></h4>
                                    <?php
                                    $word_limit = 15;
                                    $words = explode(' ', $post_content);

                                    if (count($words) > $word_limit) {
                                        $post_content = implode(' ', array_slice($words, 0, $word_limit)) . '...';
                                    }
                                    ?>
                                    <p><?php echo $post_content; ?></p>
                                    <div class="newsrbut">
                                        <a href="<?php echo esc_url($post_permalink); ?>">Read More
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 10.0032H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M10 5L15 10L10 15" stroke="#2E313F" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="clr"></div>
                            </div>
                            <?php
                            wp_reset_postdata(); // Reset post data
                            ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="hsnavigation" style="display:none;">
                    <a class="ts-next" href="Javascript:void(0);">
                        <img alt="arrow" src="<?php bloginfo('template_directory'); ?>/images/newsaro1.svg" />
                    </a>
                    <a class="ts-prev" href="Javascript:void(0);">
                        <img alt="arrow" src="<?php bloginfo('template_directory'); ?>/images/newsaro1.svg" />
                    </a>
                </div>
                <div class="newsrange">
                    <div id="counternews"></div>
                    <div class="sldprogrssnews"></div>
                    <div class="newstotcount">
                        <?php echo is_array($news_spotlight['news_spotlight']) && !empty($news_spotlight['news_spotlight']) ? count($news_spotlight['news_spotlight']) : 0; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="news_two">
        <div class="newstwotop">
            <div class="newstwomenu">
                <?php
                $post_content_types = get_terms(array(
                    'taxonomy' => 'post_content_types',
                    'hide_empty' => true,
                ));
                ?>
                <?php if (!empty($post_content_types)): ?>
                    <?php $cattabindex = 1; ?>
                    <ul class="tabmenu">
                        <li><a href="#taball" class="active">All</a></li>
                        <?php foreach ($post_content_types as $category): ?>
                            <li>
                                <a href="#tab-<?= $cattabindex; ?>"><?= esc_html($category->name); ?></a>
                            </li>
                            <?php $cattabindex++; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class=" newsstwotopright">
                <div class="newsfilterone">
                    <select id="tags">
                        <option val="all"><a href="#">All Topics</a></option>
                        <?php $tags = get_terms(array(
                            'taxonomy' => 'post_tag',
                            'hide_empty' => false, // Set to false to include empty tags
                        )); ?>
                        <?php if (!empty($tags)): ?>
                            <?php foreach ($tags as $tag): ?>
                                <option val="<?php echo $tag->term_id; ?>"><?php echo esc_html($tag->name); ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="newsfilsearch">
                    <input class="one" id="searchInput" type="text" placeholder="Free Search" />
                    <input class="two" type="button" id="searchButton" />
                </div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
        <div class="newstwobot">
            <?php
            $post_content_types = get_terms(array(
                'taxonomy' => 'post_content_types',
                'hide_empty' => true,
            ));
            $loopIndex = 1;
            foreach ($post_content_types as $category) {
                $posts = get_posts(array(
                    'post_type' => 'post',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_content_types',
                            'field' => 'term_id',
                            'terms' => $category->term_id,
                        ),
                    ),
                    'numberposts' => -1,
                ));
                ?>
                <?php if (!empty($posts)) { ?>
                    <div class="newstwobotin newstwobotin<?= $loopIndex; ?> tabs" id="tab-<?= $loopIndex; ?>"
                        data-terms="<?= implode(',', $post_terms); ?>" data-tags="<?= implode(',', $post_tags); ?>">
                        <div class=" newstwobleft"><?php echo esc_html($category->name); ?></div>
                        <div class="newstwobright">
                            <div class="newstwobrightin">
                                <?php
                                $postloopindex = 1;
                                foreach ($posts as $post) {
                                    setup_postdata($post);
                                    $post_terms = wp_get_post_terms($post->ID, 'post_content_types', array('fields' => 'ids'));
                                    $post_tags = wp_get_post_tags($post->ID, array('fields' => 'ids'));
                                    $args = array(
                                        'postloopindex' => $postloopindex,
                                        'post_terms' => $post_terms,
                                        'post_tags' => $post_tags,
                                    );

                                    if (has_term('press-releases', 'post_content_types', $post)) {
                                        get_template_part('template-parts/content', 'press-release', $args);
                                    } else if (has_term('events', 'post_content_types', $post)) {

                                        get_template_part('template-parts/content', 'event', $args);
                                    } else {
                                        get_template_part('template-parts/content', 'newsroom', $args);
                                    }
                                    $postloopindex++;
                                }
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="newsrmorebut">
                                <a href="#" data-linked-tab="tab-<?= $loopIndex; ?>"
                                    data-related-category="<?= $category->term_id; ?>">Show more
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.027 4.66675L10.0117 16.3334" stroke="#2E313F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4.16797 10.5H15.8346" stroke="#2E313F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </div>
                <?php } ?>
                <?php $loopIndex++; ?>
            <?php } ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<style>
    .hidden {
        display: none !important;
    }

    .sldprogrssnews {
        position: relative;
    }

    .sldprogrssnews::before {
        content: '';
        position: absolute;
        height: 4px;
        width: var(--progress, 0%);
        background: #2E313F;
        transition: width 0.5s ease;
    }

    input::placeholder {
        color: #000 !important;
        /* Ensure visible color */
        opacity: 1 !important;
        /* Some browsers set opacity to 0 */
    }
</style>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var neflsld = $('.newsonelftslider').owlCarousel({
            nav: true,
            loop: false,
            autoplay: false,
            dots: false,
            margin: 0,
            singleItem: true,
            slideSpeed: 1000,
            smartSpeed: 1000,
            items: 1,
            //rtl: true,
            navText: [$('.ts-prev'), $('.ts-next')],
            dotsContainer: '#custom-owl-dots',
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
            $('#counternews').html(item);
            var progressPercentage = (item / items) * 100;
            $('.sldprogrssnews').css('--progress', progressPercentage + '%');
        }
    });

    jQuery(document).ready(function ($) {

        // Tab switching
        $(".tabmenu a").click(function (e) {
            e.preventDefault();
            if ($(this).attr('href') === '#taball') {
                $('.tabmenu a').removeClass('active');
                $(this).addClass('active');
                $(".newstwobotin.tabs").fadeIn(100);
            } else {
                $('.tabs').hide();
                $(this.hash).fadeIn(100); // Show the selected tab
                $('.tabmenu a').removeClass('active');
                $(this).addClass('active');
            }
        });

        // Search functionality
        $('#searchButton').on('click', function () {
            var searchQuery = $('#searchInput').val().toLowerCase().trim(); // Get search query and trim whitespace
            var $activeTab = $('.tabs:visible'); // Get the currently active tab

            if ($activeTab.length) {
                $activeTab.find('.newsrmorebut').hide();
                var $items = $activeTab.find('.newstwobrdiv'); // Get all items in the active tab
                var found = false; // Track if any match is found

                $items.each(function () {
                    var title = $(this).find('h3').text().toLowerCase(); // Get the title of the item
                    if (title.indexOf(searchQuery) > -1) {
                        $(this).removeClass('hidden').show(); // Show matching items
                        found = true;
                    } else {
                        $(this).addClass('hidden').hide(); // Hide non-matching items
                    }
                });

                // Remove any existing "No results" message
                $activeTab.find('.no-results').remove();

                // If no results found, show a message
                if (!found) {
                    $activeTab.append('<div class="no-results">No results found.</div>');
                }
            } else {
                $activeTab.find('.newsrmorebut').show();
            }
        });

        $('#tags').on('change', function () {
            var selectedTag = $(this).val(); // Get selected tag ID
            filterPostsByTag(selectedTag);
        });

        /**
         * Function : Filter Posts by Tag
         */
        function filterPostsByTag(selectedTag) {
            $('#posts-container .newstwobrdiv').each(function () {
                var postTags = $(this).data('tags').split(','); // Get tags for the post
                if (selectedTag === 'all' || postTags.includes(selectedTag)) {
                    $(this).removeClass('hidden').show(); // Show matching posts
                } else {
                    $(this).addClass('hidden').hide(); // Hide non-matching posts
                }
            });

            // Show/hide "Load More" button
            if ($('#posts-container .newstwobrdiv:visible').length <= 3) {
                $('#load-more').hide();
            } else {
                $('#load-more').show();
            }
        }

        // Load more functionality
        $('.newsrmorebut a').on('click', function (e) {
            e.preventDefault();
            var linkedTab = $(this).data('linked-tab');
            var $tab = $('#' + linkedTab);
            var $items = $tab.find('.newstwobrdiv.hidden'); // Select only hidden items
            $items.slice(0, 3).removeClass('hidden').fadeIn(100); // Show the next 3 hidden items

            // Hide the button if no more hidden items
            if ($items.length <= 3) {
                $(this).hide();
            }
        });

        // On page load, check if there are any hidden items
        $('.newsrmorebut a').each(function () {
            var linkedTab = $(this).data('linked-tab');
            var $tab = $('#' + linkedTab);
            var $items = $tab.find('.newstwobrdiv.hidden'); // Select only hidden items

            // Hide the button if no more hidden items
            if ($items.length === 0) {
                $(this).hide();
            }
        });
    });
</script>