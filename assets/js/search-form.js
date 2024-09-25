jQuery(document).ready(function ($) {
  $(".search-container .header-search").on("click", function () {
    $(".search-form").toggleClass("active");
    $("html").toggleClass("no-scroll");
  });

  $(".search-form .close-search").on("click", function () {
    $(".search-form").toggleClass("active");
    $("html").toggleClass("no-scroll");
  });
});
