$('.fold-head').prop('tabindex', '0');
$('.resume-area a, .resume-area button').prop('tabindex', '-1');

function assignInnerTabIndeces(sectionId) {
  $(sectionId + ' a, ' + sectionId + ' button').prop('tabindex', $(sectionId).hasClass('enabled') ? '0' : '-1');
}

$('.fold-head').click(function() {
  var thisSectionId = '#' + $(this).parent().prop('id');
  $(thisSectionId).toggleClass('enabled');
  assignInnerTabIndeces(thisSectionId);
});

$('.fold-head').keypress( function(e) { return e.which === 13 ? $(this).click() : null; } );

$('.close-area').click(function() {
  var thisSectionId = '#' + $(this).parent().parent().prop('id');
  $(thisSectionId).removeClass('enabled');
  assignInnerTabIndeces(thisSectionId);
  $('html, body').animate({scrollTop: $(thisSectionId).offset().top-52}, 200);
});
