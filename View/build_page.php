<?php

    function build_page($content) {

        $menu_elements = add_elements();

        $build = header_page();
        $build .= body_page($menu_elements, $content);

        return $build;
    }