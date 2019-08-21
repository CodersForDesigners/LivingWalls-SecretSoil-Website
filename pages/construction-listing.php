<?php
/*
 *
 *	Construction Update Listing
 *
 */

// Page-specific preparatory code goes here.

require_once __DIR__ . '/../inc/above.php';



// Get all the post ids and slugs
if ( cmsIsEnabled() ) {

	$constructionPosts = get_posts( [
		'post_type' => 'construction_updates',
		'post_status' => 'publish',
		'numberposts' => -1,
		// 'order' => 'ASC'
		'orderby' => 'date'
	] );

	// Pull out all the fields
	$constructionUpdates = [ ];
	foreach ( $constructionPosts as $construction ) {
		$constructionUpdates[ ] = [
			'url' => get_permalink( $construction->ID ),
			'title' => $construction->post_title,
			'featuredImage' => getContent( '', 'featured_image', $construction->ID )
		];
	}

	$homeUrl = home_url();

}
else {
	$constructionUpdates = require_once __DIR__ . '/../inc/sample-content/construction-updates.php';
	// Get the url sans query and hash parameters
	$thisUrl = preg_replace( '/\/+$/', '', $_SERVER[ 'REQUEST_URI' ] ) . '/';
	$homeUrl = $thisUrl . '..';
}


?>

<!-- Media Version <img src="media/logo.svg<?php //echo $ver ?>"> -->


<!-- SEO Blurb Section -->
<section class="seo-blurb-section visuallyhidden">
	<?php echo getContent( '', 'seo_blurb', 'construction' ); ?>
</section>
<!-- END: SEO-Blurb Section -->


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
					<?php foreach ( $constructionUpdates as $update ) : ?>
						<a href="<?= $update[ 'url' ] ?>" class="update block fill-green">
							<div class="content space-quarter-left-right space-quarter-top-bottom">
								<div class="title h3"><?= $update[ 'title' ] ?></div>
								<div class="action button fill-green">View Update <img src="media/glyph/32-rightarrow.svg<?= $ver ?>"></div>
							</div>
							<div class="thumb" style="background-image: url( '<?= $update[ 'featuredImage' ][ 'url' ] ?>' );"></div>
						</a>
					<?php endforeach; ?>
				</div>
				<!-- End: Update List -->

				<!-- Return -->
				<div class="return columns small-10 small-offset-1 large-4 large-offset-0 space-quarter-left-right space-half-top-bottom">
					<a class="button button-large fill-black" href="<?= $homeUrl ?>"><img src="media/glyph/32-leftarrow.svg<?php $ver ?>">Back to Overview</a>
				</div>
				<!-- END: Return -->
			</div>

		</div>
	</div>
</section>
<!-- END: Construction Page -->





<?php require_once __DIR__ . '/../inc/below.php'; ?>
