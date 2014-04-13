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

						<!-- Will need to know more about how this form works
							<label for="upload_file" class="visuallyhidden">Select File</label>
							<input type="file" name="upload_file" id="upload_file" />
						-->

							<a onclick="issueCommand('firmware browse')" class="common-button" title="Browse">
								<span data-meta="link-title">Browse</span>
							</a>

							<label for="enter_password" class="visuallyhidden">Enter Password</label>
							<input type="password" name="enter_password" id="enter_password" placeholder="Enter password" required />

						</div>

						<ul data-content="body" class="actions clearfix">

							<li class="action-item">
								<a href="#" class="common-button" title="Update">
									<span data-meta="link-title">Update</span>
								</a>
							</li>

							<li class="action-item">
								<a href="../../../firmware" class="common-button" title="Update From USB">
									<span data-meta="link-title">Advanced</span>
								</a>
							</li>

							<!-- don't know what to do about this subscript... not sure where it came from -->
							<script type="text/javascript" src="updatefirmware.js"></script>

						</ul>

					</form>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>