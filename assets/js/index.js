// theme switcher
function switchTheme() {
  var body = document.querySelector('body');
  if (body.classList.contains('dark-theme')) {
    sessionStorage.setItem("theme", "light");
  } else {
    sessionStorage.setItem("theme", "dark");
  }
  body.classList.toggle('dark-theme');
}


if (document.querySelector('.slideshow')) {
  var slideshow = new Flickity( '.slideshow', {
    // options
    cellAlign: 'center',
    wrapAround: true,
    lazyLoad: 2,
    pageDots: false
  });
  
  var slideshowPagination = document.querySelector('.slideshow-pagination'),
      flkty = Flickity.data('.slideshow');

  function updatePagination() {
    var cellNumber = flkty.selectedIndex + 1;
    slideshowPagination.innerHTML = cellNumber + '—' + flkty.slides.length;
  }
  if (slideshowPagination) {
    updatePagination();
  }
  
  flkty.on( 'ready', document.querySelector('.slideshow').classList.remove('hidden') );
  flkty.on( 'change', updatePagination );
};



// arrows
// document.onkeydown = checkKey;

// function checkKey(e) {
  
//   e = e || window.event;

//   if (e.keyCode == '38') {
//     // up arrow
//   }
//   else if (e.keyCode == '40') {
//     // down arrow
//   }
//   else if (e.keyCode == '37') {
//     // left arrow
//     slideshow.previous();
//   }
//   else if (e.keyCode == '39') {
//     // right arrow
//     slideshow.next();
//   }
// }