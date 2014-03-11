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
						<h4><strong>Settings &mdash;</strong> Album Art Database</h4>
						<i data-icon="settings_<?php echo $fileParts[0]; ?>"></i>
					</header>

					<div data-content="body" class="clearfix">

						<div data-container="scroll-vertical">

							<ul data-content="album-art" class="clearfix">

								<li id="album_art-1">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-2">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-3">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-4">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-5">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-6">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-7">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-8">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-9">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-10">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-11">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-12">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-13">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-14">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-15">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test2.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>
								<li id="album_art-16">
									<span data-meta="album-cover_library" style="background-image: url('<?php echo $hostPath; ?>/assets/img/temp/test1.jpg');">
										<img src="<?php echo $hostPath; ?>/assets/img/common/placeholder_110x110.png" data-meta="album-placeholder_library" alt="" />
									</span>
								</li>

							</ul>

						</div>

					</div>

					<div data-content="body" class="actions clearfix">

						<a onclick="issueCommand('album database build')" title="Build Album Art Database" class="common-button">
							<span data-meta="link-title">Build Album Art Database</span>
						</a>

						<a onclick="issueCommand('album database clear')" title="Clear Album Art Database" class="common-button">
							<span data-meta="link-title">Clear Album Art Database</span>
						</a>

					</div>

				</article>

			</section>

		</div>

	</main>

<?php include_once($footer); ?>