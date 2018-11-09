jQuery(function($) {
  $('.slider-inner').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    cssEase: 'linear',
    pauseOnHover: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 460,
        settings: {
          slidesToShow: 2,
          centerMode: true,
          centerPadding: '40px',
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          centerMode: false,
        }
      },
      {
        breakpoint: 820,
        settings: {
          slidesToShow: 4,
          centerMode: false,
        }
      },
      {
        breakpoint: 1024,
        settings: {
          centerMode: false,
          slidesToShow: 5,
        }
      }
    ]
  });
});
