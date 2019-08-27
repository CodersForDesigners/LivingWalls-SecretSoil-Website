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
		$previousUpdate[ 'title' ] = $previousUpdatePost->post_title;
		$previousUpdate[ 'url' ] = get_permalink( $previousUpdatePost->ID );
	}
	if ( ! empty( $nextUpdatePost ) ) {
		$nextUpdate[ 'title' ] = $nextUpdatePost->post_title;
		$nextUpdate[ 'url' ] = get_permalink( $nextUpdatePost->ID );
	}

	// Pull out all the fields
	$title = $the_post->post_title;
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

// $parentPageURL = preg_replace( '/', '', $_SERVER[ 'REQUEST_URI' ] );
$parentPageURL = substr(
	$_SERVER[ 'REQUEST_URI' ],
	0,
	strrpos( $_SERVER[ 'REQUEST_URI' ], '/' )
);

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
	<div class="row">
		<div class="container">
			<div class="return columns small-10 small-offset-1 large-4 large-offset-0">
				<div class="text-auto-align-large">
					<a href="<?= $parentPageURL ?>" class="button fill-green strong" tabindex="-1">&#9664; &nbsp; Return to All Updates</a>
				</div>
			</div>
		</div>
	</div>
	<a href="#content" class="scroll">
		<div class="icon-scroll"></div>
		<!-- <div class="label strong text-uppercase text-light">Scroll</a> -->
	</a>
</section>
<!-- END: Construction Banner -->


<!-- Construction Single -->
<section class="construction-single fill-dark space-half-top-bottom">
	<div class="row">
		<div class="container">
			<!-- Status -->
			<div class="status columns small-10 small-offset-1 large-4 large-offset-0 space-quarter-left-right">
				<div class="title text-auto-align-large h4 text-light space-half-top">Construction Update</div>
				<div class="text-auto-align-large h3 strong text-light space-half-bottom"><?= $title ?></div>
				<?php foreach ( $description as $section ) : ?>
					<div class="title text-auto-align-large h4 strong"><?= $section[ 'heading' ] ?></div>
					<div class="point text-auto-align-large h6"><?= $section[ 'points' ] ?></div>
				<?php endforeach; ?>
			</div>
			<!-- END: Status -->


			<!-- Column Gallery -->
			<div class="column-gallery columns small-10 small-offset-1 large-8 large-offset-0 space-quarter-left-right space-half-top-bottom js_gallery">
				<?php foreach ( $gallery as $picture ) : ?>
					<div class="image js_image js_modal_trigger" tabindex="-1" data-mod-id="gallery-image">
						<picture>
							<source srcset="<?= $picture[ 'url' ] ?>" media="(min-width: 640px)">
							<img src="<?= $picture[ 'sizes' ][ 'medium_large' ] ?>">
						</picture>
						<?php if ( ! empty( $picture[ 'caption' ] ) ) : ?>
							<span class="caption label"><?= $picture[ 'caption' ] ?></span>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
			<!-- End: Column Gallery -->


			<!-- Construction Nav -->
			<div class="columns small-10 small-offset-1 large-8 large-offset-4 space-quarter-left-right">
				<div class="row">
					<div class="columns small-6 medium-5 space-quarter-bottom">
						<?php if ( ! empty( $previousUpdate ) ) : ?>
							<a href="<?= $previousUpdate[ 'url' ] ?>" class="label strong text-uppercase text-green inline-middle" tabindex="-1">&#9664; <?= $previousUpdate[ 'title' ] ?></a>
						<?php endif; ?>
					</div>
					<div class="columns small-6 medium-5 medium-offset-2 space-quarter-bottom text-right">
						<?php if ( ! empty( $nextUpdate ) ) : ?>
							<a href="<?= $nextUpdate[ 'url' ] ?>" class="label strong text-uppercase text-green inline-middle" tabindex="-1"><?= $nextUpdate[ 'title' ] ?> &#9654;</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<!-- END: Construction Nav -->

		</div>
	</div>
</section>
<!-- END: Construction Single -->




<script type="text/javascript">

	window.__LW = window.__LW || { };
	__LW.constructionGallery = <?= json_encode( array_map( function ( $image ) {
		return [
			'smallUrl' => $image[ 'sizes' ][ 'medium_large' ],
			'largeUrl' => $image[ 'url' ],
			'caption' => $image[ 'caption' ]
		];
	}, $gallery ) ) ?>;

	function setImageToShowcase ( imageIndex ) {

		var imageUrl__S = __LW.constructionGallery[ imageIndex ].smallUrl;
		var imageUrl__L = __LW.constructionGallery[ imageIndex ].largeUrl;
		var caption = __LW.constructionGallery[ imageIndex ].caption;

		var $showcaseImage = $( ".js_modal_box .js_image_showcase" );
		$showcaseImage.find( "img" ).attr( "src", imageUrl__S );
		$showcaseImage.find( "source" ).attr( "srcset", imageUrl__L );
		$showcaseImage.find( ".js_image_caption" ).text( caption );

	}

	/*
	 * Full-screen the image that was clicked on
	 */
	var currentImageIndex;
	$( ".js_gallery" ).on( "click", ".js_image", function ( event ) {
		var $target = $( event.target );
		var $image = $target.closest( ".js_image" );

		var imageIndex = $( ".js_gallery" ).find( ".js_image" ).index( $image );
		setImageToShowcase( imageIndex );
		currentImageIndex = imageIndex;
	} );

	/*
	 * The lightbox arrows
	 */
	$( document ).on( "click", ".js_arrow", function ( event ) {
		var $arrow = $( event.target ).closest( ".js_arrow" );
		if ( $arrow.data( "dir" ) == "left" )
			if ( currentImageIndex == 0 )
				currentImageIndex = __LW.constructionGallery.length - 1;
			else
				currentImageIndex = ( currentImageIndex - 1 ) % __LW.constructionGallery.length;
		else
			currentImageIndex = ( currentImageIndex + 1 ) % __LW.constructionGallery.length;

		setImageToShowcase( currentImageIndex );
	} );

</script>





<?php require_once __DIR__ . '/../inc/below.php'; ?>
