<?php snippet('header') ?>

<div class="container">

  <header class="header">
    <a href="/"><?= $site->title()->html() ?></a>
    <?php snippet('nav') ?>
  </header>

  <main class="main" role="main">

    <?php $cv = $site->page('about') ?>

    <article class="text" id="cv">
      <header>
        <div id="photo-name-description">
          <figure id="photo">
          <?php if ($photo = $cv->photo()->toFile()): ?>
            <img src="<?= $photo->url() ?>" alt="Photo">
          <?php endif  ?>
          </figure>
          <div id="name-description">
            <h1 id="name"><?= $site->title()->html() ?></h1>
            <h2 id="description"><?= $cv->description() ?></h2>
          </div>
        </div>

        <div id="address-contact">
          <div id="address"><?= kti($cv->address()) ?></div>
          <div id="contact">
            <span id="birthdate">Né en <time datetime="<?= $cv->birthdate()->toDate('Y') ?>"><?= $cv->birthdate()->toDate('Y') ?></time></span> <br>
            <a class="underline" id="phone" href="tel:<?= str_replace(' ', '', $cv->phone()) ?>"><?= $cv->phone() ?></a> <br>
            <a class="underline" id="email" href="mailto:<?= $cv->email() ?>"><?= $cv->email() ?></a> <br>
          </div>
        </div>
      </header>
      
      <div id="sections">
        <section id="experiences_professionelles">
          <h3>Expériences professionnelles</h3>
          <ul>
            <?php foreach ($cv->experiences_professionelles()->toStructure() as $experience_professionelle): ?>
              <?php if ($experience_professionelle->visible()->isTrue()): ?>
              <li>
                <span class="section__date"><time datetime="<?= $experience_professionelle->date_start()->toDate('Y') ?>"><?= $experience_professionelle->date_start()->toDate('Y') ?></time><?php if ($experience_professionelle->date_end()->isNotEmpty()): ?>&#8239;–&#8239;<time datetime="<?= $experience_professionelle->date_end()->toDate('Y') ?>"><?= $experience_professionelle->date_end()->toDate('Y') ?></time><?php endif ?></span>
                <span class="section__description"><?= kti($experience_professionelle->description()) ?></span>
              </li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </section>

        <section id="formation">
          <h3>Formation</h3>
          <ul>
            <?php foreach ($cv->formation_diplomes()->toStructure() as $formation_diplome): ?>
              <?php if ($formation_diplome->visible()->isTrue()): ?>
              <li>
                <span class="section__date"><time datetime="<?= $formation_diplome->date_start()->toDate('Y') ?>"><?= $formation_diplome->date_start()->toDate('Y') ?></time><?php if ($formation_diplome->date_end()->isNotEmpty()): ?>&#8239;–&#8239;<time datetime="<?= $formation_diplome->date_end()->toDate('Y') ?>"><?= $formation_diplome->date_end()->toDate('Y') ?></time><?php endif ?></span>
                <span class="section__description"><?= kti($formation_diplome->description()) ?></span>
              </li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </section>

        <section id="realisations_video">
          <h3>Réalisations vidéo</h3>
          <ul>
            <?php foreach ($cv->realisations_video()->toStructure() as $realisation_video): ?>
              <?php if ($realisation_video->visible()->isTrue()): ?>
              <li>
                <span class="section__date"><time datetime="<?= $realisation_video->date()->toDate('Y') ?>"><?= $realisation_video->date()->toDate('Y') ?></time></span>
                <span class="section__description"><?= kti($realisation_video->description()) ?></span>
              </li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </section>

        <section id="competences">
          <h3>Compétences</h3>
          <p><?= kti($cv->competences()) ?></p>
        </section>
      </div>

    </article>

    <aside>
      <button id="print" class="hide-on-print" onclick="window.print()">
        <svg class="icon icon-print" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
          <path fill="currentColor" d="M14 4H2C.9 4 0 4.9 0 6v6h2.5v3h11v-3H16V6c0-1.1-.9-2-2-2zm-2 9.5H4V8h8v5.5zm2-6.7c-.4 0-.8-.3-.8-.8s.3-.8.8-.8.8.3.8.8-.4.8-.8.8zM13 1H3v2h10V1z"/>
        </svg>
        Imprimer</button>
    </aside>

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
