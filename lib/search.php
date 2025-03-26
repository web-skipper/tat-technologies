<?php
add_action('wp_head', 'add_search_feature');

function add_search_feature() {
    ?>
    <div class="hsearchform hidden">
        <form id="search-form" action="<?php echo home_url('/'); ?>" method="get">
            <input class="one" id="search-input" type="text" name="s" placeholder="Search TAT Technologies"
                autocomplete="off">
            <button type="submit" id="search">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 16L18 12M18 12L14 8M18 12L6 12" stroke="white" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </form>
        <div id="search-results" class="search-results-dropdown"></div>
        <div class="clr"></div>
        <style>
            /* Search form styles */
            .hsearchform {
                min-height: 400px;
                position: absolute;
                top: 81px;
                left: 0;
                width: 100%;
                background: #2E313F;
                z-index: 9;
                padding: 186px 70px 50px 70px;
                overflow: visible;
                /* Important for dropdown visibility */
            }

            .search-results-dropdown {
                float: right;
                display: block;
                width: 1175px;
                position: relative;
                background: #fff;
                border-top: 1px solid #4A4F60;
                z-index: 10;
                max-height: 500px;
                overflow-y: auto;
                display: none;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }

            .search-results-dropdown.has-results {
                display: block;
            }

            .ajax-search-results {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            .ajax-search-results li {
                padding: 15px 20px;
                border-bottom: 1px solid #f0f0f0;
            }

            .ajax-search-results li a {
                color: #3A3E4D;
                text-decoration: none;
                display: block;
                font-size: 16px;
                transition: all 0.3s ease;
            }

            .ajax-search-results li:hover {
                background-color: #f5f5f5;
            }

            .ajax-search-results li a:hover {
                color: #0066cc;
            }

            .view-all-results {
                padding: 15px;
                text-align: center;
                background: #f5f5f5;
                border-top: 1px solid #e0e0e0;
            }

            .view-all-results a {
                color: #0066cc;
                text-decoration: none;
                font-weight: bold;
            }

            /* Loading spinner */
            .search-loading {
                padding: 20px;
                text-align: center;
            }

            .search-spinner {
                display: inline-block;
                width: 30px;
                height: 30px;
                border: 3px solid rgba(0, 0, 0, 0.1);
                border-radius: 50%;
                border-top-color: #3A3E4D;
                animation: spin 1s ease-in-out infinite;
            }

            @keyframes spin {
                to {
                    transform: rotate(360deg);
                }
            }

            .no-results,
            .search-error {
                padding: 20px;
                text-align: center;
                color: #666;
            }
        </style>
        <script>
            jQuery(document).ready(function ($) {
                /**
                 * Toggle Search Form
                 */
                $(document).on("click", ".hsearch a", function () {
                    $(document).find('.hsearchform').toggleClass('hidden');
                    $('body').toggleClass('bodysact');
                    if (!$('.hsearchform').hasClass('hidden')) {
                        $('#search-input').focus();
                    }
                });

                /**
                 * Search form AJAX action
                 */
                var searchTimer;
                $('#search-input').on('input', function () {
                    clearTimeout(searchTimer);
                    var searchQuery = $(this).val().trim();

                    if (searchQuery.length < 2) {
                        $('#search-results').html('').removeClass('has-results');
                        return;
                    }

                    searchTimer = setTimeout(function () {
                        $.ajax({
                            url: '<?php echo admin_url("admin-ajax.php"); ?>',
                            type: 'POST',
                            data: {
                                action: 'ajax_search',
                                s: searchQuery
                            },
                            beforeSend: function () {
                                $('#search-results').html('<div class="search-loading"><div class="search-spinner"></div></div>').addClass('has-results');
                            },
                            success: function (response) {
                                $('#search-results').html(response).addClass('has-results');
                            },
                            error: function () {
                                $('#search-results').html('<div class="search-error">Error loading results</div>').addClass('has-results');
                            }
                        });
                    }, 300);
                });

                // Close results when clicking outside
                $(document).on('click', function (e) {
                    if (!$(e.target).closest('.hsearchform').length) {
                        $('#search-results').html('').removeClass('has-results');
                    }
                });

                // Prevent form submission (we're using AJAX)
                $('#search-form').on('submit', function (e) {
                    e.preventDefault();
                    var searchQuery = $('#search-input').val().trim();
                    if (searchQuery.length > 0) {
                        window.location.href = '<?php echo home_url('/'); ?>?s=' + encodeURIComponent(searchQuery);
                    }
                });
            });
        </script>
    </div>
    <?php
}

add_action('wp_ajax_ajax_search', 'ajax_search');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search');

function ajax_search() {
    $search_query = sanitize_text_field($_POST['s']);

    $args = array(
        'post_type' => array('post', 'page'), // Add any custom post types if needed
        'post_status' => 'publish',
        's' => $search_query,
        'posts_per_page' => 5,
    );

    $search = new WP_Query($args);

    if ($search->have_posts()) {
        echo '<ul class="ajax-search-results">';
        while ($search->have_posts()) {
            $search->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
        echo '<div class="view-all-results"><a href="' . home_url('/?s=' . urlencode($search_query)) . '">View all results</a></div>';
    } else {
        echo '<div class="no-results">No results found for "' . esc_html($search_query) . '"</div>';
    }

    wp_reset_postdata();
    die();
}