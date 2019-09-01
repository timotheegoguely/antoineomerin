<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="generator" content="Kirby (<?= Kirby::version() ?>)">

  <title><?= $page->title()->html() ?> · <?= $site->title()->html() ?></title>

  <script type="text/javascript">
    // https://css-tricks.com/the-trick-to-viewport-units-on-mobile/
    var vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh+'px');
  </script>
  
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <?= css([
    'assets/css/index.css?'.filemtime('assets/css/index.css'),
    '@auto'
  ]) ?>  

  <script type="application/ld+json">
  {
    "@context": "http://schema.org/",
    "@type": "Person",
    "name": "Antoine Omerin",
    "description": "photographe vidéaste"
    "url": "http://antoineomerin.fr",
  }
  </script>
</head>

<body>
<script type="text/javascript">
function setTheme(theme) {
  var body = document.querySelector('body');
  if ( theme === null || theme === "dark") {
    body.classList.add('dark-theme');
    sessionStorage.setItem("theme", "dark");
  } else if ( theme === "light" ) {
    body.classList.remove('dark-theme');
    sessionStorage.setItem("theme", "light");
  }
}
setTheme(sessionStorage.getItem("theme"));
</script>
