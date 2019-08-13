<?php
/*
 *
 * Request a Brochure
 * This is a page where people can request for a brochure to be delivered to them.
 *
 */

// Page-specific preparatory code goes here.

?>

<?php require_once __DIR__ . '/../inc/above.php'; ?>

<style type="text/css">
	body {
		background-color: var(--dark);
		background-image: url('media/section-bg/location-map-bg.png?v=20190409');
		background-position: center center;
		background-size: cover;
	}
</style>

<!-- Media Version <img src="media/logo.svg<?php //echo $ver ?>"> -->


<!-- Navigation Section : Menu 1 -->
<?php require_once __DIR__ . '/../inc/navigation.php' ?>
<!-- END: Navigation Section -->

<!-- Brochure Request Section -->
<section class="brochure-section space-double-top-bottom section-bg bottom" style="color: var(--light);">
	<div class="row">
		<div class="container">
			<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-2 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="title h2 strong space-quarter-bottom">
					Get a Kickass<br>
					Brochure
				</div>
				<div class="h4 space-quarter-bottom">Please provide the following details so that we can courier a physical copy to you.</div>
				<div class="label text-uppercase hidden">It contains some secrets not found anywhere else.</div>
			</div>
			<div class="columns small-12 large-4">
				<div class="row">
					<div class="secret columns small-12 space-half-bottom space-quarter-left-right" data-loginner="Brochure">
						<form class="js_brochure_form js_user_required">
							<label class="label block space-quarter-bottom">
								<span class="visuallyhidden">Your Name</span>
								<input class="block" type="text" name="name" placeholder="Your Name" required>
							</label>
							<label class="label block space-quarter-bottom">
								<span class="visuallyhidden">Your Address</span>
								<textarea class="block" name="address" placeholder="Your Address" rows="6" required></textarea>
							</label>
							<button type="submit" class="button button-large block fill-green">Send</button>
						</form>
						<!-- Phone Trap -->
						<form class="phone-form loginner_form_phone hidden">
							<div class="container-phone-country-code">
								<select class="input-large fill-green js_phone_country_code">
									<?php require __DIR__ . '/../inc/phone-country-codes.php'; ?>
								</select>
								<div class="container-country-code-label button button-large fill-off-light">
									<span class="js_phone_country_code_label">+91</span>
								</div>
							</div>
							<input class="text-field input-large block js_phone_number" type="text" name="phone" placeholder="Phone number">
							<button class="submit button button-large fill-green" type="submit">→</button>
							<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Enter your phone number</div>
						</form>
						<form class="otp-form loginner_form_otp hidden">
							<input class="text-field input-large block js_otp" type="text" name="otp" placeholder="OTP">
							<button class="submit button button-large" type="submit">→</button>
							<div class="feedback-message label strong text-uppercase text-center js_feedback_message">We've sent you an OTP.</div>
						</form>
						<!-- END: Phone Trap -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Brochure Request Section -->

<script type="text/javascript" src="js/modules/omega/utils.js<?= $ver ?>"></script>
<script type="text/javascript" src="js/modules/omega/user.js<?= $ver ?>"></script>
<script type="text/javascript" src="js/pages/brochure/form.js<?= $ver ?>"></script>
<script type="text/javascript" src="js/pages/brochure/form-trap.js<?= $ver ?>"></script>
