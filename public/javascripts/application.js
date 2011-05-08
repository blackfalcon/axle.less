var domChangeCallbacks = function(){
	// increases target size of link to be whole block element
  $('.linkBox').die('click');
	$(".linkBox").live('click', function(){
		window.location=$(this).find("a").attr("href");
		return false;
	});
	
	// one click select of form field content
  $('input[maxlength=3]').die('click');
	$("input[maxlength=3]").live('click', function(){
		this.select();
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
};


////// function to force onload UI elements to load post ajax call
jQuery(document).ready(function($) {
  domChangeCallbacks();
});

$(document).bind('ajaxComplete', function(){
  domChangeCallbacks();
});
////// function to force onload UI elements to load post ajax call


//// function to get hex value to appear on color guide
function rgb2hex(rgb) {
    rgb = rgb.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/);
    function hex(x) {
        return ("0" + parseInt(x).toString(16)).slice(-2);
    }
    return ("#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3])).toUpperCase();
}

$(document).ready(function() {
  $('article.colorcode').children('div').each(function(index, BlockColor){
    var color = $(BlockColor).css("background-color"); 
    $(BlockColor).children().append('<br>' + '<b>' + rgb2hex(color) + '</b>');
  });
});
//// function to get hex value to appear on color guide



/*
CSS Browser Selector v0.4.0 (Nov 02, 2010)
Rafael Lima (http://rafael.adm.br)
http://rafael.adm.br/css_browser_selector
License: http://creativecommons.org/licenses/by/2.5/
Contributors: http://rafael.adm.br/css_browser_selector#contributors
*/
function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);
