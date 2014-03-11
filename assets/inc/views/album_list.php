<!-- albums 0 - 2 |begin| -->
			<article id="album-0" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">The Band You Love Most</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">The Band You Love Most</span>
									<span data-meta="song-year_library">(2010)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-1.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-1" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Foxygen</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Foxygen</span>
									<span data-meta="song-year_library">(2008)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-2.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-2" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Ween</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Ween</span>
									<span data-meta="song-year_library">(1988)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-3.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>
<!-- albums 0 - 2 |end| -->

<!-- albums 3 - 5 |begin| -->
			<article id="album-3" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">The Band You Love Most</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">The Band You Love Most</span>
									<span data-meta="song-year_library">(2010)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-1.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-4" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Foxygen</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Foxygen</span>
									<span data-meta="song-year_library">(2008)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-2.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-5" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Ween</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Ween</span>
									<span data-meta="song-year_library">(1988)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-3.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>
<!-- albums 3 - 5 |end| -->

<!-- albums 6 - 8 |begin| -->
			<article id="album-6" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">The Band You Love Most</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">The Band You Love Most</span>
									<span data-meta="song-year_library">(2010)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-1.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-7" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Foxygen</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Foxygen</span>
									<span data-meta="song-year_library">(2008)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-2.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-8" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Ween</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Ween</span>
									<span data-meta="song-year_library">(1988)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-3.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>
<!-- albums 6 - 8 |end| -->

<!-- albums 9 - 11 |begin| -->
			<article id="album-9" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">The Band You Love Most</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">The Band You Love Most</span>
									<span data-meta="song-year_library">(2010)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-1.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-10" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Foxygen</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Foxygen</span>
									<span data-meta="song-year_library">(2008)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-2.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-11" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Ween</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Ween</span>
									<span data-meta="song-year_library">(1988)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-3.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>
<!-- albums 9 - 11 |end| -->

<!-- albums 12 - 14 |begin| -->
			<article id="album-12" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">The Band You Love Most</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">The Band You Love Most</span>
									<span data-meta="song-year_library">(2010)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-1.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-13" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Foxygen</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Foxygen</span>
									<span data-meta="song-year_library">(2008)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-2.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-14" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Ween</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Ween</span>
									<span data-meta="song-year_library">(1988)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-3.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>
<!-- albums 12 - 14 |end| -->

<!-- albums 15 - 17 |begin| -->
			<article id="album-15" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">The Band You Love Most</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">The Band You Love Most</span>
									<span data-meta="song-year_library">(2010)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-1.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-16" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Foxygen</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Foxygen</span>
									<span data-meta="song-year_library">(2008)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-2.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-17" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Ween</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Ween</span>
									<span data-meta="song-year_library">(1988)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-3.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>
<!-- albums 15 - 17 |end| -->

<!-- albums 18 - 20 |begin| -->
			<article id="album-18" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">The Band You Love Most</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-1_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">The Name of This Album</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">The Band You Love Most</span>
									<span data-meta="song-year_library">(2010)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-1.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-19" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Foxygen</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-2_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">We Are The 21st Century Ambassadors of Peace and Magic</h1>
								<h2 class="song-artist-year truncate">
									<span data-meta="song-artist_library">Foxygen</span>
									<span data-meta="song-year_library">(2008)</span>
								</h2>
							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-2.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>

			<article id="album-20" data-component="album" class="clearfix">

				<a href="#" data-component="album-preview" title="View this albums track listing">

					<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
						<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
					</span>

					<div data-meta="song-details">
						<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>
						<h2 data-meta="song-artist_library" class="song-artist-album truncate">Ween</h2>
					</div>

				</a>

				<div class="details-wrap">

					<aside data-component="album-details" class="clearfix">

						<div data-container="column-one">
							<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/view-artist_album-3_244x244.jpg');">
								<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_244x244.png" data-meta="album-placeholder_library" alt="" />
							</span>
						</div>

						<div data-container="column-two">

							<div data-meta="song-details">
								<h1 data-meta="song-album_library" class="truncate">God WeeN Satan</h1>

							</div>

							<ul data-compontent="media-actions" class="album-controls clearfix">

								<li class="play-all">
									<a onclick="issueCommand('play all songs')" data-control="play-all" title="Play all songs">
										<i data-icon="song_play"></i>
									</a>
								</li>

								<li class="shuffle-all">
									<a onclick="issueCommand('shuffle all songs')" data-control="shuffle-all" title="Shuffle all songs">
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

							<div data-container="scroll-horizontal">
								<ol data-component="track-listing">
									<?php include('../assets/inc/views/artist_album-3.php'); ?>
								</ol>
							</div>

						</div>

						<a href="#" data-control="close" title="Close this albums track listing">
							<i data-icon="ui_close"></i>
						</a>

					</aside>

				</div>

			</article>
<!-- albums 18 - 20 |end| -->