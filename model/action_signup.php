<?php

	function action_signup($db) {
		if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass_confirm'])) {
			if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass_confirm'])) {

				if ($_POST['pass'] != $_POST['pass_confirm']) {
					return error_("password and confirm password doesn't match !") . sign_page();
				}
				
				$hash_pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

				$stmt = mysqli_prepare($db, "INSERT INTO users(username, email, pass) VALUE (?, ?, ?);");
				mysqli_stmt_bind_param($stmt, "sss", $_POST['username'], $_POST['email'], $hash_pass);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_close($stmt);
				
				return success_("Your account has created ") . $_POST['username'];
			} else {
				return error_("invalid data(s)") . sign_page();
			}
		}
	}