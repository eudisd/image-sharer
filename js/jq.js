$(document).ready(function(){

	$('#about_box').hide();

	$('#about_btn').click(function() {
		if( $('#about_box').is(':visible') ) {
			$('#about_box').hide();	
		}
		else {
			$('#about_box').show();
		}
	});
});
