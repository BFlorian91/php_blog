<?php

	function action_create_article($db) {

		if (isset($_POST['title_article']) && isset($_POST['article'])) {
			$stmt = mysqli_prepare($db, "INSERT INTO post(title_article, article, date_article) VALUE(?, ?, ?);");
			mysqli_stmt_bind_param($stmt, "sss", $_POST['title_article'], $_POST['article'], date("F j, Y, g:i a"));
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
			
			return success_("You're post has been send") . action_display_articles($db);
		}
		return error_('post failed') . create_article();
	}