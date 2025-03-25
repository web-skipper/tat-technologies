<div class="left">

<ul>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(1) ) : ?>

		<li><h2>Search</h2>
		<?php get_search_form(); ?></li>
		
		    
<?php wp_list_pages('title_li=<h2>Menu</h2>' ); ?>    
        
        <li><h2>Categories</h2>
<ul><?php wp_list_cats('sort_column=name'); ?></ul></li>
        

<?php endif; ?>

</ul>

</div>

