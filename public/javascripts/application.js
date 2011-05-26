jQuery(document).ready(function($) {
	// turns whole block element into clickable area
	$(".linkBox").click(function(){
		window.location=$(this).find("a").attr("href");
		return false;
	});
	
	// add autofocus support for non html5 browsers
	if (!("autofocus" in document.createElement("input"))) {
		$("#q").focus();
	}	
  
	//simple UI toggle support  
	$(".toggle").click(function () {
		$(".toggle").toggle();
	});
	
	// Auto opens all hrefs that point to external sites in another window
	$('a[href^="http://"]')
		.attr({
		target: "_blank", 
		title: "Opens in a new window"
	});
	
	// alert UI icons
	$('.alert-box').each(function(){
		if($(this).children('span.alert_icon').length < 1){
			$('<span class="alert_icon"></span>').prependTo($(this));
		}
	});

	$('.success-box').each(function(){
		if($(this).children('span.success_icon').length < 1){
			$('<span class="success_icon"></span>').prependTo($(this));
		}
	});

	$('.error-box').each(function(){
		if($(this).children('span.error_icon').length < 1){
			$('<span class="error_icon"></span>').prependTo($(this));
		}
	});
});