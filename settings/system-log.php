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
						<h4><strong>Settings &mdash;</strong> System Log</h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<div data-content="body" class="actions">

					<!-- if a select is to be used, we need a form element, and JS for <ul> swap
						<select id="options_system-log" name="options_system-log">
							<option value="value1" selected>System Log</option>
							<option value="value2">Canned Meat</option>
							<option value="value3">Delicious Apple Juice</option>
							<option value="value3">An option with a really long title that will need to wrap</option>
							<option value="value3">Outer Space</option>
						</select>
					-->

						<div data-ui="dropdown">

							<span class="dropdown-header truncate">System Log</span>

							<ul id="options_system-log">

								<li class="select-option">
									<a onclick="issueCommand('system-log option-1')" title="System Log" class="selected">System Log</a>
								</li>
								<li class="select-option">
									<a onclick="issueCommand('system-log option-2')" title="Canned Meat">Canned Meat</a>
								</li>
								<li class="select-option">
									<a onclick="issueCommand('system-log option-3')" title="Delicious Apple Juice">Delicious Apple Juice</a>
								</li>
								<li class="select-option">
									<a onclick="issueCommand('system-log option-4')" title="lol a title">An option with a really long title that will need to wrap</a>
								</li>
								<li class="select-option">
									<a onclick="issueCommand('system-log option-5')" title="Outer Space">Outer Space</a>
								</li>

							</ul>

						</div>

					</div>

					<div data-content="body">

						<div data-container="scroll-vertical">

							<div data-content="box">

								<p><strong>2013-07-31 9:25:53.874 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:55.936 PM</strong> PenTabletDriver[49009]: Error [0x604] recieved starting driver: setting up timeout callback</p>
								<p><strong>2013-07-31 9:25:55.957 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:58.019 PM</strong> PenTabletDriver[49010]: Error [0x604] recieved starting driver: setting up timeout callback</p>
								<p><strong>2013-07-31 9:25:58.040 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:53.874 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:55.936 PM</strong> PenTabletDriver[49009]: Error [0x604] recieved starting driver: setting up timeout callback</p>
								<p><strong>2013-07-31 9:25:55.957 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:58.019 PM</strong> PenTabletDriver[49010]: Error [0x604] recieved starting driver: setting up timeout callback</p>
								<p><strong>2013-07-31 9:25:58.040 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:53.874 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:55.936 PM</strong> PenTabletDriver[49009]: Error [0x604] recieved starting driver: setting up timeout callback</p>
								<p><strong>2013-07-31 9:25:55.957 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:58.019 PM</strong> PenTabletDriver[49010]: Error [0x604] recieved starting driver: setting up timeout callback</p>
								<p><strong>2013-07-31 9:25:58.040 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:53.874 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:55.936 PM</strong> PenTabletDriver[49009]: Error [0x604] recieved starting driver: setting up timeout callback</p>
								<p><strong>2013-07-31 9:25:55.957 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>
								<p><strong>2013-07-31 9:25:58.019 PM</strong> PenTabletDriver[49010]: Error [0x604] recieved starting driver: setting up timeout callback</p>
								<p><strong>2013-07-31 9:25:58.040 PM</strong> com.apple.launchd.peruser.501[135]: (com.wacom.pentablet) Throttling respawn: Will start in 2 seconds</p>

							</div>

						</div>

					</div>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>