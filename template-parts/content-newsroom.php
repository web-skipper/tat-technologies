<?php $postloopindex = $args['postloopindex']; ?>

<div class="newstwobrdiv <?php echo $postloopindex > 3 ? 'hidden' : ''; ?>"
    data-terms="<?= implode(',', $args['post_terms']); ?>" data-tags="<?= implode(',', $args['post_tags']); ?>">
    <a href="<?php the_permalink(); ?>">
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
        <?php if (has_post_thumbnail()) { ?>
            <div class="newstwobrdrgt">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>
        <?php } ?>
        <div class="clr"></div>
    </a>
</div>