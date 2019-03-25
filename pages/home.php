<?php
/*
 *
 * This is a sample page you can copy and use as boilerplate for any new page.
 *
 */

// Page-specific preparatory code goes here.

?>

<?php require_once __DIR__ . '/../inc/above.php'; ?>

<!-- Media Version <img src="media/logo.svg<?php //echo $ver ?>"> -->


<!-- Sample Section -->
<section class="sample-section">
	<div class="row">
		<div class="container">
			<div class="columns small-12">
				<!-- Things -->
			</div>
		</div>
	</div>
</section>
<!-- END: Sample Section -->


<!-- Navigation Section : Menu 1 -->
<section class="navigation-section">
	<div class="menu-1 row">
		<div class="container">
			<div class="columns small-12 clearfix">
				<a class="logo" href="https://google.com">
					<img src="media/lw-logo-long-green-light.svg<?php echo $ver ?>">
				</a>
				<div class="float-right show-for-tablet">
					<div class="menu-toggle" tabindex="-1">
						<span class="h5 text-uppercase inline-middle">Menu</span>
						<span class="h4 inline-middle"> &#9776;</span>
					</div>
				</div>
				<div class="link-tray"><!-- To Toggle Reveal: Add show class for small & medium Breakpoints -->
					<a class="link h5 text-uppercase" href="https://google.com">Real-time Pricing</a>
					<a class="link h5 text-uppercase" href="https://google.com">Location</a>
					<a class="link h5 text-uppercase" href="https://google.com">Call 9663396979</a>
					<a class="link h5 text-uppercase fill-green" href="https://google.com">Enquire Now</a>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-2 row fill-dark">
		<div class="link-tray">
			<a class="link label text-uppercase" href="#large-4bhk">Large 4BHK</a>
			<a class="link label text-uppercase" href="#masterplan">Masterplan</a>
			<a class="link label text-uppercase" href="#flexiplan">Flexi-Plan</a>
			<a class="link label text-uppercase" href="#xlarge-4bhk">XLarge 4BHK</a>
			<a class="link label text-uppercase" href="#amenities">Amenities</a>
			<a class="link label text-uppercase" href="#construction">Updates</a>
			<a class="link label text-uppercase" href="#contact">Contact Us</a>
		</div>
	</div>
</section>
<!-- END: Navigation Section -->


<!-- Intro Section -->
<section class="intro-section space-one-top-bottom section-bg bottom" style="color: #FFFFFF; background-color: #292C33; background-image: url('media/section-bg/canopy.png<?php echo $ver ?>'), url('media/section-bg/canopy-bg-px.png<?php echo $ver ?>');" id="intro" data-section="Intro">
	<div class="row">
		<div class="container">
			<div class="columns small-8 small-offset-2 medium-6 medium-offset-6 large-4 large-offset-8 text-auto-align-medium">
				<div class="h2 strong">
					Secretly <br>
					Kickass <br>
					Standalone <br>
					Houses
				</div>

				<div class="h4">Live under the trees in a secure gated neighbourhood.</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Intro Section -->


<!-- Large 4BHK Section -->
<section class="large-4bhk-section space-one-top-bottom section-bg bottom" style="color: #7194C8; background-color: #0B2938; background-image: url('media/section-bg/large-villa-3d.png<?php echo $ver ?>'), url('media/section-bg/large-villa-3d-bg-px.png<?php echo $ver ?>');" id="large-4bhk" data-section="Large 4BHK">
	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="h1 strong text-light space-quarter-bottom">Large 4BHK</div>
				<div class="label strong text-uppercase">2984<span class="opacity-50">sft</span> & 2988<span class="opacity-50">sft</span></div>
				<div class="h3">Standalone Houses</div>
			</div>

			<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-bottom space-quarter-left-right" data-loginner="Large 4BHK">
				<div class="h3 space-quarter-bottom"><span class="text-light">Unlock 25 secrets of the</span> Large 4BHK House</div>
				<a class="button button-large fill-green js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank"><img src="media/glyph/32-lock.svg<?php echo $ver ?>">Unlock Now</a>
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
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
				</form>
				<form class="otp-form loginner_form_otp hidden">
					<input class="text-field input-large block js_otp" type="text" name="otp" placeholder="OTP">
					<button class="submit button button-large" type="submit">→</button>
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">We've sent you an OTP.</div>
				</form>
				<!-- END: Phone Trap -->
			</div>

			<div class="columns small-12 large-8">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">No Common Walls</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-commonwalls.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Not a single house at Secret Soil shares a common wall with another. These houses are not Row Houses. You can actually walk around them.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">A Standalone 4BHK House</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-standalone4.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Every unit is a free-standing, 4 bedroom house that resembles the functionality of what we Bangaloreans refer to as an “Independent House”.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Ground and 2 Floors</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-ground2.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">With bedrooms available on every floor, as a family, you get to hang out together, eat together...but still have your own space for some 'me' time.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">With Back Door Access</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-backdoor.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">You can sneak in through the back door if you want to avoid a gathering in the living room.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row fill-green">
		<div class="container">
			<div class="columns small-12">
				<div class="pricing">
					<div class="row">
						<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-top-bottom space-quarter-left-right">
							<div class="h3 space-quarter-bottom">Find out Secret price breakdown</div>
							<div class="h6">Real-time pricing & Availability</div>
						</div>
						<div class="columns small-12 medium-6 large-4 fill-light text-auto-align-large space-half-top-bottom space-half-left-right" data-loginner="Large 4BHK House">
							<div class="h3 strong space-quarter-bottom">Large 4BHK House</div>
							<div class="h4 space-quarter-bottom">Basic Price 2.0Cr</div>
							<a class="button button-large js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank">Download Details</a>
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
								<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
							</form>
							<form class="otp-form loginner_form_otp hidden">
								<input class="text-field input-large block js_otp" type="text" name="otp" placeholder="OTP">
								<button class="submit button button-large" type="submit">→</button>
								<div class="feedback-message label strong text-uppercase text-center js_feedback_message">We've sent you an OTP.</div>
							</form>
							<!-- END: Phone Trap -->
						</div>
						<div class="columns small-12 medium-6 large-4 fill-off-green text-auto-align-large space-half-top-bottom space-half-left-right" data-loginner="Large 4BHK with Private Garden">
							<div class="h3 strong space-quarter-bottom">Large 4BHK + Private Garden</div>
							<div class="h4 space-quarter-bottom">Basic Price 2.3Cr</div>
							<a class="button button-large js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank">Download Details</a>
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
								<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
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
	</div>
	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4 space-half-top">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Landscaped Terrace Garden</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-terracegarden.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Every Master Bedroom at Secret Soil looks on to a gorgeous landscaped terrace garden. It has that penthouse style glamour to it.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Hidden Utility Terrace</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-hiddenutility.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">A utility terrace open to the sky that is hidden from public view. Why hasn't anyone done this before?</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">2 Private Car Parks</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-carparks.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">The only project in the area that offers 2 private covered car parks per house.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">15 Floor Plan Configurations</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-15floorplan.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">There is no one size fits all. Tweak your home to suit your families needs with our flexi-plan customisation module.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Dedicated Servants Quarters</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-servantsquarters.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Every house at Secret Soil has dedicated Servants Quarters. We know how invaluable and irreplaceable our housekeepers are to the family.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Large 4BHK Section -->


