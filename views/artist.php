<?php

	$header  = "../assets/inc/header.php";
	$footer  = "../assets/inc/footer.php";

	include_once($header);

?>

	<main role="main">

		<section id="view_<?php echo $fileParts[0]; ?>" class="clearfix">

			<aside id="artists">

				<a href="#" title="View Artists" data-modal="controller" data-meta="artists-modal">
					<span data-meta="link-title">View Artists</span>
				</a>

				<div id="artists-modal" data-modal="overlay">

					<div data-modal="wrapper">

						<header data-modal="header">
							<h4>View Artists</h4>
							<a href="#" data-modal="close">
								<i data-icon="ui_close"></i>
							</a>
						</header>

						<ul data-compontent="artist-list">
							<?php include_once('../assets/inc/views/artist_list.php'); ?>
						</ul>

					</div>

				</div>

			</aside>

			<div data-component="artist-albums">

				<header data-component="artist-header">

					<div class="selected-artist">
						<h1 data-meta="song-album" class="truncate">Foxygen</h1>
						<h2 class="truncate"><span data-meta="albums-total">3 albums</span>, <span data-meta="songs-total">34 songs</span></h2>
					</div>

					<ul data-compontent="media-actions" class="artist-controls clearfix">

						<li class="play-all">
							<a onclick="issueCommand('artist play all')" data-control="play-all" title="Play all songs">
								<i data-icon="song_play"></i>
							</a>
						</li>

						<li class="shuffle-all">
							<a onclick="issueCommand('artist shuffle all')" data-control="shuffle-all" title="Shuffle all songs">
								<i data-icon="song_shuffle"></i>
							</a>
						</li>

						<li class="more-actions">
							<a href="javascript:void(0);" data-control="more-actions" title="More actions">
								<i data-icon="ui_more"></i>
							</a>
							<div data-ui="tooltip">
								<i data-icon="tri_eq-up"></i>
								<a onclick="issueCommand('add end now-playing')" data-control="add_now-playing" data-meta="tooltip-title">Add to End of "Now Playing"</a>
								<a onclick="issueCommand('add specific playlist')" data-control="add_playlist" data-meta="tooltip-title">Add to Another Playlist</a>
							</div>
						</li>

					</ul>

				</header>

				<article id="album-1" data-component="album-details" class="clearfix">

					<div data-container="column-one">
						<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
							<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
						</span>
					</div>

					<div data-container="column-two">

						<div data-meta="song-details">
							<h1 data-meta="song-album" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
							<h2 data-meta="song-year">2013</h2>
						</div>

						<div data-container="scroll-horizontal">
							<ol data-component="track-listing" class="clearfix">
								<?php include_once('../assets/inc/views/artist_album-1.php'); ?>
							</ol>
						</div>

					</div>

				</article>

				<article id="album-2" data-component="album-details" class="clearfix">

					<div data-container="column-one">
						<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
							<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
						</span>
					</div>

					<div data-container="column-two">

						<div data-meta="song-details">
							<h1 data-meta="song-album" class="truncate">Take the Kids Off Broadway</h1>
							<h2 data-meta="song-year">2012</h2>
						</div>

						<div data-container="scroll-horizontal">
							<ol data-component="track-listing">
								<?php include_once('../assets/inc/views/artist_album-2.php'); ?>
							</ol>
						</div>

					</div>

				</article>

				<article id="album-3" data-component="album-details" class="clearfix">

					<div data-container="column-one">
						<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
							<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
						</span>
					</div>

					<div data-container="column-two">

						<div data-meta="song-details">
							<h1 data-meta="song-album" class="truncate">Jurrassic Exxplosion Phillipic</h1>
							<h2 data-meta="song-year">2007</h2>
						</div>

						<div data-container="scroll-horizontal">
							<ol data-component="track-listing">
								<?php include_once('../assets/inc/views/artist_album-3.php'); ?>
							</ol>
						</div>

					</div>

				</article>

			</div>

		</section>

	</main>

<?php include_once($footer); ?>