<div id="settings-modal" data-modal="overlay">

	<div data-modal="wrapper">

		<header data-modal="header">
			<h4 class="truncate">Settings</h4>
			<a href="#" data-modal="close">
				<i data-icon="ui_close"></i>
			</a>
		</header>

		<div data-modal="content">

			<form id="song-info" class="content-form">

				<div class="input-container">

					<div class="input-wrap">
						<input type="checkbox" name="setting_tag-data" id="setting_tag-data" />
						<label for="setting_tag-data" class="clearfix">Use File Names Over Tag Data</label>
					</div>

				</div>

				<div class="actions clearfix">
					<a onclick="issueCommand('settings cancel')" data-control="settings-cancel" data-meta="link-title" class="common-button" title="Cancel">Cancel</a>
					<input type="submit" value="Save" class="common-button" />
				</div>

			</form>

		</div>

	</div>

</div>