<?php

	function router() {

		session_start();

		$db = connect_to_db();

		switch ($_GET['action']) {
			case 'sign':
				return sign_page();
				break; 
			case 'sign_in':
				return action_signin($db);
				break;
			case 'sign_up':
				return action_signup($db);
				break;
			case 'logout':
				return action_logout();
				break;
			case 'panel':
				return $_SESSION['username'] == 'admin' ? create_article() : home_content();
				break;
			case 'create_article':
				return action_create_article($db);
				break;
			case 'contact':
				return 'contact';
				break;
			default:
				return home_content();
				break;
			}
	}