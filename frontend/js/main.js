
$(document).ready(function () {
  $('#back-to-top').hide();

  //show button back to top when top scroll to 2/3 view height
  let offset = window.innerHeight / 1.5;
  let duration = 350; //milliseconds
  $(window).scroll(function () {
    if ($(this).scrollTop() >= offset) {
      $('#back-to-top').show(duration);
    } else {
      $('#back-to-top').hide(duration);
    }
  });
  // scroll top
  $("#back-to-top").click(function () {
    $('html').scrollTop(0);
  });
});