<!-- Ad Section -->
<section class="ad-section">
	<div class="row fill-dark space-half-top-bottom">
		<div class="container fill-light" style="background-color: #D9E0E3">
			<div class="thumbnail-hero columns small-12 large-4"><img class="block" src="media/hero/ad-1.png<?php echo $ver ?>"></div>
			<div class="columns small-12 medium-6 large-4 text-auto-align-large space-half-top-bottom space-half-left-right">
				<div class="h3 strong space-quarter-bottom"><!-- [1] --> It's not a row house?</div>
				<div class="watch-ad-link h5 text-green"><img src="media/glyph/48-youtube.svg<?php echo $ver ?>">Watch the ad film</div>
			</div>
			<div class="character columns small-12 medium-6 large-4"><img class="block" src="media/characters/ad-1.png<?php echo $ver ?>"></div>
			<div class="thumbnail-strip columns small-12 hide-for-mobile">
				<div class="row">
					<div class="frame columns small-2"><img class="block" src="media/frames/ad1-1.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad1-2.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad1-3.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad1-4.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad1-5.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad1-6.png<?php echo $ver ?>"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Ad Section -->


<!-- Masterplan Section -->
<section class="masterplan-section space-one-top-bottom section-bg top" style="color: #F18838; background-color: #0E0D0D; background-image: url('media/section-bg/soil.png<?php echo $ver ?>'), url('media/section-bg/soil-bg-px.png<?php echo $ver ?>');" id="masterplan" data-section="Masterplan">
	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="h1 strong text-light space-quarter-bottom">Masterplan</div>
				<div class="h3">Minimised Concrete Footprint</div>
			</div>

			<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-bottom space-quarter-left-right" data-loginner="Masterplan">
				<div class="h3 space-quarter-bottom"><span class="text-light">Unlock 25 secrets of the</span> Masterplan</div>
				<a class="button button-large fill-green js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank"><img src="media/glyph/32-lock.svg<?php echo $ver ?>">Unlock Now</a>
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
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
				</form>
				<form class="otp-form loginner_form_otp hidden">
					<input class="text-field input-large block js_otp" type="text" name="otp" placeholder="OTP">
					<button class="submit button button-large" type="submit">→</button>
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">We've sent you an OTP.</div>
				</form>
				<!-- END: Phone Trap -->
			</div>

			<div class="columns small-12 large-8">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">2 years of design before execution</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-2yearsdesign.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">No concrete podium or Basement</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-noconcrete.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">73% exposed natural soil</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-exposedsoil.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">1.2 acre wooden central park</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-woodencentralpark.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="columns small-12 large-8 large-offset-4 space-quarter-left-right">
				<div class="h2 text-light text-auto-align-large">Just <span class="text-green">12</span> houses per acre, instead of 15 or 17 houses per acre.</div>
			</div>
		</div>
	</div>

	<!-- Comparison Table -->
	<div class="row">
		<div class="table">
			<div class="table-data inline-top fill-dark">
				<div class="table-row space-half-left-right table-head h3">
					Assetz <br>
					Soul & Soil
				</div>
				<div class="table-row space-half-left-right h5">7 Acres</div>
				<div class="table-row space-half-left-right h5">124 Houses</div>
				<div class="table-row space-half-left-right h5">17.7 per acre</div>
				<div class="table-row space-half-left-right h5">3 & 4 BHK</div>
				<div class="table-row space-half-left-right table-foot h5 strong">Row Houses</div>
			</div>
			<div class="table-data inline-top fill-green">
				<div class="table-row space-half-left-right table-head h3">
					LW <br>
					Secret Soil
				</div>
				<div class="table-row space-half-left-right h5">6.4 Acres</div>
				<div class="table-row space-half-left-right h5">77 Houses</div>
				<div class="table-row space-half-left-right h5">11.8 per acre</div>
				<div class="table-row space-half-left-right h5">4 BHK</div>
				<div class="table-row space-half-left-right table-foot h5 strong">Standalone Houses</div>
			</div>
			<div class="table-data inline-top fill-off-dark">
				<div class="table-row space-half-left-right table-head h3">
					GoyalCo <br>
					Alanoville
				</div>
				<div class="table-row space-half-left-right h5">5 Acres</div>
				<div class="table-row space-half-left-right h5">75 Houses</div>
				<div class="table-row space-half-left-right h5">15 per acre</div>
				<div class="table-row space-half-left-right h5">4 BHK</div>
				<div class="table-row space-half-left-right table-foot h5 strong">Row Houses</div>
			</div>
			<div class="table-data inline-top fill-dark">
				<div class="table-row space-half-left-right table-head h3">
					MIMS <br>
					Northbrooks
				</div>
				<div class="table-row space-half-left-right h5">2 Acres</div>
				<div class="table-row space-half-left-right h5">27 Houses</div>
				<div class="table-row space-half-left-right h5">13.5 per acre</div>
				<div class="table-row space-half-left-right h5">4 BHK</div>
				<div class="table-row space-half-left-right table-foot h5 strong">Standalone Houses</div>
			</div>
		</div>
	</div>
	<!-- END: Comparison Table -->

	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">More than 50 elderly trees</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-elderlytrees.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">15 elderly jackfruit trees</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-elderlyjackfruit.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Vehicular traffic hugs the peripheral wall</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-vehicularhugs.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Masterplan Section -->


