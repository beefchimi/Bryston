<?php if ($directoryTitle != "tv-mode") : ?>

	<footer data-site="footer">

	<?php

		if ( ($directoryTitle === "views") ) {

			include_once("footer/footer_copyright.php");

		} elseif ($directoryTitle === "settings") {

			include_once("footer/footer_settings-options.php");

		} elseif ( ($directoryTitle === "bryston") || ($directoryTitle === "pages") || ($generic) ) {

			include_once("footer/footer_main-components.php");
			include_once("footer/footer_settings-options.php");

		}

	?>

	</footer>

<?php endif; // if is not tv-mode ?>

	<script src="<?php echo $hostPath; ?>/assets/js/vendor/jquery-2.0.3.min.js"></script>
	<script src="<?php echo $hostPath; ?>/assets/js/plugins.js?date=<?php echo date('d-m-y'); ?>"></script>
	<script src="<?php echo $hostPath; ?>/assets/js/main.js?date=<?php echo date('d-m-y'); ?>"></script>
	<script src="<?php echo $hostPath; ?>/../mpd/main.js?date=<?php echo date('d-m-y'); ?>"></script>

</body>

</html>