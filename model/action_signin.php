<?php

	function action_signin($db) {

		if (isset($_POST['username']) && isset($_POST['pass'])) {

		$username = $_POST['username'];
		$passwd = $_POST['pass'];

		$res = mysqli_query($db, "SELECT pass FROM users WHERE username = '$username';");
		$row = mysqli_fetch_array($res);
		if (password_verify($passwd, $row[0])) {
			session_start();
			$_SESSION['username'] = $username;
			return success_('Welcome back ' . $username) . home_content();
		}
		return error_('password incorrect') . sign_page();
	}
		return error_('missing one or more informations! ') . sign_page(); 
	}