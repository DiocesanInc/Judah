jQuery(document).ready(function ($) {
  const tablet = 768;
  const laptop = 992;
  const desktop = 1280;

  /** Hero Slider */
  $(".page-template-homepage .hero-slider").slick({
    autoplay: false,
    arrows: true,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    useTransform: false,
    appendArrows: $(".hero .slick-slider-navigation"),
  });
  /** Mass Times Slider */
  $(".page-template-homepage .mass-times-container.parent-theme .banner-content-wrapper.mass-times").slick({
    autoplay: false,
    arrows: true,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    useTransform: false,
    // slide: "",
    // variableWidth: true,
  });

  let $newsSlider = $(".news-container.slick-slider");

  $newsSlider.slick({
    autoplay: false,
    arrows: true,
    // cssEase: "linear",
    centerMode: true,
    centerPadding: "0",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    useTransform: false,
    useCss: false,
    responsive: [
      {
        breakpoint: tablet,
        settings: {
          centerPadding: "75px",
        },
      },
      {
        breakpoint: laptop,
        settings: {
          centerPadding: "100px",
        },
      },
      {
        breakpoint: desktop,
        settings: {
          centerPadding: "300px",
        },
      },
    ],
  });

  $("#slick").slick({
    autoplay: false,
    arrows: true,
    // cssEase: "linear",
    centerMode: true,
    centerPadding: "300px",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    useTransform: false,
    useCss: false,
  });

  /**
   * add margin bottom to mobile news slider
   */
  function adjustMargin($el) {
    let height = window.innerWidth < laptop ? getPostHeight() : 0;
    $el.css("margin-bottom", height);
  }

  function getPostHeight() {
    return (
      $(".post-wrapper.slick-current")
        .find(".post-content-wrapper")
        .outerHeight() + 20
    );
  }

  function resizePosts() {
    $(".post-wrapper").each(function () {
      adjustMargin($(this));
    });
  }

  $newsSlider.on("afterChange", resizePosts);
  $(window).on("resize", resizePosts);
  adjustMargin($(".post-wrapper"));

  $(".banner-items.slick-slider").slick({
    autoplay: false,
    arrows: true,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    useTransform: false,
    responsive: [
      {
        breakpoint: laptop,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: desktop,
        settings: {
          dots: true,
          arrows: false,
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });

  let $featuredButtons = $(".featured-content-container");
  let $gallery = $(".gallery-container .envira-gallery-public");

  function featuredButtonsMobile() {
    $featuredButtons.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      dots: false,
      arrows: true,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: tablet,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
      ],
    });
  }

  function galleryMobile() {
    $gallery.slick({
      infinite: true,
      //   slide: ".envira-gallery-item",
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: tablet,
          settings: {
            slidesToScroll: 2,
            slidesToShow: 2,
          },
        },
      ],
    });
  }

  if (isMobile()) {
    featuredButtonsMobile();
    galleryMobile();
  }

  $(window).on("resize", function (e) {
    if (isMobile()) {
      if (!$featuredButtons.hasClass("slick-initialized")) {
        featuredButtonsMobile();
      }
      if (!$gallery.hasClass("slick-initialized")) {
        galleryMobile();
      }
    } else {
      if ($featuredButtons.hasClass("slick-initialized")) {
        $featuredButtons.slick("unslick");
      }
      if ($gallery.hasClass("slick-initialized")) {
        $gallery.slick("unslick");
      }
    }
  });

  function isMobile() {
    return window.innerWidth < desktop;
  }

  /** Ministry Slider */
  $(".ministries-container .ministry-slider .ministry-group").slick({
    autoplay: false,
    arrows: true,
    dots: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    slide: ".teaser-box",
    responsive: [
      {
        breakpoint: tablet,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: laptop,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: desktop,
        settings: {
          slidesToShow: 4,
        },
      },
    ],
  });

  $(".testimonials-container .slick-slider").slick({
    autoplay: false,
    arrows: true,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    useTransform: false,
    centerPadding: "25%",
    responsive: [
      {
        breakpoint: laptop,
        settings: {
          centerMode: true,
        },
      },
    ],
  });
  
  $(".page-template-homepage .parishButtons").slick({
    autoplay: false,
    dots: false,
    arrows: true,
    cssEase: "linear",
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1360,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 426,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });
});
