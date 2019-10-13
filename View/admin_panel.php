<?php

	function build_article() {

		$article = ' <div class="w-50 mx-auto">';
		$article .= '	<form method="post" action="#">';
		$article .= '		<div class="form-group">';
   	$article .= '			<input type="text" class="form-control text-left mb-4" id="title_article" placeholder="Title">';
   	$article .= '			<textarea class="form-control h-25" id="text_area" rows="3"></textarea>';
    $article .= '			<input type="submit" class="mt-3 btn btn-lg btn-info float-right" value="Send article">';
  	$article .= '		</div>';
  	$article .= '	</form>';
		$article .= ' </div>';


		return $article;
	}