
$( function () {









/*
 *
 * Brochure form submission
 *
 */
$( document ).on( "submit", ".js_checkin_form", function ( event ) {

	/* -----
	 * Prevent the default form submission behaviour
	 * 	which triggers the loading of a new page
	 ----- */
	event.preventDefault();

	var $form = $( event.target );


	/* -----
	 * Disable the form
	 ----- */
	$form.find( "input, select, textarea, button" ).prop( "disabled", true );
	$form.find( "[ type = 'submit' ]" ).text( "Sending" );


	/* -----
	 * Pull the data from the form
	 ----- */
	// name
	$name = $form.find( "[ name = 'name' ]" );
	// address
	$email = $form.find( "[ name = 'email' ]" );

	/* -----
	 * Sanitize and Validate the data
	 ----- */
	// Remove any prior "error"s
	$form.find( ".form-error" ).removeClass( "form-error" );
	// name
	if ( ! $name.val().trim() ) {
		$name.addClass( "form-error" );
		alert( "Please provide your name." );
	}
	// email
	if ( $email.val().trim().length < 3 || ! $email.val().includes( "@" ) ) {
		$email.addClass( "form-error" );
		alert( "Please provide your email address." );
	}
	// If the form has even one error ( i.e. validation issue )
	// do not proceed
	if ( $form.find( ".form-error" ).length ) {
		$form.find( "input, select, textarea, button" ).prop( "disabled", false );
		$form.show();
		return;
	}


	/* -----
	 * Process and Assemble the data
	 ----- */
	var name = $name.val().trim();
	var names = name.split( /\s+/ );
	var firstName = names[ 0 ];
	var lastName = names.slice( 1 ).join( " " );
	var email = $email.val().trim();
	var userInternalCRMId = __OMEGA.user._id;
	var project = __OMEGA.user.project;
	var information = {
		"First Name": firstName,
		"Last Name": lastName,
		"Email": email
	};


	/* -----
	 * Submit the data
	 ----- */
	__OMEGA.utils.updateUser( userInternalCRMId, project, information )
		.then( function () {
			/* -----
			 * Provide some feedback
			 ----- */
			$form.closest( ".js_section_checkin_form" ).slideUp( 500, function () {
				// Show the "New Customer Welcome" section
				var $newCustomerWelcomeSection = $( ".js_section_new_customer" );
				$newCustomerWelcomeSection.find( ".js_name" ).text( name );
				$newCustomerWelcomeSection.slideDown();

				// Set the page to clear out its cookies and refresh after a bit
				setTimeout( () => window.location.reload(), 10 * 60 * 1000 );
			} );
		} )
		.catch( function () {
			alert( "Sorry. Something wen't wrong. Please try again in a few minutes." );
			$form.find( "input, select, textarea, button" ).prop( "disabled", false );
		} );

} );









} );
