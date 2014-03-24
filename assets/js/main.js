// global variables for Album View
var albumColumns = 2,
	$thisAlbum,
	$thisAlbumNumber,
	$clonedDetails;


jQuery(document).ready(function($) {

	// cache elements for speed
	var $html     = $('html'),
		$body     = $('body'),
		$dropdown = $('div[data-ui="dropdown"]');


	/* Temporary Form Error Handler
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

	initErrorHandler();


	/* Search Library :focus
	---------------------------------------------------------------------------- */
	function initSearchFocus() {

		var $searchLibrary = $('#library-search input[type="text"]');

		// var searchValue = $.trim( $searchLibrary.val() );
		// if ( searchValue.length > 0 ) { }

		$searchLibrary.focus(function() {
			$body.addClass('search-focused');
		});

		$searchLibrary.blur(function() {

			setTimeout(function() {
				$body.removeClass('search-focused');
			}, 200);

		});

	}


	/* Modal Controller
	---------------------------------------------------------------------------- */
	function initModalController() {

		$('[data-modal="overlay"]').css('display', 'none');

		$('[data-modal="controller"]').on('click', function() {

			var thisMeta = $(this).attr('data-meta');

			$('#'+thisMeta).css('display', 'block');

			if ( $('#'+thisMeta).css('display') == 'block') {
				$('#'+thisMeta).addClass('visible');
			}

			return false;

		});

		$('[data-modal="overlay"] [data-modal="header"] a[data-modal="close"]').on('click', function() {

			var $thisOverlay = $(this).closest('[data-modal="overlay"]');

			$thisOverlay.removeClass('visible');

			setTimeout(function() {
				$thisOverlay.css('display', 'none');
			}, 400); // twice as long as it takes to transition

			return false;

		});

	}


	/* Media List Toggle
	---------------------------------------------------------------------------- */
	function initMediaListToggle() {

		$('#view_default [data-component] div.component-header a.toggle-button').click( function(e) {

/*
			$(this).toggleClass('closed');
			$(this).closest('[data-component]').find('ol.media-list').toggleClass('closed');
*/

			$(this).closest('[data-component]').toggleClass('closed');
			e.preventDefault();
		});

	}


	/* Dropdown Select
	---------------------------------------------------------------------------- */
	function initCloseDropdown() {

		$dropdown.removeClass('toggled');
		// $html.removeClass('cursor-pointer');

	}

	function initDropdownSelect() {

		var $dropdownHeader = $dropdown.find('span.dropdown-header');

		$dropdownHeader.click(function() {

			var $selectedDropdown = $(this).parent();

			$selectedDropdown.toggleClass('toggled');
			// $html.toggleClass('cursor-pointer');

			// on click, change span value with selected list item and close dropdown
			$selectedDropdown.find('ul li a').click(function(e) {

				var linkText = $(this).text();

				$selectedDropdown.find('span.dropdown-header').text(linkText);

				initCloseDropdown();
				e.preventDefault();

			});

		});

/*
		if ( $dropdown.hasClass('toggled') ) {

			$(document).click(function() {
				initCloseDropdown();
			});

		}
*/

		// Esc keypress event
		$(document).keyup(function(event) {
			if (event.keyCode == 27) {
				initCloseDropdown();
			}
		});

	}


	/* Toggle Fullscreen
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

	// currently bugged in that it doesn't accomodate for responsive...
	// it will only calculate the offset based on initial load,
	// resizing after the fact will always use that initial value.
	// also, buggy on mobile as I believe it is including the chrome height (url bar, etc) as well.

	function initSongViewSticky() {

		var $asideHead = $('#view_song article aside.thead'),
			$tableHead = $('#view_song article table thead'),
			stickyTop  = $tableHead.offset().top;

		var makeSticky = function() {

			var scrollTop = $(window).scrollTop();

			if (scrollTop > stickyTop) {
				$asideHead.addClass('sticky');
			} else {
				$asideHead.removeClass('sticky');
			}

		};

		makeSticky();

		$(window).scroll(function() {
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
	$(window).load(function() {

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