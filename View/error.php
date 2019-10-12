<?php

	function error_($content) {
		return ('
			<div id="error" class="d-flex flex-row-reverse mr-4 bd-highlight">
				<div class="alert alert-danger w-25 text-center position-absolute" role="alert">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
					. $content . 
				'</div>
			</div>'
		);
	}