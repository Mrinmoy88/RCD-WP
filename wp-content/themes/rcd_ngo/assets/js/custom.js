// ------------- Hamburger Menu ------------//

// (function () {
//   $(".hamburger-menu").on("click", function () {
//     $(".bar").toggleClass("animate");
//     $(".main-menu").toggleClass("active");
//     $("body").toggleClass("fixed-height");
//     return false;
//   });
//   $(".has-children").hover(function () {
//     $(this).children("ul").slideToggle();
//     $(this).children(".icon-arrow").toggleClass("open");
//   });
//   // $(".has-children").each(function () {
//   //   $(this).on("click", function () {
//   //     $(this).children("ul").slideToggle("slow", "swing");
//   //     $(this).toggleClass("open");
//   //   });
//   // });
// })();
$(".hamburger-menu").on("click", function () {
  $(".bar").toggleClass("animate");
  $(".main-menu").toggleClass("active");
  $("body").toggleClass("fixed-height");
  return false;
});
if ($(window).width() < 992) {
  $(".has-children").on("click", function () {
    $(this).children("ul").slideToggle("slow", "swing");
    $(this).children(".icon-arrow").toggleClass("open");
  });
}

// ------------- Testimonial Slider ------------//

$(".testimonial-slider")
  .slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 3000,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
        },
      },
    ],
  })
  .on("setPosition", function (event, slick) {
    slick.$slides.css("height", slick.$slideTrack.height() + "px");
  });

// ------------- More-items Slider ------------//

$(".more-items-slider")
  .slick({
    dots: false,
    arrows: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 3000,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow:
      '<button class="arrow-right"><i class="fa-solid fa-chevron-right"></i></button>',
    prevArrow:
      '<button class="arrow-left"><i class="fa-solid fa-chevron-left"></i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  })
  .on("setPosition", function (event, slick) {
    slick.$slides.css("height", slick.$slideTrack.height() + "px");
  });

//  Fixed Header

$(window).scroll(function () {
  if ($(window).scrollTop() >= 150) {
    $(".header").addClass("fixed-header");
    $(".header-top").addClass(" d-none");
  } else {
    $(".header").removeClass("fixed-header");
    $(".header-top").removeClass(" d-none");
  }
});
