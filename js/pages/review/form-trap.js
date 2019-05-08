
/*
 *
 * Mask away the URLs from the anchor elements until after the traps are "traversed"
 *
 */
var $trapSites = $( ".loginner_form_phone" ).closest( "[ data-loginner ]" );
$trapSites.find( "a" ).each( function ( _i, domAnchor ) {
	var $anchor = $( domAnchor );
	var url = $anchor.attr( "href" );
	$anchor.removeAttr( "href" );
	$anchor.data( "href", url );
} );

/*
 *
 * Wire in the phone country code UI
 *
 */
$( document ).on( "change", ".js_phone_country_code", function ( event ) {
	var $countryCode = $( event.target );
	var countryCode = $countryCode.val().replace( /[^+0-9]/g, "" );
	$countryCode
		.closest( "form" )
		.find( ".js_phone_country_code_label" )
		.text( countryCode );
} );



/*
 *
 * Register all the phone traps
 *
 */
// -----
// 1. Define all hook functions that are common across all the phone traps
// -----
var onTrigger = function onTrigger ( event ) {
	var $triggerElement = $( event.target ).closest( ".js_user_required" )
	$triggerElement.addClass( "hidden" );
	var $trapSite = $triggerElement.closest( "[ data-loginner ]" );
	$trapSite
		.find( ".loginner_form_phone" )
			.removeClass( "hidden" )
			.find( ".js_phone_number" )
				.get( 0 ).focus();
};
var onPhoneValidationError = function onPhoneValidationError ( message ) {
	__OMEGA.utils.notify( message, {
		level: "error",
		context: "Login Prompt"
	} );
};
var onPhoneSend = function onPhoneSend () {
	$( this ).find( ".js_feedback_message" ).text( "Sending....." );
};
var onShowOTP = function ( domPhoneForm, domOTPForm ) {
	$( domPhoneForm ).addClass( "hidden" );
	$( domOTPForm ).removeClass( "hidden" );
};
var onOTPSend = function () {
	$( this ).find( ".js_feedback_message" ).text( "Sending....." );
};
var onPhoneError = function ( code, message ) {
	__OMEGA.utils.notify( message, {
		level: "error",
		context: "Login Prompt"
	} );
	console.log( message )
	$( this ).find( "[ type = submit ] span" ).text( "→" );
	$( this ).find( "input, select, button" ).prop( "disabled", false );
};
var onOTPError = function ( code, message ) {
	__OMEGA.utils.notify( message, {
		level: "error",
		context: "Login Prompt"
	} );
	$( this ).find( "[ type = submit ] span" ).text( "Send" );
	$( this ).find( "input, select, button" ).prop( "disabled", false );
};
var onOTPVerified = function ( context, phoneNumber ) {
	var url = "/trac/user/new/" + context;
	__OMEGA.utils.trackPageVisit( url );
};

// -----
// 2. Set the traps.....
// -----
// Review section
var $reviewFormSite = $( "[ data-loginner = 'Review' ]" );
Loginner.registerLoginPrompt( "Review", {
	context: "Walk-in at Site",
	onTrigger: onTrigger,
	onPhoneValidationError: onPhoneValidationError,
	onPhoneSend: onPhoneSend,
	onShowOTP: onShowOTP,
	onOTPSend: onOTPSend,
	onPhoneError: onPhoneError,
	onOTPError: onOTPError,
	onOTPVerified: onOTPVerified,
	onLogin: function ( user, context ) {
		if ( this ) {
			// Disable and Hide the form
			$( this )
				.find( "input, select, button" )
				.prop( "disabled", true );
			$( this ).addClass( "hidden" );

			// Bring back the button
			$reviewFormSite.find( ".js_user_required" )
				.removeClass( "hidden js_user_required" )
				.trigger( "submit" );
		}
	}
} );