<!-- Ad Section -->
<section class="ad-section">
	<div class="row fill-dark space-half-top-bottom">
		<div class="container fill-light" style="background-color: #D9E0E3">
			<div class="thumbnail-hero columns small-12 large-4"><img class="block" src="media/hero/ad-3.png<?php echo $ver ?>"></div>
			<div class="columns small-12 medium-6 large-4 text-auto-align-large space-half-top-bottom space-half-left-right">
				<div class="h3 strong space-quarter-bottom"><!-- [3] --> 15 fully grown Jackfruit trees?</div>
				<div class="watch-ad-link h5 text-green"><img src="media/glyph/48-youtube.svg<?php echo $ver ?>">Watch the ad film</div>
			</div>
			<div class="character columns small-12 medium-6 large-4"><img class="block" src="media/characters/ad-3.png<?php echo $ver ?>"></div>
			<div class="thumbnail-strip columns small-12 hide-for-mobile">
				<div class="row">
					<div class="frame columns small-2"><img class="block" src="media/frames/ad3-1.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad3-2.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad3-3.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad3-4.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad3-5.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad3-6.png<?php echo $ver ?>"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Ad Section -->


<!-- BDA Layout Section -->
<section class="bda-layout-section space-one-top-bottom section-bg top" style="color: #FFD561; background-color: #24272B; background-image: url('media/section-bg/road.png<?php echo $ver ?>'), url('media/section-bg/road-bg-px.png<?php echo $ver ?>');" id="bda-layout" data-section="BDA Layout">
	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="h2 strong text-light">The charm of a BDA Layout House without the hassles</div>
			</div>
			<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-bottom space-quarter-left-right" data-loginner="BDA Layout">
				<div class="h3 space-quarter-bottom"><span class="text-light">Unlock 25 secrets of</span> buying a house vs building one</div>
				<a class="button button-large fill-green js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank"><img src="media/glyph/32-lock.svg<?php echo $ver ?>">Unlock Now</a>
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
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
				</form>
				<form class="otp-form loginner_form_otp hidden">
					<input class="text-field input-large block js_otp" type="text" name="otp" placeholder="OTP">
					<button class="submit button button-large" type="submit">→</button>
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">We've sent you an OTP.</div>
				</form>
				<!-- END: Phone Trap -->
			</div>
			<div class="columns small-12 large-8">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Upgradable underground infrastructure</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-undergroundstructure.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Authorised pedestrian and vehicular access</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-pedestrianvehicularaccess.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Child friendly interior roads</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-childinteriorroads.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Electrified boundary wall</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-electrifiedboundary.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Quiet streets with few neighbours</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-quietstreets.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">You don’t need to supervise the build</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-youdontneedtosupervise.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- END: BDA Layout Section -->


