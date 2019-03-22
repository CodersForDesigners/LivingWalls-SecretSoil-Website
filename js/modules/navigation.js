
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
 * Navigation Menus Sticking and Slipping Into and Out of the Viewport
 *
 */
var $primaryNavContainer = $( ".js_primary_nav_container" );
var primaryNavContainerHeight;
var $secondaryNavContainer = $( ".js_secondary_nav_container" );
var $secondaryNav = $secondaryNavContainer.find( ".js_secondary_nav" );
var secondaryNavContainerTopY;
var secondaryNavContainerBottomY;
var secondaryNavContainerHeight;

function getPositionsAndDimensions () {
	primaryNavContainerHeight = $primaryNavContainer.height();
	window.document.documentElement.style.setProperty( "--primary-nav-height", primaryNavContainerHeight + "px" );
	secondaryNavContainerHeight = $secondaryNavContainer.height();
	secondaryNavContainerTopY = $secondaryNavContainer.offset().top;
	secondaryNavContainerBottomY = secondaryNavContainerTopY + secondaryNavContainerHeight;
	window.document.documentElement.style.setProperty( "--secondary-nav-height", $secondaryNav.height() + "px" );
}
getPositionsAndDimensions();
$( window ).on( "resize", _.debounce( getPositionsAndDimensions, 500 ) );
function layoutNavigation () {

	currentScrollTop = window.scrollY || document.body.scrollTop;

	/*
	 * Sticking the Secondary Navigation
	 */
	if ( ( currentScrollTop + primaryNavContainerHeight ) > secondaryNavContainerTopY )
		$secondaryNav.addClass( "affix-to-top" )
	else
		$secondaryNav.removeClass( "affix-to-top" )

	/*
	 * Stick-rolling the Primary Navigation
	 */
	if ( Math.abs( currentScrollTop - previousScrollTop ) < scrollThreshold ) {
		previousScrollTop = currentScrollTop;
		return;
	}

	// If scrolling ↓.....
	if ( currentScrollTop > previousScrollTop ) {
		if ( currentScrollTop > secondaryNavContainerBottomY ) {
			$primaryNavContainer.addClass( "hide" );
			$secondaryNav.addClass( "offset-a-bit" );
		}
	}
	else {	// if scrolling ↑.....
		if ( currentScrollTop > secondaryNavContainerBottomY ) {
			$primaryNavContainer.removeClass( "hide" );
			$secondaryNav.removeClass( "offset-a-bit" );
		}
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
	var currentSection;
	var previousSection;
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
		currentSection = null;

		var _i
		for ( _i = 0; _i < $sections.length; _i += 1 ) {
			sectionScrollTop = $sections[ _i ].position().top;
			if (
				( currentScrollTop >= sectionScrollTop - viewportHeight / 2 )
				&&
				( currentScrollTop <= sectionScrollTop + $sections[ _i ].height() + viewportHeight / 2 )
			) {
				currentSection = $sections[ _i ].attr( "id" );
				break;
			}
		}
		if ( ! currentSection ) {
			currentSection = "/";
			sectionScrollTop = 0;
		}

		// Mark the corresponding item in the navigation menu
		$currentNavItem = $navItems
							.removeClass( "active" )
							.filter( "[ href = '#" + currentSection + "' ]" )
		$currentNavItem.addClass( "active" );
		// Scroll to the corresponding item in the navigation menu
		if ( currentSection != previousSection )
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
		if ( currentSection == previousSection ) {
			timeSpentOnASection += intervalToCheckForEngagement
			if ( timeSpentOnASection >= thresholdTimeForEngagement ) {
				if ( ! ( history.state && history.state.section == currentSection ) ) {
					history.pushState( {
						section: currentSection,
						scrollPosition: sectionScrollTop
					}, "", "#" + currentSection );
				}
			}
		}
		else {
			timeSpentOnASection = 0
		}

		previousScrollTop = currentScrollTop;
		previousSection = currentSection;

	};

}();

setInterval( manageHistoryAndNavigationOnScroll, intervalToCheckForEngagement );


$( window ).on( "popstate", function ( event ) {

	// reset the timeSpent var
	timeSpentOnASection = 0

	event.preventDefault();

} );





} );
