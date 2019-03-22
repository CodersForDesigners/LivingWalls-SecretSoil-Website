
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
var $amenitiesFormSite = $( "[ data-loginner = 'Amenities' ]" );
Loginner.registerLoginPrompt( "Amenities", {
	onTrigger: function ( event ) {
		$amenitiesFormSite
			.find( ".loginner_form_phone" )
				.removeClass( "hidden" )
				.find( ".js_phone_number" )
					.get( 0 ).focus();
	}
} );
