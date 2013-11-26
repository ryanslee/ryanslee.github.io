$(document).ready(function() {

	$(".onoffswitch input").click(function() {
		if ($('body').hasClass('active')) {
			$('body').removeClass('active');			
			$('body').addClass('inactive');			
		}
		else {
			$('body').addClass('active');			
			$('body').removeClass('inactive');			
		}
	});

	$(".onoffswitch input").click(function() {
		if ($('h1').hasClass('active')) {
			$('h1').removeClass('active');			
			$('h1').addClass('inactive');			
		}
		else {
			$('h1').addClass('active');			
			$('h1').removeClass('inactive');			
		}
	});

	$(".onoffswitch input").click(function() {
		if ($('nav').hasClass('active')) {
			$('nav').removeClass('active');			
			$('nav').addClass('inactive');			
		}
		else {
			$('nav').addClass('active');			
			$('nav').removeClass('inactive');			
		}
	});

});