<?php

	$infoModal = $_SERVER['DOCUMENT_ROOT'];
	$infoModal .= "/bryston/assets/inc/views/modal_info.php";

	$settingsModal = $_SERVER['DOCUMENT_ROOT'];
	$settingsModal .= "/bryston/assets/inc/views/modal_settings.php";

?>

			<section id="player-specifics" class="clearfix">

				<ul id="info-settings" class="clearfix">

					<li class="view-info">
						<a href="#" data-modal="controller" data-meta="info-modal" title="Info">
							<i data-icon="ui_info"></i>
						</a>
						<div data-ui="tooltip">
							<i data-icon="tri_eq-up"></i>
							<span data-meta="tooltip-title">Song Info</span>
						</div>
						<?php include_once($infoModal); // inline only for demo purposes... should be called via AJAX ?>
					</li>

					<li class="view-settings">
						<a href="#" data-modal="controller" data-meta="settings-modal" title="Settings">
							<i data-icon="ui_settings"></i>
						</a>
						<div data-ui="tooltip">
							<i data-icon="tri_eq-up"></i>
							<span data-meta="tooltip-title">Song Settings</span>
						</div>
						<?php include_once($settingsModal); // inline only for demo purposes... should be called via AJAX ?>
					</li>

				</ul>

				<ul id="view-options" class="clearfix">

					<li class="view-default">
						<a href="<?php echo $hostPath; ?>/views/default.php" data-control="view-default" title="Default View">
							<i data-icon="view_default"></i>
						</a>
						<div data-ui="tooltip">
							<i data-icon="tri_eq-up"></i>
							<span data-meta="tooltip-title">Default View</span>
						</div>
					</li>

					<li class="view-artist">
						<a href="<?php echo $hostPath; ?>/views/artist.php" data-control="view-artist" title="Artist View">
							<i data-icon="view_artist"></i>
						</a>
						<div data-ui="tooltip">
							<i data-icon="tri_eq-up"></i>
							<span data-meta="tooltip-title">Artist View</span>
						</div>
					</li>

					<li class="view-song">
						<a href="<?php echo $hostPath; ?>/views/song.php" data-control="view-song" title="Song View">
							<i data-icon="view_song"></i>
						</a>
						<div data-ui="tooltip">
							<i data-icon="tri_eq-up"></i>
							<span data-meta="tooltip-title">Song View</span>
						</div>
					</li>

					<li class="view-album">
						<a href="<?php echo $hostPath; ?>/views/album.php" data-control="view-album" title="Album View">
							<i data-icon="view_album"></i>
						</a>
						<div data-ui="tooltip">
							<i data-icon="tri_eq-up"></i>
							<span data-meta="tooltip-title">Album View</span>
						</div>
					</li>

				</ul>

				<!-- requires method / action / etc -->
				<form id="library-search" class="search-form">

					<input type="text" name="library-search" autocomplete="off" placeholder="Enter Song, Artist, or Album title..." required>
					<input type="submit" name="library-submit" value="Search">

					<div data-ui="tooltip">
						<i data-icon="tri_eq-up"></i>
						<span data-meta="tooltip-title">Search Library</span>
					</div>

				</form>

			</section>

			<div class="search-overlay"></div>