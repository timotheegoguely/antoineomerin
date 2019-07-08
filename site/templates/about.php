<?php snippet('header') ?>

<div class="container">

  <header class="header">
    <h1><a href="/"><?= $site->title()->html() ?></a></h1>
    <?php snippet('nav') ?>
  </header>
  

  <main class="main" role="main" id="about">

    <div class="text" id="bio">
      <?= $page->bio()->kt() ?>
      <ul id="bio-links">
        <li><!--<span style="margin-right: 5ch;">email</span> --><a class="underline" id="email" href="mailto:<?= $page->email() ?>"><?= $page->email() ?></a></li>
        <li><!--<span style="margin-right: 1ch;">instagram</span> --><a class="underline" href="https://www.instagram.com/<?= $page->instagram() ?>" target="_blank">@<?= $page->instagram() ?></a></li>
        <li><!--<span style="margin-right: 8ch;">cv</span> --><a id="cv" class="underline" href="<?= $page->find('cv')->url() ?>">cv</a></li>
      </ul>
    </div>

    <div class="text" id="credits">
      <small><?= $page->credits()->kt() ?></small>
    </div>

  </main>
</div>

<script type="text/javascript">
  // copy email to clipboard on click
  var emailLink = document.querySelector('a[href^="mailto:"]');  
  emailLink.addEventListener('click', function(event) {
    event = event.preventDefault(); 
    var range = document.createRange();  
    range.selectNode(emailLink);  
    window.getSelection().addRange(range);   
    try {  
      // Now that we've selected the anchor text, execute the copy command  
      var successful = document.execCommand('copy');  
      var msg = successful ? 'successful' : 'unsuccessful';  
      console.log('Copy email command was ' + msg);  
    } catch(err) {  
      console.log('Oops, unable to copy');  
    }  
    // Remove the selections - NOTE: Should use
    // removeRange(range) when it is supported  
    window.getSelection().removeAllRanges();
  });
</script>

<?php snippet('footer') ?>
