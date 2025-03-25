<?php /*Template Name: Investers Events Page */
get_header();
$pid = $post->ID; ?>

<?php $banner = get_field('banner', $pid); ?>

<div class="inner_main invetnews_main" id="skypcon">
    <div class="invesnewsmban">
        <div class="breadcrumbs"><a href="<?php bloginfo('url'); ?>">Home</a><?php if (function_exists('bcn_display')) {
              bcn_display();
          } ?></div>
        <div class="invnewbantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>
            <?php if ($banner['title_left_two'] != ""): ?>
                <h2><?= $banner['title_left_two']; ?></h2>
            <?php endif; ?>
        </div>
    </div>

    <?php $investor_events = get_field('investor_events', $pid); ?>
    <?php
    // Get the search term and selected tag from the URL
    $search_term = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
    $selected_tag = isset($_GET['tag']) ? intval($_GET['tag']) : '';
    $tags = get_terms(array(
        'taxonomy' => 'post_tag',
        'hide_empty' => false,
        'fields' => 'all',
        'orderby' => 'name',
        'order' => 'ASC',
    ));
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 7, // Show 7 posts initially
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'post_content_types',
                'field' => 'term_id',
                'terms' => $investor_events['post_type_category'],
            ),
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $investor_events['post_category'],
            ),
        ),
    );
    if ($search_term) {
        $args['s'] = array($search_term);
    }

    // print_r($investor_events['post_type_category']);
    // print_r($investor_events['post_category']);
    // Add tag filter if a tag is selected
    if ($selected_tag) {
        $args['tag__in'] = array($selected_tag);
    }

    // Use WP_Query instead of get_posts
    $query = new WP_Query($args);
    $total_posts = $query->found_posts; // Total number of posts found
    //echo 'sssss ' . $total_posts;
    ?>
    <div class="invenewsmid">
        <div class="invnewmidright">
            <div class="invnesmidrtop">
                <div class="invnewrslt">Showing 1-<?php echo min(7, $query->post_count); ?> of
                    <span><?php echo $total_posts; ?> results</span>
                </div>
                <div class="invnewsrfilter">
                    <div class="invnfittopic">
                        <form method="get" action="">
                            <select name="tag" onchange="this.form.submit()">
                                <option value="">Topic</option>
                                <?php foreach ($tags as $tag): ?>
                                    <option value="<?php echo $tag->term_id; ?>" <?php selected($selected_tag, $tag->term_id); ?>><?php echo $tag->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </form>
                    </div>
                    <div class="invfiltseach">
                        <form method="get" action="">
                            <input class="one" name="s" type="text" placeholder="Free Search"
                                value="<?php echo $search_term; ?>" />
                            <input class="two" type="submit" value="" />
                        </form>
                    </div>
                </div>
                <div class="clr"></div>
            </div>

            <div class="invnewslist">
                <ul>
                    <?php if ($query->have_posts()): ?>
                        <?php
                        $postloopindex = 1;
                        while ($query->have_posts()):
                            $query->the_post();
                            $post_terms = wp_get_post_terms(get_the_ID(), 'post_content_types', array('fields' => 'ids'));
                            $post_tags = wp_get_post_tags(get_the_ID(), array('fields' => 'ids'));
                            $args = array(
                                'postloopindex' => $postloopindex,
                                'post_terms' => $post_terms,
                                'post_tags' => $post_tags,
                            );
                            ?>

                            <li>
                                <?php get_template_part('template-parts/content', 'investor-event', $args); ?>
                            </li>
                            <?php $postloopindex++;
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    <?php endif; ?>

                </ul>
                <div class="investlmorebut"><a href="#">Show more
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.027 4.66602L10.0117 16.3327" stroke="#2E313F" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4.16797 10.5H15.8346" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a></div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        // LOAD MORE1
        $(function () {
            $(".downloadearrepot .dowtabtdin").slice(0, 6).addClass('show');
            $(".downshmore1 a").on('click', function (e) {
                e.preventDefault();
                $(".downloadearrepot .dowtabtdin:hidden").addClass('show');
                if ($(".downloadearrepot .dowtabtdin:hidden").length == 0) { $(".downshmore1").fadeOut('slow'); }
                //$('html,body').animate({scrollTop: $(this).offset().top}, 1500);
            });
        });

        // LOAD MORE1
        $(function () {
            $(".downloadpresent .dowtabtdin").slice(0, 4).addClass('show');
            $(".downshmore2 a").on('click', function (e) {
                e.preventDefault();
                $(".downloadpresent .dowtabtdin:hidden").addClass('show');
                if ($(".downloadpresent .dowtabtdin:hidden").length == 0) { $(".downshmore2").fadeOut('slow'); }
                //$('html,body').animate({scrollTop: $(this).offset().top}, 1500);
            });
        });
    });
    jQuery(window).on('load', function () {

    });
    jQuery(window).resize(function () {

    });

</script>