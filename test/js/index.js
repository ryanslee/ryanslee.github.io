// Test doc

$(document).ready(function() {

	$("a").click(function(event) {
		alert("Nope, not taking you there!");
		event.preventDefault();
		$(this).hide("slow")
	});

	$("a").addClass("test");
	// $("a").removeClass("test");

});