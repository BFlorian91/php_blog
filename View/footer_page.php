<?php

    function footer_page() {

        $html =     '<footer style="bottom: 0; height: 2.5rem;" class="sticky-bottom">';
		$html .= 	    '<div class="bg-dark text-white text-center py-2">';
		$html .= 	    	'<p style="font-family: Robot" class="font-weight-lighter">©Beaumont florian 2019</p>';
		$html .= 	    '</div>';
        $html .=    '</footer>';
        $html .= '</html>';

        return $html;
    }