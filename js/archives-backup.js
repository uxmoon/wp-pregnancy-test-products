
jQuery(function() {

	jQuery("#archive-wrapper").height(jQuery("#archive-pot").height());

	jQuery("#archive-browser select").change(function() {
	
		jQuery("#archive-pot")
			.empty()
			.html("<div style='text-align: center; padding: 30px;'><img src='/wordpress/wp-content/themes/BLANK-Theme/images/progress.gif' /></div>");
	
		//var dateArray = jQuery("#month-choice").val().split("/");
		//var y = dateArray[3];
		//var m = dateArray[4];
		var c = jQuery("#cat").val();
		
		jQuery.ajax({
		
			url: "/wordpress/consultorio-online/",
			dataType: "html",
			type: "POST",
			data: ({
				//"digwp_y": y,
				//"digwp_m" : m,
				"digwp_c" : c
			}),
			success: function(data) {
				jQuery("#archive-pot").html(data);
				
				jQuery("#archive-wrapper").animate({
					height: jQuery("#archives-table tr").length * 50
				});
			
			}
			
		});
			
	});

});