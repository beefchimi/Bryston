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
						<h4><strong>Settings &mdash;</strong> Disk Information</h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<div data-content="body" class="clearfix">

						<div data-container="column-one">

							<ul data-disk="drive-list">

								<li data-disk="type-sata">
									<a onclick="issueCommand('disk this drive')" data-meta="drive-title" class="truncate" title="466GB;Sata Drive">466GB;Sata Drive</a>
								</li>

								<li data-disk="type-partition" class="selected">
									<a onclick="issueCommand('disk this drive')" data-meta="drive-title" class="truncate" title="8GB;Primary Partition">8GB;Primary Partition</a>
								</li>

								<li data-disk="type-partition">
									<a onclick="issueCommand('disk this drive')" data-meta="drive-title" class="truncate" title="32GB;Secondary Partition">32GB;Secondary Partition</a>
								</li>

								<li data-disk="type-network">
									<a onclick="issueCommand('disk this drive')" data-meta="drive-title" class="truncate" title="500GB;Network Drive">500GB;Network Drive</a>
									<ul data-disk="drive-children">
										<li data-disk="drive-child">
											<a onclick="issueCommand('disk this drive')" data-meta="drive-title" class="truncate" title="Untitled">Untitled</a>
											<a onclick="issueCommand('disk this drive')" data-meta="drive-title" class="truncate" title="Video Thumb">Video Thumb</a>
										</li>
									</ul>
								</li>

								<li data-disk="type-sata">
									<a onclick="issueCommand('disk this drive')" data-meta="drive-title" class="truncate" title="USB Mount">USB Mounted Disk with the longest title in the history of storage devices</a>
								</li>

							</ul>

						</div>

						<div data-container="column-two">

							<ul data-disk="drive-actions">
								<li data-control="first-aid">
									<a onclick="issueCommand('disk firstaid')" data-meta="link-title" title="First Aid">First Aid</a>
								</li>
								<li data-control="erase">
									<a onclick="issueCommand('disk erase')" data-meta="link-title" title="Erase">Erase</a>
								</li>
							</ul>

							<div data-container="scroll-vertical">

								<div data-content="box">

									<p>Lorem ipsum dolor sit amet, consectetur. Nullam feugiat magna ac nisl aliquet, ut suipit. Aliquam pulvinar quam vel arcu consectetur. Vestibulum ornare enim at luctus auctor. Nulla id ipsum et mi aliquam fermentum.</p>
									<p>Fusce sed urna sed diam blandit mollis. Integer quis sapien a urna dignissim pelleesque. Pellentesque adipiscing nunc sagittis lacinia. Praesent et urna nec augue. Mauris in metus sed velit dictum convallis. Praesent et urna nec augue.</p>
									<p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis.</p>

								</div>

							</div>

							<div class="actions clearfix">

								<a onclick="issueCommand('disk info')" class="common-button" title="Get Info">
									<span data-meta="link-title">Get Info</span>
								</a>

								<a onclick="issueCommand('disk smart')" class="common-button" title="Get S.M.A.R.T.">
									<span data-meta="link-title">Get S.M.A.R.T.</span>
								</a>

							</div>

						</div>

						<ul data-disk="details">
							<li>
								<strong>Disk Description:</strong>
								<span data-meta="disk-description">Lorem Ipsum</span>
							</li>
							<li>
								<strong>Connection Bus:</strong>
								<span data-meta="connection-bus">Lorem Ipsum</span>
							</li>
							<li>
								<strong>Connection Block:</strong>
								<span data-meta="connection-block">Lorem Ipsum</span>
							</li>
							<li>
								<strong>Connection ID:</strong>
								<span data-meta="connection-id">Lorem Ipsum</span>
							</li>
							<li>
								<strong>Total Capacity:</strong>
								<span data-meta="total-capacity">Lorem Ipsum</span>
							</li>
							<li>
								<strong>Write Status:</strong>
								<span data-meta="write-status">Lorem Ipsum</span>
							</li>
							<li>
								<strong>S.M.A.R.T. Status:</strong>
								<span data-meta="smart-status">Not Yet Implemented</span>
							</li>
							<li>
								<strong>Partition Map Scheme:</strong>
								<span data-meta="map-scheme">Not Yet Implemented</span>
							</li>
						</ul>

					</div>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>