//Array.includes() Mozilla Recommended Polyfill:
// https://tc39.github.io/ecma262/#sec-array.prototype.includes
if (!Array.prototype.includes) {
  Object.defineProperty(Array.prototype, 'includes', {
    value: function(searchElement, fromIndex) {

      if (this == null) {
        throw new TypeError('"this" is null or not defined');
      }

      // 1. Let O be ? ToObject(this value).
      var o = Object(this);

      // 2. Let len be ? ToLength(? Get(O, "length")).
      var len = o.length >>> 0;

      // 3. If len is 0, return false.
      if (len === 0) {
        return false;
      }

      // 4. Let n be ? ToInteger(fromIndex).
      //    (If fromIndex is undefined, this step produces the value 0.)
      var n = fromIndex | 0;

      // 5. If n ≥ 0, then
      //  a. Let k be n.
      // 6. Else n < 0,
      //  a. Let k be len + n.
      //  b. If k < 0, let k be 0.
      var k = Math.max(n >= 0 ? n : len - Math.abs(n), 0);

      function sameValueZero(x, y) {
        return x === y || (typeof x === 'number' && typeof y === 'number' && isNaN(x) && isNaN(y));
      }

      // 7. Repeat, while k < len
      while (k < len) {
        // a. Let elementK be the result of ? Get(O, ! ToString(k)).
        // b. If SameValueZero(searchElement, elementK) is true, return true.
        if (sameValueZero(o[k], searchElement)) {
          return true;
        }
        // c. Increase k by 1.
        k++;
      }

      // 8. Return false
      return false;
    }
  });
}

var pageItemId = '#' + $('.media').prop('id').split('-')[0] + '-';
//When a tag button is clicked
$('#utility .btn-tag').click(function() {
  //Toggle the tag state
  $(this).toggleClass('enabled');
  //Create an array of enabled filters
  var filters = [];
  $('#utility').children('button').each(function() {
    if (this.classList.contains('enabled')) filters.push(this.innerHTML);
  });

  //Default to displaying everything (no filters)
  $('.media').css('display', 'block');
  $('#error').css('display', 'none');

  //If there are filters enabled
  if (filters.length) {
    //Disable every article
    var itemsShown = 0;
    $('.media').css('display', 'none');
    //Loop through media
    for (var i = 1; i <= $('#archive .flex-group').children().length; i++) {
      //Gather media's tags
      var mediaTags = [];
      $(pageItemId + i + ' .tags').children().each(function() {
        mediaTags.push(this.innerHTML);
      });
      //Checks if this media should be shown, and follows through
      var checkThisMedia = filters.every(function(x) {
        return mediaTags.includes(x);
      });
      if (checkThisMedia) {
        $(pageItemId + i).css('display', 'block');
        itemsShown++;
      }
    }
    //If no articles are shown, show an error
    if (!itemsShown) $('#error').css('display', 'block');
  }
});
