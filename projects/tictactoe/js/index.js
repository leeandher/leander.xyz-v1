//AI data object to be repopulated
var aiData;
//Array to stores data for user settings against AI
var againstAI = [false, 0];
//Initializing the gameBoard to empty
var gameBoard = [
  '', '', '',
  '', '', '',
  '', '', ''
];
//All gameBoard ID combinations which win
var winningCombos = [
  [0,1,2], [3,4,5],
  [6,7,8], [0,3,6],
  [1,4,7], [2,5,8],
  [0,4,8], [2,4,6]
];

//Constructor for the player objects
function Player(isX, color, name) {
  this.isX = isX;
  this.color = color;
  this.name = name;
}
//Constructor for the AI's data object (mainly used for organization)
function BotData(emptyPos, enemyPos, aiPos) {
  //Stores board empty positions
  this.emptyPos = emptyPos;
  //Stores board enemy positions
  this.enemyPos = enemyPos;
  //Stores board AI positions
  this.aiPos = aiPos;
  //Enables board for next turn
  this.enableBoard = function() {
    return this.emptyPos.forEach(function(x) {
      $('#cell-' + x).removeClass('disabled');
      $('.btn-ingame').prop('disabled', false);
    });
  };
  //Plays selected move
  this.playMove = function(gameBoardId) {
    var currentBot = this; //Used for closure
    var timer = setInterval(function() {
      currentBot.enableBoard();
      $('#cell-' + gameBoardId).click();
      clearInterval(timer);
    }, 1000);  
  };
  //Identifies losing potential (returns lossLocation or false)
  this.checkDefense = function(winningCombo) {
    var copyCombo = winningCombo.slice();
    for (var i=0; i<copyCombo.length; i++) {
      if (gameBoard[copyCombo[i]] == player1.name) {
        copyCombo.splice(i,1);
        i--;
      }
    }
    if (gameBoard[copyCombo[0]] != player2.name && copyCombo.length === 1) return copyCombo[0];
    else return false;
  };
  //Identifies winning location (returns winLocation or true)
  this.checkOffense = function(winningCombo) {
    var copyCombo = winningCombo.slice();
    for (var i=0; i<copyCombo.length; i++) {
      if (gameBoard[copyCombo[i]] == player2.name) {
        copyCombo.splice(i,1);
        i--;
      }
    }
    if (gameBoard[copyCombo[0]] != player1.name && copyCombo.length === 1) return copyCombo[0];
    else return false;
  };
}

//Utility function to create toggle sets
function toggleBtnSet(set, active) {
  $(set).removeClass('enable');
  $(active).addClass('enable');
}
//Toggle switches for PvAI or PvP
$('.btn-versus').click(function() {
  toggleBtnSet('.btn-versus', this);
  switch ($(this).prop('id')) {
    case 'vsAI':
      againstAI[0] = true;
      $('.ifAI').removeClass('d-none');
      $('#pname-1').prop('placeholder', 'Player Name');
      $('#pname-2').prop('placeholder', 'AI Name');
      break;
    case 'vsPlayer':
      againstAI[0] = false;
      $('.ifAI').addClass('d-none');
      $('#pname-1').prop('placeholder', 'Player 1 Name');
      $('#pname-2').prop('placeholder', 'Player 2 Name');
      break;
  }
});
//Toggle switches for AI difficulty if PvAI is selected
$('.btn-difficulty').click(function() {
  toggleBtnSet('.btn-difficulty', this);
  switch ($(this).prop('id')) {
    case 'moderateAI':
      againstAI[1] = 2;
      break;
    case 'impossibleAI':
      againstAI[1] = 3;
      break;
    default:
      againstAI[1] = 1;
      break;
  }
});
//Toggle switches for X/O character select
$('.btn-char').click(function(){
  if (!$(this).hasClass('enable')) $('.btn-char').toggleClass('enable');
});

