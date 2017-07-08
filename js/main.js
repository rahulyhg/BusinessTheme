jQuery(document).ready(function($) {
	
	$(".searchIcon").click(function(event) {
		event.preventDefault();
		$(".searchWrapper").toggleClass("showForm");
	});

	$(".searchMenu").click(function(event) {
		event.preventDefault();
		$(".searchWrapper").toggleClass("showForm");
		$(".headerNav").removeClass("showMenu");
	});

	$(".burgerButton").click(function(event) {
		event.preventDefault();
		$(".headerNav").toggleClass("showMenu");
		$(".searchWrapper").removeClass("showForm");
	});

});