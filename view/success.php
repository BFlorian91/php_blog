<?php

	function success_($content) {
		return ('
			<div id="success" class="d-flex flex-row-reverse mr-4 bd-highlight">
				<div class="alert alert-success w-25 text-center position-absolute" role="alert">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
					. $content . 
				'</div>
			</div>'
		);
	}