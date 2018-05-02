//Initate streamers array with default names
var streamers = [
  //Full List
  "brownman",   
  "captainsparklez",
  "colinnorthway",  
  "cretetion",
  "dochollis",
  //5
  "drdisrespectlive",
  "eleaguetv",
  "emerald_activities",
  "esl_csgo",
  "esl_sc2",  
  //10
  "freeCodeCamp",
  "gosu",
  "hyperrpg",
  "iijeriichoii",
  "imaqtpie", 
  //15
  "joshog",
  "kittyplays",
  "lirik",  
  "locxion",  
  "markiplier",
  //20 
  "nightblue3",
  "ninja",
  "noobs2ninjas",
  "obumble",
  "officialbjergsen",
  //25
  "ogamingsc2",
  "omgitsfirefoxx",
  "riotgames",
  "shroud", 
  "sodapoppin", 
  //30
  "summit1g",
  "the_monotonist",
  "timthetatman",
  "vrdevschool", 
  "vrscout",
  "zimtok5tv"
  //36
];
//Coordinates with HTML max number of streamers
var maxStreamers = 50;
//Initiate streamer name validator
var invalidEntry = false;
//Initate AJAX request counter
var reqCount = 0;
//Initiate twitchData array
var twitchData = [];

//Complete the AJAX requests and create arrays of data
function fetchData() {
  twitchData = []; reqCount = 0;
  //Populates empty twitchData array coordinating with the current streamers entry, and counts requests as it goes
  for (i = 0; i < streamers.length; i++) {
    twitchData.push({});
    //Twitch 'Channels' API Request
    $.ajax({
      type: "GET",
      url:
        "https://wind-bow.gomix.me/twitch-api/channels/" +
        streamers[i] +
        "?callback=?",
      dataType: "json",
      ajaxI: i,
      success: function(channels) {
        var i = this.ajaxI;
        twitchData[i].banner = channels.profile_banner;
        twitchData[i].logo = channels.logo;
        twitchData[i].name = channels.display_name;
        twitchData[i].status = channels.status;
        twitchData[i].totalViews = channels.views;
        twitchData[i].url = channels.url;
        reqCount++;
      },
      error: function() {
        console.log('error');
      }
    });
    //Twitch 'Streams' API Request
    $.ajax({
      type: "GET",
      url:
        "https://wind-bow.gomix.me/twitch-api/streams/" +
        streamers[i] +
        "?callback=?",
      dataType: "json",
      ajaxI: i,
      success: function(streams) {
        var i = this.ajaxI;
        twitchData[i].isLive = Boolean(streams.stream);
        if (twitchData[i].isLive) {
          twitchData[i].liveColor = "rgb(92, 184, 92)";
          twitchData[i].liveColorFaded = "rgba(92, 184, 92, 0.7)";
          twitchData[i].liveViewers = streams.stream.viewers;
          twitchData[i].game = streams.stream.game;
        } else {
          twitchData[i].liveColor = "rgb(217, 83, 79)";
          twitchData[i].liveColorFaded = "rgba(217, 83, 79, 0.7)";
          twitchData[i].game = "";
        }
        reqCount++;
      }
    });
    //Twitch 'Users' API Request
    $.ajax({
      type: "GET",
      url:
        "https://wind-bow.gomix.me/twitch-api/users/" +
        streamers[i] +
        "?callback=?",
      dataType: "json",
      ajaxI: i,
      success: function(users) {
        var i = this.ajaxI;
        twitchData[i].bio = users.bio;
        reqCount++;
      }
    });
  }
}

//Fill in the data once ready
function populate() {
  for (i = 0; i < streamers.length; i++) {
    //Validates if streamer name is valid
    if (!twitchData[i].name) {
      console.log(streamers[i] + ' is not a valid Twitch.tv username')
      streamers.splice(i,1);
      twitchData.splice(i,1);
      reqCount-=3;
      invalidEntry = true;
    }
    //Fills the cards with information about the streamer
    $("#result" + i)
      .find(".card-img-top")
      .attr("src", twitchData[i].banner);
    $("#result" + i)
      .find(".logo")
      .attr("src", twitchData[i].logo);
    $("#result" + i)
      .find(".card-title")
      .text(twitchData[i].status);
    $("#result" + i)
      .find(".card-subtitle")
      .text(twitchData[i].bio);
    $("#result" + i)
      .find(".card-text")
      .html(
        "<br>Total lifetime views: <strong>" +
          twitchData[i].totalViews.toLocaleString() +
          "</strong>"
      );
    $("#result" + i).attr("href", twitchData[i].url);
    if (twitchData[i].isLive) {
      //If the streamer is live, show their current viewership and current game
      $("#result" + i)
        .find(".card-text")
        .prepend(
          "<br>Live viewer count: <strong>" +
            twitchData[i].liveViewers.toLocaleString() +
            "</strong>"
        );
      $("#result" + i)
        .find(".head")
        .html(twitchData[i].name + '<span> - ' + twitchData[i].game + '</span>');
    } else {
      //If not, show them as offline
      $("#result" + i)
        .find(".head")
        .html(twitchData[i].name + '<span> - Offline</span>');
    }
  }
}

