<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="generator" content="Kirby (<?= Kirby::version() ?>)">
  <title><?= $page->title()->html() ?> · <?= $site->title()->html() ?></title>
  <meta name="description" content="photographe vidéaste">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://antoineomerin.fr/">
  <meta property="og:title" content="<?= $page->title()->html() ?> · <?= $site->title()->html() ?>">
  <meta property="og:description" content="photographe vidéaste">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://antoineomerin.fr/">
  <meta property="twitter:title" content="<?= $page->title()->html() ?> · <?= $site->title()->html() ?>">
  <meta property="twitter:description" content="photographe vidéaste">

  <script type="text/javascript">
    // https://css-tricks.com/the-trick-to-viewport-units-on-mobile/
    var vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh+'px');
  </script>
  
  <link rel="preload" href="assets/fonts/ISOv0.7-Light.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="manifest" href="/manifest.webmanifest">
  <meta name="theme-color" content="#F2F2F2">

  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <?= css([
    'assets/css/index.min.css?'.filemtime('assets/css/index.min.css'),
    '@auto'
  ]) ?>  

  <script type="application/ld+json">
  {
    "@context": "http://schema.org/",
    "@type": "WebSite",
    "url": "https://antoineomerin.fr",
    "name": "Antoine Omerin",
    "description": "photographe vidéaste",
    "creator" : {
      "@type": "Person",
      "name": "Antoine Omerin"
    },
    "sameAs": "https://www.instagram.com/antoineomerin/"
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
