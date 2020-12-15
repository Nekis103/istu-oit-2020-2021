var $btnTop = $(".btn-top")
$(window).on("scroll", function(){
	
	if($(window).width() > 1024) {
		if ($(window).scrollTop() >= 20) {
	$btnTop.fadeIn();
	} 
	else {
	$btnTop.fadeOut();
	}
	}
});
 
$btnTop.on("click",function(){
	$("html, body").animate({ scrollTop: 0 }, 600);

});
 

$(function(){
  $('.minimized').click(function(event) {
    var i_path = $(this).attr('src');
    $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
    $('#magnify').css({
	    left: ($(document).width() - $('#magnify').outerWidth())/2,
	    
            top: ($(window).height() - $('#magnify').outerHeight())/2
	  });
    $('#overlay, #magnify').fadeIn('fast');
  });
  
  $('body').on('click', '#close-popup, #overlay', function(event) {
    event.preventDefault();
 
    $('#overlay, #magnify').fadeOut('fast', function() {
      $('#close-popup, #magnify, #overlay').remove();
    });
  });
});