<!-- Ad Section -->
<section class="ad-section">
	<div class="row fill-dark space-half-top-bottom">
		<div class="container fill-light" style="background-color: #D9E0E3">
			<div class="thumbnail-hero columns small-12 large-4"><img class="block" src="media/hero/ad-4.png<?php echo $ver ?>"></div>
			<div class="columns small-12 medium-6 large-4 text-auto-align-large space-half-top-bottom space-half-left-right">
				<div class="h3 strong space-quarter-bottom"><!-- [4] --> It’s like an independent house?</div>
				<div class="watch-ad-link h5 text-green"><img src="media/glyph/48-youtube.svg<?php echo $ver ?>">Watch the ad film</div>
			</div>
			<div class="character columns small-12 medium-6 large-4"><img class="block" src="media/characters/ad-4.png<?php echo $ver ?>"></div>
			<div class="thumbnail-strip columns small-12 hide-for-mobile">
				<div class="row">
					<div class="frame columns small-2"><img class="block" src="media/frames/ad4-1.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad4-2.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad4-3.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad4-4.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad4-5.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad4-6.png<?php echo $ver ?>"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Ad Section -->


<!-- Flexiplan Section -->
<section class="flexiplan-section space-one-top-bottom section-bg top" style="color: #EF6135; background-color: #17191B; background-image: url('media/section-bg/architects.png<?php echo $ver ?>'), url('media/section-bg/architects-bg-px.png<?php echo $ver ?>');" id="flexiplan" data-section="Flexi-Plan">
	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="h1 strong text-light">Flexi-plan</div>
			</div>

			<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-bottom space-quarter-left-right" data-loginner="Flexi-plan">
				<div class="h3 space-quarter-bottom"><span class="text-light">Unlock 25 secrets of the</span> Flexi-Plan</div>
				<a class="button button-large fill-green js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank"><img src="media/glyph/32-lock.svg<?php echo $ver ?>">Unlock Now</a>
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
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
				</form>
				<form class="otp-form loginner_form_otp hidden">
					<input class="text-field input-large block js_otp" type="text" name="otp" placeholder="OTP">
					<button class="submit button button-large" type="submit">→</button>
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">We've sent you an OTP.</div>
				</form>
				<!-- END: Phone Trap -->
			</div>

			<div class="columns small-12 large-8">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Convert Bedroom to Home Theater Room</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-optionalhometheatre.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Add the provision for an Optional Lift</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-optionallift.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="columns small-12 medium-10 medium-offset-1 large-8 large-offset-4 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="h2 text-light">Upto <span class="text-green">14</span> unique Flexi-Plan Layouts Available</div>
			</div>
		</div>
	</div>
	<div class="pricing-engine row fill-green">
		<div class="container">
			<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-top-bottom space-quarter-left-right" data-loginner="Customise House">
				<div class="h3 space-quarter-bottom">Customise your house online</div>
				<a class="button button-large js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank">Customise Now</a>
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
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
				</form>
				<form class="otp-form loginner_form_otp hidden">
					<input class="text-field input-large block js_otp" type="text" name="otp" placeholder="OTP">
					<button class="submit button button-large" type="submit">→</button>
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">We've sent you an OTP.</div>
				</form>
				<!-- END: Phone Trap -->
			</div>
			<div class="pricing-video columns small-12 large-8">
				<img src="https://via.placeholder.com/1920x1920">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4 space-half-top">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Add a walk-in dressing room</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-addawalkindressing.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Opt for a large island kitchen</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-optforalargekitchenisland.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: flexiplan Section -->


<!-- Ad Section -->
<section class="ad-section">
	<div class="row fill-dark space-half-top-bottom">
		<div class="container fill-light" style="background-color: #D9E0E3">
			<div class="thumbnail-hero columns small-12 large-4"><img class="block" src="media/hero/ad-6.png<?php echo $ver ?>"></div>
			<div class="columns small-12 medium-6 large-4 text-auto-align-large space-half-top-bottom space-half-left-right">
				<div class="h3 strong space-quarter-bottom"><!-- [6] --> It has a hidden utility terrace?</div>
				<div class="watch-ad-link h5 text-green"><img src="media/glyph/48-youtube.svg<?php echo $ver ?>">Watch the ad film</div>
			</div>
			<div class="character columns small-12 medium-6 large-4"><img class="block" src="media/characters/ad-6.png<?php echo $ver ?>"></div>
			<div class="thumbnail-strip columns small-12 hide-for-mobile">
				<div class="row">
					<div class="frame columns small-2"><img class="block" src="media/frames/ad6-1.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad6-2.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad6-3.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad6-4.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad6-5.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad6-6.png<?php echo $ver ?>"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Ad Section -->


