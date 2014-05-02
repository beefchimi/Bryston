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
						<h4><strong>Settings &mdash;</strong> Network Interfaces</h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<div data-content="body" class="clearfix">

						<div data-container="column-one">

							<ul data-component="network-list">

								<li data-network="type-wired">
									<a onclick="displayNetwork('eth0','wired')" data-meta="network-title" title="Wired (eth0) 82583V Gigabit Network Connection">
										<span data-meta="network-type">Wired</span> <span data-meta="network-device">(eth0)</span> <span data-meta="network-identifier">82583V Gigabit Network Connection</span>
									</a>
								</li>

								<li data-network="type-wired">
									<a onclick="displayNetwork('eth0','wired')" data-meta="network-title" title="Wired (eth0) 82583V Gigabit Network Connection">
										<span data-meta="network-type">Wired</span> <span data-meta="network-device">(eth0)</span> <span data-meta="network-identifier">82583V Gigabit Network Connection</span>
									</a>
								</li>

							</ul>

						</div>

						<div data-container="column-two">

							<form id="network-interfaces-form" class="content-form">

								<ul data-component="network-actions">

									<li class="protocol-dhcp">
										<input type="radio" name="protocol-select" id="protocol-dhcp" value="dhcp" />
										<label for="protocol-dhcp">DHCP</label>
									</li>
									<li class="protocol-static">
										<input type="radio" name="protocol-select" id="protocol-static" value="static" />
										<label for="protocol-static">Static</label>
									</li>

								</ul>

								<ul data-network="wireless-dhcp" class="content-form-inputs">

									<li class="ip-address">
										<label for="dhcp_ip-address">IP Address:</label>
										<input type="text" name="dhcp_ip-address" id="dhcp_ip-address" value="" placeholder="ex: 176.592.168.240" />
									</li>

									<li class="net-mask">
										<label for="dhcp_net-mask">Net Mask:</label>
										<input type="text" name="dhcp_net-mask" id="dhcp_net-mask" value="" placeholder="ex: 255.255.255.255" />
									</li>

									<li class="gateway">
										<label for="dhcp_gateway">Gateway:</label>
										<input type="text" name="dhcp_gateway" id="dhcp_gateway" value="" placeholder="ex: 10.1.1.1" />
									</li>

									<li class="dns">
										<label for="dhcp_dns">DNS:</label>
										<input type="text" name="dhcp_dns" id="dhcp_dns" value="" placeholder="ex: 192.168.0.1" />
									</li>

									<li class="bssid">
										<label for="dhcp_bssid">BSSID:</label>
										<input type="text" name="dhcp_bssid" id="dhcp_bssid" value="" placeholder="ex: BrystonSound" />
									</li>

									<li class="security">

										<label for="dhcp_security">Security:</label>

									<?php
									// if a select is to be used, we need a form element, and JS for <ul> swap
									/*
										<select id="security_select" name="security_select">
											<option id="security_wep" value="wep">WEP</option>
											<option id="security_wpa" value="wpa">WPA</option>
											<option id="security_wpa2" value="wpa2">WPA2</option>
										</select>
									*/
									?>

										<div data-ui="dropdown">

											<span class="dropdown-header truncate">WPA2</span>

											<ul id="options_secutiry">

												<li class="select-option">
													<a onclick="issueCommand('network security wep')" title="WEP">WEP</a>
												</li>
												<li class="select-option">
													<a onclick="issueCommand('network security wpa')" title="WPA">WPA</a>
												</li>
												<li class="select-option">
													<a onclick="issueCommand('network security wpa2')" title="WPA2" class="selected">WPA2</a>
												</li>

											</ul>

										</div>

									</li>

									<li class="password">
										<label for="dhcp_password">Password:</label>
										<input type="password" name="dhcp_password" id="dhcp_password" value="" placeholder="enter secure password" />
									</li>

									<li class="mode">

										<label for="dhcp_mode">Mode:</label>

									<?php
									// if a select is to be used, we need a form element, and JS for <ul> swap
									/*
										<select id="mode_select" name="mode_select">
											<option id="mode_client" value="client">Client</option>
											<option id="mode_alternate" value="alternate">Alternate</option>
											<option id="mode_other" value="other">Other</option>
										</select>
									*/
									?>

										<div data-ui="dropdown">

											<span class="dropdown-header truncate">Client</span>

											<ul id="options_secutiry">

												<li class="select-option">
													<a onclick="issueCommand('network mode client')" title="Client" class="selected">Client</a>
												</li>
												<li class="select-option">
													<a onclick="issueCommand('network mode alternate')" title="Alternate">Alternate</a>
												</li>
												<li class="select-option">
													<a onclick="issueCommand('network mode you-get-the-point')" title="Long title">A very long title for a Network Interfaces mode</a>
												</li>
												<li class="select-option">
													<a onclick="issueCommand('network mode other')" title="Other">Other</a>
												</li>

											</ul>

										</div>

									</li>

								</ul>

								<input type="submit" value="Apply" class="common-button" />

							</form>

						</div>

					</div>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>