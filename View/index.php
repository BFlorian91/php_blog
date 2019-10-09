<?php
    function home_content($content_page) {

        $html .= '<div>';
        $html .= $content_page;
        $html .= '</div>';

        return $html;
    }