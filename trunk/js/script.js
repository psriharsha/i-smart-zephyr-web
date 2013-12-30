$( document ).ready(function() {
	
	$('#invisible').hide();
	
$('#invisible').click(function(){
	closeMenu();
});
	
$('#topMenu').click(function(){
	$('#topSettings ul').fadeToggle();
	$('#invisible').fadeToggle();
});

$('#menuHolder').click(function(){
	$('#menu ul').slideToggle();
});

$(window).resize(function(){  
    var w = $(window).width();  
    if(w > 600 && $('#topSettings ul').is(':hidden')) {  
    	$('#topSettings ul').removeAttr('style');
    	$('#menu ul').removeAttr('style');
    }
    else if(w > 600){
    	$('#menu ul').removeAttr('style');
    }
    else if(w<=950 && $('#topSettings ul').is(':hidden')){
    	closeMenu();
    }
});

/*$(window).bind('scroll', function() {
    if ($(window).scrollTop() > 300) {
        $('#menuBg').addClass('fixed');
    }
    else {
        $('#menuBg').removeClass('fixed');
    }
});*/

function closeMenu(){
	$('#topSettings ul').fadeOut();
	$('#invisible').fadeOut();
}

});