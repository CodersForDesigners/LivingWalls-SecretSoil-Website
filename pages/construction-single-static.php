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
<?php require_once __DIR__ . '/../inc/navigation.php' ?>
<!-- END: Navigation Section -->


<!-- Construction Banner -->
<section class="construction-single-banner" style="background-image: url('media/section-bg/canopy.png<?php $ver ?>');">
	<div class="row">
		<div class="container">
			<div class="return columns small-10 small-offset-1 large-4 large-offset-0">
				<div class="text-auto-align-large">
					<a href="" class="button fill-green strong" tabindex="-1">&#9664; Return to All Updates</a>
				</div>
			</div>
		</div>
	</div>
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
			<div class="columns small-10 small-offset-1 large-8 large-offset-4 space-quarter-left-right">
				<div class="row">
					<div class="columns small-6 medium-5 space-quarter-bottom">
						<a href="" class="label strong text-uppercase text-green inline-middle" tabindex="-1">&#9664; February 2019</a>
					</div>
					<div class="columns small-6 medium-5 medium-offset-2 space-quarter-bottom text-right">
						<a href="" class="label strong text-uppercase text-green inline-middle" tabindex="-1">September 2019 &#9654;</a>
					</div>
				</div>
			</div>
			<!-- END: Construction Nav -->
		</div>
	</div>
</section>
<!-- END: Construction Single -->





<?php require_once __DIR__ . '/../inc/below.php'; ?>
