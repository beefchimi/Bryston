<?php

	$header  = "../assets/inc/header.php";
	$footer  = "../assets/inc/footer.php";

	include_once($header);

?>

	<main role="main">

		<section id="view_<?php echo $fileParts[0]; ?>" class="clearfix">

			<article data-component="songs-listing">

				<!-- would love to replace this approach with something like: http://salzerdesign.com/blog/?p=191 -->
				<aside class="thead">

					<ul class="clearfix">
						<li class="table-add">Add</li>
						<li class="table-name">Name</li>
						<li class="table-time">Time</li>
						<li class="table-artist">Artist</li>
						<li class="table-album">Album</li>
						<li class="table-genre">Genre</li>
					</ul>

				</aside>

				<!-- browsers do not yet support native sorting... but soon! -->
				<table id="song-table">

					<thead>

						<tr>
							<th data-control="table-add">Add</th>
							<th data-control="table-name">Name</th>
							<th data-control="table-time">Time</th>
							<th data-control="table-artist">Artist</th>
							<th data-control="table-album">Album</th>
							<th data-control="table-genre">Genre</th>
						</tr>

					</thead>

					<tbody>

						<?php include_once("../assets/inc/views/song_list.php"); ?>

					</tbody>

				</table>

			</article>

		</section>

	</main>

<?php include_once($footer); ?>