<?php snippet('header') ?>

    <main class="main" role="main"> 
        <header class="wrap">
            <h1><?= $page->title()->html() ?></h1>
            <hr />
        </header>       
        <?php echo $page->text()->kirbytext() ?>

        <ul class="calendar">

            <?php foreach($page->children()->visible() as $week): ?>
            <li class="calendar-row">
                <div class="title">
                    <span class="week"><?php echo $week->title()->html() ?></span><span class="days"> ... <?php echo $week->dates()->html() ?></span>
                    <div class="projects-start-end">
                        <?php if (!$week->project_end()->empty()): ?>
                            &#60;/<?php echo $week->project_end()->html() ?>&#62;
                        <?php endif ?>
                        <?php if (!$week->project_start()->empty()): ?>
                            &#60;<?php echo $week->project_start()->html() ?>&#62;
                        <?php endif ?>
                        <?php if (!$week->week_highlight()->empty()): ?>
                            <?php echo $week->week_highlight()->html() ?>
                        <?php endif ?>
                    </div>
                    <?php if($week->current() == '1'): ?>
                    <div class="current-week">
                        🚲
                    </div>
                    <?php endif ?>
                </div>
                <div class="body">
                    <?php echo $week->text()->kirbytext() ?>
                </div>
            </li>
            <?php endforeach ?>
        </ul>

    </main>

<?php snippet('footer') ?>