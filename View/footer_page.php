<?php

    function footer_page() {

		$html =     '<footer style="max-height: 40px; background: red;" class="position-absolute fixed-bottom w-100">';
		$html .= 	    '<div class="bg-dark text-white text-center py-2">';
		$html .= 	    	'<p style="font-family: Robot" class="font-weight-lighter">©Beaumont florian 2019</p>';
		$html .= 	    '</div>';
        $html .=    '</footer>';
        $html .= '</html>';

        return $html;
    }