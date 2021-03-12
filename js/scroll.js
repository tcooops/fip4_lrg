window.onscroll = function() {stickyIcons()};
//Hien: changed stickyNav to stickyIcons

var icons = document.getElementByClass("floatingIcons");

var sticky = icons.offsetTop;

function stickyIcons() {
  if (window.pageYOffset >= sticky) {
    floatingIcons.classList.add("sticky")
  } else {
    floatingIcons.classList.remove("sticky");
  }
}