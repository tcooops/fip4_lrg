window.onscroll = function() {stickyNav()};

var icons = document.getElementByClass("floatingIcons");

var sticky = icons.offsetTop;

function stickyIcons() {
  if (window.pageYOffset >= sticky) {
    floatingIcons.classList.add("sticky")
  } else {
    floatingIcons.classList.remove("sticky");
  }
}