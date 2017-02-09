<?php snippet('header') ?>
  <main class="main">
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <hr />
    </header> 
    <ul class="projects">

    <?php foreach($page->children()->visible()->sortBy('title') as $text): ?>
      <li class="project-row">
        <a href="<?php echo $text->url() ?>" class="project">
            <?php echo $text->title()->html() ?>
        </a>
      </li>
    <?php endforeach ?>
      <li class="project-row">
        Information Flow
      </li>
      <li class="project-row">
        Public and Private
      </li>
    </ul>
  </main>

<?php snippet('footer') ?>