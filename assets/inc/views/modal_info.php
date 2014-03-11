<div id="info-modal" data-modal="overlay">

	<div data-modal="wrapper">

		<header data-modal="header">
			<h4 class="truncate">Info &mdash; <span data-meta="song-title">Get Lucky (feat. Pharrell Williams)</span></h4>
			<a href="#" data-modal="close">
				<i data-icon="ui_close"></i>
			</a>
		</header>

		<div data-modal="content">

			<form id="song-info" class="content-form">

				<div class="input-container">

					<div class="input-wrap">
						<label for="info_song-name">Name</label>
						<input type="text" name="info_song-name" id="info_song-name" value="Get Lucky (feat. Pharrell Williams)" />
					</div>

					<div class="input-wrap clearfix">

						<span class="input-innerwrap left">
							<label for="info_artist">Artist</label>
							<input type="text" name="info_artist" id="info_artist" value="Daft Punk" />
						</span>

						<span class="input-innerwrap right">
							<label for="info_year">Year</label>
							<input type="text" name="info_year" id="info_year" value="2013" />
						</span>

					</div>

					<div class="input-wrap clearfix">

						<span class="input-innerwrap left">
							<label for="info_album-artist">Album Artist</label>
							<input type="text" name="info_album-artist" id="info_album-artist" value="Daft Punk" />
						</span>

						<span class="input-innerwrap right">
							<label for="info_track-number">Track <span class="hide-mobile">Number</span></label>
							<input type="text" name="info_track-number" id="info_track-number" value="5" />
						</span>

					</div>

					<div class="input-wrap clearfix">

						<span class="input-innerwrap left">
							<label for="info_album">Album</label>
							<input type="text" name="info_album" id="info_album" value="Random Access Memories" />
						</span>

						<span class="input-innerwrap right">
							<label for="info_disc-number">Disc <span class="hide-mobile">Number</span></label>
							<input type="text" name="info_disc-number" id="info_disc-number" value="1" />
						</span>

					</div>

					<div class="input-wrap">
						<label for="info_genre">Genre</label>
						<input type="text" name="info_genre" id="info_genre" value="Genre" />
					</div>

				</div>

				<div class="actions clearfix">
					<a onclick="issueCommand('info cancel')" data-control="info-cancel" data-meta="link-title" class="common-button" title="Cancel">Cancel</a>
					<input type="submit" value="Save" class="common-button" />
				</div>

			</form>

		</div>

	</div>

</div>