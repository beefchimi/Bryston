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
						<h4><strong>Settings &mdash;</strong> Audio Devices <i data-control="wait-thorbber"></i></h4>
						<i data-icon="ui_volume-up"></i>
					</header>

					<ul id="deviceList" data-content="body" class="list_radio-checkbox">

						<!-- double line example (with error class in place of inline style) -->
						<li id="ad-0" class="error clearfix">
							<input type="checkbox" value="Intel 82801A" name="nas_server_0" id="nas_server_0" />
							<label for="nas_server_0" class="clearfix">
								<span class="name-ip truncate">
									<strong data-meta="server-name">Intel 82801A</strong>
									<em data-meta="server-ip">ICH</em>
								</span>
<!--
								<span class="network-type truncate">
									<strong data-meta="server-network">Microsoft Windows Network</strong>
									<em data-meta="server-type">Audio Files</em>
								</span>
-->
							</label>
						</li>

						<!-- single line example -->
						<li id="ad-1" class="clearfix">
							<input type="checkbox" value="Intel 82801A" name="nas_server_1" id="nas_server_1" />
							<label for="nas_server_1" class="truncate clearfix">Intel 82801A &mdash; ICH</label>
						</li>

					</ul>

					<ul data-content="body" class="actions clearfix">

						<li class="action-item">
							<a onclick="restartMpd()" class="common-button" title="Restart MPD">
								<span data-meta="link-title">Restart</span>
							</a>
						</li>
						<li class="action-item">
							<a onclick="applyAudio()" class="common-button" title="Apply Audio Settings">
								<span data-meta="link-title">Apply</span>
							</a>
						</li>

					</ul>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>
