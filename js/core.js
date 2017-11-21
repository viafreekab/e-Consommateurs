$(function() {
	
	$('.submit').live('click', function() {
		formObject.submit($(this));
		return false;
	});
	
	$('#contact-form').live('submit', function() {
		formObject.contact($(this));
		return false;
	});

});





