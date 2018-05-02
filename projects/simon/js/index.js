//Accessing and using browser Web Audio API
var AudioContext = window.AudioContext || window.webkitAudioContext;
var audioCtx = new AudioContext();
//Enable gain-node to play within audio context
var gainNode = audioCtx.createGain();
gainNode.connect(audioCtx.destination); 
gainNode.gain.value = 0.05;
//Four button frequencies, Win frequency, Loss frequency
var btnFreq = [150, 175, 200, 225, 250, 115];
//'Beep' function
function createPulse(frequency, duration) {
  duration /= 1000; //Convert duration to seconds
  var oscillator = audioCtx.createOscillator();
  oscillator.connect(gainNode); //Connect oscillator to output gain node
  oscillator.frequency.value = frequency; 
  oscillator.type = 'triangle'; 
  //Start and stop the oscillator
  oscillator.start();
  oscillator.stop(audioCtx.currentTime + duration);
  //Since oscillators cannot restart, a new oneis created each function call
}

//Predefined variables
var showInd, score, timer, sequence, currentInd;
//Initalized Variables
var blinkTime = 400; //Blink duration
var bufferTime = 900; //Blink duration + Gap duration
var colourScheme = [
  //Basic
  ['#32CD32', '#FF3030', '#FFFF20', '#1E90FF'], //Classic
  ['#DAEDBD', '#F4B9B2', '#E8C577', '#7DBBC3'], //Muted Classic
  ['#BAFFC9', '#FFB3BA', '#FFFFBA', '#BAE1FF'], //Pastel Classic
  ['#999999', '#777777', '#333333', '#555555'], //Greyscale
  ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF'], //Empty
  //Assorted
  ['#00ABA9', '#FF0097', '#A200FF', '#1BA1E2'], //Retro Bold
  ['#DC94FD', '#FF9797', '#FDDBA8', '#FFBE9B'], //Soft Sunset
  ['#00FFFF', '#FF00FF', '#FFFF00', '#FFFFFE'], //Printer Ink
  ['#FDBB28', '#F9EB3F', '#018DD5', '#6DCC41'], //Bright Morning
  ['#FFAE9c', '#FFDCDC', '#00B596', '#95E6DC'], //Candy Watermelon
  ['#E75443', '#DDDDDD', '#81D2AF', '#F4C56A'], //70s Neutral
  ['#EA6485', '#421616', '#FFB1B1', '#FFDDDD'], //Peach Candy
  ['#57B4CC', '#43468A', '#5F7BC0', '#49509D'], //Ocean Tones
  ['#C6F7F5', '#62D2E0', '#EFED78', '#A0D141'], //Grassy Hill
  ['#49B1B1', '#21A0A0', '#046865', '#1C8383'], //All Teal
  ['#FF785A', '#FFAA5A', '#FFF05A', '#FFD25A'], //Sunny Day
  ['#B1D55F', '#95C623', '#0E4749', '#4B8F8C'], //Modern Bold
  ['#5DFDCB', '#F4FAFF', '#08090A', '#3CA282'], //My Choice
  ['#7BDFF2', '#B2F7EF', '#F7D6E0', '#F2B5D4'], //Palewave
  ['#B8F2E6', '#989CA5', '#6C727E', '#F7717D'], //Good Mix
  ['#FF71CE', '#01CDFE', '#05FFA1', '#B967FF'], //Vaporwave
  ['#FFD319', '#FF901F', '#FF2975', '#F222FF'], //Retro Sun
  ['#F0C9EE', '#E0A0EE', '#EC9595', '#DD6262'], //Romance
  ['#FFCF40', '#FFBF00', '#A67C00', '#BF9B30'], //Golden
  ['#BF8BFF', '#E5D0FF', '#CCA3FF', '#DABCFF'], //Lilacs
  //Reference
  ['#D9534F', '#F9F9F9', '#5CB85C', '#5BC0DE'], //Bootstrap
  ['#7289DA', '#23272A', '#2C2F33', '#99AAB5'], //Discord
  ['#3B5998', '#8B9DC3', '#DFE3EE', '#F7F7F7'], //Facebook
  ['#008744', '#D62D20', '#FFA700', '#0057E7'], //Google
  ['#405DE6', '#833AB4', '#E1306C', '#F77737'], //Instagram
  ['#BF0C0C', '#E76A05', '#FFC600', '#865200'], //McDonald's
  ['#F65314', '#7CBB00', '#00A1F1', '#FFBB00'], //Microsoft
  ['#E50914', '#221F1F', '#F5F5F1', '#E50914'], //Netflix
  ['#F0F0F0', '#F68C06', '#325DA7', '#F0F0F0'], //Portal
  ['#6ECADC', '#E9A820', '#E01563', '#3EB991'], //Slack
]; //All colour schemes
var schemeInd = 0; //Current colour scheme index

