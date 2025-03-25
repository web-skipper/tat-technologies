<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div class="content">

<div class="post">
	<h2>Archives by Month:</h2>
		<ul><?php wp_get_archives('type=monthly'); ?></ul>

	<h2>Archives by Subject:</h2>
		<ul><?php wp_list_categories('title_li='); ?></ul>
	
</div><!-- end post -->

</div>

<?php include(TEMPLATEPATH."/left.php");?>
<?php include(TEMPLATEPATH."/right.php");?>

<?php get_footer(); ?>
