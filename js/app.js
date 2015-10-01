$(function() {
    
	// Get the form.
	var form = $('#ajax-contact');

	// Get the messages div.
	var formMessages = $('#form-messages');
	$(formMessages).hide();
	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			// Set the message text.
			
			$(formMessages).html(response);
			$(formMessages).show();
setTimeout(function() {
        $(formMessages).hide();
    }, 7000);

			// Clear the form.
			$('#name').val('');
			$('#email').val('');
			$('#message').val('');
			$('#phone').val('');

		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');
$(formMessages).show();
setTimeout(function() {
        $(formMessages).hide();
    },5000);
			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).html(data.responseText);
			} else {
				$(formMessages).html('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});