//Generate next random button in sequence
function genRand() {
  return Math.floor((Math.random()*4)+1);
}

//Display/adjust the score
function dispScore(adjust) {
  if (typeof adjust == 'string') {
    $('.score').text(adjust);
  } else {
    score+=adjust;
    var text = score>9 ? score : "0" + score;
    $('.score').text(text);
  }
}

//Show user sequence to memorize
function showSequence() {
  if (showInd == sequence.length) {
    clearInterval(timer);
    shownId = 0;
    $('.btn-game').removeClass('disabled');
    return null;
  }
  blink(sequence[showInd], blinkTime);
  showInd++;
}

//Blink any button press
function blink(id, time) {
  //Don't sound for win or loss
  if (!$('.score').text().includes(':')) {
    createPulse(btnFreq[id], blinkTime);
  }
  $('#btn-' + id).addClass('brighten');
  function unblink() { 
    $('#btn-' + id).removeClass('brighten');
  }
  window.setTimeout(unblink, time);
}

//Winning game event
function winGame() {
  dispScore(':D');
  $('.btn-game').addClass('disabled');
  var winIter = 0;
  timer = setInterval(function(){
    winIter++;
    if (winIter >= 5) {
      clearInterval(timer);
      for(var i=1; i<5; i++) {blink(i, 600);}
      createPulse(btnFreq[4], 800);
    } else {
      blink(winIter,250);
      createPulse(btnFreq[4] + winIter*20, 300);
    }
  },300);
}
//Losing game event
function loseGame() {
  dispScore(':('); 
  $('.btn-game').addClass('disabled');
  //Imploy strict option (reset on wrong input)
  if ($('#strict').hasClass('enabled')) {
    $('.btn-game').addClass('disabled');
    blink(sequence[currentInd], 2000);
  } else {
    $('#play').removeClass('enabled');
  }
  currentInd = 0;
  var lossIter = 0;
  timer = setInterval(function(){
    lossIter++;
    for(var i=1; i<5; i++) {blink(i, 600);}
    createPulse(btnFreq[5] - lossIter*10, 800);
    if (lossIter >= 3) {
      clearInterval(timer);
    }
  },1000);
}

//Checking user input to sequence
function checkInd(val) {
  blink(val, 200);
  if (val == sequence[currentInd]) {
    //Checks if the button they just pressed matches sequence
    currentInd++;
    if (currentInd == 20) {
    //If the user gets to 20 they win
      winGame();
    } else if (currentInd == sequence.length) {
      //If the user has completed the current sequence < 20
      currentInd = 0;
      dispScore(1);
      sequence.push(genRand());
      $('#play').removeClass('enabled');
      $('#play').click();
    }
  } else {
    //If not matching, they lose
    loseGame();
  }
}

//Game button being selected
$('.btn-game').click(function() {
  if ($(this).hasClass('disabled')) {return null;}
  var id = $(this).attr('id').slice(-1);
  checkInd(id);
});

//Play button being selected
$('#play').click(function() {
  if ($(this).hasClass('enabled')) {return null;}
  $(this).addClass('enabled');
  dispScore(0);
  //Imploy no-repeat option (only show latest sequence addition)
  showInd = $('#no-repeat').hasClass('enabled') ? sequence.length-1 : 0;
  clearInterval(timer);
  timer = setInterval(showSequence, bufferTime);
  currentInd = 0;
  $('.btn-game').addClass('disabled');
});

//Reset button being selected
$('#reset').click(function() {
  $('#play').removeClass('enabled');
  sequence = [genRand()];
  clearInterval(timer);
  currentInd = 0;
  score = 0;
  showInd = 0;
  dispScore(0);
  $('.btn-game').addClass('disabled');
});

//Remix button being selected (swap colour scheme)
$('#remix').click(function() {
  schemeInd++;
  schemeInd = schemeInd==colourScheme.length ? 0 : schemeInd; 
  for (i=0; i<4; i++) {
    $('#btn-'+(i+1)).css('background-color', colourScheme[schemeInd][i]);
  }
});

//Strict button being selected (reset on wrong input)
$('#strict').click(function() {
  $(this).toggleClass('enabled');
});

//No-repeat button being selected (only show latest sequence addition)
$('#no-repeat').click(function() {
  $(this).toggleClass('enabled');
});

//Spin button being selected (spin the game buttons)
$('#spin').click(function() {
  $('.btn-game-container').toggleClass('spin');
  $(this).toggleClass('enabled');
});

//Start the game fresh
$('#reset').click();

//Mute the audio with the 'm' letter
$('.title span').click(function() {
  gainNode.gain.value = gainNode.gain.value ? 0 : 0.03;
});

//Assure that the game is always perfectly circular on resize
$('.game').height($('.game').width());
$(window).resize(function() {
  $('.game').height($('.game').width());
});