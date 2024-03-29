<?php
    
    require_once 'lib/debug.php';

    require_once 'model/action_signup.php';
    require_once 'model/action_signin.php';
    require_once 'model/action_logout.php';
    require_once 'model/action_create_article.php';
    require_once 'model/action_display_articles.php';
    require_once 'model/connect_to_db.php';
    require_once 'view/header_page.php';
    require_once 'view/footer_page.php';
    require_once 'view/menu.php';
    require_once 'view/body_page.php';
    require_once 'view/articles.php';
    require_once 'view/profile_page.php';
    require_once 'view/build_page.php';
    require_once 'view/index.php';
    require_once 'view/sign_page.php';
    require_once 'view/error.php';
    require_once 'view/success.php';
    require_once 'view/admin_panel.php';
    require_once 'controller/router.php';

    $content_body = router();
    echo build_page($content_body);
