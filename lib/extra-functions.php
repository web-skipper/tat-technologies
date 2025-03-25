<?php
/**
 * Function : Disable Default added Custom POst Content Type Taxonomies
 * @return void
 */
function disable_taxonomy_delete_script() {
    $screen = get_current_screen();
    if ($screen && $screen->taxonomy === 'post_content_types') { ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                let deleteLinks = document.querySelectorAll('.row-actions .delete a');
                deleteLinks.forEach(link => link.remove());
            });
        </script>
    <?php }
}
add_action('admin_footer', 'disable_taxonomy_delete_script');

/**
 * Function : Load Custom Single Template if post_content_types is events.
 * @return $template
 */
function load_custom_single_template($template) {
    if (is_singular('post')) {
        $terms = wp_get_post_terms(get_the_ID(), 'post_content_types', ['fields' => 'slugs']);
        if (in_array('events', $terms)) {
            $custom_template = locate_template('single-event.php');
            if ($custom_template) {
                return $custom_template;
            }
        }
    }
    return $template;
}
add_filter('single_template', 'load_custom_single_template');

/**
 * Function : Media Center Search functiality
 * Page : Media Center
 * Action : when user search for Media center
 * @return Array
 */
function handle_media_center_search() {

    // Get the search query and tab ID from the AJAX request
    $search_query = sanitize_text_field($_GET['query'] ?? '');

    $tab_id = sanitize_text_field($_GET['tab_id'] ?? '');
    $pid = sanitize_text_field($_GET['post_id'] ?? ''); // Get the post ID

    // Fetch the media center tabs data using ACF
    $media_center_tabs = get_field('media_center_tabs', $pid);

    $results = [];

    if (!empty($media_center_tabs['tabs'])) {
        foreach ($media_center_tabs['tabs'] as $loopIndex => $tab) {
            foreach ($tab['media_center_tabs'] as $certification) {
                if ($search_query == '') {
                    $results[] = [
                        'title' => $certification['title'],
                        'image_url' => $certification['image']['url'],
                        'image_alt' => $certification['image']['alt'],
                        'file_url' => !empty($certification['file']) ? $certification['file']['url'] : $certification['image']['url'],
                    ];
                } else if (stripos($certification['title'], $search_query) !== false) {
                    $results[] = [
                        'title' => $certification['title'],
                        'image_url' => $certification['image']['url'],
                        'image_alt' => $certification['image']['alt'],
                        'file_url' => !empty($certification['file']) ? $certification['file']['url'] : $certification['image']['url'],
                    ];
                }
            }
        }
    }

    // Return the results as JSON
    wp_send_json($results);
}
add_action('wp_ajax_media_center_search', 'handle_media_center_search');
add_action('wp_ajax_nopriv_media_center_search', 'handle_media_center_search');

/**
 * Function : Load More events
 * Called From : Single pageCustom Post Type Taxnomony - Event  
 * @return : html
 */
function load_more_events() {
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $categories = isset($_POST['categories']) ? array_map('intval', $_POST['categories']) : array();
    $exclude = isset($_POST['exclude']) ? intval($_POST['exclude']) : 0;
    $args = array(
        'category__in' => $categories,
        'posts_per_page' => 12,
        'paged' => $page,
        'post__not_in' => array($exclude),
        'post_type' => 'post',
        'tax_query' => array(
            array(
                'taxonomy' => 'post_content_types',
                'field' => 'slug',
                'terms' => 'events',
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        ob_start();

        while ($query->have_posts()) {
            $query->the_post();
            $event_date = get_field('event_dates');
            $timestamp = strtotime($event_date);
            ?>
            <li class="event-item">
                <a href="<?php the_permalink(); ?>">
                    <div class="evmrgtone">
                        <div class="evmrgtup">
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
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.91406 5L12.9141 10L7.91406 15" stroke="#2E313F" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    <div class="clr"></div>
                </a>
            </li>
            <?php
        }

        wp_reset_postdata();

        wp_send_json_success(array(
            'html' => ob_get_clean(),
        ));
    } else {
        wp_send_json_error('No more events found');
    }
}
add_action('wp_ajax_load_more_events', 'load_more_events');
add_action('wp_ajax_nopriv_load_more_events', 'load_more_events');