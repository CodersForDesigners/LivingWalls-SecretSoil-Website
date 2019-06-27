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


<!-- SEO Blurb Section -->
<section class="seo-blurb-section visuallyhidden">
	<?php echo getContent( '', 'seo_blurb', 'construction' ); ?>
</section>
<!-- END: SEO-Blurb Section -->


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
	<div class="menu-1 row js_primary_nav">
		<div class="container">
			<div class="columns small-12 clearfix">
				<a class="logo" href="">
					<img src="media/ss-logo-long-green-light.svg<?php echo $ver ?>">
				</a>
				<div class="menu-toggle js_primary_nav_menu_toggle float-right show-for-tablet" tabindex="-1">
					<span class="h5 text-uppercase inline-middle">Menu</span>
					<span class="h4 inline-middle"> &#9776;</span>
				</div>
				<div class="link-tray js_primary_nav_link_tray"><!-- To Toggle Reveal: Add show class for small & medium Breakpoints -->
					<div class="close-link-tray js_close_nav_link_tray"></div>
					<a class="link h5 text-uppercase" href="#contact">Contact us</a>
					<a class="link h5 text-uppercase" href="#location">Location</a>
					<a class="link h5 text-uppercase" href="tel:+919663396979">Call 9663396979</a>
					<a class="link h5 text-uppercase fill-green" href="pricing">Real-time Pricing</a>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-2 row fill-dark js_secondary_nav">
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


<!-- Construction Banner -->
<section class="construction-single-banner" style="background-image: url('media/section-bg/canopy.png<?php $ver ?>');">
</section>
<!-- END: Construction Banner -->


<!-- Construction Single -->
<section class="construction-single fill-dark space-half-top-bottom">
	<div class="row">
		<div class="container">
			<!-- Status -->
			<div class="status columns small-10 small-offset-1 large-4 large-offset-0 space-quarter-left-right">
				<div class="title text-auto-align-large h4 text-light space-half-top">Construction Update</div>
				<div class="text-auto-align-large h3 strong text-light space-half-bottom">September 2019</div>
				<div class="title text-auto-align-large h4 strong">Excavation</div>
				<div class="point text-auto-align-large h6">v54, v55 - Completed</div>
				<div class="point text-auto-align-large h6">v24, v25 - Work in Progress</div>

				<div class="title text-auto-align-large h4 strong">Structure</div>
				<div class="point text-auto-align-large h6">v38 to v54 - Completed</div>
				<div class="point text-auto-align-large h6">v29 to v37 - Work in Progress</div>

				<div class="title text-auto-align-large h4 strong">Masonry Work</div>
				<div class="point text-auto-align-large h6">v47 - Completed</div>
				<div class="point text-auto-align-large h6">v48, v46 to v37, v49 to v53 - Work in Progress</div>

				<div class="title text-auto-align-large h4 strong">Plastering</div>
				<div class="point text-auto-align-large h6">v1, v2, v3 - Inner and Outer Plastering Work Completed</div>

				<div class="title text-auto-align-large h4 strong">Flooring</div>
				<div class="point text-auto-align-large h6">v1, v3 - Marble work in progress</div>
			</div>
			<!-- END: Status -->


			<!-- Column Gallery -->
			<div class="column-gallery columns small-10 small-offset-1 large-8 large-offset-0 space-quarter-left-right space-half-top-bottom">
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A3562.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A3562.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A3565.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A3565.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image" style="column-span: all;">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A3574.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A3574.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A0001.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A0001.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A0016.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A0016.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A0019.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A0019.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A0039.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A0039.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A0041.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A0041.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A0064.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A0064.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image" style="column-span: all;">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A3529.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A3529.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A3536.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A3536.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A3548.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A3548.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A3550.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A3550.jpg<?php echo $ver ?>">
					</picture>
				</div>
				<div class="image">
					<picture>
						<source srcset="media/construction/2019_may/1480/5K8A3552.jpg<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/construction/2019_may/640/5K8A3552.jpg<?php echo $ver ?>">
					</picture>
				</div>
			</div>
			<!-- End: Column Gallery -->


			<!-- Construction Nav -->
			<!-- <div class="columns small-10 small-offset-1 large-4 large-offset-0">
				<div class="row">
					<div class="columns small-12 medium-5 large-10 space-quarter-bottom">
						<div class="button fill-green block" tabindex="-1">February Update</div>
					</div>
					<div class="columns small-12 medium-5 medium-offset-2 large-10 large-offset-0 space-quarter-bottom">
						<div class="button fill-green block" tabindex="-1">September Update</div>
					</div>
				</div>
			</div> -->
			<!-- END: Construction Nav -->
		</div>
	</div>
</section>
<!-- END: Construction Single -->


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
						<a class="h6 block" href="#large-4bhk">Large 4BHK </a>
						<a class="h6 block" href="#masterplan">Masterplan</a>
						<a class="h6 block" href="#flexiplan">Flexi-Plan</a>
						<a class="h6 block" href="#xlarge-4bhk">XLarge 4BHK</a>
						<a class="h6 block" href="#amenities">Amenities</a>
					</div>
					<div class="columns small-6">
						<!-- <a class="h6 block" href="#infrastructure">Infrastructure</a> -->
						<a class="h6 block" href="#construction">Updates</a>
						<a class="h6 block" href="#contact">Contact us</a>
						<a class="h6 block" href="#location">Location</a>
						<a class="h6 block" href="pricing">Pricing</a>
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
				<div class="space-quarter-bottom"><img width="120" src="media/credai-logo-white.svg<?php echo $ver ?>"></div>
				<div class="h4 text-uppercase space-half-bottom text-off-green"><span class="strong">RERA NUMBER :</span> PRM/KA/RERA/1251/446/PR/ 180728/001961</div>
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
