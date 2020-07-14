const topScroll = document.querySelector(".top-scroll");
const nav = document.querySelector(".navbar");

// backTotop scroll
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 50) {
    topScroll.classList.add("activescroll");
    nav.classList.add("navscroll");
  } else {
    topScroll.classList.remove("activescroll");
    nav.classList.remove("navscroll");
  }
});
//preloader
$(window).on("load", function () {
  $(".status").fadeOut();
  $("#preloader").delay(500).fadeOut();
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
  autoplay: true,
  loop: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  arrows: false,
  dots: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
        arrows: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});
$(".slider-review").slick({
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
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});
