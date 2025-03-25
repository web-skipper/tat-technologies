<?php get_header(); ?>

   <div class="content">
   
		<?php if (have_posts()) : ?>

			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			 
			<?php /* If this is a category archive */ if (is_category()) { ?>				
			<h2 class="title">Archive for the '<?php echo single_cat_title(); ?>' Category</h2>
			
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h2 class="title">Archive for <?php the_time('F jS, Y'); ?></h2>
			
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h2 class="title">Archive for <?php the_time('F, Y'); ?></h2>
	
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h2 class="title">Archive for <?php the_time('Y'); ?></h2>
			
			<?php /* If this is a search */ } elseif (is_search()) { ?>
			<h2 class="title">Search Results</h2>
			
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h2 class="title">Author Archive</h2>
	
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h2 class="title">Blog Archive</h2>

		<?php } ?>
<div class="recentposts">
		<?php while (have_posts()) : the_post(); ?>
		<div class="repost" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<h3><?php the_time('F jS, Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></h3>

		</div>
	
		<?php endwhile; ?>

			<div class="navigation">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
		
		        <div class="alignleft"><?php next_posts_link('&larr; Previous Entries') ?></div>
		        <div class="alignright"><?php previous_posts_link('Next Entries &rarr;') ?></div>
		        <?php } ?>
			</div>
</div>
	
	<?php else : ?>
	
	<div class="post">
		<h2>Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
	
	<?php endif; ?>
		
	</div>


<?php include(TEMPLATEPATH."/left.php");?>
<?php include(TEMPLATEPATH."/right.php");?>

<?php get_footer(); ?>