<?php /*Template Name: Download Material Page */
get_header();
$pid = $post->ID; ?>

<?php $banner = get_field('banner', $pid); ?>

<div class="inner_main downmater_main" id="skypcon">
    <div class="downmateban">
        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
        <div class="downmarbantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>
            <?php if ($banner['title_left_two'] != ""): ?>
                <h2><?= $banner['title_left_two']; ?></h2>
            <?php endif; ?>
        </div>
        <div class="downmarbanrght">
            <?php if ($banner['fact_sheet_button']['button_link'] != ""): ?>
                <a href="<?= $banner['fact_sheet_button']['button_link']; ?>">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.33203 18.3337V1.66699H12.9154L16.6654 6.04199V18.3337H3.33203Z" stroke="white"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.75 11.667H6.25V14.5837H8.75V11.667Z" stroke="white" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.83203 14.583H14.1654" stroke="#FCFCF8" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M11.25 9.58301H8.75V14.583H11.25V9.58301Z" stroke="#FCFCF8" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.75 7.5H11.25V14.5833H13.75V7.5Z" stroke="#FCFCF8" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg> <?= $banner['fact_sheet_button']['button_text']; ?>
                </a>
            <?php endif; ?>

            <?php if ($banner['company_presentation_button']['button_link'] != ""): ?>
                <a href="<?= $banner['company_presentation_button']['button_link']; ?>">

                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.0013 13.7503H1.66797V2.91699H18.3346V13.7503H15.0013H5.0013Z" stroke="white"
                            stroke-width="1.5" stroke-linejoin="round" />
                        <path d="M6.66797 9.16699V10.8337" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M10 13.75V16.25" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M10 7.5V10.8333" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M13.332 5.83301V10.833" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5 17.083H15" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <?= $banner['company_presentation_button']['button_text']; ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <?php $earnings_report = get_field('earnings_report', $pid); ?>
    <div class="downmatermid">
        <div class="downloadearrepot">
            <?php if ($earnings_report['section_title'] != ""): ?>
                <h3><?= $earnings_report['section_title']; ?></h3>
            <?php endif; ?>

            <div class="downloadretable">
                <div class="dowtableth">
                    <div class="dtablecol dtablecol1">Date</div>
                    <div class="dtablecol dtablecol2">Quarter</div>
                    <div class="dtablecol dtablecol3">Description</div>
                    <div class="dtablecol dtablecol4">Download View</div>
                </div>
                <div class="dowtabletd">
                    <?php if ($earnings_report['earning_report']): ?>
                        <?php foreach ($earnings_report['earning_report'] as $report): ?>

                            <div class="dowtabtdin">
                                <div class="dtablecol dtablecol1"><?= $report['date']; ?></div>
                                <div class="dtablecol dtablecol2"><?= $report['quarter']; ?></div>
                                <div class="dtablecol dtablecol3"><?= $report['description']; ?></div>
                                <div class="dtablecol dtablecol4">

                                    <?php
                                    $download_link_one = '#';
                                    if ($report['download_view']['link_one']['file'] != '') {
                                        $download_link = $report['download_view']['link_one']['file'];
                                    } elseif ($report['download_view']['link_one']['link'] != '') {
                                        $download_link = $report['download_view']['link_one']['link'];
                                    }
                                    ?>

                                    <a href="<?= $download_link; ?>">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.16667 18.3333L8.75 15" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M17.5013 18.3333V5H10.8346L11.2513 8.33333L11.668 11.6667L12.0846 15L9.16797 18.3333H17.5013Z"
                                                stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M11.668 11.667H13.7513" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.25 8.33301H13.75" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M2.5 1.66699H10.4167L10.8333 5.00033L11.25 8.33366L11.6667 11.667L12.0833 15.0003H8.75H2.5V1.66699Z"
                                                stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M5 5H7.91667" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M5 8.33301H8.33333" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5 11.667H8.75" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <?php
                                    $download_link_two = '#';
                                    if ($report['download_view']['link_two']['file'] != '') {
                                        $download_link = $report['download_view']['link_two']['file'];
                                    } elseif ($report['download_view']['link_two']['link'] != '') {
                                        $download_link = $report['download_view']['link_two']['link'];
                                    }
                                    ?>
                                    <a href="<?= $download_link_two; ?>">

                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33203 18.3337V1.66699H12.9154L16.6654 6.04199V18.3337H3.33203Z"
                                                stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M8.75 11.667H6.25V14.5837H8.75V11.667Z" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.83203 14.583H14.1654" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.25 9.58301H8.75V14.583H11.25V9.58301Z" stroke="#2E313F"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.75 7.5H11.25V14.5833H13.75V7.5Z" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </a>
                                    <?php
                                    $download_link_three = '#';
                                    if ($report['download_view']['link_three']['file'] != '') {
                                        $download_link = $report['download_view']['link_three']['file'];
                                    } elseif ($report['download_view']['link_three']['link'] != '') {
                                        $download_link = $report['download_view']['link_three']['link'];
                                    }
                                    ?>
                                    <a href="<?= $download_link_three; ?>">

                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.7487 16.2497C8.7487 12.5678 5.76395 9.58301 2.08203 9.58301"
                                                stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M5.41536 16.2503C5.41536 14.4094 3.92298 12.917 2.08203 12.917"
                                                stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.29167 17.0833C2.86696 17.0833 3.33333 16.617 3.33333 16.0417C3.33333 15.4664 2.86696 15 2.29167 15C1.71637 15 1.25 15.4664 1.25 16.0417C1.25 16.617 1.71637 17.0833 2.29167 17.0833Z"
                                                fill="#2E313F" />
                                            <path d="M1.66797 6.68992V3.33301H18.3346V16.6663H11.9893" stroke="#2E313F"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </a>
                                    <?php
                                    $download_link_four = '#';
                                    if ($report['download_view']['link_four']['file'] != '') {
                                        $download_link = $report['download_view']['link_four']['file'];
                                    } elseif ($report['download_view']['link_four']['link'] != '') {
                                        $download_link = $report['download_view']['link_four']['link'];
                                    }
                                    ?>
                                    <a href="<?= $download_link_four; ?>">

                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5 12.5V10.1923C17.5 5.94396 14.1421 2.5 10 2.5C5.85787 2.5 2.5 5.94396 2.5 10.1923V12.5"
                                                stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M14.168 13.3337C14.168 12.4132 14.9142 11.667 15.8346 11.667H17.5013V17.5003H15.8346C14.9142 17.5003 14.168 16.7541 14.168 15.8337V13.3337Z"
                                                stroke="#2E313F" stroke-width="1.5" stroke-linejoin="round" />
                                            <path
                                                d="M17.5 13.333H18.3333C18.7936 13.333 19.1667 13.7061 19.1667 14.1663V14.9997C19.1667 15.4599 18.7936 15.833 18.3333 15.833H17.5V13.333Z"
                                                fill="#2E313F" />
                                            <path
                                                d="M2.4987 13.333H1.66536C1.20513 13.333 0.832031 13.7061 0.832031 14.1663V14.9997C0.832031 15.4599 1.20513 15.833 1.66536 15.833H2.4987V13.333Z"
                                                fill="#2E313F" />
                                            <path
                                                d="M2.5 11.667H4.16667C5.08712 11.667 5.83333 12.4132 5.83333 13.3337V15.8337C5.83333 16.7541 5.08712 17.5003 4.16667 17.5003H2.5V11.667Z"
                                                stroke="#2E313F" stroke-width="1.5" stroke-linejoin="round" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="downshmore downshmore1">
                    <a href="javascript:void(0);">
                        Show more
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.027 4.16699L10.0117 15.8337" stroke="#2E313F" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4.16797 10H15.8346" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <?php $presentations = get_field('presentations', $pid); ?>
        <div class="downloadpresent">
            <?php if ($presentations['section_title'] != ""): ?>
                <h3><?= $presentations['section_title']; ?></h3>
            <?php endif; ?>
            <div class="downloadretable">
                <div class="dowtableth">
                    <div class="dtablecol dtablecol1">Date</div>
                    <div class="dtablecol dtablecol2">Quarter</div>
                    <div class="dtablecol dtablecol3">Description</div>
                    <div class="dtablecol dtablecol4">Download View</div>
                </div>
                <div class="dowtabletd">
                    <?php if ($presentations['presentations']): ?>
                        <?php foreach ($presentations['presentations'] as $presentation): ?>
                            <div class="dowtabtdin">
                                <div class="dtablecol dtablecol1"><?= $presentation['date']; ?></div>
                                <div class="dtablecol dtablecol2"><?= $presentation['quarter']; ?></div>
                                <div class="dtablecol dtablecol3"><?= $presentation['description']; ?></div>
                                <div class="dtablecol dtablecol4">
                                    <?php
                                    $download_link_one = '#';
                                    if ($presentation['download_view']['link_one']['file'] != '') {
                                        $download_link = $presentation['download_view']['link_one']['file'];
                                    } elseif ($presentation['download_view']['link_one']['link'] != '') {
                                        $download_link = $presentation['download_view']['link_one']['link'];
                                    }
                                    ?>
                                    <a href="<?= $download_link_one; ?>">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.33203 18.3337V1.66699H12.9154L16.6654 6.04199V18.3337H3.33203Z"
                                                stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M8.75 11.667H6.25V14.5837H8.75V11.667Z" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.83203 14.583H14.1654" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.25 9.58301H8.75V14.583H11.25V9.58301Z" stroke="#2E313F"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.75 7.5H11.25V14.5833H13.75V7.5Z" stroke="#2E313F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="downshmore downshmore2">
                    <a href="javascript:void(0);">
                        Show more
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.027 4.16699L10.0117 15.8337" stroke="#2E313F" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4.16797 10H15.8346" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
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