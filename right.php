<div class="right">
<ul>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(2) ) : ?>



<?php wp_list_bookmarks(); ?>

<?php endif; ?>

</ul>

</div>

