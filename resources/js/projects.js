function arrToList(arr) {
  if (arr.length !== 1) {arr[arr.length-1] = 'and ' + arr[arr.length-1];}
  return arr.join(', ');
}

var Project = function(title, date, desc, languages, additional, concepts, linkUrl) {
  this.title = title;
  this.date = date;
  this.desc = desc;
  this.languages = languages;
  this.additional = additional;
  this.concepts = concepts;
  this.bg = 'url("/resources/images/projects/'+ linkUrl +'.JPG")';
  this.link = linkUrl;
}

function applyProject(proj, order) {
  $('#directory a:nth-child(' + (order + 1) + ')').text(proj.title);
  var projId = '#proj-' + order;
  $(projId + ' .proj-title').text(proj.title);
  $(projId + ' .live').prop('href','/projects/' +  proj.link + '/index.html');
  $(projId + ' .source').prop('href', 'https://github.com/leeandher/leeandher.github.io/tree/master/projects/' + proj.link);
  $(projId + ' .proj-date').text(proj.date);
  $(projId + ' .proj-desc').text(proj.desc);
  $(projId + ' .languages').text(arrToList(proj.languages));
  $(projId + ' .additional').text(arrToList(proj.additional));
  $(projId + ' .concepts').text(arrToList(proj.concepts));
  $(projId + ' .proj-bg').css('background-image', proj.bg);
}


var projectArr = [
  new Project(
    'Random Quote Machine',
    'February 04, 2018',
    "A webpage styled as a mobile phone with the Tinder app open that cycles through different lame pick-up lines, names, locations, and background images.",
    ['HTML5', 'CSS3', 'JavaScript'],
    ['Bootstrap 4', 'SCSS', 'JQuery'],
    ['Design Recreation'],
    'quotes'
  ),
  new Project(
    'Wikipedia Viewer',
    'February 07, 2018',
    "A front-end face that accesses the Wikipedia API to search for results and display in a clean format. Accepts and input and displays the top 20 results.",
    ['HTML5', 'CSS3', 'JavaScript'],
    ['Bootstrap 4', 'Haml', 'SCSS', 'JQuery', 'Popper.js'],
    ['String manipulation', 'Live Response'],
    'wikiview'
  ),
  new Project(
    'Local Weather App',
    'February 10, 2018',
    "A basic weather app which accesses the OpenWeatherMap API through FCC's glitch.me using the geolocation in the user's browser and displays statistics and information about the weather in their location.",
    ['HTML5', 'CSS3', 'JavaScript'],
    ['Bootstrap 4', 'Haml', 'SCSS', 'JQuery'],
    ['JSON APIs', 'HTML5 Geolocation', 'Open Source APIs'],
    'weather'
  ),
  new Project(
    'Twitch.tv Stream Client',
    'February 15, 2018',
    "A webpage with an array of Twitch.tv streamers which accesses the Twitch.tv API through FCC's glitch.me and displays information about the streamer's current status and profile. There are also filters/sorts which dynamically affect the data shown.",
    ['HTML5', 'CSS3', 'JavaScript'],
    ['Bootstrap 4', 'Haml', 'SCSS', 'JQuery'],
    ['JSON APIs', 'AJAX', 'Commercial APIs', 'Live Response'],
    'liveontwitch'
  ),
  new Project(
    'JavaScript Calculator',
    'March 06, 2018',
    "A calculator app that runs entirely on complex hand-coded JavaScript. It is meant to be a desktop calculator which ignores BEDMAS so performs operations linearly. It scales responsively for mobile and does not implore the 300ms delay, allowing for faster inputs.",
    ['HTML5', 'CSS3', 'JavaScript'],
    ['Bootstrap 4', 'Haml', 'SCSS', 'JQuery'],
    ['Basic Mathematics'],
    'calculator'
  ),
  new Project(
    'Pomodoro Clock',
    'March 12, 2018',
    "A timer using the pomodoro productivity technique, of set break and work timers to regiment time spent allocated to tasks. It is styled as a fuel gauge which empties and refills on work periods and break periods respectively.",
    ['HTML5', 'CSS3', 'JavaScript'],
    ['Bootstrap 4', 'Haml', 'SCSS', 'JQuery'],
    ['JS Timing Functions'],
    'fuelgauge'
  ),
  new Project(
    'Simon Game',
    'March 15, 2018',
    "A recreation of the famous toy which calls on the user's memory of a sequence of button presses in order to win. A few additonal features have been added, such as strict-mode, spin-mode, no-repeat mode and multiple colour schemes.",
    ['HTML5', 'CSS3', 'JavaScript'],
    ['Bootstrap 4', 'Haml', 'SCSS', 'JQuery'],
    ['Web Audio API'],
    'simon'
  ),
  new Project(
    'Tic-Tac-Toe',
    'March 21, 2018',
    "A implementation of Tic-Tac-Toe with multiple settings. It allows for Player vs. Player (with names, colours, and shape selection) and Player vs. AI (with everything else, and AI difficulty settings). One of the difficulty settings is 'Impossible' which uses the minimax algorithm for an unbeatable Tic-Tac-Toe AI.",
    ['HTML5', 'CSS3', 'JavaScript'],
    ['Bootstrap 4', 'Haml', 'SCSS', 'JQuery'],
    ['AI Algorithmic Logic'],
    'tictactoe'
  )
];

for (var i=0; i<8; i++) {
  applyProject(projectArr[i], projectArr.length-1-i);
}

$('#directory a').click(function() {softScroll(this);});

$('.fa-chevron-up').click(function() {softScroll(this);});
