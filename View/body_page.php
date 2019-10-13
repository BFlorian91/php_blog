<?php

function body_page($content = null)
{

    $html =	 '<body>';
    $html .=		'<div class="mt-5 h-100">';
    $html .=			$content;
		$html .=		'</div>';
    $html .=	'</body>';

    return $html;
}