//Control function to play an AI turn
function runAITurn() {
  //Analyze board
  getAIData(aiData);
  //Disables all buttons (to prevent player override)
  $('.cell').addClass('disabled');
  //Disable menu buttons
  $('.btn-ingame').prop('disabled', true);
  //Compute next move based on selected difficulty
  switch (againstAI[1]) {
    case 2:
      moderateAITurn(aiData);
      break;
    case 3:
      impossibleAITurn(aiData);
      break;
    default:
      simpleAITurn(aiData);
      break;
  }
}
//Swap and display current player. If PvAI, run the AI turn
function swapCurrPlayer() {
  currPlayer = currPlayer == player1 ? player2 : player1;
  displayCurrPlayer();
  if (againstAI[0] && currPlayer == player2) runAITurn();
}

//Display the current turn (or override text if present)
function displayCurrPlayer(override) {
  $('.display').css('color', currPlayer.color);
  var paddingText = currPlayer.name.slice(-1).toLowerCase()=='s' ? "' turn." : "'s turn.";
  $('.display').text(currPlayer.name + paddingText);
  $('.display').text(override);
} //CAN BE OPTIMIZED

//Animate and show symbol on board. If PvAI, gather new board state data
function addToGameBoard(boardId) {
  if (currPlayer.isX) {
    $('#cross-' + boardId).addClass('appear');
    $('#cross-' + boardId).css('background-color', currPlayer.color);
  } else {
    $('#nought-' + boardId).addClass('appear');
    $('#nought-' + boardId).css('border-color', currPlayer.color);
  }
  gameBoard[boardId] = currPlayer.name;
}

//Retreive and sort gameBoard data into empty, enemy and ai positions
function getAIData() {
  var emptyPos = []; var enemyPos = []; var aiPos = [];
  for (var i=0; i<gameBoard.length; i++) {
    if (!gameBoard[i].length) emptyPos.push(i);
    else if (gameBoard[i] == player1.name) enemyPos.push(i);
    else aiPos.push(i);
  }
  aiData = new BotData(emptyPos, enemyPos, aiPos);
}

//Complete a simple, random AI turn
function simpleAITurn(data) {
  var randPos = data.emptyPos[Math.floor(Math.random()*data.emptyPos.length)];
  data.playMove(randPos);
}

//Complete a moderate, defensive, but opportunity-observing AI turn
function moderateAITurn(data) {
  var randPos = data.emptyPos[Math.floor(Math.random()*data.emptyPos.length)];
  var defensivePos = -1; var offensivePos = -1;
  console.clear();
  for (var i=0; i<winningCombos.length; i++) {
    if (typeof data.checkDefense(winningCombos[i]) == 'number') {
      defensivePos = data.checkDefense(winningCombos[i]);
    }
    if (typeof data.checkOffense(winningCombos[i]) == 'number') {
      offensivePos = data.checkOffense(winningCombos[i]);
    }
  }
  var moderateAIMove = defensivePos >= 0 ? defensivePos : randPos;
  moderateAIMove = offensivePos >= 0 ? offensivePos : moderateAIMove;
  data.playMove(moderateAIMove);
}

//Complete a perfect AI turn
function impossibleAITurn(data) {
  var calculatedPos = recursePosCheck(gameBoard, player2)[0];
  data.playMove(calculatedPos);
}

function recursePosCheck(board, player) {
  var newBoard = board.slice();
  var altPlayer = player==player1 ? player2: player1;
  var availPos = [];
  let moves = {};
  for (var i=0; i<newBoard.length; i++) {
    if (!newBoard[i].length) availPos.push(i);
  }
  for (var i=0; i<availPos.length; i++) {
    newBoard[availPos[i]] = player.name;
    /* moves[i] = (checkForResult(newBoard) <= 0) ? 
      recursePosCheck(newBoard, altPlayer)[1] : 
      checkForResult(newBoard); */
    switch (checkForResult(newBoard, player, false)) {
      case -1:
        moves[availPos[i]] = recursePosCheck(newBoard, altPlayer)[1];
        break;
      case 0://tie
        moves[availPos[i]] = 0;
        break;
      case 1://win
        moves[availPos[i]] = player==player1 ? -10 : 10;
        break;
    }
    newBoard[availPos[i]] = '';
    // if (checkForResult(newBoard) == 1) { //Not conclusive (game isnt over)
    //   recursePosCheck(newBoard, altPlayer);
    // } else {
    //   moves[i] = checkForResult(newBoard);
    // } */
  }
  var scoreFunc = player==player1 ?
    function(a,b) {return Math.min(a,b);} :
    function(a,b) {return Math.max(a,b);};
  var bestScore = Object.values(moves).reduce(scoreFunc);
  /* var bestIndex;
  for (var i=0; i<Object.entries(moves).length; i++) {
    if (Object.entries(moves)[i][1]==bestScore) bestIndex = Object.entries(moves)[i][0]
  } */
  var bestIndeces = [];
  for (var i=0; i<Object.entries(moves).length; i++) {
    if (Object.entries(moves)[i][1]==bestScore) bestIndeces.push(Object.entries(moves)[i][0]);
  } 
  return [bestIndeces[Math.floor(Math.random()*bestIndeces.length)], bestScore];
 
}

