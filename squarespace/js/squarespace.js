$(document).ready(function(){
    // show popup when you click
    $('.one').click(function(event){
        event.preventDefault(); // disable normal link function so that it doesn't refresh the page
        $('.one-bg').show(); //display popup
    });

    // hide popup when user clicks on close button
    $('.close-btn').click(function(){
    	$('.one-bg').hide(); // hide the overlay
    });

    // hides the popup if user clicks anywhere outside the container
    $('.one-bg').click(function(){
    	$('.one-bg').hide();
    })
    // prevents the overlay from closing if user clicks inside the popup overlay
    $('.one-content').click(function(){
		return false;
	});



    // show popup when you click
    $('.two').click(function(event){
        event.preventDefault(); // disable normal link function so that it doesn't refresh the page
        $('.two-bg').show(); //display popup
    });

    // hide popup when user clicks on close button
    $('.close-btn').click(function(){
        $('.two-bg').hide(); // hide the overlay
    });

    // hides the popup if user clicks anywhere outside the container
    $('.two-bg').click(function(){
        $('.two-bg').hide();
    })
    // prevents the overlay from closing if user clicks inside the popup overlay
    $('.two-content').click(function(){
        return false;
    });



        // show popup when you click
    $('.three').click(function(event){
        event.preventDefault(); // disable normal link function so that it doesn't refresh the page
        $('.three-bg').show(); //display popup
    });

    // hide popup when user clicks on close button
    $('.close-btn').click(function(){
        $('.three-bg').hide(); // hide the overlay
    });

    // hides the popup if user clicks anywhere outside the container
    $('.three-bg').click(function(){
        $('.three-bg').hide();
    })
    // prevents the overlay from closing if user clicks inside the popup overlay
    $('.three-content').click(function(){
        return false;
    });	



        // show popup when you click
    $('.four').click(function(event){
        event.preventDefault(); // disable normal link function so that it doesn't refresh the page
        $('.four-bg').show(); //display popup
    });

    // hide popup when user clicks on close button
    $('.close-btn').click(function(){
        $('.four-bg').hide(); // hide the overlay
    });

    // hides the popup if user clicks anywhere outside the container
    $('.four-bg').click(function(){
        $('.four-bg').hide();
    })
    // prevents the overlay from closing if user clicks inside the popup overlay
    $('.four-content').click(function(){
        return false;
    });

});