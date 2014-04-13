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
						<h4><strong>Settings &mdash;</strong> <?php echo $pageTitle; ?></h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<div data-content="body" class="body clearfix">

						<div data-container="column-one">

							<h5>MPD Stats</h5>

							<div data-content="box">

								<ul data-stats="mpd">

									<li>
										<strong>Number of Songs: </strong>
										<span data-stats="mpd_number-songs">4688</span>
									</li>
									<li>
										<strong>Music: </strong>
										<span data-stats="mpd_music">44 days, 21 hours, 54 minutes, 42 seconds</span>
									</li>
									<li>
										<strong>Up Time: </strong>
										<span data-stats="mpd_up-time">0 days, 7 hours, 13 minutes, 24 seconds</span>
									</li>
									<li>
										<strong>Play Time: </strong>
										<span data-stats="mpd_play-time">0 days, 1 hour, 56 minutes, 2 seconds</span>
									</li>

								</ul>

							</div>

						</div>

						<div data-container="column-two">

							<h5>About</h5>

							<div data-content="box">

								<ul data-stats="about">

									<li>
										<span data-stats="about_something">S1.70 2013-04-09</span>
									</li>
									<li>
										<strong>Build: </strong>
										<span data-stats="about_build">Loony Loon (RC1)</span>
									</li>
									<li>
										<strong>MPD: </strong>
										<span data-stats="about_mpd">0.5.12</span>
									</li>
									<li>
										<strong>Kernel: </strong>
										<span data-stats="about_kernel">2.6.32-5-486</span>
									</li>

								</ul>

								<p role="copyright">Copyright Bryston Ltd. 2010</p>

							</div>

						</div>

					</div>

<!--
					<div data-content="body" class="actions clearfix">

						<a onclick="sysReboot();" class="common-button" title="Reboot BDP">
							<span data-meta="link-title">Reboot BDP</span>
						</a>
						<a onclick="sysResetToFact();" class="common-button" title="Reset To Factory">
							<span data-meta="link-title">Reset To Factory</span>
						</a>
						<a onclick="sysShutdown();" class="common-button" title="Shut Down">
							<span data-meta="link-title">Shut Down</span>
						</a>

					</div>
-->

					<ul data-content="body" class="actions clearfix">

						<li class="action-item">
							<a onclick="sysReboot();" class="common-button" title="Reboot BDP">
								<span data-meta="link-title">Reboot BDP</span>
							</a>
						</li>
						<li class="action-item">
							<a onclick="sysResetToFact();" class="common-button" title="Reset To Factory">
								<span data-meta="link-title">Reset To Factory</span>
							</a>
						</li>
						<li class="action-item">
							<a onclick="sysShutdown();" class="common-button" title="Shut Down">
								<span data-meta="link-title">Shut Down</span>
							</a>
						</li>

					</ul>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>