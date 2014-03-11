<?php

	$header  = "assets/inc/header.php";
	$footer  = "assets/inc/footer.php";

	include_once($header);

?>

	<main role="main">

		<div data-container="width-full">

			<section>

				<article class="content-box">
					<h1>BDP Initial Setup</h1>
					<p>Waiting for content to be provided.</p>
					<p><a href="<?php echo $hostPath; ?>/pages/user.php" title="User Login Page">Click here to login and provide feedback!</a></p>
				</article>

				<ul class="modal-controls">
<!--
					<li class="alert">
						<a href="#" data-modal="controller" data-meta="alert-modal" class="common-button">Launch Alert Modal</a>
					</li>

					<li class="app-update-1">
						<a href="#" data-modal="controller" data-meta="update1-modal" class="common-button">Application Update 1</a>
					</li>

					<li class="app-update-2">
						<a href="#" data-modal="controller" data-meta="update2-modal" class="common-button">Application Update 2</a>
					</li>

					<li class="app-update-3">
						<a href="#" data-modal="controller" data-meta="update3-modal" class="common-button">Application Update 3</a>
					</li>

					<li class="login-form">
						<a href="#" data-modal="controller" data-meta="login-form" class="common-button">Login Form</a>
					</li>
-->
				</ul>

				<article class="modal-components">

					<!-- Alert Modal |begin| -->
					<div id="alert-modal" data-modal="overlay">

						<div data-modal="wrapper">

							<header data-modal="header">
								<h4>Alert!</h4>
								<a href="#" data-modal="close">
									<i data-icon="ui_close"></i>
								</a>
							</header>

							<div data-modal="content">

								<p>More than 3,000 songs have been detected in your library. Would you like to ignore this message or clear your database (recommended)?</p>

								<ul data-modal="actions" class="clearfix">

									<li class="ignore">
										<a onclick="issueCommand('database ignore')" data-control="ignore" class="common-button" title="Ignore">Ignore</a>
									</li>
									<li class="clear-db">
										<a onclick="issueCommand('database clear')" data-control="clear-db" class="common-button" title="Clear Database">Clear Database</a>
									</li>

								</ul>

							</div>

						</div>

					</div>
					<!-- Alert Modal |end| -->

					<!-- App Update 1 Modal |begin| -->
					<div id="update1-modal" data-modal="overlay">

						<div data-modal="wrapper">

							<header data-modal="header">
								<h4>Application Update</h4>
								<a href="#" data-modal="close">
									<i data-icon="ui_close"></i>
								</a>
							</header>

							<div data-modal="content">

								<p>There are software updates available for your Application. Would you like to update these now?</p>

								<ul data-modal="actions" class="clearfix">

									<li class="learn-more">
										<a onclick="issueCommand('update learn')" data-control="learn-more" class="common-button" title="Learn More">Learn More</a>
									</li>
									<li class="update-now">
										<a onclick="issueCommand('update now')" data-control="update-now" class="common-button" title="Yes, Update Now">Yes, Update Now</a>
									</li>

								</ul>

							</div>

						</div>

					</div>
					<!-- App Update 1 Modal |end| -->

					<!-- App Update 2 Modal |begin| -->
					<div id="update2-modal" data-modal="overlay">

						<div data-modal="wrapper">

							<header data-modal="header">
								<h4>Application Update</h4>
								<a href="#" data-modal="close">
									<i data-icon="ui_close"></i>
								</a>
							</header>

							<div data-modal="content">

								<div data-container="scroll-vertical">

									<div data-content="box" class="list-styles">

										<p>This update contains bug fixed and improvements including:</p>

										<ul>
											<li>Brand new design and interface for an improved user experience.</li>
											<li>Nam consectetur eros ac cursus pharetra con peso freco la.</li>
											<li>Praesent rhoncus scelerisque lacus et tempus pellesen.</li>
											<li>Cras vel lectus elementum, consectetur dui non, ultrices metus. Nam consectetur eros ac cursus pharetra.</li>
											<li>Nam consectetur eros ac cursus pharetra con peso freco la.</li>
											<li>Don't stare directly at the bugs!</li>
										</ul>

										<p>Lorem ipsum dolor sit amet, consectetur. Nullam feugiat magna ac nisl aliquet, ut suipit. Aliquam pulvinar quam vel arcu consectetur. Vestibulum ornare enim at luctus auctor. Nulla id ipsum et mi aliquam fermentum.</p>

									</div>

								</div>

								<ul data-modal="actions" class="clearfix">

									<li class="learn-more">
										<a onclick="issueCommand('update later')" data-control="update-later" class="common-button" title="Update Later">Update Later</a>
									</li>
									<li class="update-now">
										<a onclick="issueCommand('update install')" data-control="download-install" class="common-button" title="Download &amp; Install">Download &amp; Install</a>
									</li>

								</ul>

							</div>

						</div>

					</div>
					<!-- App Update 2 Modal |end| -->

					<!-- App Update 3 Modal |begin| -->
					<div id="update3-modal" data-modal="overlay">

						<div data-modal="wrapper">

							<header data-modal="header">
								<h4>Application Update</h4>
								<a href="#" data-modal="close">
									<i data-icon="ui_close"></i>
								</a>
							</header>

							<div data-modal="content">

								<div data-control="song-duration">

									<div data-control="update-bytes" class="progress-container">
										<div data-control="update-progress" class="progress-bar" style="width:60%;">
											<span data-meta="update-percent">60%</span>
										</div>
									</div>

								</div>

								<ul data-modal="actions" class="clearfix">

									<li class="cancel-update">
										<a onclick="issueCommand('update cancel')" data-control="cancel-update" class="common-button" title="Cancel Update">Cancel (not recommended)</a>
									</li>

								</ul>

							</div>

						</div>

					</div>
					<!-- App Update 3 Modal |end| -->

					<!-- Login Form Modal |begin| -->
					<div id="login-form" data-modal="overlay">

						<div data-modal="wrapper">

							<header data-modal="header">
								<h4>User Login</h4>
								<a href="#" data-modal="close">
									<i data-icon="ui_close"></i>
								</a>
							</header>

							<div data-modal="content">

								<form id="user_login" class="content-form clearfix">

									<div class="input-wrap username">
										<label for="user_username" class="visuallyhidden">Username</label>
										<input type="text" name="user_username" id="user_username" placeholder="Username" />
										<span data-meta="error-message">Username not found. Please try again.</span>
									</div>

									<div class="input-wrap password">
										<label for="user_password" class="visuallyhidden">Password</label>
										<input type="password" name="user_password" id="user_password" placeholder="Password" />
										<span data-meta="error-message">The password you have entered is incorrect.</span>
									</div>

									<input type="submit" value="Login" class="common-button" />

								</form>

							</div>

						</div>

					</div>
					<!-- Login Form Modal |end| -->

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>
