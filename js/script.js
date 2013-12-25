$( document ).ready(function() {
	
	$('#invisible').hide();
	
$('#invisible').click(function(){
	closeMenu();
});
	
$('#topMenu').click(function(){
	$('#topSettings ul').fadeToggle();
	$('#invisible').fadeToggle();
});

$(window).resize(function(){  
    var w = $(window).width();  
    if(w > 600 && $('#topSettings ul').is(':hidden')) {  
    	$('#topSettings ul').removeAttr('style');
    }
    else if(w<=950 && $('#topSettings ul').is(':hidden')){
    	closeMenu();
    }
});

function closeMenu(){
	$('#topSettings ul').fadeOut();
	$('#invisible').fadeOut();
}

});