//Copy Link function
$('#copy').click(function() {
  var textArea = document.createElement("textarea");
  textArea.value = location.href;
  document.body.appendChild(textArea);
  textArea.select();
  var indicColor = document.execCommand('copy') ? '#4DCC62' : '#CC4756';
  $('#copy').css('background-color', indicColor);
  window.setTimeout(function() { $('#copy').css('background-color', 'transparent'); },500);
  document.body.removeChild(textArea);
});
