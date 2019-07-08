<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>
<nav class="nav" role="navigation">
  <ul>
    <?php foreach($items as $item): ?>
      <li class="nav__item"><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
    <?php endforeach ?>
    <li class="nav__item" title="Dark / Light">
      <span id="theme-switcher" onclick="switchTheme()">
        <svg class="icon icon-contrast" xmlns="http://www.w3.org/2000/svg" fill="none" width="16" height="16" viewBox="0 0 16 16">
          <circle cx="8" cy="8" r="7.25" stroke="currentColor" stroke-width="1.5"/>
          <path fill="currentColor" d="M8 16A8 8 0 0 0 8 0v16z"/>
        </svg>
      </span>
    </li>
    <li class="nav__item" id="instagram" title="Instagram">
      <a href="<?= $site->find('about')->instagram() ?>" target="_blank">
        <svg class="icon icon-instagram" xmlns="http://www.w3.org/2000/svg" fill="none" width="16" height="16" viewBox="0 0 16 16">
          <rect x="0.75" y="0.75" width="14.5" height="14.5" rx="4" stroke="currentColor" stroke-width="1.5"/>
          <circle cx="8" cy="8" r="3.25" stroke="currentColor" stroke-width="1.5"/>
          <ellipse cx="12" cy="4" rx="1" ry="1" fill="currentColor"/>
        </svg>
      </a>
    </li>
  </ul>
</nav>
<?php endif ?>