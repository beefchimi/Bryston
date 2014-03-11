<?php

	$header = "../assets/inc/header.php";
	$footer = "../assets/inc/footer.php";

	include_once($header);

?>

	<main class="internal-content" role="main">

		<div data-container="width-full">

			<section id="settings_<?php echo $fileParts[0]; ?>">

				<article data-content="parent">

					<header data-content="header">
						<h4><strong>Settings &mdash;</strong> Music Player Daemon</h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<div data-content="body" class="mpd_settings clearfix">

						<p><strong>Please note:</strong> These settings should not be changed unless otherwise advised.</p>

						<form id="mpd_settings" class="content-form">

							<div class="version-length clearfix">

								<div class="mpd_version">
									<label for="mpd_version-select">MPD Version:</label>

									<!-- if a select is to be used, we need a form element, and JS for <ul> swap
									<select id="mpd_version-select" name="mpd_version-select">
										<option id="mpd_version-15" value="15">0.15.12</option>
										<option id="mpd_version-16" value="16">0.16.8</option>
										<option id="mpd_version-17" value="17">0.17.2</option>
									</select>
									-->

									<div data-ui="dropdown">

										<span class="dropdown-header truncate">0.15.12</span>

										<ul id="options_system-log">

											<li class="select-option">
												<a onclick="issueCommand('mpd version 0-15-12')" title="0.15.12" class="selected">0.15.12</a>
											</li>
											<li class="select-option">
												<a onclick="issueCommand('mpd version 0-16-8')" title="0.16.8">0.16.8</a>
											</li>
											<li class="select-option">
												<a onclick="issueCommand('mpd version 0-17-2')" title="0.17.2">0.17.2</a>
											</li>

										</ul>

									</div>

								</div>

								<div class="mpd_playlist-length">
									<label for="mpd_playlist-length">Maximum Playlist Length:</label>
									<input type="text" name="mpd_playlist-length" id="mpd_playlist-length" value="3000" />
								</div>

							</div>

							<ul class="checkbox-list">

								<li id="mpd-1" class="clearfix">
									<input type="checkbox" name="mpd_enable_update" id="mpd_enable_update" />
									<label for="mpd_enable_update" class="truncate clearfix">Enable Update at Start-up</label>
								</li>

								<li id="mpd-2" class="clearfix">
									<input type="checkbox" name="mpd_enable_dsd" id="mpd_enable_dsd" />
									<label for="mpd_enable_dsd" class="truncate clearfix">Enable DSD over USB</label>
								</li>

								<li id="mpd-3" class="clearfix">
									<input type="checkbox" name="mpd_enable_watch" id="mpd_enable_watch" />
									<label for="mpd_enable_watch" class="truncate clearfix">Enable MPD Watch (useful if playing music non-stop for 18+ hours)</label>
								</li>

							</ul>
							<!--
							<input type="submit" value="Apply" class="common-button" />
							-->
						</form>

					</div>

					<div data-content="body" class="mpd_last-fm clearfix">

						<form id="mpd_last-fm" class="content-form clearfix">

							<h5>Last.fm</h5>

							<label for="mpd_last-username" class="visuallyhidden">Username</label>
							<input type="text" name="mpd_last-username" id="mpd_last-username" placeholder="Username" />

							<label for="mpd_last-password" class="visuallyhidden">Password</label>
							<input type="password" name="mpd_last-password" id="mpd_last-password" placeholder="Password" />
							<!--
							<input type="submit" value="Login" class="common-button" />
							-->
						</form>

					</div>

					<div data-content="body" class="mpd_version-info">

						<h5>MPD Version Info</h5>

						<div data-container="scroll-vertical">

							<div data-content="box" class="list-styles">

								<?php include_once("../assets/inc/settings/setting_mpd-version.php"); ?>

							</div>

						</div>

					</div>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>
