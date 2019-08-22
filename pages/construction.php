<?php
/*
 *
 *	Construction Update Pages Template
 *
 */

$postType = $_GET[ '_post_type' ] ?? null;
$slug = $_GET[ '_slug' ] ?? null;

if ( empty( $slug ) )
	require_once __DIR__ . '/construction-listing.php';
else
	require_once __DIR__ . '/construction-single.php';
