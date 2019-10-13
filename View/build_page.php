<?php

    function build_page($content) {

        $menu_elements = add_elements();

        $build = header_page();
        $build .= menu($menu_elements);
        $build .= body_page($content);
		//$build .= footer_page();

        return $build;
    }