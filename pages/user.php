<?php

	$header = "../assets/inc/header.php";
	$footer = "../assets/inc/footer.php";

	include_once($header);

?>

	<main class="internal-content" role="main">

		<div data-container="width-full">

			<section id="page_<?php echo $fileParts[0]; ?>">

				<article data-content="parent">

					<header data-content="header">
						<h4><strong>User Login</strong></h4>
						<i data-icon="ui_volume-up"></i>
					</header>

					<div data-content="body" class="user_login-form clearfix">

						<form id="user_login" class="content-form clearfix">

							<h5>User Login</h5>

							<label for="user_username" class="visuallyhidden">Username</label>
							<input type="text" name="user_username" id="user_username" placeholder="Username" />

							<label for="user_password" class="visuallyhidden">Password</label>
							<input type="password" name="user_password" id="user_password" placeholder="Password" />

							<input type="submit" value="Login" class="common-button" />

						</form>

					</div>

					<div data-content="body" class="user_feedback-form clearfix">

						<form id="user_feedback" class="content-form">

							<h5>Have a comment? Send us your feedback!</h5>

							<textarea placeholder="Send us your feedback..."></textarea>
							<input type="submit" value="Send" class="common-button" />

						</form>

					</div>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>