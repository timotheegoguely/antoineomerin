<?php snippet('header') ?>

<div class="container">
	
	<header class="header js-hide-when-inactive">
	  <h1><a href="/"><?= $site->title()->html() ?></a></h1>
	  <?php snippet('nav') ?>
	</header>

  <main class="main" role="main" id="photo">
    <div class="slideshow home hidden">
        <?php $count = $page->images()->count(); ?>
        <?php foreach($page->images() as $image): ?>
        <?php $index = $image->indexOf() + 1; ?>

        <div class="slideshow-cell">
          <figure>
            <img data-flickity-lazyload="<?= $image->url() ?>" width="<?= $image->width() ?>" height="<?= $image->height() ?>" alt="<?= $image->caption() ?>">
            <figcaption class="js-hide-when-inactive"><?= $page->title() ?><?php if ($image->caption()->isNotEmpty()) { echo ", ".$image->caption(); } ?>, <?= '<time datetime="'.$page->date().'">'.$page->date()->toDate('Y').'</time>' ?><?php if ($count > 1) { echo ", ".$index."/".$count; } ?></figcaption>
          </figure>
        </div>
        <?php endforeach ?>
    </div>
  </main>
</div>

<?php snippet('footer') ?>
