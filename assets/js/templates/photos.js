var timeoutID,
    hideWhenInactive = document.querySelectorAll('.js-hide-when-inactive, .flickity-button');
 
function setup() {
  this.addEventListener("mousemove", resetTimer, false);
  this.addEventListener("mousedown", resetTimer, false);
  this.addEventListener("keypress", resetTimer, false);
  this.addEventListener("DOMMouseScroll", resetTimer, false);
  this.addEventListener("mousewheel", resetTimer, false);
  this.addEventListener("touchmove", resetTimer, false);
  this.addEventListener("MSPointerMove", resetTimer, false);
  startTimer();
}
setup();
 
function startTimer() {
  // wait 8 seconds before calling goInactive
  timeoutID = window.setTimeout(goInactive, 8000);
}
 
function resetTimer(e) {
  window.clearTimeout(timeoutID);
  goActive();
}
 
function goInactive() {
  for (var i = 0; i < hideWhenInactive.length; ++i) {
    hideWhenInactive[i].classList.add('fade');
  }
}
 
function goActive() {
  startTimer();
  for (var i = 0; i < hideWhenInactive.length; ++i) {
    hideWhenInactive[i].classList.remove('fade');
  }
}