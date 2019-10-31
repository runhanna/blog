<nav class="archive archive-posts appear animation--delay--1">
    <h2 class="archive-title"><?= $site->archiveTitle()->html() ?></h2>
    <div class="archive-text"><?= $site->archiveText()->kt() ?></div>

    <?php

    // Year and Month Counter Variables
    $y = null;
    $m = null;

    foreach ($posts as $p) : ?>
        
        <?php

        // Grab year and month from the current post
        $postY = $p->published()->toDate('Y');
        $postM = $p->published()->toDate('n');

        ?>

        <?php if ($postY != $y || $postM != $m) : ?>
            
            <h3 class="archive-subtitle">
            <?php if ($postY != $y) : ?>
                <div class='archive-year'><?= $postY ?></div>
                <hr class="divider">
            <?php endif; ?>
                
            </h3>

        <?php endif; ?>
        
            <a class="archive-post-link <?php e($p->isActive() || $p == $post , 'archive-post-link-current') ?>" href="<?= $p->url() ?>">
                <p class="archive-post-name"><?= $p->title()->html() ?></p>
                <hr class="archive-post-spacer">
                <!-- Month -->
                <span class="archive-month"><?= strftime("%B" , $p->published()->toDate()) ?></span>
                <p class="archive-post-day"><?= $p->published()->toDate('jS') ?></p>
            </a>
        
        <?php

        // Update the month and year counter variables
        $y = $postY;
        $m = $postM;

        ?>       

    <?php endforeach ?>
</nav>