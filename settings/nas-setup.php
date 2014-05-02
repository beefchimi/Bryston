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

						<fieldset id="configuredDevices" data-content="body" class="clearfix">

							<ul id="nas-list" class="list_radio-checkbox">

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

						</fieldset>

						<fieldset id="editDevices" data-content="body" class="clearfix">

							<ul data-nas="edit" class="content-form-inputs">

								<li class="device-name">
									<label for="nas-name">Device Name:</label>
									<input type="text" name="nas-name" id="nas-name" class="nas-setup-text" value="" placeholder="NAS Device Name" />
								</li>

								<li class="ip-address">
									<label for="nas-addr">IP Address:</label>
									<input type="text" name="nas-addr" id="nas-addr" class="nas-setup-text" value="" placeholder="ex: 192.168.2.104" />
								</li>

								<li class="username">
									<label for="nas-user">Username:</label>
									<input type="text" name="nas-user" id="nas-user" class="nas-setup-text" value="" placeholder="secret username" />
								</li>

								<li class="password">
									<label for="nas-pass">Password:</label>
									<input type="password" name="nas-pass" id="nas-pass" class="nas-setup-password" value="" placeholder="secret password" />
								</li>

								<li class="share-name">
									<label for="nas-shar">Share Name:</label>
									<input type="text" name="nas-shar" id="nas-shar" class="nas-setup-text" value="" placeholder="directory//MUSIC" />
								</li>

								<li class="share-type">
									<label for="nas-shar">Share Type:</label>
									<input type="text" name="nas-shar" id="nas-shar" class="nas-setup-text" value="" placeholder="Microsoft Windows Network" />
								</li>

							</ul>

						</fieldset>

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