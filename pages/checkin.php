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

<style type="text/css">
	.brochure-form-section .h3,
	.brochure-form-section .h4,
	.brochure-form-section .h5,
	.brochure-form-section .h6 {
		line-height: 1.25;
		letter-spacing: 0.025rem;
	}
</style>

<!-- Brochure Form Section -->
<section class="brochure-form-section space-double-top-bottom section-bg bottom" style="color: var(--light);">
	<div class="container space-one-top-bottom fill-dark">
		<!-- [Screen A] -->
		<div class="row hidden">
			<div class="columns small-10 small-offset-1 medium-8 medium-offset-2 large-4 large-offset-1 text-auto-align-large">
				<div class="h2 strong">Welcome to Secret Soil</div>
				<div class="h5 space-quarter-top">A <span class="text-off-green">LivingWalls</span> Project</div>
			</div>
			<div class="columns small-10 small-offset-1 medium-8 medium-offset-2 large-5 large-offset-1 text-auto-align-large">
				<div class="h3 strong space-quarter-top text-green">Step 1 :</div>
				<div class="h4 space-half-bottom">Please provide your phone number and we will connect you to a Business Development Manager.</div>
				<!-- Phone Trap -->
				<form class="phone-form loginner_form_phone">
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

		<!-- [Screen A-A] -->
		<div class="row hidden">
			<div class="columns small-10 small-offset-1 medium-8 medium-offset-2 large-4 large-offset-1 text-auto-align-large">
				<div class="h3 strong text-green">Step 2 :</div>
				<div class="h4 space-half-bottom">Tell us who you are.</div>
			</div>
			<div class="columns small-10 small-offset-1 medium-8 medium-offset-2 large-5 large-offset-1 text-auto-align-large">
				<form class="js_checkin_form">
					<label class="label block space-quarter-bottom">
						<span class="visuallyhidden">Your Name</span>
						<input class="block input-large" type="text" name="name" placeholder="Your Name" required>
					</label>
					<label class="label block space-quarter-bottom">
						<span class="visuallyhidden">Email Id</span>
						<input class="block input-large" type="text" name="email" placeholder="Email Id" required>
					</label>
					<button type="submit" class="button button-large block fill-green">Send</button>
				</form>

				<a href="/checkin"  class="h5 space-quarter-top">Not a new Customer ? <br class="show-for-tablet"><span class="h5 text-off-green">Enter an existing number</span></a>
			</div>
		</div>

		<!-- [Screen A-A-A] -->
		<div class="row">
			<div class="columns small-10 small-offset-1 medium-8 medium-offset-2 large-4 large-offset-1 text-auto-align-large">
				<div class="h2 strong">Welcome, John Smith</div>
			</div>
			<div class="columns small-10 small-offset-1 medium-8 medium-offset-2 large-5 large-offset-1 text-auto-align-large">
				<div class="h4 space-quarter-top-bottom">Our Business Development Manager <span class="text-off-green">Mr.Vivek</span> has been assigned to you. He will be with you shortly.</div>
				<a href="/checkin" class="text-off-green" tabindex="-1">Refresh &nbsp; &#x21bb;</a>
			</div>
		</div>

		<!-- [Screen A-B] -->
		<div class="row hidden">
			<div class="columns small-10 small-offset-1 medium-8 medium-offset-2 large-4 large-offset-1 text-auto-align-large">
				<div class="h2 strong">Welcome, John Smith</div>
			</div>
			<div class="columns small-10 small-offset-1 medium-8 medium-offset-2 large-5 large-offset-1 text-auto-align-large">
				<div class="h4 space-quarter-top-bottom">Our Business Development Manager <span class="text-off-green">Mr.Vivek</span> has been Notified of your presence on site. He will be with you shortly.</div>
				<a href="/checkin" class="text-off-green" tabindex="-1">Refresh &nbsp; &#x21bb;</a>
			</div>
		</div>
	</div>
</section>
<!-- END: Brochure Form Section -->

<script type="text/javascript" src="js/modules/omega/utils.js<?= $ver ?>"></script>
<script type="text/javascript" src="js/modules/omega/user.js<?= $ver ?>"></script>
<script type="text/javascript" src="js/pages/brochure/form.js<?= $ver ?>"></script>
<script type="text/javascript" src="js/pages/brochure/form-trap.js<?= $ver ?>"></script>