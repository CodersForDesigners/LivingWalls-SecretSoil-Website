
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->
			<!-- Page-specific content goes here. -->
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->

		</div> <!-- END : Page Content -->


		<!-- Lazaro Signature -->
		<?php lazaro_signature(); ?>
		<!-- END : Lazaro Signature -->

	</div><!-- END : Page Wrapper -->

	<?php require_once 'modals.php' ?>

	<!--  ☠  MARKUP ENDS HERE  ☠  -->

	<?php lazaro_disclaimer(); ?>









	<!-- JS Modules -->
	<!-- <script type="text/javascript" src="js/modules/device-charge.js"></script> -->
	<script type="text/javascript" src="js/modules/video_embed.js<?= $ver ?>"></script>
	<script type="text/javascript" src="js/modules/modal_box.js<?= $ver ?>"></script>
	<script type="text/javascript" src="js/modules/omega/utils.js<?= $ver ?>"></script>
	<script type="text/javascript" src="js/modules/omega/user.js<?= $ver ?>"></script>
	<script type="text/javascript" src="js/modules/phone-forms.js<?= $ver ?>"></script>
	<!-- <script type="text/javascript" src="js/modules/disclaimer.js"></script> -->
	<script type="text/javascript" src="js/modules/navigation.js<?= $ver ?>"></script>
	<script type="text/javascript" src="js/modules/carousel.js<?= $ver ?>"></script>
	<script type="text/javascript" src="js/forms.js<?= $ver ?>"></script>

	<!-- Other Modules -->
	<?php // require __DIR__ . '/inc/can-user-hover.php' ?>

	<script type="text/javascript">

		$( function () {
			__OMEGA.utils.getUser( { meta: true } ).then( function ( user ) {
				// Log the user in
				__OMEGA.utils.loginUser( user );
				// Log the visit
				__OMEGA.utils.addNoteToUser( "Omega Event Log",
					"Customer VIEWED the \"Secret Soil\" project webpage."
				).catch( function ( e ) {
					console.log( e.message )
				} );
			} );
		} );

	</script>


	<?php
		/*
		 * Arbitrary Code ( Bottom of Body )
		 */
		echo getContent( '', 'arbitrary_code_body_bottom' );
	?>


</body>

</html>