//Check for a completed game
function checkForResult(board, player, show) {
  var count = 0;
  for (var i=0; i<winningCombos.length; i++) {
    //Checks if the current player has won
    if (board[winningCombos[i][0]] == player.name &&
        board[winningCombos[i][1]] == player.name &&
        board[winningCombos[i][2]] == player.name) {
      if (show) {
        displayCurrPlayer(currPlayer.name + ' has won!');
        $('.cell').addClass('disabled');
        //Stylize each of the winning cells
        winningCombos[i].forEach(function(x) {
          $('#cell-' + x).css('background-color', player.color);
          $('#cross-' + x).css('background-color', 'rgba(25, 25, 25, 1)');
          $('#nought-' + x).css('border-color', 'rgba(25, 25, 25, 1)');
        });//SEE ABOUT MULTIPLE WIN HIGHLIGHTS LATER ONE
      }
      return 1;
    }
  }
  board.forEach(function(x) {
    if (x.length>1) count++;
  })
  //Checks if the game has tied
  if (count == 9) {
    if (show) {
      $('.display').text('draw.');
      $('.display').css('color','rgba(235, 235, 235, 1)');
      $('.cell').addClass('disabled');
    }
    return 0;
  }
  //Continue game otherwise
  return -1;
}

//Apply the settings from the menu/?CHANGE AFTER DEBUGGING
function applyMenuSettings() {
  var color1 = $('#pcolor-1').css('background-color');
  var name1 = againstAI[0] ?  $('#pname-1').val() || 'Human' : $('#pname-1').val() || 'Player 1';
  var isX = $('#pinfo-1 .x-select').hasClass('enable');
  var color2 = $('#pcolor-2').css('background-color');
  var name2 = againstAI[0] ?  $('#pname-2').val() || 'TacTic Bot' : $('#pname-2').val() || 'Player 2';
  player1 = new Player(isX, color1, name1);
  player2 = new Player(!isX, color2, name2);
  currPlayer = player1.isX ? player1 : player2;
  if (againstAI[0] && currPlayer == player2) runAITurn();
  displayCurrPlayer();
}

$('.cell').click(function() {
  var cellId = $(this).prop('id').slice(-1);
  if ($(this).hasClass('disabled')) {return null;}
  else if (!gameBoard[cellId]) {
    addToGameBoard(cellId);
    $(this).addClass('disabled');
    if (checkForResult(gameBoard, currPlayer, true) === -1) swapCurrPlayer();
  }
});

//Keep Tic-Tac-Toe board square
$(window).resize(function() {
  $('.board').height($('.board').width());
});

//Apply custom colours
$('input[type="color"]').change(function() {
  var id = $(this).prev().prop('id').slice(-1);
  console.log('changing');
  $('#pcolor-' + id).css('background-color', $(this).val());
});

//Launch the game
$('form').submit(function(e){
  e.preventDefault();
  applyMenuSettings();
  $('.menu').addClass('d-none');
  $('.game').removeClass('d-none');
  $('.board').height($('.board').width());
});
//Restart the game
$('#reset').click(function() {
  gameBoard = gameBoard.map(x => '');
  $('.nought, .cross').removeClass('appear');
  $('.cell').removeClass('disabled');
  $('.cell').css('background-color', 'rgba(25, 25, 25, 1)');
  currPlayer = player1.isX ? player1 : player2;
  if (againstAI[0] && currPlayer == player2) runAITurn();
  displayCurrPlayer();
});
//Bring back settings/menu
$('#back').click(function() {
  $('#reset').click();
  $('.menu').removeClass('d-none');
  $('.game').addClass('d-none');
});