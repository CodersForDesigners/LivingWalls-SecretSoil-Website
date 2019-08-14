<?php
/*
 *
 *	Construction Update Pages Template
 *
 */

require_once __DIR__ . '/../inc/above.php';

// $constructionUpdatePost = get_posts( [
// 	'post_type' => $post_type,
// 	'post_status' => 'publish',
// 	'name' => $slug
// ] );

// if ( empty( $constructionUpdatePost ) )
	// header( 'Location: ' );
// $constructionUpdatePost = $constructionUpdatePost[ 0 ];

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





<?php require_once __DIR__ . '/../inc/below.php'; ?>