//Loads upon page readiness
$(document).ready(function() {
  fetchData();
  if ($(window).height() < $(".navbar").height()) {
    $(".navbar").removeClass("sticky-top");
  }
});

//Checks if all AJAXRequests have been completed
$(document).ajaxComplete(function() {
  if (reqCount == streamers.length * 3) {
    populate();
    if (invalidEntry) {
      $("#add-streamer").attr('placeholder','INVALID ENTRY');
      invalidEntry = false;
    } else {
      $("#add-streamer").attr('placeholder','ADD STREAMER');
    }
    for (i = 0; i < streamers.length; i++) {
      $("#hold-loading").addClass("d-none");
      $("#result" + i).removeClass("d-none");
    }
  }
});

//Card hover emphasis
$(".card").hover(
  function() {
    var i = $(this)
      .attr("id")
      .substr(6);
    $(this).css("box-shadow", "-10px 0px " + twitchData[i].liveColor);
  },
  function() {
    $(this).css("box-shadow", "none");
  }
);
//Focus borders and emphasis
$(".card").focusin(function() {
  var i = $(this)
    .attr("id")
    .substr(6);
  $(this).css("box-shadow", "0 0 0 0.3rem " + twitchData[i].liveColorFaded);
});
$(".card").focusout(function() {
  $(this).css("box-shadow", "none");
});

//Toggle other buttons in set
function toggleSet(buttonId, set) {
  $(set + " button").removeClass("active");
  $(buttonId).toggleClass("active");
  if(set == '#sorts') {
    for (i = 0; i < streamers.length; i++) {
      $("#hold-loading").removeClass("d-none");
      $("#result" + i).addClass("d-none");
    }
  }
}
//Filter functions
$("#filter-all").click(function() {
  toggleSet("#filter-all", "#filters");
  for (i = 0; i < streamers.length; i++) {
    $("#result" + i).removeClass("d-none");
  }
});
$("#filter-online").click(function() {
  toggleSet("#filter-online", "#filters");
  for (i = 0; i < streamers.length; i++) {
    !twitchData[i].isLive ? 
      $("#result" + i).addClass("d-none") : 
      $("#result" + i).removeClass("d-none");
  }
});
$("#filter-offline").click(function() {
  toggleSet("#filter-offline", "#filters");
  for (i = 0; i < streamers.length; i++) {
    twitchData[i].isLive ? 
      $("#result" + i).addClass("d-none") : 
      $("#result" + i).removeClass("d-none");
  }
});
$("#filter-search").keyup(function(e) {
  toggleSet("#search", "#filters");
  for (i = 0; i < streamers.length; i++) {
    var title = twitchData[i].name.toLowerCase();
    var game = twitchData[i].game.toLowerCase();
    var input = $(this).val().toLowerCase();
    if (title.search(input)==-1 && game.search(input)==-1) {
      $("#result" + i).addClass("d-none");
    } else {
      $("#result" + i).removeClass("d-none");
    }
  }
});
//Sort functions
$("#sort-az").click(function(){
  toggleSet("#sort-az", "#sorts");
  toggleSet("#filter-all", "#filters");
  streamers.sort();
  fetchData();
});
$("#sort-live").click(function(){
  toggleSet("#sort-live", "#sorts");
  toggleSet("#filter-all", "#filters");
  var temp = streamers.map(function(x,i) {
    return {val: x, ind: i};
  });
  temp.sort(function(a,b) {
    return twitchData[a.ind].isLive ? -1 : 1;
  });
  streamers = temp.map(function(x){return x.val;});
  fetchData();
});
$("#sort-pop").click(function(){
  toggleSet("#sort-pop", "#sorts");
  toggleSet("#filter-all", "#filters");
  var temp = streamers.map(function(x,i) {
    return {val: x, ind: i};
  });
  temp.sort(function(a,b){
    return twitchData[b.ind].totalViews - twitchData[a.ind].totalViews;
  });
  streamers = temp.map(function(x){return x.val;});
  fetchData();
});
//Add function
$("form").submit(function(e) {
  e.preventDefault();
  var entry = $("#add-streamer").val().toLowerCase();
  if (streamers.includes(entry)) {
    //Flag as repeat
    $('#add-streamer').attr('placeholder', 'REPEAT ENTRY');
  } else if (streamers.length == maxStreamers) {
    //Flag if maximum entries reached
    $('#add-streamer').attr('placeholder', 'MAX ENTRIES');
  } else {
    //Add the entry and process
    $('#add-streamer').attr('placeholder', 'LOADING...');
    streamers.unshift(entry);
    fetchData();
  }
  $('#add-streamer').val("");
});