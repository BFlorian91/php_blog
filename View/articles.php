<?php

function show_articles($title, $content, $date)
{
$html = '<div class="container m-auto">';
$html .= '<div class="media border shadow p-3 mb-2 w-75 m-auto bg-white rounded">';
$html .= '<div class="d-flex flex-column">';
$html .= '	<img src="https://miro.medium.com/fit/c/256/256/2*XfeHRnyY1pFryyisw5mwrg.jpeg" style="width: 110px; height: 110px" class="mr-3 rounded-circle border" alt="pp">';
$html .= '	<p style="font-size: 12px" class="font-italic text-center ml-n3 mt-2">florian beaumont</p>';
$html .= '	</div>';
$html .= '	<div class="media-body">';
$html .= '		<h5 class="mt-0">'. $title . '</h5>';
$html .= '		<p>' . $content . '</p>';
$html .= '		<div class="d-flex">';
$html .= '			<a href="index.php?action=articles" class="d-flex justify-content-center flex-grow-1 mx-auto btn btn-lg btn-info">More ...</a>';
$html .= '		</div>';
$html .= '			<p style="font-size:12px;" class="mt-2 mb-n2 float-right text-muted">' . $date . '</p>';
$html .= '	</div>';
$html .= '	</div>';
$html .= '</div>';

	return $html;
}
