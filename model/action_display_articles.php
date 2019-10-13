<?php

	function	action_display_articles($db) {

		$post = "";
		$res = mysqli_query($db, "SELECT * FROM post ORDER BY id DESC;");
		while ($row = mysqli_fetch_array($res)) {
			$title = $row[1];
			$content = $row[2];
			$date = $row[3];
			$post .= show_articles($title, $content, $date) . '<br/>';
		}
		return $post;
	}