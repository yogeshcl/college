$(document).ready(function() {
  $(window).scroll(function() {
    if (
      $(document).scrollTop() > 45 ||
      $(".collapse.navbar-collapse").hasClass("show")
    ) {
      $(".navbar").addClass("shadow-sm fixed-top");
      $(".navbar-brand img").css("height", "48px");
    } else {
      $(".navbar").removeClass("shadow-sm fixed-top");
      $(".navbar-brand img").css("height", "64px");
    }
  });

  $("#home-carousel").carousel({
    pause: "hover",
    interval: 4000,
    keyboard: true
  });

  $(".slick-slider").slick({
    infinite: false,
    dots: true,
    slidesToShow: 1.5,
    slidesToScroll: 1,
    speed: 300,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});
