<?php

	function create_article() {

		$article = ' <div class="w-50 mx-auto">';
		$article .= '	<form method="post" action="index.php?action=create_article">';
		$article .= '		<div class="form-group">';
   	$article .= '			<input type="text" name="title_article" class="form-control text-left mb-4" id="title_article" placeholder="Title">';
		$article .= '			<textarea name="article" class="form-control h-25" id="text_area" rows="3" placeholder="You\'re text here"></textarea>';
    $article .= '			<input type="submit" class="mt-3 btn btn-lg btn-info float-right" value="Send article">';
  	$article .= '		</div>';
  	$article .= '	</form>';
		$article .= ' </div>';


		return $article;
	}