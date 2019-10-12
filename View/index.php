<?php
	function home_content($content_page = null) {

		$html .= '<div>Hello World';
		$html .= 	$content_page;
		$html .= '</div>';

		return $html;
	}