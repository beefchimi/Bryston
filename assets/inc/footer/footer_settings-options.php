		<nav id="settings-options" role="secondary" data-modal="parent">

			<header data-modal="controller" data-meta="settings-modal" class="settings-header">
				<i data-icon="ui_plus"></i>
				<h3>Settings</h3>
				<i data-icon="tri_eq-down"></i>
			</header>

			<div id="settings-modal" data-modal="overlay">

				<div data-modal="wrapper">

					<header data-modal="header">
						<div data-container="contained">
							<h4>Settings</h4>
							<a href="#" data-modal="close">
								<i data-icon="ui_close"></i>
							</a>
						</div>
					</header>

					<ul data-modal="nav-list" class="settings-list clearfix">

						<li>
							<a href="<?php echo $hostPath; ?>/settings/system.php" title="System">
								<i data-icon="settings_system"></i>
								<span data-meta="link-title">System</span>
							</a>
						</li>

						<li>
							<a href="<?php echo $hostPath; ?>/settings/disk-info.php" title="Disk Information">
								<i data-icon="settings_disk-info"></i>
								<span data-meta="link-title">Disk Information</span>
							</a>
						</li>

						<li>
							<a href="<?php echo $hostPath; ?>/settings/audio-devices.php" title="Audio Devices">
								<i data-icon="ui_volume-up"></i>
								<span data-meta="link-title">Audio Devices</span>
							</a>
						</li>

						<li>
							<a href="<?php echo $hostPath; ?>/settings/network-interfaces.php" title="Network Interfaces">
								<i data-icon="settings_network-interfaces"></i>
								<span data-meta="link-title">Network Interfaces</span>
							</a>
						</li>

						<li>
							<a href="<?php echo $hostPath; ?>/settings/update-firmware.php" title="Update Firmware">
								<i data-icon="settings_update-firmware"></i>
								<span data-meta="link-title">Update Firmware</span>
							</a>
						</li>

						<li>
							<a href="<?php echo $hostPath; ?>/settings/mpd.php" title="Music Player Daemon">
								<i data-icon="settings_mpd"></i>
								<span data-meta="link-title">Music Player Daemon</span>
							</a>
						</li>

						<li>
							<a href="<?php echo $hostPath; ?>/settings/system-log.php" title="System Log">
								<i data-icon="settings_system-log"></i>
								<span data-meta="link-title">System Log</span>
							</a>
						</li>

						<li>
							<a href="<?php echo $hostPath; ?>/settings/startup-script.php" title="Startup Script">
								<i data-icon="settings_startup-script"></i>
								<span data-meta="link-title">Startup Script</span>
							</a>
						</li>

						<li>
							<a href="<?php echo $hostPath; ?>/settings/nas-setup.php" title="NAS Setup">
								<i data-icon="settings_nas-setup"></i>
								<span data-meta="link-title">NAS Setup</span>
							</a>
						</li>

						<li>
							<a href="<?php echo $hostPath; ?>/settings/services.php" title="Services">
								<i data-icon="settings_services"></i>
								<span data-meta="link-title">Services</span>
							</a>
						</li>

						<li>
							<a href="<?php echo $hostPath; ?>/settings/license.php" title="License">
								<i data-icon="settings_license"></i>
								<span data-meta="link-title">License</span>
							</a>
						</li>

					</ul>

				</div>

			</div>

		</nav>
