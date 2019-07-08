<?php snippet('header') ?>

<div class="container">
	
	<header class="header js-hide-when-inactive">
	  <h1><a href="/"><?= $site->title()->html() ?></a></h1>
	  <?php snippet('nav') ?>
	</header>

  <main class="main" role="main" id="photo">
    <?php snippet('slideshow', ['category' => 'public']) ?>
  </main>
</div>

<?php snippet('footer') ?>
