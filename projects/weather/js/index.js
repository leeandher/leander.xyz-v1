//Declare variables for unit conversion
var unit = "C";
var currentTemp;

//Toggles extra information
$(".fa-angle-down").click(function() {
  $(this).toggleClass('enable');
  $(".details").toggleClass('override');
});

//Convert between C and F
$("button").click(function() {
  unit = 
    unit == "C" ? "F" : "C";
  currentTemp = 
    unit=="C" ? (currentTemp-32)/1.8 : currentTemp*1.8+32;
  $(".temperature").text(Math.round(currentTemp*10)/10 + String.fromCharCode(176) + unit);
});

//Obtain geolocation data
function findData() {
  navigator.geolocation.getCurrentPosition(function(position) {
    var userLat = position.coords.latitude;
    var userLon = position.coords.longitude;
    $.getJSON("https://fcc-weather-api.glitch.me/api/current?lat=" + userLat + "&lon=" + userLon,
      function(data) {
        console.log(data);
        currentTemp = Math.round(data.main.temp*10)/10;
        setData(data);
      }
    ); //End .getJSON
  }, function(error) {
    //Error function
    errText = 
      error.code == error.PERMISSION_DENIED ?
      'Please enable location services!':
      'Something went wrong :/';
    $('.error').text(errText);
  }); //End navigator.geolocation.getCurrentPosition
}
//Assign the data to the app interface
function setData(data) {
  console.log(data);
  $(".location").text(data.name + ", " + data.sys.country);
  $(".temperature").text(currentTemp + String.fromCharCode(176) + unit);
  $(".category").text(data.weather[0].main);
  setBackground(data.weather[0].main);
  $(".description").text(data.weather[0].description);
  var lat = 
    data.coord.lat >= 0 ?
    data.coord.lat + String.fromCharCode(176) + ' N':
    data.coord.lat*-1 + String.fromCharCode(176) + ' S';
  $(".lat").text(lat);
  var lon = 
    data.coord.lon >= 0 ?
    data.coord.lon + String.fromCharCode(176) + ' E':
    data.coord.lon*-1 + String.fromCharCode(176) + ' W';
  $(".lon").text(lon);
  $(".ws").text(data.wind.speed + ' m/s');
  $(".wd").text(data.wind.deg + String.fromCharCode(176) + ' CW of N');
  $(".hum").text(data.main.humidity + '%');
  $(".pres").text(data.main.pressure + ' hPa');
}
//Set the appropriate background per description
function setBackground(type) {
  switch (type) {
    case 'Mist':
    case 'Drizzle':
      $('body').css('background-image','url(https://goo.gl/E85ygx)');
      break;
    case 'Clouds':
      $('body').css('background-image','url(https://goo.gl/mcaYzE)');
      break;
    case 'Rain':
      $('body').css('background-image','url(https://goo.gl/nB3ybF)');
      break;
    case 'Snow':
      $('body').css('background-image','url(https://goo.gl/vmFG2g)');
      break;
    case 'Clear':
      $('body').css('background-image','url(https://goo.gl/mG8rQk)');
      break;
    case 'Thunderstorm':
      $('body').css('background-image','url(https://goo.gl/82Wn4F)');
      break;
  }
}

//On load, find data
$(document).ready(findData);

//Once data has been received
$(document).ajaxComplete(function() {
  $('.content').removeClass('d-none');
  $('.error').addClass('d-none');
});