<!-- XLarge 4BHK Section -->
<section class="xlarge-4bhk-section space-one-top-bottom section-bg bottom" style="color: #7194C8; background-color: #0B2938; background-image: url('media/section-bg/xlarge-villa-3d.png<?php echo $ver ?>'), url('media/section-bg/xlarge-villa-3d-bg-px.png<?php echo $ver ?>');" id="xlarge-4bhk" data-section="XLarge 4BHK">
	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="h1 strong text-light space-quarter-bottom">XLarge 4BHK</div>
				<div class="label strong text-uppercase">2984<span class="opacity-50">sft</span> & 2988<span class="opacity-50">sft</span></div>
				<div class="h3">Spacious Standalone Houses</div>
			</div>

			<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-bottom space-quarter-left-right" data-loginner="XLarge 4BHK">
				<div class="h3 space-quarter-bottom"><span class="text-light">Unlock 25 secrets of the</span> Large 4BHK House</div>
				<a class="button button-large fill-green js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank"><img src="media/glyph/32-lock.svg<?php echo $ver ?>">Unlock Now</a>
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
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
				</form>
				<form class="otp-form loginner_form_otp hidden">
					<input class="text-field input-large block js_otp" type="text" name="otp" placeholder="OTP">
					<button class="submit button button-large" type="submit">→</button>
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">We've sent you an OTP.</div>
				</form>
				<!-- END: Phone Trap -->
			</div>

			<div class="columns small-12 large-8">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">No Common Walls</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-commonwalls.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Double Height Living Room</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-doubleheightlivingroom.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">A Standalone 4BHK House</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-standalone4.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">With Back Door Access</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-backdoor.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row fill-green">
		<div class="container">
			<div class="columns small-12">
				<div class="pricing">
					<div class="row">
						<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-top-bottom space-quarter-left-right">
							<div class="h3 space-quarter-bottom">Find out Secret price breakdown</div>
							<div class="h6">Real-time pricing & Availability</div>
						</div>
						<div class="columns small-12 medium-6 large-4 fill-light text-auto-align-large space-half-top-bottom space-half-left-right" data-loginner="XLarge 4BHK House">
							<div class="h3 strong space-quarter-bottom">XLarge 4BHK House</div>
							<div class="h4 space-quarter-bottom">Basic Price 2.0Cr</div>
							<a class="button button-large js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank">Download Details</a>
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
								<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
							</form>
							<form class="otp-form loginner_form_otp hidden">
								<input class="text-field input-large block js_otp" type="text" name="otp" placeholder="OTP">
								<button class="submit button button-large" type="submit">→</button>
								<div class="feedback-message label strong text-uppercase text-center js_feedback_message">We've sent you an OTP.</div>
							</form>
							<!-- END: Phone Trap -->
						</div>
						<div class="columns small-12 medium-6 large-4 fill-off-green text-auto-align-large space-half-top-bottom space-half-left-right" data-loginner="XLarge 4BHK House with Private Garden">
							<div class="h3 strong space-quarter-bottom">XLarge 4BHK + Private Garden</div>
							<div class="h4 space-quarter-bottom">Basic Price 2.3Cr</div>
							<a class="button button-large js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank">Download Details</a>
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
								<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
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
	</div>
	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4 space-half-top">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Landscaped Terrace Garden</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-terracegarden.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Hidden Utility Terrace</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-hiddenutility.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">2 Private Car Parks</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-carparks.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="secret-number label strong text-uppercase text-auto-align-medium"><span class="opacity-50">Secret</span> 01</div>
						<div class="secret-title h4 text-light text-auto-align-medium space-quarter-bottom">Dedicated Servants Quarters</div>
						<div class="row">
							<div class="columns small-2">
								<div class="secret-icon float-left"><img src="media/icons/icon-servantsquarters.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-description h6 text-light opacity-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: XLarge 4BHK Section -->


<!-- Ad Section -->
<section class="ad-section">
	<div class="row fill-dark space-half-top-bottom">
		<div class="container fill-light" style="background-color: #D9E0E3">
			<div class="thumbnail-hero columns small-12 large-4"><img class="block" src="media/hero/ad-2.png<?php echo $ver ?>"></div>
			<div class="columns small-12 medium-6 large-4 text-auto-align-large space-half-top-bottom space-half-left-right">
				<div class="h3 strong space-quarter-bottom"><!-- [2] --> You can walk around this house?</div>
				<div class="watch-ad-link h5 text-green"><img src="media/glyph/48-youtube.svg<?php echo $ver ?>">Watch the ad film</div>
			</div>
			<div class="character columns small-12 medium-6 large-4"><img class="block" src="media/characters/ad-2.png<?php echo $ver ?>"></div>
			<div class="thumbnail-strip columns small-12 hide-for-mobile">
				<div class="row">
					<div class="frame columns small-2"><img class="block" src="media/frames/ad2-1.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad2-2.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad2-3.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad2-4.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad2-5.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad2-6.png<?php echo $ver ?>"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Ad Section -->


