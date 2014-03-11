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
								<!--
								<li data-network="type-wired">
									<a onclick="issueCommand('network this interface')" data-meta="network-title" title="Wired (eth0) 82583V">
										<span data-meta="network-type">Wired</span> <span data-meta="network-device">(eth0)</span> <span data-meta="network-identifier">82583V</span>
									</a>
								</li>

								<li data-network="type-wired">
									<a onclick="issueCommand('network this interface')" data-meta="network-title" title="Wired (eth1) 82583V">
										<span data-meta="network-type">Wired</span> <span data-meta="network-device">(eth1)</span> <span data-meta="network-identifier">82583V</span>
									</a>
								</li>

								<li data-network="type-wireless" class="selected">
									<a onclick="issueCommand('network this interface')" data-meta="network-title" title="Wireless (wlan0) RT2770">
										<span data-meta="network-type">Wireless</span> <span data-meta="network-device">(wlan0)</span> <span data-meta="network-identifier">RT2770</span>
									</a>
								</li>

								<li data-network="type-wireless">
									<a onclick="issueCommand('network this interface')" data-meta="network-title" title="Wireless (wlan1) RT2770">
										<span data-meta="network-type">Wireless</span> <span data-meta="network-device">(wlan1)</span> <span data-meta="network-identifier">RT2770</span>
									</a>
								</li>

								<li data-network="type-wireless">
									<a onclick="issueCommand('network this interface')" data-meta="network-title" title="Wireless (wlan2) RT2770">
										<span data-meta="network-type">Wireless</span> <span data-meta="network-device">(wlan2)</span> <span data-meta="network-identifier">RT2770</span>
									</a>
								</li>

								<li data-network="type-vpn">
									<a onclick="issueCommand('network this interface')" data-meta="network-title" title="VPN (Internet Starship)">
										<span data-meta="network-type">VPN</span> <span data-meta="network-device">(Internet Starship of the VPN Enterprise)</span>
									</a>
								</li>

								<li data-network="type-vpn">
									<a onclick="issueCommand('network this interface')" data-meta="network-title" title="VPN (Bryston Service)">
										<span data-meta="network-type">VPN</span> <span data-meta="network-device">(Bryston Service)</span>
									</a>
								</li>
								-->
							</ul>

						</div>

						<div data-container="column-two">

							<form id="network-interfaces-form" class="content-form">
								
							</form>

						</div>

					</div>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>
