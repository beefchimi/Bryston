<!DOCTYPE html>
<html lang="en-us">

<?php

	$requestURI     = $_SERVER['REQUEST_URI'];
	$directoryArray = explode('/',$requestURI);
	$hostPath       = "http://" . $_SERVER['HTTP_HOST'] . "/" . $directoryArray[1];

	end($directoryArray);

	$directoryTitle = prev($directoryArray);
	$fileName       = basename($requestURI);
	$fileParts      = explode(".", $fileName);
	$pageTitle      = ucfirst($fileParts[0]);

	if( substr($fileParts[0], 0, 1) != '?' ) {
		$bodyClass = $fileParts[0];
	} else {
		$bodyClass = $directoryTitle;
	}

	if( ($directoryTitle === "bradio") || ($directoryTitle === "vfp") || ($directoryTitle === "devices") || ($fileParts[0] === "404") ) {
		$generic = true;
		$genericClass = " generic";
	}

?>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php echo $pageTitle; ?> | Bryston BDP</title>

	<meta name="description" content="The Bryston BDP does a bunch of awesome stuff. Check it out brah!">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<meta name="application-name" content="Bryston BDP">
	<meta name="msapplication-TileColor" content="#1f1f1f">
	<meta name="msapplication-TileImage" content="<?php echo $hostPath; ?>/assets/img/favicons/win8-tile-icon.png">

	<!-- !!! DELETE FOR LAUNCH !!! -->
	<meta name="robots" content="noindex, nofollow">

	<link rel="shortcut icon" href="<?php echo $hostPath; ?>/assets/img/favicons/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo $hostPath; ?>/assets/img/favicons/apple-touch-icon-precomposed.png">

	<link rel="stylesheet" href="<?php echo $hostPath; ?>/assets/css/base.css?date=<?php echo date('d-m-y'); ?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo $hostPath; ?>/assets/css/main.css?date=<?php echo date('d-m-y'); ?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo $hostPath; ?>/assets/css/queries.css?date=<?php echo date('d-m-y'); ?>" type="text/css" media="all">

	<link rel="stylesheet" href="<?php echo $hostPath; ?>/../../mpd/main.css?date=<?php echo date('d-m-y'); ?>" type="text/css" media="all">

<?php

	if ($fileName == "system.php") {

		echo '<script type="text/javascript" src="'.$hostPath.'/../mpd/system.js"></script>';

	} elseif ($fileName == "services.php") {

		echo '<script type="text/javascript" src="'.$hostPath.'/../mpd/services.js"></script>';

	} elseif ($fileName == "disk-info.php") {

		echo '<script type="text/javascript" src="'.$hostPath.'/../mpd/disk-info.js"></script>';

	} elseif ($fileName == "mpd.php") {

		echo '<script type="text/javascript" src="'.$hostPath.'/../mpd/mpd.js"></script>';

	}

?>

</head>

<!--
	this line was:
	<body id="<?php echo $directoryTitle; ?>" class="<?php echo $bodyClass . $genericClass; ?>">
-->
<body id="<?php echo $directoryTitle; ?>" class="<?php if (!isset($genericClass)) { $genericClass = ''; } echo $bodyClass . $genericClass; ?>">

<?php if ($directoryTitle != "tv-mode") : ?>

	<header id="universal-player" data-site="header">

		<div data-container="width-full">

			<section id="audio-interface">

				<div data-meta="song-details">
					<h1 data-meta="song-title_current" class="truncate">Bryston BDP</h1>
					<h2 class="song-artist-album truncate">
						<span data-meta="song-artist_current"></span> &mdash; <span data-meta="song-album_current"></span>
					</h2>
				</div>

				<ul data-control="song-controls" class="clearfix">

					<li class="song-previous">
						<a onclick="sendcom('+"'previous'"+')" title="Previous" data-control="song-previous">
							<i data-icon="song_previous"></i>
						</a>
					</li>

					<li class="song-stop">
						<a onclick="sendcom('+"'stop'"+')" title="Stop" data-control="song-stop">
							<i data-icon="song_stop"></i>
						</a>
					</li>

					<!-- data-state: paused, playing -->
					<li data-state="paused" class="song-play-pause">
						<a onclick="sendcom('+"'pause'"+')" title="Pause" data-control="song-pause">
							<i data-icon="song_pause"></i>
						</a>
						<a onclick="sendcom('+"'play'"+')" title="Play" data-control="song-play">
							<i data-icon="song_play"></i>
						</a>
					</li>

					<li class="song-next">
						<a onclick="sendcom('+"'next'"+')" title="Next" data-control="song-next">
							<i data-icon="song_next"></i>
						</a>
					</li>

				</ul>

				<div data-control="song-duration">

					<div data-control="song-length" class="progress-container">
						<div data-control="song-progress" class="progress-bar" style="width:50%;"></div>
					</div>

					<span data-meta="song-time-elapsed_current">0:00</span>
					<span data-meta="song-time-length_current">0:00</span>

				</div>

				<div data-control="player-controls">

					<!-- data-state: none, repeat, repeat-once -->
					<a onclick="toggle('+"'repeat'"+')" title="repeat" data-control="player-repeat" data-state="repeat-once">
						<i data-icon="song_repeat" class="toggled"></i>
					</a>

					<!-- data-state: none, shuffle -->
					<a onclick="toggle('+"'shuffle'"+')" title="shuffle" data-control="player-shuffle" data-state="shuffle">
						<i data-icon="song_shuffle" class=""></i>
					</a>

				</div>

				<ul data-control="library-control" class="clearfix">

					<li class="library-update">
						<a onclick="sendcom('+"'update'"+')" title="Update" data-control="library-update">Update</a>
					</li>

					<li class="library-clear">
						<a onclick="sendcom('+"'clear'"+')" title="Clear" data-control="library-clear">Clear</a>
					</li>

					<li class="library-consume">
						<a onclick="toggle('+"'consume'"+')" title="Consume" data-control="library-consume">Consume</a>
					</li>

				</ul>

			</section>

			<section id="universal-links" class="clearfix">

			<?php

				if ( ($directoryTitle === "views") ) {

					include_once("header/header_links-views.php");

				} elseif ($directoryTitle === "settings") {

					include_once("header/header_links-settings.php");

				} elseif ($directoryTitle === "bryston") {

					include_once("header/header_links-dashboard.php");

				} else { // ($directoryTitle === "pages") || ($generic)

					include_once("header/header_links-generic.php");

				}

			?>

			</section>

			<?php

				if ($directoryTitle === "views") {

					include_once("header/header_player-specifics.php");

				}

			?>

		</div>

	</header>

<?php endif; // if is not tv-mode ?>
