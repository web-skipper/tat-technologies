<?php /*Template Name: Engine Thermal Systems Page */
get_header();
$pid = $post->ID; ?>

<?php $banner = get_field('banner', $pid); ?>
<div class="inner_main engtherm_main" id="skypcon">
    <div class="inner_banner">
        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a><span class="breadarow"></span>
            <a href="#">Innovative Systems</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>

        <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
            <div class="inbanimg"><img alt="<?php echo $banner['image']['url']; ?>"
                    src="<?php echo $banner['image']['url']; ?>" /></div>
        <?php endif; ?>

        <div class="entherbantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <h1><?= $banner['title_left_one']; ?></h1>
            <?php endif; ?>

            <?php if ($banner['title_left_two'] != ""): ?>
                <h2><?= $banner['title_left_two']; ?></h2>
            <?php endif; ?>

        </div>
    </div>

    <?php $overview = get_field('overview', $pid); ?>
    <div class="engthermone">
        <?php if ($overview['section_title'] != ""): ?>
            <div class="engthretitle"><?= $overview['section_title']; ?></div>
        <?php endif; ?>

        <?php if ($overview['left_title'] != ""): ?>
            <div class="engtheroneleft"><?= $overview['left_title']; ?></div>
        <?php endif; ?>

        <?php if ($overview['right_text'] != ""): ?>
            <div class="entheroneright">
                <?= $overview['right_text']; ?>
            </div>
        <?php endif; ?>
        <div class="clr"></div>
    </div>

    <?php $hx_cards = get_field('hx_cards', $pid); ?>
    <div class="engthermtwo">
        <?php if ($hx_cards['section_title'] != ""): ?>
            <div class="engthertwotitle"><?= $hx_cards['section_title']; ?></div>
        <?php endif; ?>

        <div class="engthermtwoin">
            <?php if ($hx_cards['hx_cards']):
                $loopIndex = 0; ?>
                <?php foreach ($hx_cards['hx_cards'] as $cards): ?>
                    <div class="<?php echo $loopIndex % 2 == 0 ? 'engthermtwoleft' : 'engthermtworight'; ?>">

                        <div class="engthermtwoimg">
                            <?php if (isset($cards['image']) && !empty($cards['image']['ID'])): ?>
                                <img alt="<?php echo $cards['image']['url']; ?>" src="<?php echo $cards['image']['url']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="engthermtwotxt">
                            <?php if ($cards['title'] != ""): ?>
                                <h3><?= $cards['title']; ?></h3>
                            <?php endif; ?>
                            <?php if ($cards['text'] != ""): ?>
                                <p><?= $cards['text']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php $loopIndex++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="clr"></div>
    </div>

    <?php $applications = get_field('applications', $pid); ?>
    <div class="engthermthree">
        <?php if ($applications['title'] != ""): ?>
            <div class="engtherthreleft"><?= $applications['title']; ?></div>
        <?php endif; ?>

        <div class="engtherthreright">
            <?php if ($applications['applications']): ?>
                <?php foreach ($applications['applications'] as $appl): ?>
                    <div class="engtherthrediv">
                        <div class="engtherdivleft">
                            <div class="engtherdivimg">
                                <?php if (isset($appl['image']) && !empty($appl['image']['ID'])): ?>
                                    <img alt="<?= $appl['image']['alt']; ?>" src="<?= $appl['image']['url']; ?>" />
                                <?php endif; ?>
                            </div>
                            <?php if ($appl['title'] != ""): ?>
                                <div class="engtherdivtxt">
                                    <?php echo $appl['title']; ?>
                                </div>
                            <?php endif; ?>
                            <div class="clr"></div>
                        </div>
                        <?php if ($appl['text'] != ""): ?>
                            <div class="engtherdivright">
                                <?php echo $appl['text']; ?>
                            </div>
                        <?php endif; ?>
                        <div class="clr"></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="clr"></div>
    </div>
</div>

<?php get_footer(); ?>


<style>
    .engtherdivimg {
        min-height: 153px;
        background-color: #C4C4C4;
        border-radius: 35px;
    }
</style>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

    });
    jQuery(window).on('load', function () {

    });
    jQuery(window).resize(function () {

    });

</script>