<?php

if ( empty( $baseURL ) )
	$navigationBaseURL = '/';
else
	$navigationBaseURL = $navigationBaseURL;

?>

<section class="navigation-section">
	<div class="menu-1 row js_primary_nav">
		<div class="container">
			<div class="columns small-12 clearfix">
				<a class="logo" href="<?= $navigationBaseURL ?>">
					<img src="media/ss-logo-long-green-light.svg<?php echo $ver ?>">
				</a>
				<div class="menu-toggle js_primary_nav_menu_toggle float-right show-for-tablet" tabindex="-1">
					<span class="h5 text-uppercase inline-middle">Menu</span>
					<span class="h4 inline-middle"> &#9776;</span>
				</div>
				<div class="link-tray js_primary_nav_link_tray"><!-- To Toggle Reveal: Add show class for small & medium Breakpoints -->
					<div class="close-link-tray js_close_nav_link_tray"></div>
					<a class="link h5 text-uppercase" href="<?= $navigationBaseURL ?>#contact">Contact us</a>
					<a class="link h5 text-uppercase" href="<?= $navigationBaseURL ?>#location">Location</a>
					<a class="link h5 text-uppercase" href="tel:+919663396979">Call 9663396979</a>
					<a class="link h5 text-uppercase fill-green" href="<?= $navigationBaseURL ?>pricing">Real-time Pricing</a>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-2 row fill-dark js_secondary_nav">
		<div class="link-tray">
			<a class="link label text-uppercase" href="<?= $navigationBaseURL ?>#large-4bhk">Large 4BHK</a>
			<a class="link label text-uppercase" href="<?= $navigationBaseURL ?>#masterplan">Masterplan</a>
			<a class="link label text-uppercase" href="<?= $navigationBaseURL ?>#flexiplan">Flexi-Plan</a>
			<a class="link label text-uppercase" href="<?= $navigationBaseURL ?>#xlarge-4bhk">XLarge 4BHK</a>
			<a class="link label text-uppercase" href="<?= $navigationBaseURL ?>#amenities">Amenities</a>
			<a class="link label text-uppercase" href="<?= $navigationBaseURL ?>#construction">Updates</a>
			<a class="link label text-uppercase" href="<?= $navigationBaseURL ?>#contact">Contact Us</a>
		</div>
	</div>
</section>
