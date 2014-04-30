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
						<h4><strong>Settings &mdash;</strong> Startup Script</h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<form id="startup-script-form" class="content-form">

						<div data-content="body" class="clearfix">

							<textarea id="startupDat" placeholder="Enter startup script here"></textarea>
							<a onclick="SaveStartupFile();" title="Save" class="common-button">
								<span data-meta="link-title">Save</span>
							</a>

						</div>

					</form>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>