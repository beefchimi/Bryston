<?php

	$header  = "../assets/inc/header.php";
	$footer  = "../assets/inc/footer.php";

	include_once($header);

?>

	<main role="main">

		<section id="view_<?php echo $fileParts[0]; ?>" class="clearfix">

			<article data-component="current-song" class="clearfix">

				<div class="album-cover">
					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_460x460.png" data-meta="album-placeholder_library" alt="" />
					</span>
				</div>

				<div data-meta="song-details">
					<h1 data-meta="song-title_current" class="truncate">Bryston BDP</h1>
					<h2 data-meta="song-artist-album_current" class="truncate">
						<span data-meta="song-artist_current"></span> &ndash; <span data-meta="song-album_current"></span>
					</h2>
				</div>

				<ul data-meta="song-specifics">

					<li class="bitrate">
						<strong>Bitrate:</strong>
						<em data-meta="song-bitrate">954 kbps</em>
					</li>

					<li class="file-type">
						<strong>Type:</strong>
						<em data-meta="song-type">flac</em>
					</li>

					<li class="sample-rate">
						<strong>Sample:</strong>
						<em data-meta="song-sample">44k1</em>
					</li>

					<li class="tracks">
						<strong>Song:</strong>
						<em data-meta="song-tracks">8 of 13</em>
					</li>

				</ul>

			</article>

			<article data-component="now-playing">

				<div class="component-header">

					<a href="#" class="toggle-button" title="Expand or Collapse the Now Playing List">
						<i data-icon="ui_arrow-left"></i>
					</a>

					<h6>Now Playing</h6>
					<a onclick="savePlaylist();" data-control="back-playlist" title="Save This Playlist">Save</a>
<!--
					<a onclick="browseBackPlaylist();" data-control="back-playlist" title="Go Back in the Playlist">Back</a>
-->

				</div>

				<ol data-list="now-playing" class="media-list">

					<?php include_once("../assets/inc/views/default_now-list.php"); ?>

				</ol>

			</article>

			<article data-component="add-files">

				<div class="component-header">

					<a href="#" class="toggle-button" title="Expand or Collapse the Add Files List">
						<i data-icon="ui_arrow-right"></i>
					</a>

					<h6>Add Files</h6>

					<?php // include_once("../assets/inc/views/default_add-list_select.php"); ?>

					<?php include_once("../assets/inc/views/default_add-list_dropdown.php"); ?>

					<a onclick="browseBackLibrary();" data-control="back-library" title="Go Back in the Library">Back</a>

				</div>

				<ol data-list="now-playing" class="media-list">

					<li id="add-all-songs">
						<a onclick="addAllToPlaylist();" data-control="add-all" title="Add All Songs">
							<i data-icon="ui_plus"></i>
							<span data-meta="link-title">Add All Songs</span>
						</a>
					</li>

					<?php include_once("../assets/inc/views/default_add-list.php"); ?>

				</ol>

			</article>

		</section>

	</main>

<?php include_once($footer); ?>
