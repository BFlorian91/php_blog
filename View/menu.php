<?php

function add_elements()
{
    return [
        'articles' => 'Articles',
        'profile' => 'Profile',
        'sign' => 'Sign in/up',
        'logout' => 'Logout',
        'panel' => 'Panel'
    ];
}

function menu($elements = null)
{

   $html = '<nav class="d-flex flex-row bd-highlight mb-3 navbar navbar-expand-lg navbar-dark bg-dark">';
   $html .= '<a 
    style="font-family: \'Roboto\', sans-serif; font-size: 24px; font-weight: lighter; color: #616F7B" 
    class="navbar-brand ml-4" href="index.php?"
    >
        Florian <span class="text-white" style="font-weight: bold">Beaumont</span>
    </a>';
   $html .= '<div class="collapse navbar-collapse" id="navbarColor01">';

   foreach ($elements as $key => $value) {
       $html .= '<ul class"nav nav-pills">';
       $html .= '<li style="list-style-type: none;" class="nav-item">';
       if ($value == 'Sign in/up' && !isset($_SESSION['username'])) {
           $html_log = '<a href="index.php?action=' . $key . '"class="m-4 btn btn-outline-info my-2 my-sm-0">' . $value . '</a>';
			} elseif ($value == 'Logout' && isset($_SESSION['username'])) {
           $html_log .= '<a href="index.php?action=' . $key . '"class="m-4 btn btn-outline-info my-2 my-sm-0">' . $value . '</a>';
       } else if ($_SESSION['username'] == 'admin' && $value == 'Panel') {
           if ($_GET['action'] == $key) {
               $html_log .= '<a href="index.php?action=' . $key . '"class="ml-n2 m-4 btn btn-outline-info bg-info text-white my-2 my-sm-0">' . $value . '</a>';
           } else {
               $html_log .= '<a href="index.php?action=' . $key . '"class="ml-n2 m-4 btn btn-outline-info my-2 my-sm-0">' . $value . '</a>';
           }
       } elseif ($value != 'Logout' && $value != 'Sign in/up' && $value != 'Panel') {
           if ($_GET['action'] == $key) {
               $html .= '<a href="index.php?action=' . $key . '"class="nav-link border-bottom border-info text-white mt-3 mr-n4">' . $value . '</a>';
           } else {
               $html .= '<a href="index.php?action=' . $key . '"class="nav-link text-info mt-3 mr-n4">' . $value . '</a>';
           }
       }
       $html .= '</li>';
       $html .= '</ul>';
   }
   $html .= '</div>';
   $html .= 	'<div style="color: white;" class="social-part">';
   $html .= 		'<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">';
   $html .= 			'<span class="navbar-toggler-icon"></span>';
   $html .=		'</button>';
   $html .=		 $html_log;
   $html .=		'<i style="margin-right: 15px;" class="fa fa-facebook" aria-hidden="true"></i>';
   $html .=		'<i style="margin-right: 15px;" class="fa fa-twitter" aria-hidden="true"></i>';
   $html .=		'<i style="margin-right: 15px;" class="fa fa-instagram" aria-hidden="true"></i>';
   $html .= '</div>';
   $html .= '</nav>';

    return $html;
}
