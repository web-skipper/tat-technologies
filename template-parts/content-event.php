<?php $postloopindex = $args['postloopindex']; ?>

<div class="newstwobrdiv <?php echo $postloopindex > 3 ? 'hidden' : ''; ?>"
    data-terms="<?= implode(',', $args['post_terms']); ?>" data-tags="<?= implode(',', $args['post_tags']); ?>">
    <a href="<?php echo get_permalink(); ?>">
        <div class="eventnewleft">
            <div class="eventnewlftbox">
                <?php
                $event_date = get_field('event_dates');
                $timestamp = strtotime($event_date);
                ?>
                <?php if ($timestamp): ?>
                    <div class="evboxtp">
                        <?php echo strtoupper(date('M y', $timestamp)); ?>
                        <span><?php echo date('j', $timestamp); ?></span>
                    </div>
                <?php endif; ?>

                <?php if ($timestamp && $timestamp > time()): ?>
                    <p>Upcoming</p>
                <?php endif; ?>
            </div>
            <h3><?php the_title(); ?></h3>
            <div class="clr"></div>
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