<?php
	require_once('functions/admin-edit.php');
	require_once('functions/async-emails.php');
	require_once('functions/aviary-image-editor.php');
	require_once('functions/customize-register.php');
	require_once('functions/front-end-editor.php');
	require_once('functions/gform.php');
	require_once('functions/init.php');
	require_once('functions/mh-magazine.php');


	function cache_buster() {
		echo '<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="pragma" content="no-cache" />';
	}
	add_action('admin_head', 'cache_buster');
?>