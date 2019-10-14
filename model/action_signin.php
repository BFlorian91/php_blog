<?php

	function action_signin($db) {
			
		session_start();

		if ($_SESSION['username'] == $_POST['username']) {
			return home_content();
		}

		if (isset($_POST['username']) && isset($_POST['pass']) 
			&& !empty($_POST['username'] && !empty($_POST['pass']))) {
			$username = $_POST['username'];
			$passwd = $_POST['pass'];

			$res = mysqli_query($db, "SELECT pass FROM users WHERE username='$username';");
			$row = mysqli_fetch_array($res);
			if (password_verify($passwd, $row[0])) {
					$_SESSION['username'] = $username;
					return success_('Welcome back ' . $username) . action_display_articles($db);
			}
			return error_('username or password are incorrect') . sign_page();
		} 
		return error_('missing one or more informations! ') . sign_page();
}