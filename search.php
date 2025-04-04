<?php get_header(); ?>
<?php
global $wp_query;

$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'date';
$order = isset($_GET['order']) ? $_GET['order'] : 'DESC';
$posts_per_page = isset($_GET['posts_per_page']) ? $_GET['posts_per_page'] : '10';

$args = array(
    's' => get_search_query(),
    'orderby' => $orderby,
    'order' => $order,
    'posts_per_page' => $posts_per_page,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Add pagination support
);

$custom_query = new WP_Query($args);
?>
<div class="inner_main search_main" id="skypcon">
    <div class="searchban">
        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
        <div class="searchbanmid">
            <div class="searchbandiv">
                <form id="searchform" method="get" action="<?php bloginfo('home'); ?>/">
                    <input class="one" type="text" value="Search TAT Technologies"
                        onfocus="if (this.value == 'Search TAT Technologies') {this.value = '';}"
                        onblur="if (this.value == '') {this.value = 'Search TAT Technologies';}" size="18"
                        maxlength="50" name="s" id="s" />
                    <input class="two" name="" type="submit" value="" />
                </form>
            </div>
        </div>
        <div class="sinbanlayer">
            <img class="one" alt="layer" src="<?php bloginfo('template_directory'); ?>/images/searchbanlayer.svg" />
            <img class="two" alt="layer" src="<?php bloginfo('template_directory'); ?>/images/searchbanlayer2.svg" />
            <img class="three" alt="layer" src="<?php bloginfo('template_directory'); ?>/images/searchbanlayer3.svg" />
            <img class="four" alt="layer" src="<?php bloginfo('template_directory'); ?>/images/searchbanlayer4.svg" />
        </div>
    </div>
    <div class="searchtop">
        <div class="sectopleft">
            <div class="seartoplsort">Sort by:</div>
            <div class="stoplftbox">
                <a class="<?= $orderby && $orderby == 'date' ? 'active' : ''; ?>"
                    href="?s=<?php echo get_search_query(); ?>&orderby=date&order=DESC">Newest</a>
                <a class="<?= $orderby && $orderby == 'relevance' ? 'active' : ''; ?>"
                    href="?s=<?php echo get_search_query(); ?>&orderby=relevance&order=ASC">Relevance</a>
            </div>
            <div class="clr"></div>
        </div>
        <div class="sectopright">
            <div class="serctopmid">
                <?php

                // Get the current page number
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                // Get the number of posts per page
                $posts_per_page = $wp_query->query_vars['posts_per_page'];

                // Calculate the starting and ending post numbers
                $start = (($paged - 1) * $posts_per_page) + 1;
                $end = min($paged * $posts_per_page, $wp_query->found_posts);

                // Get the total number of results
                $total_results = $wp_query->found_posts;

                // Display the dynamic range and total results
                echo '<span>Showing ' . $start . '-' . $end . ' of</span> ' . $total_results . ' results';
                ?>
            </div>
            <div class="sertoprcat">
                <form id="responsive-sort-1024" method="get" action="<?php echo home_url('/'); ?>">
                    <select name="orderby" onchange="this.form.submit()">
                        <option value="">Sort by</option>
                        <option value="date" <?php echo ($orderby == 'date') ? 'selected' : ''; ?>>Newest</option>
                        <option value="relevance" <?php echo ($orderby == 'relevance') ? 'selected' : ''; ?>>Relevance
                        </option>
                    </select>
                    <input type="hidden" name="s" value="<?php echo get_search_query(); ?>">
                    <input type="hidden" name="order" value="<?php echo ($orderby == 'date') ? 'DESC' : 'ASC'; ?>">
                </form>
                <div class="searcatsel">
                    <form id="category-filter" method="get" action="<?php bloginfo('home'); ?>/">
                        <select name="cat" onchange="this.form.submit()">
                            <option value="">Category</option>
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) {
                                $selected = (isset($_GET['cat']) && $_GET['cat'] == $category->term_id) ? 'selected' : '';
                                echo '<option value="' . $category->term_id . '" ' . $selected . '>' . $category->name . '</option>';
                            }
                            ?>
                        </select>
                        <input type="hidden" name="s" value="<?php echo get_search_query(); ?>">
                    </form>
                </div>
                <div class="searressel">
                    <form id="results-per-page" method="get" action="<?php bloginfo('home'); ?>/">
                        <select name="posts_per_page" onchange="this.form.submit()">
                            <option value="10" <?php echo (isset($_GET['posts_per_page']) && $_GET['posts_per_page'] == 10) ? 'selected' : ''; ?>>Displayed Results 10 Per Page
                            </option>
                            <option value="20" <?php echo (isset($_GET['posts_per_page']) && $_GET['posts_per_page'] == 20) ? 'selected' : ''; ?>>Displayed Results 20 Per Page
                            </option>
                            <option value="50" <?php echo (isset($_GET['posts_per_page']) && $_GET['posts_per_page'] == 50) ? 'selected' : ''; ?>>Displayed Results 50 Per Page
                            </option>
                        </select>
                        <input type="hidden" name="s" value="<?php echo get_search_query(); ?>">
                    </form>
                </div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
    <?php if (have_posts()): ?>
        <div class="searchbot">
            <div class="searchbolist">
                <ul>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <li>
                            <div class="seachlright">
                                <div class="sebltop"><?php the_category(', '); ?></div>
                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 19, '...'); ?></p>
                            </div>
                            <div class="seachllft">
                                <a href="<?php the_permalink() ?>">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.91797 5L12.918 10L7.91797 15" stroke="#2E313F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                            <div class="clr"></div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="navigation">
                    <?php
                    if (function_exists('wp_pagenavi')) {
                        wp_pagenavi(array('query' => $custom_query)); // Pass the custom query to wp_pagenavi
                    } else {
                        ?>
                        <div class="alignleft">
                            <?php next_posts_link('&larr; Previous Entries', $custom_query->max_num_pages); ?>
                        </div>
                        <div class="alignright"><?php previous_posts_link('Next Entries &rarr;'); ?></div>
                    <?php } ?>
                </div>

            </div>
            <div class="clr"></div>
        </div>
    <?php endif; ?>
</div>




<?php get_footer(); ?>