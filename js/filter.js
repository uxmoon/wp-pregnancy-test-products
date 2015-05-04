// A bunch of helper methods for reading GET variables etc from the URL
jQuery.extend({
    urlGetVars : function() {
        var GET = {};
        var tempGET = location.search;
        tempGET = tempGET.replace('?', '').split('&');
        for(var i in tempGET) {
            var someVar = tempGET[i].split('=');
            if (someVar.length == 2) {
                GET[someVar[0]] = someVar[1];
            }
        }
        return GET;
    },
    urlGetVar : function(name) {
        return $.urlGetVars()[name];
    },
    serializeUrlVars : function(obj) {
        var str = [];
        for(var p in obj)
         str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
        return str.join("&");
    },
    currentUrl : function() {
        return window.location.href.slice(0,window.location.href.indexOf('?'));
    }
});

// Adds functionality to filter content using a dropdown
var ContentFilter = function ($) {
    $(document).ready(function() {
        // Return to a scroll position if exists
        var scroll = $.urlGetVar('scroll');
        if (typeof scroll != 'undefined') {
            $(window).scrollTop(scroll);
        }
        // Prepare the filter dropdowns
        $('.content-filter').each(function(){
            var me = $(this);
            // e.g. content-filter-product
            var id = me.attr('id');
            // Refresh with selected filter on change
            var refresh = function() {
                var GET = $.urlGetVars();
                GET[id] = me.val();
                // Save scroll position, return to this position on load
                GET['scroll'] = $(window).scrollTop();
                var newVar = $.currentUrl() + '?' + $.serializeUrlVars(GET);
                window.location = newVar;
            };
            me.change(refresh);
        });
    });
}(jQuery);