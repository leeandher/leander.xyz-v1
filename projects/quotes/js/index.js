//Preset random possibilites
var allInfo = [
  [
    "Are you a loan, because you're gaining my interest.",
    "Are you Little Caesars? Because you're hot and I'm ready.",
    "Have you heard about Pluto? That's messed up, right?",
    "The titanic is my favourite icebreaker.",
    "Are you a beaver? Because dam.",
    
    "Do you have an ugly boyfriend.\n No? Want one?",
    "If you were a tree, you'd be a good tree.",
    "So I was backpacking across Western Europe...",
    "I have a dog and she licks faces, c'mere.",
    "Girl I put the STD in stud, all I need is U.",
    
    "What's your highest CP pokemon?",
    "I'm challenger in League of Legends.",
    "Slow night tonight... I guess you'll do.",
    "Good things come in small, unattractive packages.",
    "Are you stairs, because you take my breath away.",
    
    "I see you got teeth, I like that in a girl.",
    "I'm trash, you should take me out.",
    "On a scale of 1-10, you're a 9 and I'm the one you need.",
    "Are you french? Because maDAMN.",
    "If you were a fruit, you'd be a FINEapple.",
    
    "My love for you burns with the intensity of a thousand white suns.",
    "I don't like sand. It's coarse and rough and irritating and it gets everywhere.",
    "Hey, this is going to sound really cheesy, but... \n Mozzarella.",
    "Help, I've fallen for you and I can't get up.",
    "Lower your expectations and let's begin."  
  ], //Quotes
  [
    "Chris Rock",
    "Amy Schumer",
    "That Arrogant Little Shit",
    "The Real Spiderman",
    "The Ghost of Christmas Past",
    
    "Your Lab Partner",
    "Danny Phantom",
    "That One Guy from that One Class",
    "A Mistake Waiting to Happen",
    "The Fake Spiderman",
    
    "Michael Scott",
    "A Lonely Tree",
    "The Guy on the Bus",
    "Your Future Husband",
    "Real-life Waifu",
    
    "Your Pal for Grade 6",
    "Drake Bell",
    "Barrack Obama",
    "Tesla Edison",
    "Stevie Wonder",
    
    "Waddles the Pig",
    "Christian Bale of Hay",
    "Santa Claus",
    "Clifford the Big Red Dog",
    "Ashley Madison",
  ], //Users
  [
    "Candyland",
    "Gotham City",
    "My Mom's House",
    "The Local Elementary School",
    "Kinda far but not too far",
    
    "Hell's Kitchen",
    "In the Dining Room with the Candlestick",
    "Under the 401",
    "Walmart (Entertainment Section)",
    "The Nearest Hospital",
    
    "Starbucks",
    "A&W - Home of A&W Root Beer",
    "The American Idol Waiting Room",
    "Atop Mount Everest",
    "Boulevard of Broken Dreams",
    
    "Bikini Bottom",
    "At the Nickelback concert",
    "Heaven",
    "Find me on SnapMaps",
    "Sensei's Dojo",
    
    "Chuck E. Cheese",
    "A Hipster Cafe",
    "Washington, M.C.",
    "Home with the Kiddos",
    "In the Men's Room"
  ], //Locations
  [
    "https://goo.gl/x3BTM3", //Blue, white, orange
    "https://goo.gl/JoRhdg", //Night sky
    "https://goo.gl/2cXHUa", //Red, to light
    "https://goo.gl/h1N5wt", //Sunset, blue sky
    "https://goo.gl/w8GqHK", //Rainbow mist
    
    "https://goo.gl/T6cWSU", //Blue, white gradient 
    "https://goo.gl/LeknHd", //Pastel, rainbow
    "https://goo.gl/QfGjLQ", //Rainbow streaks
    "https://goo.gl/bocZzA", //Green
    "https://goo.gl/FsY52N", //Blue, green
    
    "https://goo.gl/u7Uu1Y", //Red, blue, stars
    "https://goo.gl/ymfW9J", //Dark red
    "https://goo.gl/W1Vnaq", //Yellow, blue
    "https://goo.gl/WhKKdf", //Yellow lens flare
    "https://goo.gl/i8ZpQj", //Sidewalks
    
    "https://goo.gl/yEznPq", //Traffic jam
    "https://goo.gl/9hJmJY", //City
    "https://goo.gl/6R3mmJ", //River
    "https://goo.gl/9Ac2ww", //Dark
    "https://goo.gl/kBLsos", //Neon lights
    
    "https://goo.gl/GNfMoJ", //Pink streaks
    "https://goo.gl/SyRyrG", //Space
    "https://goo.gl/ia3ziR", //Highway
    "https://goo.gl/vPhA1z", //Night sky
    "https://goo.gl/TDkn6M" //Rainy window
  ] //Backgrounds
];
//Constructor for saving current random setup
var saveInfo = function(quote, user, location, bg) {
  this.quote = quote;
  this.user = user;
  this.location = location;
  this.bg = bg;
};
//Initialize array of liked quotes
var liked = [];
//Initialize array of disliked quotes
var deleted = [];