<!-- Amenities Section -->
<section class="amenities-section space-one-top-bottom section-bg bottom" style="color: #EA984D; background-color: #005995; background-image: url('media/section-bg/clubhouse.png<?php echo $ver ?>'), url('media/section-bg/clubhouse-bg-px.png<?php echo $ver ?>');" id="amenities" data-section="Amenities">
	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="h1 strong text-light space-quarter-bottom">Amenities</div>
			</div>

			<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-bottom space-quarter-left-right" data-loginner="Amenities">
				<div class="h3 space-quarter-bottom"><span class="text-light">Unlock detailed floorplans of the</span> clubhouse</div>
				<a class="button button-large fill-green js_user_required" href="https://livingwalls.in/secret-soil/pricing" target="_blank"><img src="media/glyph/32-lock.svg<?php echo $ver ?>">Unlock Now</a>
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
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">Please provide your phone number.</div>
				</form>
				<form class="otp-form loginner_form_otp hidden">
					<input class="text-field input-large block js_otp" type="text" name="otp" placeholder="OTP">
					<button class="submit button button-large" type="submit">→</button>
					<div class="feedback-message label strong text-uppercase text-center js_feedback_message">We've sent you an OTP.</div>
				</form>
				<!-- END: Phone Trap -->
			</div>

			<div class="columns small-12 large-8">
				<div class="row">
					<div class="h3 columns small-12 space-quarter-bottom space-quarter-left-right text-auto-align-large">Indoor Amenities</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-multipurposehall.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Multipurpose Hall</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-partyhall.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Party Hall</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-badmintoncourt.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Badminton Court</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-gym.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Gym</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-steamsaunaspa.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Steam, Sauna & Spa</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-indoorgames.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Indoor Games</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="columns small-12 large-8 large-offset-4">
				<div class="row">
					<div class="h3 columns small-12 space-quarter-bottom space-quarter-left-right text-auto-align-large">Outdoor Amenities</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-partylawn.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Party Lawn</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-swimmingpool.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Swimming Pool</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-communityseating.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Community Seating</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-pavillion.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Pavilion</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-childrensplayarea.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Childrens Play Area</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-walkways.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Walkways</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="columns small-10 small-offset-1 large-8 large-4 large-offset-4 text-auto-align-large space-quarter-bottom space-quarter-left-right">
				<div class="h2"><span class="text-light">A</span> 10,000sft Clubhouse<span class="text-light"> that blends into the trees</span></div>
			</div>

			<div class="columns small-12 large-8 large-offset-4">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-waterbody.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Reflective Water Body</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-jogging.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Jogging Path</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-outdoorgym.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Outdoor Gym</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-rockclimbing.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Rock Climbing</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2 inline-middle">
								<div class="secret-icon float-left"><img src="media/icons/icon-stageamphitheatre.svg<?php echo $ver ?>"></div>
							</div>
							<div class="columns small-9 small-offset-1 inline-middle">
								<div class="secret-description h5 text-light">Stage & Amphitheater</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Amenities Section -->


<!-- Ad Section -->
<section class="ad-section">
	<div class="row fill-dark space-half-top-bottom">
		<div class="container fill-light" style="background-color: #D9E0E3">
			<div class="thumbnail-hero columns small-12 large-4"><img class="block" src="media/hero/ad-5.png<?php echo $ver ?>"></div>
			<div class="columns small-12 medium-6 large-4 text-auto-align-large space-half-top-bottom space-half-left-right">
				<div class="h3 strong space-quarter-bottom"><!-- [5] --> Lorem ipsum dolor sit amet?</div>
				<div class="watch-ad-link h5 text-green"><img src="media/glyph/48-youtube.svg<?php echo $ver ?>">Watch the ad film</div>
			</div>
			<div class="character columns small-12 medium-6 large-4"><img class="block" src="media/characters/ad-5.png<?php echo $ver ?>"></div>
			<div class="thumbnail-strip columns small-12 hide-for-mobile">
				<div class="row">
					<div class="frame columns small-2"><img class="block" src="media/frames/ad5-1.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad5-2.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad5-3.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad5-4.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad5-5.png<?php echo $ver ?>"></div>
					<div class="frame columns small-2"><img class="block" src="media/frames/ad5-6.png<?php echo $ver ?>"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Ad Section -->


<!-- Construction Section -->
<section class="construction-section fill-off-green space-half-top-bottom" id="construction" data-section="Construction">
	<div class="row">
		<div class="container">
			<div class="columns small-10 small-offset-1 large-8 large-offset-4 text-auto-align-large space-quarter-left-right">
				<div class="h2 strong space-half-top-bottom">Construction Status</div>
			</div>

			<div class="columns small-12 large-4 text-auto-align-large space-quarter-left-right">
				<div class="h3 space-quarter-bottom">October 2015</div>
				<div class="button button-large"><img src="media/glyph/32-leftarrow.svg<?php echo $ver ?>">Previous Months</div>
			</div>

			<!-- Status -->
			<div class="status columns small-10 small-offset-1 large-8 large-offset-0 space-quarter-left-right">
				<div class="title text-auto-align-large h4 strong">Structure</div>
				<div class="point text-auto-align-large h6">Block A - 17th Floor in progress.</div>
				<div class="point text-auto-align-large h6">Block B & C - Completed.</div>

				<div class="title text-auto-align-large h4 strong">Masonry</div>
				<div class="point text-auto-align-large h6">Block A - 13th Floor in progress.</div>
				<div class="point text-auto-align-large h6">Block B - 15th floor Completed.</div>
				<div class="point text-auto-align-large h6">Block C - 16th floor Completed</div>
				<div class="point text-auto-align-large h6">STP Work in progress</div>
				<div class="point text-auto-align-large h6">Basement ramps structure in progress</div>
				<div class="point text-auto-align-large h6">GFRC work in the ducts in progress</div>
				<div class="point text-auto-align-large h6">Fire suppression sprinkler system is being installed</div>
				<div class="point text-auto-align-large h6">Plumbing - Down take line in shaft in progress</div>
			</div>
			<!-- End: Status -->
		</div>
	</div>

	<div class="row">
		<!-- Gallery -->
		<div class="gallery">
			<div class="image">
				<img src="https://via.placeholder.com/1920x1080">
			</div>
			<div class="image">
				<img src="https://via.placeholder.com/1920x1920">
			</div>
			<div class="image">
				<img src="https://via.placeholder.com/1920x1080">
			</div>
			<div class="image">
				<img src="https://via.placeholder.com/1920x1920">
			</div>
			<div class="image">
				<img src="https://via.placeholder.com/1920x1080">
			</div>
		</div>
		<!-- End: Gallery -->
	</div>
