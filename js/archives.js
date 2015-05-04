jQuery(function() {

	//jQuery("#archive-wrapper").height(jQuery("#archive-pot").height());
	jQuery("#archive-wrapper");

	jQuery("#archive-browser select").change(function() {
	
		jQuery("#archive-pot")
			.empty()
			.html("<div style='text-align: center;'>Cargando consultas...</div>");
	
		//var dateArray = jQuery("#month-choice").val().split("/");
		//var y = dateArray[3];
		//var m = dateArray[4];
		var c = jQuery("#cat").val();
		
		jQuery.ajax({
		
			url: "/archives-getter-2/",
			dataType: "html",
			type: "POST",
			data: ({
				//"evatest_y": y,
				//"evatest_m" : m,
				"evatest_c" : c
			}),
			success: function(data) {
				jQuery("#archive-pot").html(data);
				
				//jQuery("#archive-wrapper").animate({
				//height: jQuery("#archive-pot").height()
				//});
			
			}
			
		});
			
	});

});