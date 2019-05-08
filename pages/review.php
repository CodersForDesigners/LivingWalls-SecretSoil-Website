<?php
/*
 *
 * How was your Experience?
 * This is a page where people can write a review of their experience on the site.
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
<section class="navigation-section">
	<div class="menu-1 row js_primary_nav">
		<div class="container">
			<div class="columns small-12 clearfix">
				<a class="logo" href="../">
					<img src="media/ss-logo-long-green-light.svg<?php echo $ver ?>">
				</a>
				<div class="menu-toggle js_primary_nav_menu_toggle float-right show-for-tablet" tabindex="-1">
					<span class="h5 text-uppercase inline-middle">Menu</span>
					<span class="h4 inline-middle"> &#9776;</span>
				</div>
				<div class="link-tray js_primary_nav_link_tray"><!-- To Toggle Reveal: Add show class for small & medium Breakpoints -->
					<div class="close-link-tray js_close_nav_link_tray"></div>
					<a class="link h5 text-uppercase" href="../#contact">Contact us</a>
					<a class="link h5 text-uppercase" href="../#location">Location</a>
					<a class="link h5 text-uppercase" href="tel:+919663396979">Call 9663396979</a>
					<a class="link h5 text-uppercase fill-green" href="pricing">Real-time Pricing</a>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-2 row fill-dark js_secondary_nav">
		<div class="link-tray">
			<a class="link label text-uppercase" href="../#large-4bhk">Large 4BHK</a>
			<a class="link label text-uppercase" href="../#masterplan">Masterplan</a>
			<a class="link label text-uppercase" href="../#flexiplan">Flexi-Plan</a>
			<a class="link label text-uppercase" href="../#xlarge-4bhk">XLarge 4BHK</a>
			<a class="link label text-uppercase" href="../#amenities">Amenities</a>
			<!-- <a class="link label text-uppercase" href="../#construction">Updates</a> -->
			<a class="link label text-uppercase" href="../#contact">Contact Us</a>
		</div>
	</div>
</section>
<!-- END: Navigation Section -->

<!-- Review Section -->
<section class="review-section space-double-top-bottom section-bg bottom" style="color: var(--light);">
	<div class="row">
		<div class="container">
			<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-2 text-auto-align-large space-half-bottom space-quarter-left-right" data-loginner="Large 4BHK" data-context="large-4bhk-unlock-now">
				<div class="title h2 strong space-quarter-bottom">
					We want your feedback.
				</div>
				<div class="h4 space-quarter-bottom">Please describe your experience.</div>
			</div>
			<div class="columns small-12 large-4">
				<div class="row">
					<div class="secret columns small-12 space-half-bottom space-quarter-left-right" data-loginner="Review">
						<form class="js_review_form js_user_required">
							<label class="label block space-quarter-bottom">
								<span class="visuallyhidden">Please describe your experience</span>
								<textarea class="block" name="notes" placeholder="Your Feedback" rows="6" required></textarea>
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
<!-- END: Review Section -->

<script type="text/javascript" src="js/modules/omega/utils.js<?= $ver ?>"></script>
<script type="text/javascript" src="js/modules/omega/user.js<?= $ver ?>"></script>
<script type="text/javascript" src="js/pages/review/form.js<?= $ver ?>"></script>
<script type="text/javascript" src="js/pages/review/form-trap.js<?= $ver ?>"></script>
