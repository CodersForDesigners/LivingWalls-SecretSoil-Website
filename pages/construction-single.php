<?php
/*
 *
 *	Construction Update Pages Template
 *
 */

require_once __DIR__ . '/../inc/above.php';

if ( cmsIsEnabled() ) {

	// Get the previous and next updates
	// Note: Some WordPress function assume that certain global variable are set
		// Set the global WP post variable
	global $post;
	$post = $the_post;
	$previousUpdatePost = get_previous_post();
	$nextUpdatePost = get_next_post();
	if ( ! empty( $previousUpdatePost ) ) {
		$previousUpdate[ 'monthAndYear' ] = $previousUpdatePost->post_title;
		$previousUpdate[ 'url' ] = get_permalink( $previousUpdatePost->ID );
	}
	if ( ! empty( $nextUpdatePost ) ) {
		$nextUpdate[ 'monthAndYear' ] = $nextUpdatePost->post_title;
		$nextUpdate[ 'url' ] = get_permalink( $nextUpdatePost->ID );
	}

	// Get all the post ids and slugs
	$updates__postIds = get_posts( [
		'post_type' => 'construction_updates',
		'post_status' => 'publish',
		'numberposts' => -1,
		// 'order' => 'ASC'
		'orderby' => 'date'
	] );

	// Pull out all the fields
	$monthAndYear = $the_post->post_title;
	$description = getContent( '', 'description', $the_post->ID );
	$gallery = getContent( '', 'gallery', $the_post->ID );
	$featuredImage = getContent( '', 'featured_image', $the_post->ID );

}
else {
	$constructionUpdates = require_once __DIR__ . '/../inc/sample-content/construction-updates.php';
	foreach ( $constructionUpdates as $_index => $update ) {
		if ( ( '/construction/' . $slug ) == $update[ 'url' ] ) {
			$constructionUpdate = $update;
			$previousUpdate = $constructionUpdates[ $_index - 1 ] ?? null;
			$nextUpdate = $constructionUpdates[ $_index + 1 ] ?? null;
			break;
		}
	}
	extract( $constructionUpdate );
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


<!-- Construction Banner -->
<section class="construction-single-banner" style="background-image: url( '<?= $featuredImage[ 'url' ] ?>' );">
</section>
<!-- END: Construction Banner -->


<!-- Construction Single -->
<section class="construction-single fill-dark space-half-top-bottom">
	<div class="row">
		<div class="container">
			<!-- Status -->
			<div class="status columns small-10 small-offset-1 large-4 large-offset-0 space-quarter-left-right">
				<div class="title text-auto-align-large h4 text-light space-half-top">Construction Update</div>
				<div class="text-auto-align-large h3 strong text-light space-half-bottom"><?= $monthAndYear ?></div>
				<?php foreach ( $description as $section ) : ?>
					<div class="title text-auto-align-large h4 strong"><?= $section[ 'heading' ] ?></div>
					<div class="point text-auto-align-large h6"><?= $section[ 'points' ] ?></div>
				<?php endforeach; ?>
			</div>
			<!-- END: Status -->


			<!-- Column Gallery -->
			<div class="column-gallery columns small-10 small-offset-1 large-8 large-offset-0 space-quarter-left-right space-half-top-bottom">
				<?php foreach ( $gallery as $picture ) : ?>
					<div class="image">
						<picture>
							<source srcset="<?= $picture[ 'url' ] ?>" media="(min-width: 640px)">
							<img src="<?= $picture[ 'sizes' ][ 'medium_large' ] ?>">
						</picture>
					</div>
				<?php endforeach; ?>
			</div>
			<!-- End: Column Gallery -->


			<!-- Construction Nav -->
			<div class="columns small-10 small-offset-1 large-8 large-offset-4 space-quarter-left-right">
				<div class="row">
					<div class="columns small-6 medium-5 space-quarter-bottom">
						<?php if ( ! empty( $previousUpdate ) ) : ?>
							<a href="<?= $previousUpdate[ 'url' ] ?>" class="label strong text-uppercase text-green inline-middle" tabindex="-1">&#9664; <?= $previousUpdate[ 'monthAndYear' ] ?></a>
						<?php endif; ?>
					</div>
					<div class="columns small-6 medium-5 medium-offset-2 space-quarter-bottom text-right">
						<?php if ( ! empty( $nextUpdate ) ) : ?>
							<a href="<?= $nextUpdate[ 'url' ] ?>" class="label strong text-uppercase text-green inline-middle" tabindex="-1"><?= $nextUpdate[ 'monthAndYear' ] ?> &#9654;</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<!-- END: Construction Nav -->

		</div>
	</div>
</section>
<!-- END: Construction Single -->





<?php require_once __DIR__ . '/../inc/below.php'; ?>
