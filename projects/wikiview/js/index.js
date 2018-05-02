var searchData;

//Uses the WikiAPI to collect data based on user input
function fetchData(search) {
  var apiRequest = "https://en.wikipedia.org/w/api.php?action=query&format=json&prop=extracts%7Cpageimages&generator=search&exintro=1&piprop=original%7Cname&pilimit=20&gsrsearch="+search+"&gsrlimit=20&callback=?";
  $.ajax({
    type: "GET",
    url: apiRequest,
    dataType: "json",
    success: function(data) {
      if (Object.values(data)[1] && !data.error) {
        //Normal search
        $("#noResults").addClass('d-none');
        searchData = Object.values(data.query.pages);
        fillData(); 
      } else {
        //If search bar is empty
        for (i=0; i<20; i++) {
          $("#result" + (i+1)).addClass('d-none');
        }
        //If no results are found
        if (!data.error) {
          $("#noResults").removeClass('d-none');
          $("#noResults").attr("href","https://en.wikipedia.org/w/index.php?title=Special:Search");
        }
      }
    },
    //API Request error
    error: function(){
        $("#noResults").removeClass('d-none');
        $("#noResults .sub").text('Wikipedia API Request Error');
        $("#noResults").attr("href","https://en.wikipedia.org/w/index.php?title=Special:Search");
      }
  });
}
//Uses the WikiAPI results to format resulting data into hyperlinks
function fillData() {
  for (i=0; i<searchData.length; i++) {
    //Creates link to article
    searchData[i].url = "https://en.wikipedia.org/wiki/" + searchData[i].title;
    //Identify the first sentence and display assign it to searchData[i].intro
    if (searchData[i].extract.indexOf('. ') != -1) {
      var sliceInd = searchData[i].extract.indexOf('. ')+1;
      searchData[i].intro = searchData[i].extract.slice(0, sliceInd);
    } else if (searchData[i].extract.indexOf(':') != -1) {
      var sliceInd = searchData[i].extract.indexOf(':')+1;
      searchData[i].intro = searchData[i].extract.slice(0, sliceInd);
    } else {
      searchData[i].intro = searchData[i].extract;
    }
    //Deletes unused data
    delete searchData[i].index;
    delete searchData[i].ns;
    delete searchData[i].pageid;
    //Formats result data in respective div
    $("#result" + (i+1) + " .sub").text(searchData[i].title);
    $("#result" + (i+1) + " .desc").text(searchData[i].intro.replace(/<(?:.|\n)*?>/gm, ''));
    searchData[i].extract = searchData[i].extract.replace(/\n/g,'\n<br>');
    $("#result" + (i+1)).removeClass('d-none');
  }
}

//Display modal with full first paragraph and photo (if available)
$(".col-md").click(function(){
  var id = parseInt($(this).attr('id').substr(6))-1;
  //Header
  $(".modal-title").text(searchData[id].title);
  $(".modal-title").attr('href', searchData[id].url);
  //Content
  $(".modal-body p").html('<img class="float-right">' + searchData[id].extract);
  //Photo
  searchData[id].hasOwnProperty('original') ?
    $(".modal-body img").attr('src', searchData[id].original.source) :
    $(".modal-body img").attr('src', '');
  //Footer share buttons
  $(".fa-facebook-f").attr('href','https://www.facebook.com/sharer/sharer.php?u='+searchData[id].url);
  $(".fa-twitter").attr('href','https://twitter.com/home?status='+searchData[id].url);
  $(".fa-google-plus-g").attr('href','https://plus.google.com/share?url='+searchData[id].url.replace(/ /g,'_'));
});

//Toggles font serif for the page
$(".header input").click(function(){
  $("body").toggleClass('sans-serif');
});

//Use the fetchData and fillData functions per keystroke and submit
$("form").submit(function(e) {
  e.preventDefault();
  fetchData($("#searchBar").val());
  $('.head').removeClass('location');
});
$("form input").keyup(function(e) {
  e.preventDefault();
  fetchData($("#searchBar").val());
  $('.head').removeClass('location');
});

//Changes the background color on result hover
$(".col-md").mouseenter(function() {
  $("html").css("background-color",'rgb('+
                (Math.floor(Math.random()*130)+125)+','+
                (Math.floor(Math.random()*130)+125)+','+
                (Math.floor(Math.random()*130)+125)+')');
});