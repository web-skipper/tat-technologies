<?php /*Template Name: OEM - Capabilities Page */
get_header();
$pid = $post->ID; ?>

<div class="inner_main mro_main_certification" id="skypcon">

    <?php $banner = get_field('banner', $pid); ?>
    <div class="mroban">

        <div class="breadcrumbs">
            <a href="<?php bloginfo('url'); ?>">Home</a><span class="breadarow"></span>
            <a href="#">Commercial</a>
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>

        <div class="mrobanimg" style="background:#AEAEAE;min-height:550px;">
            <?php if (isset($banner['image']) && !empty($banner['image']['ID'])): ?>
                <img alt="<?php echo $banner['image']['alt']; ?>" src="<?php echo $banner['image']['url']; ?>" />
            <?php endif; ?>

            <?php if (isset($banner['header_curved_lines_image']) && !empty($banner['header_curved_lines_image']['ID'])): ?>
                <div class="overlwy-detail">
                    <img alt="<?php echo $banner['header_curved_lines_image']['alt']; ?>"
                        src="<?php echo $banner['header_curved_lines_image']['url']; ?>" />
                </div>
            <?php endif; ?>

        </div>
        <div class="mrobantxt">
            <?php if ($banner['title_left_one'] != ""): ?>
                <div class="capbansubtitle"><?= $banner['title_left_one']; ?></div>
            <?php endif; ?>

            <?php if ($banner['title_left_two'] != ""): ?>
                <h1><?= $banner['title_left_two']; ?></h1>
            <?php endif; ?>
        </div>
    </div>

    <?php $our_capabilities = get_field('our_capabilities', $pid); ?>
    <div class="mro_certificate">
        <?php if ($our_capabilities['section_title'] != ""): ?>
            <div class="seconetitle_cer"><?= $our_capabilities['section_title']; ?></div>
        <?php endif; ?>
        <?php if ($our_capabilities['left_title'] != ""): ?>
            <div class="mroneleft_cer"><?= $our_capabilities['left_title']; ?></div>
        <?php endif; ?>

        <div class="mroneright_cer">
            <?php if ($our_capabilities['right_text'] != ""): ?>
                <?= $our_capabilities['right_text']; ?>
            <?php endif; ?>
        </div>

        <div class="clr"></div>
    </div>

    <?php $capabilities_images = get_field('capabilities_images', $pid); ?>
    <?php if ($capabilities_images['capabilities_images']): ?>
        <div class="capplane">
            <div class="capplanein">
                <ul>
                    <?php foreach ($capabilities_images['capabilities_images'] as $capability): ?>
                        <li>
                            <div class="caplnediv">
                                <div class="caplneimg">
                                    <div class="caplneimgin">
                                        <?php if (isset($capability['image']) && !empty($capability['image']['ID'])): ?>
                                            <img class="one" alt="<?php echo $capability['image']['alt']; ?>"
                                                src="<?php echo $capability['image']['url']; ?>" />
                                        <?php endif; ?>

                                        <?php if (isset($capability['hover_image']) && !empty($capability['hover_image']['ID'])): ?>
                                            <img class="two" alt="<?php echo $capability['hover_image']['alt']; ?>"
                                                src="<?php echo $capability['hover_image']['url']; ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if ($capability['title'] != ""): ?>
                                    <span><?php echo $capability['title']; ?></span>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".certtabs").hide();
        $(".cet_tabmenu li:first a").addClass('active'); // Activate first tab
        $(".certtabs:first").fadeIn(100); // Show first tab content		
        $(".cet_tabmenu a").click(function (e) {
            e.preventDefault();
            $('.certtabs').hide();
            $('.cet_tabmenu a').removeClass('active');
            $(this.hash).fadeIn(100);
            $(this).addClass('active');
        });
    });
    jQuery(window).on('load', function () {


    });
    jQuery(window).resize(function () {

    });

</script>