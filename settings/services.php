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
						<h4><strong>Settings &mdash;</strong> Services</h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<div data-content="body" class="clearfix">

						<div data-container="column-one">

							<ul data-services="services-list">

								<li data-services="type-samba">
									<a onclick="issueCommand('services samba')" data-state="inactive" data-meta="service-title" class="truncate" title="Samba">Samba</a>
								</li>

								<li data-services="type-dnlaclient" class="selected">
									<a onclick="issueCommand('services dnla-client')" data-state="active" data-meta="service-title" class="truncate" title="DNLA Client">DNLA Client</a>
								</li>

								<li data-services="type-dnlaserver">
									<a onclick="issueCommand('services dnla-server')" data-state="inactive" data-meta="service-title" class="truncate" title="DNLA Server">DNLA Server</a>
								</li>

								<li data-services="type-itunes">
									<a onclick="issueCommand('services itunes')" data-state="active" data-meta="service-title" class="truncate" title="iTunes Sharing">iTunes Sharing</a>
								</li>

								<li data-services="type-usb">
									<a onclick="issueCommand('services usb')" data-state="inactive" data-meta="service-title" class="truncate" title="USB Mount">USB Mount</a>
								</li>

							</ul>

						</div>

						<div data-container="column-two">

							<div data-services="services-info">

								<h5>DNLA Client: <strong data-state="active">On</strong></h5>

								<p>Lorem ipsum dolor sit amet, consectetur. Nullam feugiat magna ac nisl aliquet, ut suipit. Aliquam pulvinar quam vel arcu consectetur. Vestibulum ornare enim at luctus auctor. Nulla id ipsum et mi aliquam fermentum.</p>

								<div class="actions clearfix">

									<a onclick="issueCommand('services start-stop')" class="common-button" title="Start / Stop">
										<span data-meta="link-title">Start / Stop</span>
									</a>

									<a onclick="issueCommand('services advanced')" class="common-button" title="Advanced">
										<span data-meta="link-title">Advanced</span>
									</a>

								</div>

							</div>

						</div>

					</div>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>