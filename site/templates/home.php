<?php snippet('header') ?>

<div class="container">

  <main class="main" role="main" id="home">

    <header class="header">
      <h1><a href="/"><?= $site->title()->html() ?></a></h1>
      <?php snippet('nav') ?>
    </header>

    <?php snippet('slideshow') ?>
    
  </main>
</div>

<?php snippet('footer') ?>
