<?php

	function user_already_exist($db) {
	
		$name = $_POST['username'];
		$res = mysqli_query($db, "SELECT username FROM users WHERE username = '$name'");
		$datas = mysqli_fetch_array($res);
		
		return $datas[0];
	}


	function action_signup($db) {

		$db_usermame = user_already_exist($db);

		if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass_confirm'])) {
			if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass_confirm'])) {

				if ($_POST['pass'] != $_POST['pass_confirm']) {
					return error_("password and confirm password doesn't match !") . sign_page();
				}
				
				$username = htmlspecialchars($_POST['username']);
				$email = htmlspecialchars($_POST['email']);
				$hash_pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

				if ($username != $db_usermame) {
					$stmt = mysqli_prepare($db, "INSERT INTO users(username, email, pass) VALUE (?, ?, ?);");
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hash_pass);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_close($stmt);
					
					return success_("Your account has created " . $_POST['username']) . action_display_articles($db);
				} else {
					return error_("User already exist !") . sign_page();
				}
			} else {
				return error_("invalid data(s)") . sign_page();
			}
		}
	}