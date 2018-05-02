//Control Variables
var bgArr = [
  'https://goo.gl/4EVF6D',//Office
  'https://goo.gl/wGYBAM',//Classroom
  'https://goo.gl/S1Jj4m',//Lecture hall
  'https://goo.gl/cg2ioW' //Lab
]; //Array of background images
var userInput = ""; // Users input number
var numStr = ""; //Calculated input number
var activeOper = null; //Current operation
var toDisp = ""; //Displayed text
var cached = false; //For operating after an equals button

//Addition function
var add = function (prevNum, newNum) {
  return (parseFloat(prevNum) + parseFloat(newNum)).toString();
};
//Subtraction function
var sub = function(prevNum, newNum) {
  return (parseFloat(prevNum) - parseFloat(newNum)).toString();
};
//Multiplication function
var mult = function(prevNum, newNum) {
  return (parseFloat(prevNum) * parseFloat(newNum)).toString();
};
//Division function
var div = function(prevNum, newNum) {
  return (parseFloat(prevNum) / parseFloat(newNum)).toString();
};
//Array of button id's, symbols, functions and keyboard tools
var operators = [
  ['#add', '+', add, '+'],
  ['#sub', '-', sub, '-'],
  ['#mult', '×', mult, '*'],
  ['#div', '÷', div, '/']
];

//Return number rounded to 2 decimal places
function round(currNum) {
  return (Math.round(parseFloat(currNum*100))/100).toString();
}
//Clear entries and cached data
function clear() {
  activeOper = null;
  cached = false;
  numStr = "";
  userInput = "";
  toDisp = "";
  $('.display').text('');
  $('.history').text('');
}
//Check input length
function checkLength() {
  if ($('.display').text().length >= 11) {
    clear();
    $('.history').text('Input limit met')
  }
}

//General operator function
function genOperBtns(j) {
  return function() {
    //Don't allow if disabled
    if ($(this).hasClass('disabled')) {return null;}
    //Don't allow operation on empty string or another operator
    var str = $('.display').text();
    if (['+','-','×','÷','.'].includes(str.slice(-1))|| str.length === 0) {
      $('.history').text("Invalid input")
      return null;
    }
    //Display current operator
    toDisp += operators[j][1];
    $('.display').text(toDisp);
    $('.history').text(toDisp);
    //Operating after equals sign
    if (cached) {
      userInput = numStr;
      numStr = "";
      cached = false;
    }
    //Perform calculation
    numStr.length?
      numStr = round(activeOper[2](numStr,userInput)):
      numStr = userInput;
    //Save current operator
    activeOper = operators[j];
    userInput = "";
    checkLength();
  };
}
//Apply operation function to each operator
for (var i=0; i<operators.length; i++) {
  $(operators[i][0]).click(genOperBtns(i));
}

//General digit function
function genNumBtns(j) {
  return function() {
    //Don't allow if disabled
    if ($(this).hasClass('disabled')) {return null;}
    if (cached) {clear();}
    toDisp += j;
    $('.display').text(toDisp);
    $('.history').text(toDisp);
    userInput += j;
    checkLength();
  };
}
//Apply digit function to each digit
for (var i=0; i<10; i++) {
  $('#'+i).click(genNumBtns(i));
}


//Apply decimal function to decimal point
$('#dot').click(function(){
  var str = $('.display').text();
  //Don't allow multiple decimals
  if (str.match(/\D/g) && str.match(/\D/g).splice(-1)[0] == '.') {
    $('.history').text('Invalid input'); 
    return null;
  }
  if ($(this).hasClass('disabled')) {return null;}
  if (cached) {clear();}
  toDisp += '.';
  $('.display').text(toDisp);
  $('.history').text(toDisp);
  userInput += '.';
  checkLength();
});

//Equals function
$('#eq').click(function() {
  //Don't allow if disabled
  if ($(this).hasClass('disabled')) {return null;}
  if (!userInput || userInput == '.') {$('.history').text('Invalid input'); return null;}
  //Save return number if an operator is selected (ex. allow 7=7)
  numStr = activeOper ? 
    round(activeOper[2](numStr,userInput)) : 
    userInput;
  //Display calculation depending on if equals sign is pressed
  var history = cached ?
    $('.display').text() + activeOper[1] + userInput + '=' + numStr:
    $('.display').text() + '=' + numStr;
  //Save that the equals button has been pressed
  cached = true;
  //Display calculation
  toDisp = numStr;
  $('.history').text(history)
  $('.display').text(toDisp);
  checkLength();
});

//Click emphasis
$('.btn').mousedown(function() {$(this).css('border', '1px solid rgba(15,15,15,1)');});
$('.btn').mouseup(function() {$(this).css('border', '1px solid rgba(0,0,0,0.2)');});
$('.btn').mouseleave(function() {$(this).css('border', '1px solid rgba(0,0,0,0.2)');});

//Allow keyboard controls
$('body').keypress(function(e) {
  //Process key input if valid
  if (e.key.match(/Enter|.|\+|\-|\*|\/|^[0-9]/)) {
    //Enter key triggers equals button
    if (e.key == 'Enter') {$('#eq').click(); return null;}
    //Period key triggers decimal button
    if (e.key == '.') {$('#dot').click(); return null;}
    //Numpad keys trigger operator buttons
    for (var i=0; i<operators.length; i++) {
      if (e.key == operators[i][3]) {
        $(operators[i][0]).click();
        return null;
      }
    }
    //Number keys trigger number buttons
    for (var i=0; i<10; i++) {
      if (e.key == i) {
        $('#'+i).click();
        return null;
      }
    }
  }
});

//Off button
$('#off').click(function() {
  clear();
  $('.calculator').addClass('off').removeClass('on');
  $('.creds').addClass('off').removeClass('on');
  $('.btn').addClass('disabled');
  $('#on').removeClass('disabled');
})
//Clear button
$('#ac').click(function() {clear();}); 
//On button
$('#on').click(function() {
  clear();
  $('.calculator').addClass('on').removeClass('off');
  $('.creds').addClass('on').removeClass('off');
  $('.btn').removeClass('disabled');
  $('.display').text('hello');
  $('.history').text('world');
});

//Set a random backgroun
$('.bg').css('background-image','url('+bgArr[Math.floor(Math.random()*bgArr.length)]+')');
//Format the calculator height and width
$('.calculator').css('max-width', $('.calculator').height()*0.8);

//Resize and reformat the calculator
$(window).resize(function() {
  $('.calculator').css('max-width', $('.calculator').height()*0.8);
});