<?php

	$header  = "../assets/inc/header.php";
	$footer  = "../assets/inc/footer.php";

	include_once($header);

?>

	<main role="main">

		<section>

			<article data-component="current-song" class="clearfix">

				<div class="album-cover">
					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_460x460.png" data-meta="album-placeholder_library" alt="" />
					</span>
				</div>

				<div data-meta="song-details">
					<h1 data-meta="song-title_current" class="truncate">Get Lucky (feat. Pharrell Williams)</h1>
					<h2 data-meta="song-artist_current" class="truncate">Daft Punk</h2>
					<h3 data-meta="song-album_current" class="truncate">Random Access Memories</h3>
				</div>

				<div data-control="song-duration">

					<div data-control="song-length" class="progress-container">
						<div data-control="song-progress" class="progress-bar" style="width:40%;"></div>
					</div>

					<span data-meta="song-time-elapsed_current">2:41</span>
					<span data-meta="song-time-length_current">5:06</span>

				</div>

				<div class="tv-links">
					<a href="<?php echo $hostPath; ?>" data-meta="link-title" class="link-dashboard" title="Back to Dashboard">Dashboard</a>
					<a href="#" data-meta="link-title" class="link-fullscreen" title="Toggle Fullscreen Mode">Fullscreen</a>
				</div>

			</article>

		</section>

	</main>

<?php include_once($footer); ?>