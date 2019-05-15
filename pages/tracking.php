<?php
/*
 *
 * This page is dedicated for capturing all URLs that start with "trac".
 * 	It simply loads all the tracking and analytics code.
 *
 */

// Get utility functions
require_once __DIR__ . '/../inc/utils.php';
// Include WordPress for Content Management
initWordPress();

// Just so that when some social media service (WhatsApp) try to ping URL,
//  	it should not get a 404. This because is setting the response header.
http_response_code( 200 );

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">

		<?php echo getContent( '', 'arbitrary_code_head_bottom' ); ?>

	</head>

	<body>

		<?php echo getContent( '', 'arbitrary_code_body_top' ); ?>

		<script type="text/javascript">

			/*
			 * This function returns a version of the function that you provide
			 * 	that runs only for the first time, regardless of how many times
			 * 	it is called.
			 */
			function runFunctionOnlyOnce ( fn ) {
				var calledAtleastOnce = false;
				return function ( event ) {
					if ( calledAtleastOnce )
						return;
					calledAtleastOnce = true;
					fn( event );
				}
			}

			/*
			 * Report a status of "ready" back to the parent page
			 */
			var reportStatusOfReady = runFunctionOnlyOnce( function ( event ) {
				console.log( "ready." );
				setTimeout( function () {
					window.parent.postMessage( {
						status: "ready"
					}, location.origin );
				}, 1000 );
			} );

			/*
			 * Attach the `reportStatusOfReady` to a bunch of DOM-ready related
			 * 	events.
			 */
			document.onreadystatechange = function () {
				if ( document.readyState == "interactive" )
					reportStatusOfReady();
			};
			window.DOMContentLoaded = reportStatusOfReady;
			window.onload = reportStatusOfReady;

		</script>

	</body>

</html>