</section>
<!-- END: Construction Section -->


<!-- Location Section -->
<section class="location-section space-one-top-bottom" style="color: var(--light); background-color: var(--dark); background-image: url('media/location-map-bg.png<?php echo $ver ?>'); background-position: center center; background-size: cover;">
	<div class="row">
		<div class="container">
			<div class="columns small-12 large-8 large-offset-4 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="h1 strong space-quarter-bottom">Location</div>
				<!-- <div class="label strong text-uppercase">2984<span class="opacity-50">sft</span> & 2988<span class="opacity-50">sft</span></div> -->
				<div class="h2"><span class="text-green">Secret Soil</span> is located in North Bangalore, just off Hennur Main Road</div>
			</div>

			<div class="columns small-12 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="h3 space-quarter-bottom"><span class="text-green">Get directions</span> on Google Maps</div>
				<div class="button button-large fill-green"><img src="media/glyph/32-location.svg<?php echo $ver ?>">google maps</div>
			</div>

			<div class="columns small-12 large-8">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">4<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">2km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Byg Brewski</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">4<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">2km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">XLR8 Indoor Sports Arena</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">5<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">3km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Deacthlon Hennur</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">5<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">3km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Lulu Supermarket</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">5<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">3km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">KLAY Preschool</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">6<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">3km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Legacy Montessori School</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">12<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">5km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Bangalore International School</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">21<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">9km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Manayata Tech Park</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">22<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">10km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Elements Mall</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">24<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">12km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Karle Town Center SEZ</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">29<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">18km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">KIADB Aerospace SEZ</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">30<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">21km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">International Airport</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="columns small-12 large-8 large-4 large-offset-4 text-auto-align-large space-half-bottom space-quarter-left-right">
				<div class="h2">Almost everything you might need within a <span class="text-green">30min commute</span>.</div>
			</div>

			<div class="columns small-12 large-8 large-offset-4">
				<div class="row">
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">31<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">12km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Orion East Mall</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">31<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">15km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Kirloskar Tech Park, Hebbal</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">40<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">16km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">Garuda Mall</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">40<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">16km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">1MG Mall</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">42<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">17km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">RMZ Infinity, Old Madras Road</div>
							</div>
						</div>
					</div>
					<div class="secret columns small-12 medium-6 space-half-bottom space-quarter-left-right">
						<div class="row">
							<div class="columns small-2">
								<div class="h3 secret-icon float-left text-center">45<span class="h4"><br>min</span></div>
							</div>
							<div class="columns small-9 small-offset-1">
								<div class="secret-number label strong text-uppercase text-green">18km<span class="opacity-50"> Commute</span></div>
								<div class="secret-title h5 space-quarter-bottom">RMZ Millennia, Ulsoor</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Location Section -->


<!-- Contact Section -->
<section class="contact-section fill-green" id="contact" data-section="Contact">
	<div class="row">
		<div class="container">
			<div class="columns small-10 small-offset-1 medium-8 medium-offset-2 large-4 large-offset-0 text-auto-align-large space-half-top-bottom space-quarter-left-right">
				<div class="label strong text-uppercase">Contact us</div>
				<div class="h3 strong space-quarter-bottom">Get in touch</div>
				<div class="h5 space-half-bottom">Fill in your details and a Customer Service executive will call you back, Soon.</div>

				<div class="h4 text-off-green">Or Call</div>
				<a class="h3 call-phone" href="tel:+919663396979"><img src="media/glyph/32-phone.svg<?php echo $ver ?>">96633 96979</a>
			</div>
			<div class="contact columns small-12 medium-6 large-4 fill-dark text-auto-align-medium space-half-top-bottom space-half-left-right">
				<label class="label block space-quarter-bottom">
					<span class="visuallyhidden">Full Name</span>
					<input class="block" type="text" placeholder="Full Name">
				</label>
				<label class="label block space-quarter-bottom">
					<span class="visuallyhidden">Email ID</span>
					<input class="block" type="text" placeholder="Email ID">
				</label>
				<label class="label block space-half-bottom">
					<span class="visuallyhidden">Mobile Number</span>
					<input class="block" type="text" placeholder="Mobile Number">
				</label>
				<button class="button block fill-green">Contact Me</button>
			</div>
			<div class="pricing columns small-12 medium-6 large-4 fill-off-green text-auto-align-medium space-half-top-bottom space-half-left-right">
				<div class="h3 strong space-quarter-bottom">Pick your house online now.</div>
				<div class="h5 strong space-half-bottom">Use our Real-time Pricing Engine. </div>
				<div class="button button-large">Download Prices</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Contact Section -->


