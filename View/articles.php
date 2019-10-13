<?php

function show_articles($title, $content)
{

$html =  '<div class="media border shadow p-3 mb-2 w-75 bg-white rounded">';
$html .= '	<img src="https://images-na.ssl-images-amazon.com/images/I/91kU1f6aOWL._SY445_.jpg" style="width: 110px; height: 150px" class="mr-3" alt="...">';
$html .= '	<div class="media-body">';
$html .= '		<h5 class="mt-0">'. $title . '</h5>';
$html .= '		<p>' . $content . '</p>';
$html .= '		<a href="index.php?action=" class="mx-auto btn btn-lg btn-info">More ...</a>';
$html .= '	</div>';
$html .= '</div>';

	return $html;
}
