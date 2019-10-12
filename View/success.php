<?php

	function success_($content) {
		return ('
			<div class="alert alert-success" role="alert">'
				. $content . 
			'</div>'
		);
	}