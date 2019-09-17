<?php

// Get utility functions
require_once __DIR__ . '/utils.php';
// Include WordPress for Content Management
initWordPress();

/* -- Lazaro disclaimer and footer -- */
require_once __DIR__ . '/lazaro.php';

/*
 * A version number for versioning assets to invalidate the browser cache
 */
$ver = '?v=20190725';

// Just so that when some social media service (WhatsApp) try to ping URL,
//  	it should not get a 404. This because is setting the response header.
http_response_code( 200 );


// Pull some data from the request
$urlSlug = $_GET[ '_slug' ] ?? null;
$postType = $_GET[ '_post_type' ] ?? null;

$urlPath = strstr( $_SERVER[ 'REQUEST_URI' ], '?', true );
if ( ! $urlPath )
	$urlPath = $_SERVER[ 'REQUEST_URI' ];

/*
 * Get all the links on the site
 */
$defaultLinks = require __DIR__ . '/default-nav-links.php';
$links = getContent( $defaultLinks, 'pages' );

/*
 * Figure out the base URL
 * 	We diff the document root and the directory of this file to determine it
 */
$pathFragments = array_values( array_filter( explode( '/', substr( __DIR__, strlen( $_SERVER[ 'DOCUMENT_ROOT' ] ) ) ) ) );
if ( count( $pathFragments ) > 1 )
	$baseURL = '/' . $pathFragments[ 0 ] . '/';
else
	$baseURL = '/';

/*
 * Get the title and URL of the website and current page
 */
$siteTitle = getContent( '', 'page_title', $urlSlug ) ?: getContent( 'Secretly Kickass 4BHK House | Secret Soil | LivingWalls', 'page_title' );
$pageUrl = $siteUrl . $urlPath;
if ( pageIsStatic() )
	$pageTitle = getCurrentPageTitle( $links, $baseURL, $siteTitle );
else if ( cmsIsEnabled() ) {
	$the_post = getCurrentPost( $urlSlug, $postType );
	if ( empty( $the_post ) ) {
		http_response_code( 404 );
		exit;
	}
	$pageTitle = $the_post->post_title . ' | ' . $siteTitle;
}
else
	$pageTitle = $siteTitle;

$pageImage = getContent( '', 'page_image', $urlSlug ) ?: getContent( '', 'page_image' );
$pageImage = $pageImage[ 'sizes' ][ 'medium' ] ?: $pageImage[ 'sizes' ][ 'thumbnail' ] ?: $pageImage[ 'url' ];

http_response_code( 200 );

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

	<?php require_once 'head.php'; ?>

	<body id="body" class="body">

		<?php
			/*
			 * Arbitrary Code ( Top of Body )
			 */
			echo getContent( '', 'arbitrary_code_body_top' );
		?>

	<!--  ★  MARKUP GOES HERE  ★  -->

	<div id="page-wrapper"><!-- Page Wrapper -->

		<?php //require_once 'navigation.php'; ?>

		<!-- Page Content -->
		<div id="page-content">
