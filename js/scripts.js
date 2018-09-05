(function($) {
	"use strict"; // Start of use strict

    /**
	 * Main menu dropdown slidedown and slideup effects
	 */
	$('.dropdown').on('show.bs.dropdown', function(e){
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
	});
	
	$('.dropdown').on('hide.bs.dropdown', function(e){
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
	});	

})(jQuery); // End of use strict
