<?php

function add_elements()
{
    return [
        'home' => 'Home',
        'articles' => 'Articles',
        'contact' => 'Contact',
        'sign' => 'sign in/up',
        'logout' => 'logout'
    ];
}

function menu($elements = null)
{
		$html = "";

    $html .= '<nav class="d-flex flex-row bd-highlight mb-3 navbar navbar-expand-lg navbar-dark bg-dark">';
    $html .= '<a class="navbar-brand" href="index.php?">Florian Beaumont</a>';
    $html .= '<div class="collapse navbar-collapse" id="navbarColor01">';
    foreach ($elements as $key => $value) {
        $html .= '<ul class"nav">';
        $html .= '<li style="list-style-type: none;" class="nav-item active">';
        if ($value == 'sign in/up' && !isset($_SESSION['username'])) {
            $html_log .= '<a href="index.php?action=' . $key . '"class="m-4 btn btn-outline-info my-2 my-sm-0">' . $value . '</a>';
				} elseif ($value == 'logout' && isset($_SESSION['username'])) {
            $html_log .= '<a href="index.php?action=' . $key . '"class="m-4 btn btn-outline-info my-2 my-sm-0">' . $value . '</a>';
        } elseif ($value != 'logout' && $value != 'sign in/up') {
            $html .= '<a href="index.php?action=' . $key . '"class="text-info mt-3 mr-n4 nav-link">' . $value . '</a>';
        }
        $html .= '</li>';
        $html .= '</ul>';
    }
    $html .= '</div>';
    $html .= '<div style="color: white;" class="social-part">';
    $html .= '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">';
    $html .= '<span class="navbar-toggler-icon"></span>';
    $html .=  '</button>';
    $html .= $html_log;
    $html .= '<i style="margin-right: 15px;" class="fa fa-facebook" aria-hidden="true"></i>';
    $html .= '<i style="margin-right: 15px;" class="fa fa-twitter" aria-hidden="true"></i>';
    $html .= '<i style="margin-right: 15px;" class="fa fa-instagram" aria-hidden="true"></i>';
    $html .= '</div>';
    $html .=  '</nav>';

    return $html;
}
