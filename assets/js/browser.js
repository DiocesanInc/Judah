jQuery(function ($) {
  console.log(navigator.userAgent);
  if (
    navigator.userAgent.indexOf("Safari") != -1 &&
    navigator.userAgent.indexOf("Chrome") == -1
  ) {
    $("body").addClass("safari");
  }
});