<!-- About Section -->
<section class="about-section space-one-top-bottom section-bg bottom" style="color: var(--dark); background-color: #F7F7F7; background-image: url('media/section-bg/team.png<?php echo $ver ?>'), url('media/section-bg/team-bg-px.png<?php echo $ver ?>');" id="about" data-section="About">
	<div class="row">
		<div class="container">
			<div class="columns small-10 small-offset-1 large-4 large-offset-0 space-half-bottom space-quarter-left-right text-auto-align-large">
				<div class="label strong text-uppercase">About us</div>
				<div class="h3">Who is <span class="text-green">Living Walls?</span></div>
			</div>
			<div class="columns small-10 small-offset-1 medium-5 large-4 large-offset-0 space-half-bottom space-quarter-left-right text-auto-align-medium">
				<div class="h6">
					Living Walls is the brand name we use for all real estate projects undertaken by VDB Infra & Realty Pvt. Ltd....that's us...a sister concern of our parent company, the infrastructure conglomerate; VDB Projects Pvt. Ltd. has been involved in infrastructure development namely roads & highways, storm water drains across South India since it's inception.
				</div>
			</div>
			<div class="columns small-10 small-offset-1 medium-5 medium-offset-0 large-4 space-half-bottom space-quarter-left-right text-auto-align-medium">
				<div class="h6">
					We ventured into Real Estate Development in 2011. By virtue of lineage, we inherently adhere to the same high standards of quality and commitment that VDB has been known for over the years. We're a young company at heart, fueled by an urge to create relevant living experiences, the kind that we see ourselves living in.
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: About Section -->


<!-- Footer Section -->
<section class="footer-section fill-dark space-one-top space-half-bottom">
	<div class="row">
		<div class="container">
			<div class="logo columns small-10 small-offset-1 medium-3 medium-offset-0 large-2 text-auto-align-medium space-half-bottom">
				<img src="media/lw-logo-square-green-light.svg<?php echo $ver ?>">
			</div>

			<div class="address columns small-10 small-offset-1 medium-3 large-4 text-auto-align-medium space-half-bottom">
				<div class="h6 strong text-uppercase space-quarter-bottom">Corporate Office</div>

				<div class="h6 opacity-50">
					VDB Infra & Realty Pvt. Ltd. <br>
					VDB House, 842/A <br>
					100ft Road, Indiranagar <br>
					Bangalore - 5600 38.
				</div>
			</div>

			<div class="links columns small-10 small-offset-1 medium-4 text-auto-align-medium space-half-bottom">
				<div class="h6 strong text-uppercase space-quarter-bottom">Site Map</div>

				<div class="row text-off-green">
					<div class="columns small-6">
						<a class="h6 block" href="https://google.com">Large 4BHK </a>
						<a class="h6 block" href="https://google.com">Masterplan</a>
						<a class="h6 block" href="https://google.com">Flexi-Plan</a>
						<a class="h6 block" href="https://google.com">XLarge 4BHK</a>
						<a class="h6 block" href="https://google.com">Amenities</a>
					</div>
					<div class="columns small-6">
						<a class="h6 block" href="https://google.com">Infrastructure</a>
						<a class="h6 block" href="https://google.com">Updates</a>
						<a class="h6 block" href="https://google.com">Contact us</a>
						<a class="h6 block" href="https://google.com">Location</a>
						<a class="h6 block" href="https://google.com">Pricing</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- END: Footer Section -->


<!-- RERA Disclaimer Section -->
<section class="rera-disclaimer-section fill-off-dark space-one-top-bottom">
	<div class="row">
		<div class="container">
			<div class="columns small-12">
				<div class="h6 strong text-uppercase space-quarter-bottom">Disclaimer</div>
				<div class="small text-justify">
					By using or accessing the Website you agree with the Disclaimer without any qualification or limitation. The Company reserves the right to terminate, revoke, modify, alter, add and delete any one or more of the terms and conditions of the website. The Company shall be under no obligation to notify the visitor of the amendment to the terms and conditions and the visitor shall be bound by such amended terms and conditions.<br><br>
					The visuals and information contained herein marked as "artistic impression" are artistic impressions being indicative in nature and are for general information purposes only. The visuals contained marked as "generic image" and other visuals /image /photographs are general images and do not have any correlation with the project.<br><br>
					The imagery used on the website may not represent actuals or may be indicative of style only. Photographs of interiors, surrounding views and location may not represent actuals or may have been digitally enhanced or altered. These photographs may not represent actuals or may be indicative only. Computer generated images, walkthroughs and render images are the artist's impression and are an indicative of the actual designs.<br><br>
					No information given on this Website creates a warranty or expand the scope of any warranty that cannot be disclaimed under the applicable laws. The information on this website is presented as general information and no representation or warranty is expressly or impliedly given as to its accuracy. Any interested party should verify all the information including designs, plans, specifications, facilities, features, payment schedules, terms of sales etc independently with the Company prior to concluding any decision for buying in any of the project.<br><br>
					While enough care is taken by the Company to ensure that information in the website are up to date, accurate and correct, the readers/ users are requested to make an independent enquiry with the Company before relying upon the same. Nothing on the website should be misconstrued as advertising, marketing, booking, selling or an offer for sale or invitation to purchase a unit in any project by the Company. The Company is not responsible for the consequences of any action taken by the viewer relying on such material/ information on this website without independently verifying with the Company.
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: RERA Disclaimer Section -->


<!-- Sample Section -->
<section class="sample-section">
	<div class="row">
		<div class="container">
			<div class="columns small-12">
				<!-- Things -->
			</div>
		</div>
	</div>
</section>
<!-- END: Sample Section -->


<?php require_once __DIR__ . '/../inc/below.php'; ?>
