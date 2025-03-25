<?php get_header(); ?>
<?php
$title_one = get_field('404_title_one', 'option');
$title_two = get_field('404_title_two', 'option');
$text = get_field('404_text', 'option');
?>
<div class="inner_main error_main" id="skypcon">
	<div class="errorban">
		<div class="errorbanlayer"><img alt="layer"
				src="<?php bloginfo('template_directory'); ?>/images/errorbanlayer.png" /></div>
		<div class="errorbantxt">
			<?php if ($title_one): ?>
				<h1><?php echo $title_one; ?></h1>
			<?php endif; ?>
			<?php if ($title_two): ?>
				<h2><?php echo $title_two; ?></h2>
			<?php endif; ?>
		</div>
	</div>
	<div class="errormid">
		<div class="errormidtxt">
			<?php if ($text): ?>
				<p><?php echo $text; ?></p>
			<?php endif; ?>
			<a href="<?php bloginfo('url'); ?>">Home Page
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M15 10.0032H5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M10 5L15 10L10 15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</a>
		</div>
	</div>

</div>



<?php get_footer(); ?>