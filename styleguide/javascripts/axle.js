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