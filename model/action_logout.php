<?php

	function action_logout() {
		
		session_start();

		$disc_msg = "";

		if (isset($_SESSION['username'])) {
			$disc_msg = success_("You're been disconnected !");
		}
		session_unset($_SESSION['username']);
		session_destroy();

		return $disc_msg . home_content();
	}