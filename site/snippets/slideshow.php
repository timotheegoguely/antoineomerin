<?php
if ($category === "pro") {
  $photos = page('photo')->children()->listed()->filterBy('category', 'pro');
}
elseif ($category === "public") {
  $photos = page('photo')->children()->listed()->filterBy('category', '*=', 'public');
}

if ($tag = param('tag')) {
  $photos = page('photo')->children()->listed()->filterBy('tag', $tag, ',');
}
?>

<div class="slideshow home hidden">
  <?php foreach($photos as $photo): ?>
    <?php $count = $photo->images()->count(); ?>

    <?php foreach($photo->images()->filterBy('visible', '✓') as $image): ?>
    <?php $index = $image->indexOf() + 1; ?>

    <div class="slideshow-cell">
      <figure>
        <img data-flickity-lazyload="<?= $image->url() ?>" width="<?= $image->width() ?>" height="<?= $image->height() ?>" alt="<?= $image->caption() ?>">
        <figcaption class="js-hide-when-inactive"><?= $photo->title() ?><?php if ($image->caption()->isNotEmpty()) { echo ", ".$image->caption(); } ?>, <?= '<time datetime="'.$photo->date().'">'.$photo->date()->toDate('Y').'</time>' ?><?php if ($count > 1) { echo ", ".$index."/".$count; } ?></figcaption>
      </figure>
    </div>
    <?php endforeach ?>

  <?php endforeach ?>
</div>

<div class="slideshow-pagination js-hide-when-inactive"></div>