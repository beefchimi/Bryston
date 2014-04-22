		<nav id="main-components" role="primary">

			<ul class="clearfix">

				<li class="nav-tvmode">
					<a href="<?php echo $hostPath; ?>/tv-mode/" title="TV Mode">
						<span data-meta="link-title">TV Mode</span>
					</a>
				</li>

				<li class="nav-bradio">
					<a href="<?php echo $hostPath; ?>/bradio/" title="bRadio">
						<span data-meta="link-title">bRadio</span>
					</a>
				</li>

				<li class="nav-vfp">
					<a href="<?php echo $hostPath; ?>/vfp/" title="Virtual Front Panel">
						<span data-meta="link-title">Virtual Front Panel</span>
					</a>
				</li>

				<li data-modal="parent" class="nav-applications">

					<a href="#" title="Applications" data-modal="controller" data-meta="applications-modal">
						<span data-meta="link-title">Applications</span>
					</a>

					<div id="applications-modal" data-modal="overlay">

						<div data-modal="wrapper">

							<header data-modal="header">
								<div data-container="contained">
									<h4>Applications</h4>
									<a href="#" data-modal="close">
										<i data-icon="ui_close"></i>
									</a>
								</div>
							</header>

							<ul data-modal="nav-list" class="subnav">

								<li>
									<a href="<?php echo $hostPath; ?>/devices/" title="CD Player">
										<i data-icon="settings_disk-info"></i>
										<span data-meta="link-title">CD Player</span>
									</a>
								</li>

								<li>
									<a href="<?php echo $hostPath; ?>/devices/" title="CD Ripper">
										<i data-icon="settings_disk-info"></i>
										<span data-meta="link-title">CD Ripper</span>
									</a>
								</li>

							</ul>

						</div>

					</div>

				</li>

			</ul>

		</nav>