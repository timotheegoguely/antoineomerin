<?php snippet('header') ?>

<?php $videoFeatured = page('video')->children()->listed()->filterBy('featured', true)->first(); ?>

<div class="container">
  
  <header class="header">
    <h1><a href="/"><?= $site->title()->html() ?></a></h1>
    <?php snippet('nav') ?>
  </header>
  
  <main class="main" role="main" id="video">

    <section class="video video-featured">
      <div class="slideshow-container">
        <div class="slideshow hidden">
          <?php $screenshots = $videoFeatured->images() ?>
          <?php foreach($screenshots as $screenshot): ?>
          <div class="slideshow-cell">
            <figure class="aspect-ratio-1920-1200">
              <img data-flickity-lazyload="<?= $screenshot->url() ?>" alt="<?= $screenshot->alt() ?>">
            </figure>
          </div>
          <?php endforeach ?>
        </div>
        <div class="slideshow-pagination"></div>
      </div>
      <h2 class="video-featured-title"><?= $videoFeatured->title() ?> <span class="video-featured-date"><?= $videoFeatured->date() ?></span></h2>
      <?= $videoFeatured->synopsis()->kt() ?>
    </section>
    
    <aside>
      <?php foreach($page->children()->listed()->not($videoFeatured) as $video): ?>
      <article class="video">
        <a href="<?= $video->link() ?>" target="_blank">
          <figure>
            <div class="aspect-ratio-1920-1200">
              <?php $cover = $video->images()->first(); ?>
              <img src="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>">
            </div>
            <figcaption>
              <h2><?= $video->title() ?>, <?= $video->date() ?></h2>
            </figcaption>
          </figure>
        </a>
      </article>
      <?php endforeach ?>
    </aside>
    
  </main>
</div>

<?php snippet('footer') ?>
