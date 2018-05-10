$(window).scroll(function() {
  var navHeight = $(document).scrollTop() > 50 || !$('nav').hasClass('anim') ? '0px' : '-500px';
  $('nav').css('top', navHeight);
});

function softScroll(selector) {
  var href = $(selector).attr('href');
  $('html, body').animate({scrollTop: $(href).offset().top}, 750);
}

$('#toggler').click(function() {
  $(this).toggleClass('show');
  var heightVal = $(this).hasClass('show') ? '675px' : '0px';
  $('#collapse-nav').css('max-height', heightVal);
});
