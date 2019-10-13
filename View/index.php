<?php
	function home_content($content_page = null) {

		$html =  '<div>';
		$html .= 	$content_page;
		$html .= '</div>';
		$html .= footer_page();

		return $html;
	}