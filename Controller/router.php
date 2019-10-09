<?php

    function router() {

        switch ($_GET['action']) {
            case 'signin':
                return ['login', '../lib/login.css'];
                break;
            case 'signup':
                return 'register';
                break;
            default:
                return 'Home';
                return ;
                break;
        }
    }