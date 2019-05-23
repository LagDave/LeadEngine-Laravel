let flag = 0;
console.log(flag);

// STATIC NAVIGATION BAR
let counter = 0;
$(".hamburger").click(() => {
  if (counter == 0) {
    $(".nav-items-mobile").css("animation", "fadeDown .2s both");
    counter++;
  } else {
    $(".nav-items-mobile").css("animation", "fadeDownDown .2s both");
    counter--;
  }
});

// Scroll Navigation Scripts
$(document).ready(function () {
  $(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 500) {
      showScrollNav();
    } else {
      hideScrollNav();
    }
  });
});

// Show Scroll Nav Script
// Invoked when scroll is sensed
function showScrollNav() {
  $(".scroll-nav").css({
    transform: "translateY(0px)",
    opacity: "1",
    padding: "10px 0"
  });
}

// Hide Scroll Nav Script
// Invoked when it nav is near to the jumbotron.
function hideScrollNav() {
  $(".scroll-nav").css({
    transform: "translateY(-100px)",
    opacity: "0",
    padding: "0px"
  });
}



$(document).ready(function () {
  $('.ui.accordion').accordion();
});