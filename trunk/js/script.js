$( document ).ready(function() {
	
	$('#invisible').hide();
	
$('#invisible').click(function(){
	$('#topSettings ul').fadeOut();
	$('#invisible').fadeOut();
});
	
$('#topMenu').click(function(){
	$('#topSettings ul').fadeToggle();
	$('#invisible').fadeToggle();
});

$(window).resize(function(){  
    var w = $(window).width();  
    if(w > 950 && $('#topSettings ul').is(':hidden')) {  
    	$('#topSettings ul').removeAttr('style');
    }
});

});