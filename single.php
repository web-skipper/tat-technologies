<?php get_header(); ?>

<div class="content">
			
  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>

			<h3>by <?php the_author() ?> | <?php the_time('F jS, Y') ?></h3>
	
			<div class="entry">
				<?php the_content('<p>Continue reading &raquo;</p>'); ?>	
			</div>
		</div>
		

		<?php comments_template(); ?>


	<?php endwhile; else: ?>
	
	<div class="post">
	<p>Sorry, no posts matched your criteria.</p>
	</div>
	
	<?php endif; ?>
	
</div>
	
	
<?php include(TEMPLATEPATH."/left.php");?>
<?php include(TEMPLATEPATH."/right.php");?>

<?php get_footer(); ?>
