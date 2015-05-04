jQuery(document).ready(function() {

     jQuery(".ajax-click").click(function() {
        jQuery("#loading-animation").show();
        var post_id = $(this).parent("li").attr("id");
        var ajaxURL = MyAjax.ajaxurl;

        jQuery.ajax({
        type: 'POST',
        url: ajaxURL,
        data: {"action": "load-content", post_id: post_id },
        success: function(response) {
             jQuery("#container-help-page").html(response);
             jQuery("#loading-animation").hide();
        return false;
    }
});
});
});
