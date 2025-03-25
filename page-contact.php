<?php /*Template Name: Contact Page */
get_header();
$pid = $post->ID;

$header_bg_color = get_field('header_bg_color', $pid);
$header_curved_lines_image = get_field('header_curved_lines_image', $pid);
$header_top_text = get_field('header_top_text', $pid);
$header_bottom_text = get_field('header_bottom_text', $pid);
$top_left_sub_text = get_field('top_left_sub_text', $pid);
$top_left_heading = get_field('top_left_heading', $pid);
$left_button_text = get_field('left_button_text', $pid);
$left_button_link = get_field('left_button_link', $pid);
$select_form = get_field('select_form', $pid);
?>

<?php $banner = get_field('banner', $pid); ?>

<div class="inner_main contact_main" id="skypcon">
    <div class="contactban" <?php if ($header_bg_color != "") { ?> style="background:<?php echo $header_bg_color; ?>"
        <?php } ?>>
        <div class="breadcrumbs"><a href="<?php bloginfo('url'); ?>">Home</a><?php if (function_exists('bcn_display')) {
              bcn_display();
          } ?></div>

        <div class="inbanlayer">
            <?php if ($header_curved_lines_image != "") { ?>
                <img alt="<?php echo $header_curved_lines_image['alt']; ?>"
                    src="<?php echo $header_curved_lines_image['url']; ?>" />
            <?php } else { ?>
                <img alt="layer" src="<?php bloginfo('template_directory'); ?>/images/conbanlayer.svg" />
            <?php } ?>
        </div>
        <div class="conbantxt">
            <h1><?php if ($header_top_text != "") {
                echo $header_top_text;
            } else {
                echo the_title();
            } ?></h1>
            <?php if ($header_bottom_text != "") { ?>
                <h2><?php echo $header_bottom_text; ?></h2><?php } ?>
        </div>
    </div>
    <div class="contactmid">
        <div class="conmidsubtitle"><?php echo $top_left_sub_text; ?></div>
        <div class="conmidin">
            <div class="conleft">
                <div class="conlefttext"><?php echo $top_left_heading; ?></div>
                <div class="conleftbutton">
                    <?php if ($left_button_text) : ?>
                        <a href="<?php echo $left_button_link; ?>"><?php echo $left_button_text; ?> <svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M15 10.0034H5" stroke="#2C2C54" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10 5L15 10L10 15" stroke="#2C2C54" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="conright">
                <?php echo $select_form; ?>
                <?php /*?><div class="confrmrgt">
<div class="cfield"><input name="" type="text" placeholder="Name*" /></div>
<div class="cfield"><input name="" type="text" placeholder="Company*" /></div>
<div class="cfield"><select name=""><option>Country*</option><option>India</option><option>Israel</option><option>USA</option><option>Japan</option><option>UK</option><option>China</option></select></div>
<div class="cfield"><input name="" type="text" placeholder="Email*" /></div>
<div class="cfield"><input name="" type="text" placeholder="Phone Number" /></div>
</div>
<div class="confrmlft">
<div class="confcheck">
<div class="confchklabel">Select who you would like to contact:</div>
<div class="confchkin">
<div class="confchkdiv">
<input id="chk1" name="chk1" type="checkbox" value="" />
<label for="chk1">Sales</label>
</div>
<div class="confchkdiv">
<input id="chk2" name="chk2" type="checkbox" value="" />
<label for="chk2">New Product Development</label>
</div>
<div class="confchkdiv">
<input id="chk3" name="chk3" type="checkbox" value="" />
<label for="chk3">Investor Relations</label>
</div>
<div class="confchkdiv">
<input id="chk4" name="chk4" type="checkbox" value="" />
<label for="chk4">Recruiting</label>
</div>
<div class="confchkdiv">
<input id="chk5" name="chk4" type="checkbox" value="" />
<label for="chk5">Tulsa Site General Manager</label>
</div>
<div class="confchkdiv">
<input id="chk6" name="chk4" type="checkbox" value="" />
<label for="chk6">Greensboro Site General Manager</label>
</div>
<div class="confchkdiv">
<input id="chk7" name="chk4" type="checkbox" value="" />
<label for="chk7">Isreal Site General Manager</label>
</div>
<div class="confchkdiv">
<input id="chk8" name="chk8" type="checkbox" value="" />
<label for="chk8">General Inquiries</label>
</div>
</div>
</div>
<div class="confmsg">
<textarea name="" cols="" rows="" placeholder="Comment / Question*"></textarea>
</div>
</div>
<div class="clr"></div>
<div class="confrmsub"><input name="" type="submit" value="Send" /></div><?php */ ?>
            </div>
            <div class="clr"></div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
<style>
    .cfield {
        position: relative;
        margin-bottom: 20px;
    }

    .cfield label.custom-name {
        position: absolute;
        top: 35%;
        left: 10px;
        transform: translateY(-50%);
        font-size: 18px;
        transition: all 0.3s ease;
        pointer-events: none;
        padding: 0 5px;
        z-index: 1;
    }

    .custom-name.active {
        top: 15% !important;
        font-size: 14px !important;
        color: #333 !important;
        padding: 0 5px;
        z-index: 2;
    }

    .cfield input.wpcf7-form-control {
        padding: 12px 10px;
        font-size: 16px;
        width: 100%;
        height: 60px;
        border: 1px solid #ccc;
        border-radius: 4px;
        outline: none;
    }
</style>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        const inputs = document.querySelectorAll('.wpcf7-form-control');

        inputs.forEach(input => {
            const parentParagraph = input.closest('p');
            if (parentParagraph) {
                const label = parentParagraph.querySelector('label.custom-name');

                if (label) {
                    input.addEventListener('input', function () {
                        if (input.value.trim() !== '') {
                            label.classList.add('active');
                        } else {
                            label.classList.remove('active');
                        }
                    });

                    if (input.value.trim() !== '') {
                        label.classList.add('active');
                    }

                    input.addEventListener('focus', function () {
                        label.classList.add('active');
                    });

                    input.addEventListener('blur', function () {
                        if (input.value.trim() === '') {
                            label.classList.remove('active');
                        }
                    });
                }
            }
        });
    });
</script>