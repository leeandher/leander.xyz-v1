//Navbar scroll on page
$('nav a').click(function() {
  softScroll(this);
  if ($(window).width() < 650) {
    $('#toggler').removeClass('show');
    $('#collapse-nav').css('max-height', '0px');
  }
});



$('#logo a').attr('href', '#home');
$('nav').addClass('anim');
$('#collapse-nav a:nth-child(1)').attr('href','#home');
$('#collapse-nav a:nth-child(2)').attr('href','#about');
$('#collapse-nav a:nth-child(3)').attr('href','#projects');
$('#collapse-nav a:nth-child(4)').attr('href','#media');
$('#collapse-nav a:nth-child(5)').attr('href','#contact');


var projectShowCase = [
  'tictactoe',
  'simon',
  'fuelgauge',
  'calculator',
  'liveontwitch',
  'weather',
  'wikiview',
  'quotes'
].map(function(x) {
  var img = new Image();
  img.src = '/resources/images/projects/' + x + '.JPG';
  return img;
});

var currLoop = 0;
$('#projects .bg').css('background-image', 'url(' + projectShowCase[currLoop].src + ')');
window.setInterval(function() {
  currLoop ++;
  if (currLoop === projectShowCase.length) currLoop = 0;
  $('#projects .bg').css('background-image', 'url(' + projectShowCase[currLoop].src + ')');
}, 5000)
