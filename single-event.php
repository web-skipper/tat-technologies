<?php /*Template Name: Event News Post Detail Page */
get_header();
$pid = $post->ID; ?>

<?php
$event_date = get_field('event_dates');
$timestamp = strtotime($event_date);
?>
<div class="inner_main eventndet_main" id="skypcon">
    <div class="eventnwdetban">
        <div class="evtdtbantxt">
            <h1><?php the_title(); ?></h1>
            <?php if ($timestamp && $timestamp > time()): ?>
                <div class="evtupcm">Upcoming</div>
            <?php endif; ?>
        </div>
        <div class="evtbandate">
            <?php if ($timestamp): ?>
                <span>
                    <?php echo date('M', $timestamp); ?><br />
                    <em><?php echo date('j', $timestamp); ?></em>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="eventndetmid">
        <div class="newspostmleft">
            <div class="newspostsmimg">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                } ?>
            </div>
            <div class="newspostsocial">
                <span>Share</span>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                            target="_blank">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3432_9373)">
                                    <path
                                        d="M9 0C4.02948 0 0 4.02948 0 9C0 13.2206 2.90592 16.7623 6.82596 17.735V11.7504H4.97016V9H6.82596V7.81488C6.82596 4.75164 8.21232 3.3318 11.2198 3.3318C11.79 3.3318 12.7739 3.44376 13.1764 3.55536V6.04836C12.964 6.02604 12.595 6.01488 12.1367 6.01488C10.661 6.01488 10.0908 6.57396 10.0908 8.02728V9H13.0306L12.5255 11.7504H10.0908V17.9341C14.5472 17.3959 18.0004 13.6015 18.0004 9C18 4.02948 13.9705 0 9 0Z"
                                        fill="#2E313F" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_3432_9373">
                                        <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                            target="_blank">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.7447 1.42773H16.2748L10.7473 7.74535L17.25 16.3422H12.1584L8.17053 11.1283L3.60746 16.3422H1.07582L6.98808 9.58481L0.75 1.42773H5.97083L9.57555 6.19348L13.7447 1.42773ZM12.8567 14.8278H14.2587L5.20905 2.86258H3.7046L12.8567 14.8278Z"
                                    fill="#2E313F" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>"
                            target="_blank">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3432_1837)">
                                    <path
                                        d="M16.6676 0H1.32891C0.594141 0 0 0.580078 0 1.29727V16.6992C0 17.4164 0.594141 18 1.32891 18H16.6676C17.4023 18 18 17.4164 18 16.7027V1.29727C18 0.580078 17.4023 0 16.6676 0ZM5.34023 15.3387H2.66836V6.74648H5.34023V15.3387ZM4.0043 5.57578C3.14648 5.57578 2.45391 4.8832 2.45391 4.02891C2.45391 3.17461 3.14648 2.48203 4.0043 2.48203C4.85859 2.48203 5.55117 3.17461 5.55117 4.02891C5.55117 4.87969 4.85859 5.57578 4.0043 5.57578ZM15.3387 15.3387H12.6703V11.1621C12.6703 10.1672 12.6527 8.88398 11.2816 8.88398C9.89297 8.88398 9.68203 9.97031 9.68203 11.0918V15.3387H7.01719V6.74648H9.57656V7.9207H9.61172C9.9668 7.2457 10.8387 6.53203 12.1359 6.53203C14.8395 6.53203 15.3387 8.31094 15.3387 10.6242V15.3387Z"
                                        fill="#2E313F" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_3432_1837">
                                        <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink()); ?>"
                            target="_blank">

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 14.625H16.5V9V3.375H9H1.5V9V14.625Z" stroke="#2E313F" stroke-width="1.5"
                                    stroke-linejoin="round" />
                                <path d="M1.5 3.375L9 9L16.5 3.375" stroke="#2E313F" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9 3.375H1.5V9" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M16.5 9V3.375H9" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="newsposttopic">
                <span>Topic</span>
                <div class="newspostag">
                    <?php
                    $term_ids = [];
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        foreach ($categories as $category) {
                            $term_ids[] = $category->term_id;
                            echo '<div class="tagin"><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="newspostmright">
            <?php the_content(); ?>
        </div>
        <div class="clr"></div>
    </div>
    <div class="eventmidmore">
        <div class="evmidmlft">More Events</div>
        <div class="evmidmrgt">
            <ul id="events-container">
                <?php
                $args = array(
                    'category__in' => $term_ids,
                    'posts_per_page' => 3,
                    'post__not_in' => array($post->ID),
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_content_types',
                            'field' => 'slug',
                            'terms' => 'events',
                        ),
                    ),
                );
                $related_events = new WP_Query($args);
                if ($related_events->have_posts()):
                    while ($related_events->have_posts()):
                        $related_events->the_post(); ?>
                        <?php
                        $categories = get_the_category();
                        ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <div class="evmrgtone">
                                    <div class="evmrgtup">
                                        <?php
                                        $event_date = get_field('event_dates');
                                        $timestamp = strtotime($event_date);
                                        ?>
                                        <?php if ($timestamp): ?>
                                            <div class="evmgrpjoin">
                                                <?php echo strtoupper(date('M y', $timestamp)); ?>
                                                <span><?php echo date('j', $timestamp); ?></span>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($timestamp && $timestamp > time()): ?>
                                            <p>Upcoming</p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="evrgcon">
                                        <p><?php the_title(); ?></p>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                                <div class="evmrgtbut">
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.91406 5L12.9141 10L7.91406 15" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="clr"></div>
                            </a>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata();
                else: ?>
                    <li><?php _e('No related posts found.', 'textdomain'); ?></li>
                <?php endif; ?>
            </ul>
            <?php
            $max_pages = $related_events->max_num_pages;
            if ($max_pages > 1): ?>
                <div class="evabut">
                    <a href="#" id="load-more-events" data-page="1" data-categories="<?php echo implode(',', $term_ids); ?>"
                        data-exclude="<?php echo $post->ID; ?>">
                        Load more
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.0231 4.66675L10.0078 16.3334" stroke="#2E313F" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4.16406 10.5H15.8307" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="clr"></div>
    </div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#load-more-events').on('click', function (e) {
            e.preventDefault();

            var button = $(this);
            var page = parseInt(button.data('page')) + 1;
            var max_pages = <?php echo $max_pages; ?>;
            var categories = button.data('categories');
            var exclude = button.data('exclude');

            // Show loading state
            button.html('Loading...');

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'load_more_events',
                    page: page,
                    categories: categories,
                    exclude: exclude
                },
                success: function (response) {
                    if (response.success) {
                        // Append new posts
                        $('#events-container').append(response.data.html);

                        // Update page number
                        button.data('page', page);

                        // Hide button if no more posts
                        if (page >= max_pages) {
                            button.hide();
                        } else {
                            button.html('Load more <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.0231 4.66675L10.0078 16.3334" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M4.16406 10.5H15.8307" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>');
                        }
                    } else {
                        button.html('No more events');
                    }
                },
                error: function () {
                    button.html('Error loading events');
                }
            });
        });
    });
</script>