//Generate a random entry from an array
function genRand(arr) {
  return arr[Math.floor(Math.random()*arr.length)];
}
//Generate new quote set
function newQuote() {
  if (allInfo[0].length>0) {
    //If the user hasn't disliked all preset quotes
    var randInt = Math.ceil(Math.random()*100);
    $(".default .quote").text(genRand(allInfo[0]));
    $(".default .user").html(genRand(allInfo[1]) + "<span>, " + randInt + "</span>");
    $(".default .location").text(genRand(allInfo[2]));
    $(".default .content").css("background-image","url(" + genRand(allInfo[3]) + ")");
  } else {
    //If the user has disliked all preset quotes
    $(".default .quote").text("I'm all outta suggestions");
    $(".default .user").text("Nothing's good enough for ya huh?");
    $(".default .location").text("Find your own Date, nerd");
    $(".default .content").css("background-image",'url("https://goo.gl/JALR4x")');  
  }
}

//Action button responses
$(".refresh").on('click', function(e) {
  e.preventDefault();
  newQuote();
});
$(".dislike").on('click', function(e) {
  e.preventDefault();
  if (allInfo[0].length > 0) {
    var index = allInfo[0].indexOf($(".default .quote").text());
    deleted.push(allInfo[0].splice(index,1)[0]);
    newQuote();
  }
});
$(".like").on('click', function(e) {
  e.preventDefault();
  var currentLike = new saveInfo(
      $(".default .quote").text(),
      $(".default .user").html(),
      $(".default .location").text(),
      $(".default .content").css("background-image")
    );
  liked.push(currentLike);
});
$(".tweet").on('click', function(e) {
  e.preventDefault();
  window.open('https://twitter.com/intent/tweet?hashtags=tinDirectory&text="' + 
              $(".default .quote").text() + '" - ' + 
              $(".default .user").text() + " - " +
              $(".default .location").text());
});

//Inital like index to display
var toStart = 0;
//Display like
function dispLike(ind) {
  $(".overlay .quote").text(liked[ind].quote);
  $(".overlay .user").html(liked[ind].user);
  $(".overlay .location").html(liked[ind].location);
  $(".overlay .content").css('background-image', liked[ind].bg);
}
//Toggle overlay
$(".screen-toggle").on('click', function() {
  //Toggle overlay
  $(this).toggleClass("fa-heart fa-times fa-fw")
  $(".overlay").toggleClass("hide");
  if (liked.length > 0) {
    //Display liked profiles if available
    dispLike(toStart);
  }
  if (liked.length < 2) {
    //Don't display navigation buttons if only one like
    $(".select").toggleClass("hide");
  }
    
});
//Previous liked button control
$(".prev").click(function(){
  toStart--;
  if (toStart <= 0) {
    $(this).addClass('fade');
    $(this).removeClass('show');
    toStart = 0;
  }
  dispLike(toStart);
  $(".next").addClass('show');
  $(".next").removeClass('fade');
});
//Next liked button control
$(".next").click(function(){
  toStart++;
  if (toStart >= liked.length-1) {
    $(this).addClass('fade');
    $(this).removeClass('show');
    toStart = liked.length-1;
  }
  dispLike(toStart);
  $(".prev").addClass('show');
  $(".prev").removeClass('fade');
});

//On load, generate a new quote
$(document).ready(function() {
  newQuote();
})