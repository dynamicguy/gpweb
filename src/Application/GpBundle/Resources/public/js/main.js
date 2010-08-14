(function($)
{
    $('a.js_confirm, input.js_confirm').live('click', function(e)
    {
      e.stopPropagation();
      if (!confirm(($(this).attr('title') || 'Are you sure') + ' ?'))
      {
        return false;
      }

      return true;
    });

})(jQuery);

var _jQueryAjax = $.ajax;
$.ajax = function(o) {
    o.error = function() {
        location.href = miam_config.home_url;
    };
    return _jQueryAjax(o);
}
