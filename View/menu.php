<?php

    function add_elements() {
        return [
            'sign_in' => 'sign in',
            'sign_up' => 'sign up', 
        ];
    }

    function menu($elements = null) {

        $html .= '<nav>';
        $html .= '<div id="menu">';
        $html .= '<ul>';
        foreach ($elements as $key => $value) {
            $html .= '<li><a href="index.php?action=' . $key . '" class="menu_button">' . $value . '</a></li>';
        }
        $html .= '</ul>';
        $html .= '</div>';
        $html .= '</nav>';

        return $html;
    }