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


//// function to get hex value to appear on color guide
function rgb2hex(rgb) {
    rgb = rgb.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*([\d\.]+))?\)$/);
    function hex(x) {
        return ("0" + parseInt(x).toString(16)).slice(-2);
    }
    if (rgb[1]!=0||rgb[2]!=0||rgb[3]!=0){
      return ("#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3])).toUpperCase();
    }
    else {
      return 'Gradient - Please use your web inspector';
    }
}

$(document).ready(function() {
  $('article.colorcode').children('div').each(function(index, BlockColor){
    var color = $(BlockColor).css("background-color"); 
    $(BlockColor).children().append('<br>' + '<b>' + rgb2hex(color) + '</b>');
  });
});
//// function to get hex value to appear on color guide