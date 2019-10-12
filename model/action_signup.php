<?php

	function action_signup($db) {
		if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass_confirm'])) {

			die('test');
		} else {
			return error_("invalid data(s)") . sign_page();
		}
	}