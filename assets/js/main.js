const topScroll = document.querySelector(".top-scroll");

// backTotop scroll
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 50) {
    topScroll.classList.add("activescroll");
  } else {
    topScroll.classList.remove("activescroll");
  }
});
//preloader
$(window).on("load", function () {
  $(".status").fadeOut();
  $("#preloader").delay(500).fadeOut();
  $(".logo-img").addClass("animate__animated animate__bounce");
});
//collapse nav window
$(document).on("click", ".navbar-collapse", function (e) {
  if ($(e.target).is("a")) {
    $(this).collapse("hide");
  }
});

$(".slider").slick({
  dots: false,
  infinite: true,
  autoplay: false,
  loop: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
      },
    },
  ],
});
$(".slider-screen").slick({
  dots: false,
  infinite: true,
  autoplay: true,
  loop: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
      },
    },
  ],
});
function countdown() {
  let now = new Date();
  let eventDate = new Date(now.getFullYear(), 12, 25);
  let currentTime = now.getTime();
  let eventTime = eventDate.getTime();
  var remTime = eventTime - currentTime;
  let s = Math.floor(remTime / 1000);
  let m = Math.floor(s / 60);
  let h = Math.floor(m / 60);
  let d = Math.floor(h / 24);
  h %= 24;
  m %= 60;
  s %= 60;
  h = h < 10 ? "0" + h : h;
  m = m < 10 ? "0" + m : m;
  s = s < 10 ? "0" + s : s;
  document.getElementById("days").textContent = d;
  document.getElementById("hours").textContent = h;
  document.getElementById("minutes").textContent = m;
  document.getElementById("seconds").textContent = s;
  setTimeout(countdown, 1000);
}
countdown();
