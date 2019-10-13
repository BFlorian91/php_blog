<?php

function body_page($menu_elements = null, $content = null)
{

    $html =	 '<body>';
    $html .=		'<div>';
    $html .=			'<header>';
    $html .=				menu($menu_elements);
    $html .=			'</header>';
    $html .=			$content;
    $html .=		'</div>';
    $html .=	'</body>';

    return $html;
}
