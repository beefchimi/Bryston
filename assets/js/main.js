// global variables for Album View
var albumColumns = 2,
	$thisAlbum,
	$thisAlbumNumber,
	$clonedDetails;


jQuery(document).ready(function($) {


	// cache elements for speed
	var $html     = $('html'),
		$body     = $('body'),
		$document = $(document),
		$window   = $(window);

	// var $dropdown = $('div[data-ui="dropdown"]');


	/* Temporary Form Error Handler
	 * ! this function is for demo purposes only !
	---------------------------------------------------------------------------- */
	function initErrorHandler() {

		var $loginForm = $('#login-form');

		$loginForm.submit(function(e) {

			if( !$loginForm.hasClass('shake') ) {

				$loginForm.addClass('shake');
				$loginForm.find('div.input-wrap').addClass('errors');

				setTimeout(function() {
					$loginForm.removeClass('shake');
				}, 600);

			}

			return false;

		});

	}


	/* Temporary Alert Trigger
	 * ! this function is for demo purposes only !
	---------------------------------------------------------------------------- */
	function initAlertTrigger() {

		// define required variables
		var $alertTrigger       = $('#alert-test'),
			$insertAfterElement = null,
			alertCounter        = 0;

		// should be on error... instead of on click
		$alertTrigger.on('click', function() {

			// define demo variables
			var $tempMessage          = $('<p>Error establishing connection to database. Please check your MPD configuration.</p>'),
				$tempDestination      = '#',
				$mostRecentAlert      = $('#alert-' + alertCounter),
				mostRecentAlertHeight = 0;

			// check if a alert-notification already exists...
			// if yes, we will insert our new alert after
			if ( $mostRecentAlert.length > 0 ) {

				$insertAfterElement = '#alert-' + alertCounter;

				// mostRecentAlertHeight = $mostRecentAlert.height();

				// var mostRecentAlertPosition = $mostRecentAlert.position();

				// $mostRecentAlert.css('top', mostRecentAlertPosition + );

			// else, insert after the footer
			} else {

				$insertAfterElement = 'footer[data-site="footer"]';

			}

			// each time $alertTrigger is clicked, increment the alertCounter...
			// once in production, we need to instead increment this based on errors encountered
			alertCounter++;

			// create aside element, insert after footer or most recent alert
			$('<aside/>', {
				id: 'alert-' + alertCounter,
				class: 'alert-notification',
				'data-alert': 'notification'
			}).insertAfter($insertAfterElement);

			// build the modal content, including the HREF desintation for this alert
			$('#alert-' + alertCounter).html(
				'<a href="' + $tempDestination + '" title="Click here to resolve this alert!">'+
					'<i data-icon="ui_alert"></i>'+
					'<div class="alert-message"></div>'+
				'</a>'
			);

			// load alert message and append it to div.alert-message...
			// pass this data however works best. the following code is only for demonstration!
			$tempMessage.appendTo('#alert-' + alertCounter + ' div.alert-message');

			// once the #alert-notification has been created, allow enough time for css transition (200ms)...
			// add the "ready" class... wait 6 seconds... remove "ready" class... wait 1 second... remove <aside> from DOM
			// allow the notification to remain visible for 3 seconds...
			$('#alert-' + alertCounter).wait(200).addClass('ready').wait(6000).removeClass('ready').wait(1000).remove();

			// temporary top calculation for previous alert
			if ( $mostRecentAlert.length > 0 ) {

				var newestAlertHeight = $('#alert-' + alertCounter).height(),
					mostRecentAlertPosition = $mostRecentAlert.position();

				$mostRecentAlert.css('top', mostRecentAlertPosition.top + newestAlertHeight);

			}

			return false;

		});

	}

/*

	// in case we need to do anything special with clicking the notification link

	function initFollowAlert() {

		$('#alert-notification').on('click', function() {

			var alertURL = $(this).attr('href');

		});

	}

*/


	/* Search Library :focus
	---------------------------------------------------------------------------- */
	function initSearchFocus() {

		var $searchLibrary = $('#library-search input[type="text"]');

		// var searchValue = $.trim( $searchLibrary.val() );
		// if ( searchValue.length > 0 ) { }

		// on :focus of search input, add "search-focused" class to <body>
		$searchLibrary.focus(function() {
			$body.addClass('search-focused');
		});

		// off :focus of search input, wait 200ms then remove "seach-focused" class from <body>
		$searchLibrary.blur(function() {

			setTimeout(function() {
				$body.removeClass('search-focused');
			}, 200);

		});

	}


	/* Modal Controller
	---------------------------------------------------------------------------- */
	function initModalController() {

		// set all overlays to display: none; on window load
		$('[data-modal="overlay"]').css('display', 'none');

		// on click of any data-modal controller...
		$('[data-modal="controller"]').on('click', function() {

			// grab the value from this controller's data-meta...
			var thisMeta = $(this).attr('data-meta');

			// and use that value to find the target overlay, setting display: block;
			$('#'+thisMeta).css('display', 'block');

			// once display: block; is set, add the "visible" class to allow overlay fadeIn
			if ( $('#'+thisMeta).css('display') == 'block') {
				$('#'+thisMeta).addClass('visible');
			}

			return false;

		});

		// on click of any data-modal close link
		$('[data-modal="overlay"] [data-modal="header"] a[data-modal="close"]').on('click', function() {

			// find the parent overlay for this close link...
			var $thisOverlay = $(this).closest('[data-modal="overlay"]');

			// and remove the "visible" class
			$thisOverlay.removeClass('visible');

			// wait 400ms before setting display: none;
			setTimeout(function() {
				$thisOverlay.css('display', 'none');
			}, 400); // twice as long as it takes to transition

			return false;

		});

	}


	/* Media List Toggle
	---------------------------------------------------------------------------- */
	function initMediaListToggle() {

		// on click of any #view_default a.toggle-button
		$('#view_default [data-component] div.component-header a.toggle-button').on('click', function() {

			// find the parent [data-component] and toggle the "closed" class
			$(this).closest('[data-component]').toggleClass('closed');

			return false;

		});

	}


	/* Dropdown Select
	---------------------------------------------------------------------------- */
	function initDropdownSelect() {

		var $dropdown       = $('div[data-ui="dropdown"]'),
			$dropdownHeader = $dropdown.find('span.dropdown-header');

		// on click of any span.dropdown-header
		$dropdownHeader.on('click', function() {

			var $thisDropdownHeader    = $(this),
				$selectedDropdown      = $thisDropdownHeader.parent(),
				$selectedDropdownLinks = $selectedDropdown.find('ul li a');

			// toggle the "toggled" class on [data-ui="dropdown"]
			$selectedDropdown.toggleClass('toggled');
			// $html.toggleClass('cursor-pointer');

			// on click of any of the dropdown links...
			$selectedDropdownLinks.on('click', function() {

				var linkText = $(this).text();

				// replace span.dropdown-header text with that of the clicked link
				$thisDropdownHeader.text(linkText);

				// close the dropdown
				initCloseDropdown();

				return false;

			});

		});

/*
		if ( $dropdown.hasClass('toggled') ) {

			$document.click(function() {
				initCloseDropdown();
			});

		}
*/

		// Esc keypress event
		$document.keyup(function(event) {
			if (event.keyCode == 27) {
				initCloseDropdown();
			}
		});

	}

	function initCloseDropdown() {

		$('div[data-ui="dropdown"]').removeClass('toggled');
		// $html.removeClass('cursor-pointer');

	}


	/* Toggle Fullscreen
	 * MAY NEED TO UPDATE: http://www.sitepoint.com/use-html5-full-screen-api/
	---------------------------------------------------------------------------- */
	function toggleFullScreen() {

		if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement) {

			if (document.documentElement.requestFullscreen) {
				document.documentElement.requestFullscreen();
			} else if (document.documentElement.mozRequestFullScreen) {
				document.documentElement.mozRequestFullScreen();
			} else if (document.documentElement.webkitRequestFullscreen) {
				document.documentElement.webkitRequestFullscreen();
			}

		} else {

			if (document.cancelFullScreen) {
				document.cancelFullScreen();
			} else if (document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			} else if (document.webkitCancelFullScreen) {
				document.webkitCancelFullScreen();
			}

		}

	}

	$('a.link-fullscreen').click(function(e) {

		// $(this).toggleClass('enabled');
		toggleFullScreen();
		e.preventDefault();

	});


	/* View Mode Horizontal Scrolling
	---------------------------------------------------------------------------- */
	function initArtistScrollOn() {

		$('ol[data-component="track-listing"]').mousewheel(function(event, delta) {
			this.scrollLeft -= (delta * 20);
			event.preventDefault();
		});

	}

	function initArtistScrollOff() {

		$('ol[data-component="track-listing"]').unmousewheel();

	}


	/* Song View Sticky Table Header
	---------------------------------------------------------------------------- */
	function initSongViewSticky() {

		var $asideHead = $('#view_song article aside.thead'),
			$tableHead = $('#view_song article table thead');

		var makeSticky = function() {

			var scrollTop = $window.scrollTop(),
				stickyTop = $tableHead.offset().top;

			if (scrollTop > stickyTop) {
				$asideHead.addClass('sticky');
			} else {
				$asideHead.removeClass('sticky');
			}

		};

		makeSticky();

		$window.scroll(function() {
			makeSticky();
		});

	}


	/* Album View Details Toggle
	---------------------------------------------------------------------------- */
	function initAlbumViewToggle() {

		// our main variables
		var $albumContainer = $('#view_album'),
			$albumArticles  = $('#view_album article[data-component="album"]'),
			$albumLink      = $('#view_album article[data-component="album"] a[data-component="album-preview"]'),
			$albumDetails   = null,
			$albumClose     = null;

		$albumLink.on("click", function(e) {

			$thisAlbum       = $(this).parent(); // capture parent article[data-component="album"] of this link
			$thisAlbumNumber = $thisAlbum.index() + 1; // update global variable with new number (albums are zero-based, so we must add 1)
			var $thisDetail  = $(this).next('div.details-wrap'); // grab this links sibling div.details-wrap
			$clonedDetails   = $thisDetail.clone(true, true); // peform a deep clone on the div.details-wrap

			// as long as what we are clicking does not have the disabled or toggled class,
			// we will allow our interaction to proceed
			if ( !($thisAlbum.hasClass('disabled') || $thisAlbum.hasClass('toggled')) ) {

				$albumContainer.addClass('album-opened');
				$thisAlbum.addClass('toggled');

				// toggle our disabled class on all articles except the one clicked
				$albumArticles.not($thisAlbum).addClass('disabled');

				initAlbumViewLayout();

				// in order for our Close click to work, these variables need to be defined after the cloned element is in the DOM
				var $albumDetails = $('#view_album > div.details-wrap'),
					$albumClose   = $('#view_album > div.details-wrap aside[data-component="album-details"] a[data-control="close"]');

				// click the X to slideUp and remove cloned element
				$albumClose.click(function(e) {

					$albumDetails.slideUp( function(){ $(this).remove(); } );
					$albumContainer.removeClass('album-opened');
					$thisAlbum.removeClass('toggled');
					$albumArticles.removeClass('disabled');
					e.preventDefault();

				});

			} else if ( $thisAlbum.hasClass('toggled') ) {

				$('#view_album > div.details-wrap').slideUp( function(){ $(this).remove(); } );
				$albumContainer.removeClass('album-opened');
				$thisAlbum.removeClass('toggled');
				$albumArticles.removeClass('disabled');

			}

			e.preventDefault();

		});

	}


	function initAlbumViewLayout() {

		if ( ($thisAlbumNumber % albumColumns === 0) || ($thisAlbum.next('article').length === 0) ) {

			$thisAlbum.after($clonedDetails);
			$thisAlbum.next('div.details-wrap').slideDown();

		} else {

			var endOfRow       = Math.ceil( $thisAlbumNumber / albumColumns ) * albumColumns,
				numberOfAlbums = $('#view_album article[data-component="album"]').length,
				$lastAlbum     = $('#view_album article[data-component="album"]').last();

				console.log(endOfRow);
				console.log(numberOfAlbums);

			if (endOfRow > numberOfAlbums) {

				$lastAlbum.after($clonedDetails);
				$lastAlbum.next('div.details-wrap').slideDown();

			} else {

				// subtract 1 to accomodate for the zero-based albums
				$('#album-' + (endOfRow - 1)).after($clonedDetails);
				$('#album-' + (endOfRow - 1)).next('div.details-wrap').slideDown();

			}

		}

	}

	// find column position with: $thisAlbumNumber % albumColumns

	function initDestroyClone() {

		$('#view_album > div.details-wrap').remove();
		$('#view_album article[data-component="album"]').removeClass('disabled toggled');

	}


	/* Enquire Media Queries
	---------------------------------------------------------------------------- */
	function initEnquire() {

		enquire.register("screen and (min-width: 480px)", {

			match : function() {

				albumColumns = 3;
				initDestroyClone();

			},
			unmatch : function() {

				albumColumns = 2;
				initDestroyClone();
			}

		}).register("screen and (min-width: 568px)", {

			match : function() {

				albumColumns = 4;
				initDestroyClone();

			},
			unmatch : function() {

				albumColumns = 3;
				initDestroyClone();
			}

		}).register("screen and (min-width: 768px)", {

			deferSetup : true,

			setup : function() {

				initArtistScrollOn();

			},
			match : function() {

				initArtistScrollOn();

				albumColumns = 5;
				initDestroyClone();

			},
			unmatch : function() {

				initArtistScrollOff();

				albumColumns = 4;
				initDestroyClone();

			}

		}).register("screen and (min-width: 960px)", {

			match : function() {

				albumColumns = 6;
				initDestroyClone();

			},
			unmatch : function() {

				albumColumns = 5;
				initDestroyClone();

			}

		}).register("screen and (min-width: 1024px)", {

			match : function() {

				$('#settings-modal').removeClass('visible');

			}

		}).register("screen and (min-width: 1280px)", {

			match : function() {

				albumColumns = 7;
				initDestroyClone();

			},
			unmatch : function() {

				albumColumns = 6;
				initDestroyClone();

			}

		}).register("screen and (min-width: 1440px)", {

			match : function() {

				albumColumns = 8;
				initDestroyClone();

			},
			unmatch : function() {

				albumColumns = 7;
				initDestroyClone();

			}

		});

	}


	/* Initialize Plugins / Functions
	---------------------------------------------------------------------------- */
	$window.load(function() {

		// DEMO FUNCTIONS
		initErrorHandler();
		initAlertTrigger();

		if ( $body.hasClass('song') ) {
			initSongViewSticky();
		}

		// if ( $body.attr('id') == 'views' ) {
			initSearchFocus();
		// }

		initModalController();
		initMediaListToggle();
		initDropdownSelect();
		initAlbumViewToggle();
		initEnquire();

	});


});
