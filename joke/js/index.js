//Hamburger animation
function toggleNav() {
    var $cell = $("#cell"),
        $bar1 = $("#bar1"),
        $bar2 = $("#bar2"),
        $bar3 = $("#bar3");
    if ($cell.hasClass("goBars")) {
      $bar1.addClass("goC1").removeClass("goB1");
      $bar2.addClass("goC2").removeClass("goB2");
      $bar3.addClass("goC3").removeClass("goB3");
      $cell.removeClass("goBars");
    } else {
      $bar1.addClass("goB1").removeClass("goC1");
      $bar2.addClass("goB2").removeClass("goC2");
      $bar3.addClass("goB3").removeClass("goC3");
      $cell.addClass("goBars");
    }
}
//Softly scroll page via navigation bars
$(".nav-link").click(function() {
  var href = $(this).attr("href");
  $(".navbar-collapse").collapse('show');
  toggleNav();
  if (href=="home") {
    $("html, body").animate({scrollTop: 0},"slow"); //Top of page
  } else {
    $("html, body").animate({
        scrollTop: $(href).offset().top-75 
    },"slow"); //Offset to section head
  }
});
//Loops through linking the footer buttons
$("#footer button").click(function(){
  var linkArray = [
    "mailto:someone@example.com", //Email
    "https://www.linkedin.com/in/leander-rodrigues", //LinkedIn
    "https://github.com/leeandher", //GitHub
    "https://codepen.io/leeandher", //Codepen
    "https://www.freecodecamp.org/leeandher", //freeCodeCamp

    "https://www.facebook.com/leeandher", //Facebook
    "https://twitter.com/LeeAndHer", //Twitter
    "https://www.dropbox.com/s/ottzkbdj6tz6hct/snapcode.jpg?raw=1", //Snapchat
    "https://www.instagram.com/leandergrodrigues/", //Instagram
    "http://steamcommunity.com/id/LeeAndHer" //Steam
  ];
  var linkIndex = 
    $(this).parent().index()===0 ? 
    $(this).index() :
    $(this).index()+5;
  window.open(linkArray[linkIndex-1]);
});