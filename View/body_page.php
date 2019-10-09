<?php

    function body_page($menu_elements = null, $content = null) {

        $html .= '<body>';
        $html .= '<div>';
        $html .= '<header>';
        $html .= '<h1 id="title">Welcome to the blog</h1>';
        $html .= menu($menu_elements);
        $html .= '</header>';
        $html .= $content;
        $html .= '</body>';
        $html .= '</div>';

        return $html;
    }