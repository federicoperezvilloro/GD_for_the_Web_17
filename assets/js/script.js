$(document).ready(function(){

	/* MAKE ANCHOR LINKS SMOOTHLY SCROLL */

	$('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $(this).attr('href') ).offset().top
	    }, 500);
	    return false;
	});

	/* CALENDAR TOGGLE */

	$('ul.calendar .title').click(function(){
		$(this).closest('li').find('.body').slideToggle('fast');
	});

});