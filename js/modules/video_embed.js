
/*

 YouTube embeds across the site are initialized and loaded ↵
 after the DOM is "ready". This is so the page loading isn't slowed down.

 Page loads can be synchronous or asynchronous.

 Markup structure of the embed are like so,

	<div class="youtube_embed ga_video" data-src="https://www.youtube.com/embed/lncVHzsc_QA?rel=0&amp;showinfo=0" data-ga-video-src="Sample - Video">
		<div class="youtube_load"></div>
		<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
	</div>

As you can see, we store the video URL in a data-src attribute of the enclosing element.
That URL is then plugged into the iframe element asynchronously.

*/

// takes a DOM element as input
// copies the URL from its "data-src" attribute
// and attaches to the `src` attribute of the iframe element that is a descendant of it
function setVideoEmbed ( domEl ) {
	$el = $( domEl );
	var src = $el.data( 'src' );
	$el.find( 'iframe' ).attr( 'src', src );
}

// takes a DOM element as input
// removes the `src` attribute of the iframe element that is a descendant of it
function unsetVideoEmbed ( domEl ) {
	$( domEl ).find( 'iframe' ).attr( 'src', '' );
}

// initializes the video embeds asynchronously after a timeout
function initVideoEmbeds () {

	window.setTimeout(function() {
		$( '.youtube_embed:not(.js_in_carousel)' ).each( function () {
			setVideoEmbed( this );
		} );
		$( '.facebook_embed' ).each( function () {
			setVideoEmbed( this );
		} );
	}, 3000);

	// If there isn't a requirement for the YouTube API, move on
	if ( $( ".js_api_yt" ).length == 0 )
		return;

	// If there is a requirement for the YouTube API, then
	// 1. Load the YouTube API library (asynchronously)
	var scriptElement = document.createElement( "script" );
	scriptElement.src = "https://www.youtube.com/iframe_api";
	$( "script" ).last().after( scriptElement );

	// 2. Setup the YouTube video, its playback options and hooks event handling
	function onYouTubeIframeAPIReady () {
		$( document ).trigger( "ready/api/youtube" );
	}
	// This function needs to exposed as a global
	window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;

}

$( function () {

	// initializes and loads the video embeds on **synchronous** page loads
	initVideoEmbeds();

	// initializes and loads the video embeds on **asynchronous** page loads
	// hooks onto a custom event that is emitted, "page::load"
	$( document ).on( "page::load", initVideoEmbeds );

	// The Ad videos
	$( document ).on( "ready/api/youtube", function ( event ) {

		// When the YouTube video player is ready, this function is run
		function onPlayerReady ( event ) {
			var $videoCover = $( event.target.a ).parent().find( ".js_video_cover" );
			$videoCover.addClass( "fade-in" );
		}

		// Whenever the YouTube video player's state changes, this function is run
		function onPlayerStateChange ( event ) {

			var domVideoPlayer = event.target.a;
			var $videoPlayer = $( domVideoPlayer );
			var $videoCover = $videoPlayer.parent().find( ".js_video_cover" );

			if ( event.data == YT.PlayerState.PLAYING ) {
				if ( $videoCover.hasClass( "js_paused" ) ) {
					$videoCover.removeClass( "js_paused" );
					return;
				}
				$videoPlayer.addClass( "fade-in" );
				$videoCover.removeClass( "fade-in" );
			}
			if ( event.data == YT.PlayerState.ENDED ) {
				// event.target.seekTo( event.target.getDuration() - 0.5 );
				// event.target.pauseVideo();
				$videoPlayer.removeClass( "fade-in" );
				$videoCover.addClass( "fade-in pointer js_paused" );
				setTimeout( function () {
					event.target.seekTo( 0 );
					event.target.pauseVideo();
					$videoCover.removeClass( "pointer" );
				}, 300 );
			}
		}

		$( ".js_api_yt" ).each( function ( _i, domYTIframe ) {
			new YT.Player( domYTIframe, {
				events: {
					onReady: onPlayerReady,
					onStateChange: onPlayerStateChange
				}
			} );
		} );

	} );

} );
