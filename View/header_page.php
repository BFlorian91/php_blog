<?php

    function header_page() {

        $html .= '<html>';
        $html .= '<head>';
        $html .= '<meta charset="UTF-8" />';
        $html .= '<title>blog</title>';
        $html .= '<link rel="stylesheet" href="../lib/style.css">';
        $html .= '</head>';
        
        return $html;
    }