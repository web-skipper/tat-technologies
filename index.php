<?php get_header(); ?>

<div class="content">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
				
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<h3><?php the_time('F jS, Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> <?php edit_post_link('edit', '| ', ''); ?></h3>
				
			<div class="entry">
				<?php the_content('Read More'); ?>
			</div>
		
			<p class="postmetadata">Filed under: <?php the_category(', ') ?> <?php if (function_exists('the_tags')) { the_tags('<br/>Tags: ', ', ', ''); } ?></p>
			</div>
	
		<?php endwhile; ?>

			<div class="navigation">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
		
		        <div class="alignleft"><?php next_posts_link('&larr; Previous Entries') ?></div>
		        <div class="alignright"><?php previous_posts_link('Next Entries &rarr;') ?></div>
		        <?php } ?>
			</div>
		
		<?php else : ?>
		
		<div class="post">
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		</div>

	<?php endif; ?>
	
</div>

<?php include(TEMPLATEPATH."/left.php");?>
<?php include(TEMPLATEPATH."/right.php");?>


<?php get_footer(); ?>