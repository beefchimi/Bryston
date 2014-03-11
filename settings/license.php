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
						<h4><strong>Settings &mdash;</strong> License</h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<div data-content="body" class="license-text">

						<h5>License</h5>

						<div data-container="scroll-vertical">

							<div data-content="box" class="list-styles">

								<?php include_once("../assets/inc/settings/setting_license-text.php"); ?>

							</div>

						</div>

					</div>

					<div data-content="body" class="license-packages">

						<h5>Installed Packages <em>(version information could be incorrect)</em></h5>

						<div data-container="scroll-vertical">

							<div data-content="box">

								<?php include_once("../assets/inc/settings/setting_license-packages.php"); ?>

							</div>

						</div>

					</div>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>