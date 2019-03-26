
$( function ( $ ) {





/*
 *
 * User Coordinates
 *
 */
var currentScrollTop;
var previousScrollTop;
var scrollThreshold = 10;


/*
 *
 * Navigation Menu Expand on Mobile
 *
 */
var $primaryNavLinkTray = $( ".js_primary_nav_link_tray" );
var $primaryNavLinkTrayToggle = $( ".js_primary_nav_menu_toggle" );
$primaryNavLinkTrayToggle.on( "click", function ( event ) {
	$primaryNavLinkTray.toggleClass( "show" );
} );
$( ".js_close_nav_link_tray" ).on( "click", function ( event ) {
	$primaryNavLinkTray.removeClass( "show" );
} );
// Whenever an item on the menu is clicked and the page jumps to some place,
//  	close the menu
$( window ).on( "hashchange", function ( event ) {
	$primaryNavLinkTray.removeClass( "show" );
} );

/*
 *
 * Smooth-scroll to sections
 *
 */
$( document ).on( "click", "a[ href ^= '#' ]", function ( event ) {
	event.preventDefault();
	event.stopPropagation();
	event.stopImmediatePropagation();
	var $link = $( event.target ).closest( "a" );
	var toSectionId = $link.attr( "href" ).slice( 1 );
	// setTimeout( function () {
		var domSection = document.getElementById( toSectionId );
		window.scrollTo( { top: domSection.offsetTop - 50, behavior: "smooth" } );
	// }, 0 );
	return false;
} );


/*
 *
 * Navigation Menu Auto-Hide
 *
 */
var $primaryNav = $( ".js_primary_nav" );
var $secondaryNav = $( ".js_secondary_nav" );

function layoutNavigation () {

	currentScrollTop = window.scrollY || document.body.scrollTop;

	/*
	 * Stick-rolling the Primary Navigation
	 */
	if ( Math.abs( currentScrollTop - previousScrollTop ) < scrollThreshold ) {
		previousScrollTop = currentScrollTop;
		return;
	}

	// If scrolling ↓.....
	if ( currentScrollTop > previousScrollTop ) {
		$primaryNav.addClass( "hide" );
		$primaryNavLinkTray.removeClass( "show" );
	}
	else {	// if scrolling ↑.....
		$primaryNav.removeClass( "hide" );
	}

	previousScrollTop = currentScrollTop;

}

$( window ).on( "scroll", layoutNavigation );

/*
 *
 * When scrolling through the page,
 * 1. Change the URL fragment to match the section that is currently being viewed.
 * 2. Reflect the current section in the navigation menu ( if applicable ).
 *
 */

var intervalToCheckForEngagement = 250;
var thresholdTimeForEngagement = 2000;
var timeSpentOnASection = 0;

var manageHistoryAndNavigationOnScroll = function () {

	var currentScrollTop;
	var previousScrollTop;
	var currentSectionId;
	var previousSectionId;
	var currentSectionName;
	var sectionScrollTop;
	var $currentNavItem;

	// Get all the sections in the reverse order
	var $sections = Array.prototype.slice.call( $( "[ data-section ]" ) )
					.reverse()
					.map( function ( el ) { return $( el ) } );
	// Get all the navigational links from the navigation menu
	var $navItems = $( ".js_secondary_nav a" );

	return function manageHistoryAndNavigationOnScroll () {

		var viewportHeight = $( window ).height();
		currentScrollTop = window.scrollY || document.body.scrollTop;
		currentSectionId = null;

		var _i
		for ( _i = 0; _i < $sections.length; _i += 1 ) {
			sectionScrollTop = $sections[ _i ].position().top;
			if (
				( currentScrollTop >= sectionScrollTop - viewportHeight / 2 )
				&&
				( currentScrollTop <= sectionScrollTop + $sections[ _i ].height() + viewportHeight / 2 )
			) {
				currentSectionId = $sections[ _i ].attr( "id" );
				break;
			}
		}
		if ( ! currentSectionId ) {
			return;
			// currentSectionId = "/";
			// sectionScrollTop = 0;
		}

		// Mark the corresponding item in the navigation menu
		$currentNavItem = $navItems
							.removeClass( "active" )
							.filter( "[ href = '#" + currentSectionId + "' ]" )
		$currentNavItem.addClass( "active" );
		// Scroll to the corresponding item in the navigation menu
		if ( currentSectionId != previousSectionId )
			if ( $currentNavItem.length )
				$currentNavItem.parent().get( 0 ).scroll( {
					top: 0,
					left: $currentNavItem.get( 0 ).offsetLeft - 100,
					behavior: "smooth"
				} );

		/*
		 * If the previous and the current section are the same, then add time
		 * Else, reset the "time spent on a section" counter
		 */
		if ( currentSectionId == previousSectionId ) {
			timeSpentOnASection += intervalToCheckForEngagement
			if ( timeSpentOnASection >= thresholdTimeForEngagement ) {
				currentSectionName = $sections[ _i ].data( "section" );
				if ( ! ( history.state && history.state.section == currentSectionName ) ) {
					history.pushState( {
						section: currentSectionName,
						scrollPosition: sectionScrollTop
					}, "", "#" + currentSectionId );
				}
			}
		}
		else {
			timeSpentOnASection = 0
		}

		previousScrollTop = currentScrollTop;
		previousSectionId = currentSectionId;

	};

}();

setInterval( manageHistoryAndNavigationOnScroll, intervalToCheckForEngagement );


$( window ).on( "popstate", function ( event ) {

	// reset the timeSpent var
	timeSpentOnASection = 0

	event.preventDefault();

} );





} );
