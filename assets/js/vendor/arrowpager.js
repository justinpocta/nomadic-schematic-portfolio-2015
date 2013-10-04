/**
* ArrowPager
*
* @author     Soon Van - randomecho.com
* @copyright  2013 Soon Van
* @license    http://www.opensource.org/licenses/BSD-3-Clause
*/
$(document).keydown(function(e){
  if ($('.button-back').length && e.keyCode == 37)
  {
    // Trigger on left arrow key, only if class is present
    var prev_link = $('.button-back').attr('href').trim();
    if (prev_link !== undefined && prev_link != '#' && prev_link != '')
    {
      window.location.href = prev_link;
      return false;
    }
  }
  else if ($('.button-next').length && e.keyCode == 39)
  {
    // Trigger on right arrow key, only if class is present
    var next_link = $('.button-next').attr('href').trim();
    if (next_link !== undefined && next_link != '#' && next_link != '')
    {
      window.location.href = next_link;
      return false;
    }
  }
});
