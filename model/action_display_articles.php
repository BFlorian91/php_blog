<?php

	function	action_display_articles($db) {

		$post = "";
		$res = mysqli_query($db, "SELECT * FROM post;");
		while ($row = mysqli_fetch_array($res)) {
			$title = $row[1];
			$content = $row[2];
			$post .= show_articles($title, $content) . '<br/>';
		}
		return $post;
	}