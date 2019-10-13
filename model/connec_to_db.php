<?php

    function connect_to_db() {

        $host = 'localhost';
        $user = 'root';
        $pass = '123456';
        $database = 'blog';

        $db = mysqli_connect($host, $user, $pass, $database);

        if (!$db) {
            die("Can not connect to database" . mysqli_connect_error());
        }

            return($db);
    }