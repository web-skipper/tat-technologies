<?php $postloopindex = $args['postloopindex']; ?>

<?php
$event_date = get_field('event_dates');
$timestamp = strtotime($event_date);
?>
<div class="upcmevdiv <?= $timestamp && $timestamp > time() ? 'upcomingdiv' : ''; ?>"
    data-terms="<?= implode(',', $args['post_terms']); ?>" data-tags="<?= implode(',', $args['post_tags']); ?>">
    <div class="upcmdlft">
        <?php if ($timestamp): ?>
            <div class="upcmonth">
            <?php echo strtoupper(date('M y', $timestamp)); ?>

                <span><?php echo date('j', $timestamp); ?></span>
            </div>
            <?php if ($timestamp && $timestamp > time()): ?>
                <p>Upcoming</p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="upcmdright">
        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="clr"></div>
</div>