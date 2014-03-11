<?php

	$header  = "../assets/inc/header.php";
	$footer  = "../assets/inc/footer.php";

	include_once($header);

?>

	<main role="main">

		<section id="view_<?php echo $fileParts[0]; ?>" class="clearfix">

			<?php include('../assets/inc/views/album_list.php'); ?>

		</section>

	</main>

<?php include_once($footer); ?>