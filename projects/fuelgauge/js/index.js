//Declare timer and time variables
var timer, userTimes, workTime, breakTime, working;

//Display and format remaining time
function displayTime(time) {
  var secs = time%60<10 ? '0' + time%60 : time%60;
  var mins = Math.floor(time/60)%60<10 ? '0'+Math.floor(time/60)%60 : Math.floor(time/60)%60;
  var hours = Math.floor(time/3600)<10 ? '0'+Math.floor(time/3600) : Math.floor(time/3600);
  $('.time').text(hours+':'+mins+':'+secs);
}

//Actual timer, moves needle, changes text
function getTime() {
  if (working) {
    //Go with work timer
    displayTime(workTime);
    $('.label').text('BURN FUEL');
    $('.needle').css('transform','translateY(-50%) rotate('+(240*(workTime/userTimes[0])-30)+'deg)');
    workTime--;
    if (workTime === -1) {
      //When complete, start break
      working = false; 
      breakTime = userTimes[1];
    }
  } else {
    //Go with break timer
    displayTime(breakTime);
    $('.label').text('REFUEL');
    $('.needle').css('transform','translateY(-50%) rotate('+(240*(1-(breakTime/userTimes[1]))-30)+'deg)');
    breakTime--;
    if (breakTime === -1) { 
      //When complete, start work
      working = true; 
      workTime = userTimes[0];
    }
  }
}

//start the timer
function startTimer() {
  getTime();
  timer = setInterval(getTime,1000);
}

//Pause the timer
function pauseTimer() {
  $('.label').text('PAUSED');
  clearInterval(timer);
}

//Toggle the timer (play/pause)
$('.timer').click(function() {
  $(this).hasClass('on') ? pauseTimer() : startTimer();
  $(this).toggleClass('on off');
});

//Customize time frame and start work time
$('form').submit(function(e) {
  e.preventDefault();
  //properly add together the times based on seconds
  var setWork = $('#w-h').val()*3600 + $('#w-m').val()*60 + $('#w-s').val()*1;
  var setBreak = $('#b-h').val()*3600 + $('#b-m').val()*60 + $('#b-s').val()*1;
  userTimes = [setWork, setBreak];
  if (setWork == 0) {userTimes[0] = 1500;}
  if (setBreak == 0) {userTimes[1] = 300;}
  workTime = userTimes[0];
  breakTime = userTimes[1];
  working = true;
  $('.btn-reset').removeClass('d-none');
  $('.setter').addClass('d-none');
  $('.timer').removeClass('d-none').click();
  $('.timer').height($('.timer').width());
});

//Reset the timer revert to set screen
$('.btn-reset').click(function() {
  pauseTimer();
  working = true;
  $(this).addClass('d-none');
  $('.timer').addClass('d-none');
  $('.timer').addClass('off').removeClass('on');
  $('.setter').removeClass('d-none');
  $('.setter').height($('.setter').width());
});

//Keep widget circular on any resize
$('.setter').height($('.setter').width());
$(window).resize(function() {
  $('.timer').height($('.timer').width());
  $('.setter').height($('.setter').width());
});