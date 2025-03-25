<?php $postloopindex = $args['postloopindex']; ?>
<div class="newstwobrdiv <?php echo $postloopindex > 3 ? 'hidden' : ''; ?>"
    data-terms="<?= implode(',', $args['post_terms']); ?>" data-tags="<?= implode(',', $args['post_tags']); ?>">
    <a href="<?= the_permalink(); ?>">
        <div class="newstwobrdlft">
            <h3><?php the_title(); ?></h3>
            <p>
                <?php $categories = get_the_category(); ?>
                <?php if (!empty($categories)): ?>
                    <?php foreach ($categories as $index => $category): ?>
                        <?php echo esc_html($category->name); ?>
                        <?php if ($index < count($categories) - 1): ?>
                            <span></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if (get_the_date()): ?>
                    <span></span> <?php echo get_the_date('F j, Y'); ?>
                <?php endif; ?>
            </p>
        </div>
        <div class="newspreright">
            <span>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.91797 5.5L12.918 10.5L7.91797 15.5" stroke="#2E313F" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
        </div>
        <div class="clr"></div>
    </a>
</div>