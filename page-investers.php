<?php /*Template Name: Investers Page */
get_header();
$pid = $post->ID; ?>

<?php $banner = get_field('banner', $pid); ?>

<div class="inner_main investers_main" id="skypcon">
    <div class="invsban">
        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>

        <?php if (isset($banner['header_curved_lines_image']) && !empty($banner['header_curved_lines_image']['ID'])): ?>
            <div class="inbanlayer">
                <img alt="<?php echo $banner['header_curved_lines_image']['alt']; ?>"
                    src="<?php echo $banner['header_curved_lines_image']['url']; ?>" />
            </div>
        <?php endif; ?>

        <div class="invansbantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>
        </div>
        <div class="invstbanright">
            <div>
                <?php echo do_shortcode($banner['widget_shortcode_one']); ?>
                <?php echo do_shortcode($banner['widget_shortcode_two']); ?>
            </div>
            <div>
                <div class="invslrbut">
                    <a href="<?= $banner['button_link']; ?>"><?= $banner['button_text']; ?>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 10.0029H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 5L15 10L10 15" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- <img alt="layer" src="<?php bloginfo('template_directory'); ?>/images/stockimg.png" /> -->
        </div>
    </div>

    <?php $our_mission = get_field('our_mission', $pid); ?>

    <div class="invsmid">
        <div class="invsmenu">
            <ul>
                <li><a href="#earning-reports">Earnings Reports</a></li>
                <li><a href="#news-release">News Releases</a></li>
                <li><a href="#upcoming-events">Upcoming Events</a></li>
                <li><a href="#analyst-coverage">Analyst Coverage</a></li>
                <li><a href="#investor-contact">Investor Contact</a></li>
                <li><a href="#downloadable-materials">Downloadable Materials </a></li>
            </ul>
        </div>
        <div class="invsmitxt">
            <?php if ($our_mission['section_title'] != ""): ?>
                <div class="invsmltxtsub"><?= $our_mission['section_title']; ?></div>
            <?php endif; ?>
            <div class="invsmltxin">
                <?php if ($our_mission['title_left'] != ""): ?>
                    <div class="invsmltleft"><?= $our_mission['title_left']; ?></div>
                <?php endif; ?>

                <div class="invsmltright">

                    <?php if ($our_mission['text_right'] != ""): ?>
                        <?= $our_mission['text_right']; ?>
                    <?php endif; ?>

                    <div class="invslrbut">
                        <?php if ($our_mission['view_company_presentation_button']['button_link'] !== ''): ?>
                            <a href="<?= $our_mission['view_company_presentation_button']['button_link']; ?>"><?= $our_mission['view_company_presentation_button']['button_text']; ?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 10.0029H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 5L15 10L10 15" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($our_mission['fact_sheet_button']['button_link'] !== ''): ?>
                            <a href="<?= $our_mission['fact_sheet_button']['button_link']; ?>"><?= $our_mission['fact_sheet_button']['button_text']; ?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 10.0029H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 5L15 10L10 15" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>

    <?php $earnings_reports = get_field('earnings_reports', $pid); ?>

    <div class="invsmidearning" id="earning-reports">
        <div class="invearleft">
            <?php if ($earnings_reports['title_left'] != ""): ?>
                <h3><?= $earnings_reports['title_left']; ?></h3>
            <?php endif; ?>
            <?php if ($earnings_reports['button_link'] !== ''): ?>
                <a href="<?= $earnings_reports['button_link']; ?>"><?= $earnings_reports['button_text']; ?>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 10.0029H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M10 5L15 10L10 15" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>
        <div class="invearright">
            <?php if ($earnings_reports['repports']): ?>
                <?php foreach ($earnings_reports['repports'] as $report): ?>
                    <div class="invearrone">
                        <h5><?= $report['year']; ?></h5>
                        <ul>
                            <?php if ($report['quarters']): ?>
                                <?php foreach ($report['quarters'] as $quarter): ?>
                                    <li><a href="<?= $quarter['quarter_link']; ?>"><?= $quarter['quarter_text']; ?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="clr"></div>
    </div>

    <?php $news_releases = get_field('news_releases', $pid); ?>
    <div class="invsmidnewsrelse" id="news-release">
        <div class="invstrelleft">
            <?php if ($news_releases['title_left'] != ""): ?>
                <h3><?= $news_releases['title_left']; ?></h3>
            <?php endif; ?>
            <?php if ($news_releases['button_link'] !== ''): ?>
                <a href="<?= $news_releases['button_link']; ?>"><?= $news_releases['button_text']; ?>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 10.0029H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M10 5L15 10L10 15" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>
        <div class="invstrelright">
            <ul>
                <?php
                $posts = get_posts(array(
                    'post_type' => 'post',
                    'numberposts' => 3,
                ));
                ?>
                <?php if (!empty($posts)) { ?>
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
                        ?>
                        <li>
                            <?php get_template_part('template-parts/content', 'press-release', $args); ?>
                        </li>
                        <?php $postloopindex++;
                    }
                    wp_reset_postdata();
                    ?>
                <?php } ?>
            </ul>
        </div>
        <div class="clr"></div>
    </div>

    <?php $upcoming_events = get_field('upcoming_events', $pid); ?>

    <div class="invsmidupmevt" id="upcoming-events">
        <div class="invsmidupmevleft">
            <?php if ($upcoming_events['title_left'] != ""): ?>
                <h3><?= $upcoming_events['title_left']; ?></h3>
            <?php endif; ?>
            <?php if ($upcoming_events['button_link'] !== ''): ?>
                <a href="<?= $upcoming_events['button_link']; ?>"><?= $upcoming_events['button_text']; ?>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 10.0029H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M10 5L15 10L10 15" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>
        <?php //print_r($upcoming_events['post_category']); ?>
        <div class="invsmidupmevrigt">
            <?php

            $posts = get_posts(array(
                'post_type' => 'post',
                'numberposts' => 3,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'post_content_types',
                        'field' => 'term_id',
                        'terms' => $upcoming_events['post_category'],
                    ),
                ),
            ));
            ?>
            <?php if (!empty($posts)) { ?>
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
                    ?>
                    <?php get_template_part('template-parts/content', 'investor-event', $args); ?>
                    <?php $postloopindex++;
                }
                wp_reset_postdata();
                ?>
            <?php } ?>
        </div>
        <div class="clr"></div>
    </div>

    <?php $analyst_coverage = get_field('analyst_coverage', $pid); ?>

    <div class="invsanlycoverge" id="analyst-coverage">
        <?php if ($analyst_coverage['title_left'] != ""): ?>
            <div class="invanlcovleft"><?= $analyst_coverage['title_left']; ?></div>
        <?php endif; ?>
        <div class="invanlcovright">
            <div class="inanlcovtable">
                <div class="cavtableth">
                    <div class="cavtabcol cavtabcol1">Firm</div>
                    <div class="cavtabcol cavtabcol2">Analyst</div>
                    <div class="cavtabcol cavtabcol3">Phone</div>
                    <div class="cavtabcol cavtabcol4">Email</div>
                </div>
                <?php if ($analyst_coverage['analyst_coverage']): ?>
                    <?php foreach ($analyst_coverage['analyst_coverage'] as $coverage): ?>
                        <div class="cavtabledata">
                            <div class="cavtabcol cavtabcol1"><?= $coverage['firm']; ?></div>
                            <div class="cavtabcol cavtabcol2"><?= $coverage['analyst']; ?></div>
                            <div class="cavtabcol cavtabcol3"><?= $coverage['phone']; ?></div>
                            <div class="cavtabcol cavtabcol4">
                                <a href="mailto:<?= $coverage['email']; ?>"><?= $coverage['email']; ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="clr"></div>
    </div>

    <?php $join_our_tat_investor_newsletter = get_field('join_our_tat_investor_newsletter', $pid); ?>
    <div class="invjoinfrm">
        <div class="invjfrmleft">
            <?php if ($join_our_tat_investor_newsletter['title_left_one'] != ""): ?>
                <h3><?= $join_our_tat_investor_newsletter['title_left_one']; ?></h3>
            <?php endif; ?>
            <?php if ($join_our_tat_investor_newsletter['title_left_two'] != ""): ?>
                <p><?= $join_our_tat_investor_newsletter['title_left_two']; ?></p>
            <?php endif; ?>
        </div>
        <div class="invjfrmright">
            <div class="invjfrmmain">
                <?php echo do_shortcode($join_our_tat_investor_newsletter['form_shortcode_right']); ?>
            </div>
        </div>
        <div class="clr"></div>
    </div>

    <?php $investor_contact = get_field('investor_contact', $pid); ?>
    <div class="invcon" id="investor-contact">
        <div class="invconleft">
            <?php if ($investor_contact['title_left_one'] != ""): ?>
                <h3><?= $investor_contact['title_left_one']; ?></h3>
            <?php endif; ?>
            <?php if ($investor_contact['title_left_two'] != ""): ?>
                <p><?= $investor_contact['title_left_two']; ?></p>
            <?php endif; ?>
            <div class="invonlfbot">
                <div>Email:
                    <?php if ($investor_contact['investor_contact_email'] != ""): ?>
                        <a
                            href="mailto:<?= $investor_contact['investor_contact_email']; ?>"><?= $investor_contact['investor_contact_email']; ?></a>
                    <?php endif; ?>
                </div>
                <div>Phone:
                    <?php if ($investor_contact['investor_contact_phone'] != ""): ?>
                        <a
                            href="tel:<?= $investor_contact['investor_contact_phone']; ?>"><?= $investor_contact['investor_contact_phone']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="invconsocial">
                <?php if ($investor_contact['social_links']): ?>
                    <?php foreach ($investor_contact['social_links'] as $social_link): ?>
                        <?php
                        switch ($social_link['social_link_type']) {
                            case 'email':
                                ?>
                                <a href="mailto:<?= $social_link['social_link']; ?>">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.66797 17.0508H18.3346V10.8008V4.55078H10.0013H1.66797V10.8008V17.0508Z"
                                            stroke="#2E313F" stroke-width="2" stroke-linejoin="round" />
                                        <path d="M1.66797 4.55078L10.0013 10.8008L18.3346 4.55078" stroke="#2E313F" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.0013 4.55078H1.66797V10.8008" stroke="#2E313F" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.3333 10.8008V4.55078H10" stroke="#2E313F" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <?php
                                break;
                            case 'linkedin':
                                ?>
                                <a href="<?= $social_link['social_link']; ?>" target="_blank">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2968_9096)">
                                            <path
                                                d="M18.5195 0H1.47656C0.660156 0 0 0.644531 0 1.44141V18.5547C0 19.3516 0.660156 20 1.47656 20H18.5195C19.3359 20 20 19.3516 20 18.5586V1.44141C20 0.644531 19.3359 0 18.5195 0ZM5.93359 17.043H2.96484V7.49609H5.93359V17.043ZM4.44922 6.19531C3.49609 6.19531 2.72656 5.42578 2.72656 4.47656C2.72656 3.52734 3.49609 2.75781 4.44922 2.75781C5.39844 2.75781 6.16797 3.52734 6.16797 4.47656C6.16797 5.42188 5.39844 6.19531 4.44922 6.19531ZM17.043 17.043H14.0781V12.4023C14.0781 11.2969 14.0586 9.87109 12.5352 9.87109C10.9922 9.87109 10.7578 11.0781 10.7578 12.3242V17.043H7.79688V7.49609H10.6406V8.80078H10.6797C11.0742 8.05078 12.043 7.25781 13.4844 7.25781C16.4883 7.25781 17.043 9.23438 17.043 11.8047V17.043Z"
                                                fill="#2E313F" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2968_9096">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <?php
                                break;
                            case 'x':
                                ?>
                                <a href="<?= $social_link['social_link']; ?>" target="_blank">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.2706 1.58594H18.0818L11.9401 8.60551L19.1654 18.1576H13.5081L9.07706 12.3643L4.00699 18.1576H1.19406L7.76323 10.6493L0.832031 1.58594H6.63296L10.6382 6.88121L15.2706 1.58594ZM14.284 16.4749H15.8417L5.78653 3.18021H4.11492L14.284 16.4749Z"
                                            fill="#2E313F" />
                                    </svg>
                                </a>
                                <?php
                                break;
                            case 'facebook':
                                ?>
                                <a href="<?= $social_link['social_link']; ?>" target="_blank">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2968_9721)">
                                            <path
                                                d="M10 0C4.4772 0 0 4.4772 0 10C0 14.6896 3.2288 18.6248 7.5844 19.7056V13.056H5.5224V10H7.5844V8.6832C7.5844 5.2796 9.1248 3.702 12.4664 3.702C13.1 3.702 14.1932 3.8264 14.6404 3.9504V6.7204C14.4044 6.6956 13.9944 6.6832 13.4852 6.6832C11.8456 6.6832 11.212 7.3044 11.212 8.9192V10H14.4784L13.9172 13.056H11.212V19.9268C16.1636 19.3288 20.0004 15.1128 20.0004 10C20 4.4772 15.5228 0 10 0Z"
                                                fill="#2E313F" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2968_9721">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <?php
                                break;
                            default:
                                break;
                        }
                        ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="invconright">
            <?php echo do_shortcode($investor_contact['form_shortcode_right']); ?>
        </div>
        <div class="clr"></div>
    </div>

</div>

<?php get_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop,
                        behavior: "smooth"
                    });
                }
            });
        });
    });
</script>