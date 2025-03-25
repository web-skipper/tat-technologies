<?php get_header();
$pid = $post->ID; ?>
<?php $banner = get_field('banner', $pid); ?>

<div class="inner_main default_main" id="skypcon">
    <div class="defaultban">
        <div class="breadcrumbs"><a href="<?php bloginfo('url'); ?>">Home</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
        <div class="defbanimg">
            <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
                <img alt="<?php echo $banner['image']['alt']; ?>" src="<?php echo $banner['image']['url']; ?>" />
            <?php endif; ?>
        </div>
        <div class="defbanlayer">
            <?php if (isset($banner['header_curved_lines_image']) && !empty($banner['header_curved_lines_image']['ID'])): ?>
                <img alt="<?php echo $banner['header_curved_lines_image']['alt']; ?>"
                    src="<?php echo $banner['header_curved_lines_image']['url']; ?>" />
            <?php endif; ?>
        </div>
        <div class="defbanbottxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>

            <?php if ($banner['title_left_two'] != ""): ?>
                <h2><?= $banner['title_left_two']; ?></h2>
            <?php endif; ?>
        </div>
        <div class="defbantxtr">
            <?php if ($banner['title_right_one'] != ""): ?>
                <p><?= $banner['title_right_one']; ?></p>
            <?php endif; ?>
            <?php if ($banner['button_right_url'] != ""): ?>
                <a href="<?= $banner['button_right_url']; ?>"><?= $banner['button_right_text']; ?>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 10.0033H5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M10 5L15 10L10 15" stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <?php $title_and_text = get_field('title_and_text', $pid); ?>

    <div class="defmid">
        <?php if ($title_and_text['section_title'] != ""): ?>
            <div class="defmidsubtitle"><?= $title_and_text['section_title']; ?></div>
        <?php endif; ?>

        <div class="defmidin">
            <?php if ($title_and_text['left_title'] != ""): ?>
                <div class="defmidleft">
                    <p><?= $title_and_text['left_title']; ?></p>
                </div>
            <?php endif; ?>
            <div class="defmidright">
                <?php if ($title_and_text['right_text']): ?>
                    <?php $loopIndex = 1; ?>
                    <?php foreach ($title_and_text['right_text'] as $text): ?>
                        <div class="<?php echo $loopIndex == 1 ? 'defmidrtop' : 'defmidrbot'; ?>">
                            <?= $text['right_text']; ?>
                        </div>
                        <div class="defmidrbut<?php echo $loopIndex > 1 ? $loopIndex : ''; ?>">
                            <a href="<?php echo $text['button_link']; ?>"><?php echo $text['button_text']; ?>
                                <svg width=" 20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 10.0032H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 5L15 10L10 15" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <?php $loopIndex++; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>