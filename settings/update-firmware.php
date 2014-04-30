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
						<h4><strong>Settings &mdash;</strong> Update Firmware</h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<form id="update-firmware-form" class="content-form">

						<div data-content="body" class="clearfix">

							<div id="updateState" data-container="scroll-vertical">
								<div id="readme" data-content="box" class="list-styles">
									<p>Loading...</p>
								</div>
							</div>

						</div>

						<ul data-content="body" class="actions clearfix">

							<li class="action-item">
								<a onClick="updateDasFirmare()" class="common-button" title="Update">
									<span data-meta="link-title">Update</span>
								</a>
							</li>

							<li class="action-item">
								<a href="../../../firmware/index.html?'+Date()+'" class="common-button" title="Advanced">
									<span data-meta="link-title">Advanced</span>
								</a>
							</li>

						</ul>

					</form>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>