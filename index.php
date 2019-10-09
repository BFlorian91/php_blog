<?php

    require_once 'View/header_page.php';
    require_once 'View/menu.php';
    require_once 'View/body_page.php';
    require_once 'View/build_page.php';
    require_once 'Controller/router.php';

    $content_body = router();
    echo build_page($content_body);
