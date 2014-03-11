<?php

	$infoModal = $_SERVER['DOCUMENT_ROOT'];
	$infoModal .= "/bryston/assets/inc/views/modal_info.php";

	$settingsModal = $_SERVER['DOCUMENT_ROOT'];
	$settingsModal .= "/bryston/assets/inc/views/modal_settings.php";

?>

			<section id="player-specifics" class="clearfix">

				<form id="library-search">

					<input type="text" name="library-search" autocomplete="off" placeholder="Search Library">
					<input type="submit" name="library-submit" value="Search">

				</form>

				<ul id="info-settings" class="clearfix">

					<li class="view-info">
						<a href="#" data-modal="controller" data-meta="info-modal" title="Info">Info</a>
						<?php include_once($infoModal); ?>
					</li>

					<li class="view-settings">
						<a href="#" data-modal="controller" data-meta="settings-modal" title="Settings">Settings</a>
						<?php include_once($settingsModal); ?>
					</li>

				</ul>

				<ul id="view-options" class="clearfix">

					<li class="view-default">
						<a href="<?php echo $hostPath; ?>/views/default.php" data-control="view-default">
							<i data-icon="view_default"></i>
						</a>
						<div data-ui="tooltip">
							<i data-icon="tri_eq-up"></i>
							<span data-meta="tooltip-title">Default View</span>
						</div>
					</li>

					<li class="view-artist">
						<a href="<?php echo $hostPath; ?>/views/artist.php" data-control="view-artist">
							<i data-icon="view_artist"></i>
						</a>
						<div data-ui="tooltip">
							<i data-icon="tri_eq-up"></i>
							<span data-meta="tooltip-title">Artist View</span>
						</div>
					</li>

					<li class="view-song">
						<a href="<?php echo $hostPath; ?>/views/song.php" data-control="view-song">
							<i data-icon="view_song"></i>
						</a>
						<div data-ui="tooltip">
							<i data-icon="tri_eq-up"></i>
							<span data-meta="tooltip-title">Song View</span>
						</div>
					</li>

					<li class="view-album">
						<a href="<?php echo $hostPath; ?>/views/album.php" data-control="view-album">
							<i data-icon="view_album"></i>
						</a>
						<div data-ui="tooltip">
							<i data-icon="tri_eq-up"></i>
							<span data-meta="tooltip-title">Album View</span>
						</div>
					</li>

				</ul>

			</section>