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
];

var currLoop = 0;
var timer = setInterval(function() {
  $('#projects .bg').css('background-image', 'url(/resources/images/projects/' + projectShowCase[currLoop] + '.png)');
  currLoop ++;
  if (currLoop === projectShowCase.length) currLoop = 0;
}, 5000)
