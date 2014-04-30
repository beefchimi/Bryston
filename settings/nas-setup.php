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
						<h4><strong>Settings &mdash;</strong> NAS Setup</h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<form id="nas-setup" class="content-form">

						<div id="configuredDevices" data-content="body" class="clearfix">

							<ul class="list_radio-checkbox">

								<li id="nas-1" class="clearfix">
									<input type="radio" value="0" name="nas_server_1" id="nas_server_1" />
									<label for="nas_server_1" class="clearfix">
										<span class="name-ip truncate">
											<strong data-meta="server-name">RAIDSERVER</strong>
											<em data-meta="server-ip">192.168.1.4</em>
										</span>
										<span class="network-type truncate">
											<strong data-meta="server-network">Microsoft Windows Network</strong>
											<em data-meta="server-type">Audio Files</em>
										</span>
									</label>
								</li>

								<li id="nas-2" class="clearfix">
									<input type="radio" value="1" name="nas_server_1" id="nas_server_2" />
									<label for="nas_server_2" class="clearfix">
										<span class="name-ip truncate">
											<strong data-meta="server-name">beefchimi-mac.local</strong>
											<em data-meta="server-ip">192.168.0.185</em>
										</span>
										<span class="network-type truncate">
											<strong data-meta="server-network">Microsoft Windows Network</strong>
											<em data-meta="server-type">Music</em>
										</span>
									</label>
								</li>

							</ul>

						</div>

						<ul id="nasButtons" data-content="body" class="actions clearfix">

							<li class="action-item">
								<a onclick="editThisShare()" class="common-button" title="Edit">
									<span data-meta="link-title">Edit</span>
								</a>
							</li>
							<li class="action-item">
								<a onclick="updateThisShare()" class="common-button" title="Update">
									<span data-meta="link-title">Update</span>
								</a>
							</li>
							<li class="action-item">
								<a onclick="addNewNasSihare()" class="common-button" title="Speed Test">
									<span data-meta="link-title">Speed Test</span>
								</a>
							</li>
							<li class="action-item">
								<a onclick="removeSelectedNasShare()" class="common-button" title="Remove">
									<span data-meta="link-title">Remove</span>
								</a>
							</li>
							<li class="action-item">
								<a onclick="addNewNasShare()" class="common-button" title="Add Share">
									<span data-meta="link-title">Add Share</span>
								</a>
							</li>

						</ul>

					</form>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>