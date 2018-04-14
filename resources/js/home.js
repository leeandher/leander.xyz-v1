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


var screenGrabs = [
  'https://goo.gl/Gg6WUS',
  'https://goo.gl/BHqJDP',
  'https://goo.gl/fdZVs1',
  'https://goo.gl/qSSkhL',
  'https://goo.gl/9Y35rA',
  'https://goo.gl/AKXDXT',
  'https://goo.gl/J74Vum',
  'https://goo.gl/fgrRKB'
];

var currLoop = 0;
var timer = setInterval(function() {
  $('#projects .bg').css('background-image', 'url(' + screenGrabs[currLoop] + ')');
  currLoop ++;
  currLoop = currLoop === screenGrabs.length ?
    0: currLoop; 
}, 5000)
