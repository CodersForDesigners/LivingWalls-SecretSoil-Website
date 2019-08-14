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


<!-- Construction Page -->
<section class="construction-page fill-dark space-half-top-bottom">
	<div class="row">
		<div class="container">
			<div class="title columns small-10 small-offset-1 large-8 large-offset-4 text-auto-align-large h1 strong text-light space-one-top space-quarter-left-right">Construction Updates</div>

			<div class="reverese-large">
				<!-- Update List -->
				<div class="update-list columns small-10 small-offset-1 large-8 large-offset-0 space-quarter-left-right space-half-top-bottom">
					<a href="#" class="update block fill-green">
						<div class="content space-quarter-left-right space-quarter-top-bottom">
							<div class="title h3">March 2019</div>
							<div class="action button fill-green">View Update <img src="media/glyph/32-rightarrow.svg<?php $ver ?>"></div>
						</div>
						<div class="thumb" style="background-image: url('media/section-bg/canopy.png<?php $ver ?>');"></div>
					</a>
					<a href="#" class="update block fill-green">
						<div class="content space-quarter-left-right space-quarter-top-bottom">
							<div class="title h3">February 2019</div>
							<div class="action button fill-green">View Update <img src="media/glyph/32-rightarrow.svg<?php $ver ?>"></div>
						</div>
						<div class="thumb" style="background-image: url('media/section-bg/canopy.png<?php $ver ?>');"></div>
					</a>
					<a href="#" class="update block fill-green">
						<div class="content space-quarter-left-right space-quarter-top-bottom">
							<div class="title h3">January 2019</div>
							<div class="action button fill-green">View Update <img src="media/glyph/32-rightarrow.svg<?php $ver ?>"></div>
						</div>
						<div class="thumb" style="background-image: url('media/section-bg/canopy.png<?php $ver ?>');"></div>
					</a>
				</div>
				<!-- End: Update List -->

				<!-- Return -->
				<div class="return columns small-10 small-offset-1 large-4 large-offset-0 space-quarter-left-right space-half-top-bottom">
					<div class="button button-large fill-black"><img src="media/glyph/32-leftarrow.svg<?php $ver ?>">Back to Overview</div>
				</div>
				<!-- END: Return -->
			</div>

		</div>
	</div>
</section>
<!-- END: Construction Page -->





<?php require_once __DIR__ . '/../inc/below.php'; ?>
