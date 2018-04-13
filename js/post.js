
$('.fa-link').click(function() {
  var textArea = document.createElement("textarea");
  textArea.value = location.href;
  document.body.appendChild(textArea);
  textArea.select();
  var indicColor = document.execCommand('copy') ? '#4DCC62' : '#CC4756';
  $('.fa-link').css('background-color', indicColor);
  window.setTimeout(function() { $('.fa-link').css('background-color', 'transparent'); },500);
  document.body.removeChild(textArea);
});