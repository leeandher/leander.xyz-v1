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
