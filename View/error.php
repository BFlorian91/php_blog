<?php

	function error_($content) {
		return ('
			<div class="alert alert-danger" role="alert">'
				. $content . 
			'</div>'
		);
	}