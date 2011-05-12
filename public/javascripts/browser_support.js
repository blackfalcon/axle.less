jQuery(document).ready(function($) {
	// MS IE support for nth child operations
	if ($.browser.msie) {
		$('button:nth-child(1n+2)').addClass('secondary_button');
		$('.dual_primary_buttons button:nth-child(1n+2)').removeClass('secondary_button');
		$('.dual_primary_buttons button:nth-child(n+2)').addClass('primary-button');
		$('.dual_primary_buttons button:nth-child(n+3)').removeClass('primary-button');
		$('.dual_primary_buttons button:nth-child(n+3)').addClass('secondary_button');
		$('.small_buttons button:nth-child(n+2)').addClass('height_auto');
	}
});